@extends('backend.wrapper')

@section('heading')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Schedule <small>Overview</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Weekly schedule: 21.11.2016 - 27.11.2016</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-hover table-striped" id="schedule_table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shiftsByStaff as $staffId => $shifts)
                        @include('backend.modules.schedule.partials.schedule_row', [ 'staffId' => $staffId, 'shifts' => $shifts ])
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        @include('backend.modules.schedule.partials.total_minutes_in_shop_row', ['totalMinutesInShop' => $totalShiftMinutes['totalMinutesInShop']])
                    </tr>
                </tfoot>
                <tfoot>
                    <tr>
                        @include('backend.modules.schedule.partials.total_minutes_by_staff_row', ['totalMinutesByStaff' => $totalShiftMinutes['totalMinutesByStaff']])
                    </tr>
                </tfoot>
                <tfoot>
                    <tr>
                        @include('backend.modules.schedule.partials.total_minutes_alone_row', ['totalMinutesAlone' => $totalShiftMinutes['totalMinutesAlone']])
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript" src="{{ asset('js/modules/schedule.js') }}"></script>
@endsection