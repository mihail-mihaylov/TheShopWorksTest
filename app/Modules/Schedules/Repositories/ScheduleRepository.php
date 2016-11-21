<?php

namespace App\Modules\Schedules\Repositories;


use App\Modules\Schedules\Models\RotaSlotStaff;
use DateTime;
use DateInterval;
use DatePeriod;

class ScheduleRepository
{
	protected $model;

	function __construct(RotaSlotStaff $rotaSlotStaff)
	{
		$this->model = $rotaSlotStaff;
	}

	/**
	 *
	 * Get da date from database and orders it appropriately
	 * Process total hours and hours alone in the shop
	 *
	 */
	public function schedule() {

		# Get the data from the database
		$allShifts = $this->model
			->where('slottype', '=' , 'shift')
			->whereNotNull('staffid')
			->get();

		$shiftsByStaff = [];
		$shiftsByDay = [];

		# Order data
		foreach ($allShifts as $shift) {
			$shiftsByStaff[$shift->staffid][$shift->daynumber][] = $shift; 
			$shiftsByDay['shifts'][$shift->daynumber][] = $shift; 
		}

		# Process total hours and hours alone in the shop
		$totalShiftMinutes = $this->countMinutes($shiftsByDay);
		
		return [$shiftsByStaff, $totalShiftMinutes];
	}

	/**
	 *
	 * Counts total hours and minutes alone in the shop
	 *
	 */
	
	public function countMinutes($shiftsByDay) {

		# Iterate arrays of shifts for every day of the week
		foreach ($shiftsByDay['shifts'] as $dayNumber => $day) {

			$minutePresenceByDay = [];
			$workedHours = 0;

			# Iterate every shift for the day
			foreach ($day as $shift) {

				$begin = new DateTime($shift->starttime);
				$end = new DateTime($shift->endtime);

				# Determine if the shift times are crossing midnight point
				if((int)explode(':', $shift->starttime)[0] > (int)explode(':', $shift->endtime)[0]) {

					# If crossing the midnight point, add 1 day to the endtime
					$this->fillWorkedMinutes($begin, $end->modify('+1 day'), $minutePresenceByDay);
				} else {
					$this->fillWorkedMinutes($begin, $end, $minutePresenceByDay);
				}

				# Sum the workhours from database in float format
				$workedHours += $shift->workhours;
			}
			
			# Converts minutes or hours to desired format
			$shiftsByDay['totalMinutesInShop'][$dayNumber] = 
				$this->convertMinutesToHoursMins(count($minutePresenceByDay));

			$shiftsByDay['totalMinutesByStaff'][$dayNumber] = 
				$this->convertHoursToHoursMins($workedHours);
			# Converts to deired format and sum the minutes alone in the shop
			$shiftsByDay['totalMinutesAlone'][$dayNumber] = 
				$this->convertMinutesToHoursMins($this->countMinutesAlone($minutePresenceByDay));
		}
		
		return $shiftsByDay;
	}

	/**
	 *
	 * Based on Counting sort algorithm
	 * Saves every working minute as a key of an array and how many people
	 * work throught it as a value for 1 day
	 *
	 */
	public function fillWorkedMinutes($begin, $end, &$minutePresence) {
		
		$interval = DateInterval::createFromDateString('1 minute');
		$period = new DatePeriod($begin, $interval, $end);

		# Iterate through worked minutes
		foreach ( $period as $dt ) {

			# Check if there is someone already working in that minute
			isset($minutePresence[$dt->format( "H:i" )]) ?
		  		$minutePresence[$dt->format( "H:i" )]++ :
		  		$minutePresence[$dt->format( "H:i" )] = 1;	
		}
	}

	/**
	 *
	 * Count minutes alone in the shop
	 *
	 */
	public function countMinutesAlone($minutePresence) {

		$minutesAlone = 0;

		foreach ($minutePresence as $minute) {
			if ($minute == 1) {
				$minutesAlone++;
			}
		}

		return $minutesAlone;
	}
	
	/**
	 *
	 * Converts minutes to desired format
	 *
	 */
	public function convertMinutesToHoursMins($minutes, $format = '%02d:%02d') {
    
	    $hours = floor($minutes / 60);
	    $minutes = ($minutes % 60);

	    return sprintf($format, $hours, $minutes);
	}

	/**
	 *
	 * Converts hours to desired format
	 *
	 */
	public function convertHoursToHoursMins($hours) {
	    
	    $minutes = (explode('.',number_format($hours,2))[0])*60 + explode('.', number_format($hours,2))[1];
	    
	    return $this->convertMinutesToHoursMins($minutes);
	}
}