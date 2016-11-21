<th>Total hours by staff (minutes)</th>
@for ($dayNumber = 0; $dayNumber <= 6; $dayNumber++)
    @if(array_key_exists($dayNumber, $totalMinutesByStaff))
    	<th>
        	{{ $totalMinutesByStaff[$dayNumber] }} h
    	</th>
    @else
        <th>0</th>
    @endif
@endfor