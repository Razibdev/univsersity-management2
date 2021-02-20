<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course</th>
                <th>Class</th>
                <th>Level</th>
                <th>Shift</th>
                <th>Classroom</th>
                <th>Batch</th>
                <th>Day</th>
                <th>Time</th>
                <th>Semester</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulinges as $classScheduling)
            <tr>
                <td>{{$classScheduling->course_name}}</td>
                <td>{{ $classScheduling->class_name }}</td>
                <td>{{ $classScheduling->level }}</td>
                <td>{{ $classScheduling->shift }}</td>
                <td>{{ $classScheduling->classroom_name }}</td>
                <td>{{ $classScheduling->batch }}</td>
                <td>{{ $classScheduling->name }}</td>
                <td>{{ $classScheduling->time }}</td>
                <td>{{ $classScheduling->semester_name }}</td>
                <td>{{ $classScheduling->start_time }}</td>
                <td>{{ $classScheduling->end_time }}</td>
                <td>@if($classScheduling->status == 1 )
                    <span class="alert-success">Active</span>
                    @else
                    <span class="alert-danger">Inactive</span>
                    @endif</td>
                <td>
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->schedule_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                    <a data-toggle="modal" data-target="#classscheduling-view-modal" data-classs="{{$classScheduling->class_name}}" data-course="{{$classScheduling->course_name}}" data-level="{{ $classScheduling->level }}" data-shift="{{ $classScheduling->shift }}" data-classroom="{{ $classScheduling->classroom_name }}" data-batch="{{ $classScheduling->batch }}" data-day="{{$classScheduling->name }}" data-time="{{ $classScheduling->time }}" data-semester="{{ $classScheduling->semester_name }}" data-start="{{ $classScheduling->start_time }}" data-end="{{ $classScheduling->end_time }}" data-statuss="{{$classScheduling->status }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        
                    <a data-toggle="modal" data-target="#classscheduling-edit-modal" id="Edit" data-schedule_id="{{$classScheduling->schedule_id}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>










<div class="modal fade left" id="classscheduling-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">
            <input type="hidden" name="Schedule" id="Schedule">
            <!-- Course Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('course', 'Course Id:') !!}
                <input type="text" name="course" id="course" readonly class="form-control">
            </div>

            <!-- Course Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('class', 'Course Id:') !!}
                <input type="text" name="classs" id="classs" readonly class="form-control">
            </div>

            <!-- Level Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('level', 'Level Id:') !!}
                <input type="text" name="level" id="level" readonly class="form-control">
            </div>

            <!-- Shift Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('shift', 'Shift Id:') !!}
                <input type="text" name="shift" id="shift" readonly class="form-control">
            </div>

            <!-- Classroom Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('classroom', 'Classroom Id:') !!}
                <input type="text" name="classroom" id="classroom" readonly class="form-control">
            </div>

            <!-- Batch Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('batch', 'Batch Id:') !!}
                <input type="text" name="batch" id="batch" readonly class="form-control">
            </div>

            <!-- Day Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('day', 'Day Id:') !!}
                <input type="text" name="day" id="day" readonly class="form-control">
            </div>

            <!-- Time Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('time', 'Time Id:') !!}
                <input type="text" name="time" id="time" readonly class="form-control">
            </div>

            <!-- Semester Id Field -->
            <div class="form-group col-md-6">
                {!! Form::label('semester', 'Semester Id:') !!}
                <input type="text" name="semester" id="semester" readonly class="form-control">
            </div>

            <!-- Start Time Field -->
            <div class="form-group col-md-6">
                {!! Form::label('start', 'Start Time:') !!}
                <input type="text" name="start" id="start" readonly class="form-control">
            </div>

            <!-- End Time Field -->
            <div class="form-group col-md-6">
                {!! Form::label('end', 'End Time:') !!}
                <input type="text" name="end" id="end" readonly class="form-control">
            </div>

            <!-- Status Field -->
            <div class="form-group col-md-6">
                {!! Form::label('statuss', 'Status:') !!}
                <input type="text" name="statuss" id="statuss" readonly class="form-control">
            </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
$('#start_time').datetimepicker({
    format:'YYYY-MM-DD',
    useCurrent:false
});

$('#end_time').datetimepicker({
        format:'YYYY-MM-DD',
        useCurrent:false
    });



$('#classscheduling-view-modal').on('show.bs.modal', function(event){
    var button = $(event.relatedTarget);
    var classs = button.data('classs');
    var course = button.data('course');
    var level = button.data('level');
    var shift = button.data('shift');
    var classroom = button.data('classroom');
    var batch = button.data('batch');
    var day = button.data('day');
    var time = button.data('time');
    var semester = button.data('semester');
    var start = button.data('start');
    var end = button.data('end');
    var statuss = button.data('statuss');
    var Schedule = button.data('Schedule');

    var modal = $(this);
    modal.find('.modal-title').text('Class Schedule View');
    modal.find('.modal-body #course').val(course);
    modal.find('.modal-body #classs').val(classs);
    modal.find('.modal-body #level').val(level);
    modal.find('.modal-body #shift').val(shift);
    modal.find('.modal-body #classroom').val(classroom);
    modal.find('.modal-body #batch').val(batch);
    modal.find('.modal-body #day').val(day);
    modal.find('.modal-body #time').val(time);
    modal.find('.modal-body #semester').val(semester);
    modal.find('.modal-body #start').val(start);
    modal.find('.modal-body #end').val(end);
    modal.find('.modal-body #statuss').val(statuss);
    modal.find('.modal-body #Schedule').val(Schedule);

});



</script>
@endpush