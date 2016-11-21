<td class="working_day text-center">
	@if (count($shifts[$dayNumber]) > 1)
		<table>
			<tr>
				@foreach ($shifts[$dayNumber] as $shift)
					<td class="col-md-6">
						{!! $shift->starttime.'<br/>'.$shift->endtime !!} 
					</td>
				@endforeach
			</tr>
		</table>
	@else
		{!! $shifts[$dayNumber][0]->starttime.'<br/>'.$shifts[$dayNumber][0]->endtime !!}
	@endif
</td>
