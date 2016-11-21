<th>Total hours alone by staff (minutes)</th>
@for ($dayNumber = 0; $dayNumber <= 6; $dayNumber++)
    @if(array_key_exists($dayNumber, $totalMinutesAlone))
    	<th>
        	{{ $totalMinutesAlone[$dayNumber] }} h
    	</th>
    @else
        <th>0</th>
    @endif
@endfor