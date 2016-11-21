<?php

namespace App\Modules\Schedules\Models;

use Illuminate\Database\Eloquent\Model;

class RotaSlotStaff extends Model
{
    protected $table   = 'rota_slot_staff';
    protected $fillable = [
        'rotaid', 'daynumber', 'staffid', 'slottype', 'starttime', 'endtime', 'workhours', 'premiumminutes', 'roletypeid', 'freeminutes', 'seniorcashierminutes', 'splitshifttimes'
    ];

    /**
     * Gets the value of rotaid.
     *
     * @return mixed
     */
    public function getRotaid()
    {
        return $this->rotaid;
    }

    /**
     * Sets the value of rotaid.
     *
     * @param mixed $rotaid the rotaid
     *
     * @return self
     */
    protected function setRotaid($rotaid)
    {
        $this->rotaid = $rotaid;

        return $this;
    }

    /**
     * Gets the value of daynumber.
     *
     * @return mixed
     */
    public function getDaynumber()
    {
        return $this->daynumber;
    }

    /**
     * Sets the value of daynumber.
     *
     * @param mixed $daynumber the daynumber
     *
     * @return self
     */
    protected function setDaynumber($daynumber)
    {
        $this->daynumber = $daynumber;

        return $this;
    }

    /**
     * Gets the value of staffid.
     *
     * @return mixed
     */
    public function getStaffid()
    {
        return $this->staffid;
    }

    /**
     * Sets the value of staffid.
     *
     * @param mixed $staffid the staffid
     *
     * @return self
     */
    protected function setStaffid($staffid)
    {
        $this->staffid = $staffid;

        return $this;
    }

    /**
     * Gets the value of slottype.
     *
     * @return mixed
     */
    public function getSlottype()
    {
        return $this->slottype;
    }

    /**
     * Sets the value of slottype.
     *
     * @param mixed $slottype the slottype
     *
     * @return self
     */
    protected function setSlottype($slottype)
    {
        $this->slottype = $slottype;

        return $this;
    }

    /**
     * Gets the value of starttime.
     *
     * @return mixed
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Sets the value of starttime.
     *
     * @param mixed $starttime the starttime
     *
     * @return self
     */
    protected function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Gets the value of endtime.
     *
     * @return mixed
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Sets the value of endtime.
     *
     * @param mixed $endtime the endtime
     *
     * @return self
     */
    protected function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Gets the value of workhours.
     *
     * @return mixed
     */
    public function getWorkhours()
    {
        return $this->workhours;
    }

    /**
     * Sets the value of workhours.
     *
     * @param mixed $workhours the workhours
     *
     * @return self
     */
    protected function setWorkhours($workhours)
    {
        $this->workhours = $workhours;

        return $this;
    }

    /**
     * Gets the value of premiumminutes.
     *
     * @return mixed
     */
    public function getPremiumminutes()
    {
        return $this->premiumminutes;
    }

    /**
     * Sets the value of premiumminutes.
     *
     * @param mixed $premiumminutes the premiumminutes
     *
     * @return self
     */
    protected function setPremiumminutes($premiumminutes)
    {
        $this->premiumminutes = $premiumminutes;

        return $this;
    }

    /**
     * Gets the value of roletypeid.
     *
     * @return mixed
     */
    public function getRoletypeid()
    {
        return $this->roletypeid;
    }

    /**
     * Sets the value of roletypeid.
     *
     * @param mixed $roletypeid the roletypeid
     *
     * @return self
     */
    protected function setRoletypeid($roletypeid)
    {
        $this->roletypeid = $roletypeid;

        return $this;
    }

    /**
     * Gets the value of freeminutes.
     *
     * @return mixed
     */
    public function getFreeminutes()
    {
        return $this->freeminutes;
    }

    /**
     * Sets the value of freeminutes.
     *
     * @param mixed $freeminutes the freeminutes
     *
     * @return self
     */
    protected function setFreeminutes($freeminutes)
    {
        $this->freeminutes = $freeminutes;

        return $this;
    }

    /**
     * Gets the value of seniorcashierminutes.
     *
     * @return mixed
     */
    public function getSeniorcashierminutes()
    {
        return $this->seniorcashierminutes;
    }

    /**
     * Sets the value of seniorcashierminutes.
     *
     * @param mixed $seniorcashierminutes the seniorcashierminutes
     *
     * @return self
     */
    protected function setSeniorcashierminutes($seniorcashierminutes)
    {
        $this->seniorcashierminutes = $seniorcashierminutes;

        return $this;
    }

    /**
     * Gets the value of splitshifttimes.
     *
     * @return mixed
     */
    public function getSplitshifttimes()
    {
        return $this->splitshifttimes;
    }

    /**
     * Sets the value of splitshifttimes.
     *
     * @param mixed $splitshifttimes the splitshifttimes
     *
     * @return self
     */
    protected function setSplitshifttimes($splitshifttimes)
    {
        $this->splitshifttimes = $splitshifttimes;

        return $this;
    }

}
