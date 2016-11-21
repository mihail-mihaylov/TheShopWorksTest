<th>Total hours in shop (minutes)</th>
@for ($dayNumber = 0; $dayNumber <= 6; $dayNumber++)
    @if(array_key_exists($dayNumber, $totalMinutesInShop))
    	<th>
        	{{ $totalMinutesInShop[$dayNumber] }} h
    	</th>
    @else
        <th>0</th>
    @endif
@endfor