<tr>
	<td>{{ $staffId }}</td>
	@for ($dayNumber = 0; $dayNumber <= 6; $dayNumber++)
		@if(array_key_exists($dayNumber, $shifts))
			@include('backend.modules.schedule.partials.schedule_cell_working_day', ['dayNumber' => $dayNumber, 'shifts' => $shifts])
		@else
			@include('backend.modules.schedule.partials.schedule_cell_off_day')
		@endif
	@endfor
</tr>