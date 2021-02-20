{{-- <div class="modal fade left" id="classscheduling-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-registered" aria-hidden="true"></i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">
            



            <!-- Course Id Field -->
            <div class="form-group">
                {!! Form::label('course_id', 'Course Id:') !!}
                <input type="text" name="course_id" id="course_id" readonly class="form-control">
            </div>

            <!-- Level Id Field -->
            <div class="form-group">
                {!! Form::label('level_id', 'Level Id:') !!}
                <input type="text" name="level_id" id="level_id" readonly class="form-control">
            </div>

            <!-- Shift Id Field -->
            <div class="form-group">
                {!! Form::label('shift_id', 'Shift Id:') !!}
                <input type="text" name="shift_id" id="shift_id" readonly class="form-control">
            </div>

            <!-- Classroom Id Field -->
            <div class="form-group">
                {!! Form::label('classroom_id', 'Classroom Id:') !!}
                <input type="text" name="classroom_id" id="classroom_id" readonly class="form-control">
            </div>

            <!-- Batch Id Field -->
            <div class="form-group">
                {!! Form::label('batch_id', 'Batch Id:') !!}
                <input type="text" name="batch_id" id="batch_id" readonly class="form-control">
            </div>

            <!-- Day Id Field -->
            <div class="form-group">
                {!! Form::label('day_id', 'Day Id:') !!}
                <input type="text" name="day_id" id="day_id" readonly class="form-control">
            </div>

            <!-- Time Id Field -->
            <div class="form-group">
                {!! Form::label('time_id', 'Time Id:') !!}
                <input type="text" name="time_id" id="time_id" readonly class="form-control">
            </div>

            <!-- Teacher Id Field -->
            <div class="form-group">
                {!! Form::label('teacher_id', 'Teacher Id:') !!}
                <input type="text" name="teacher_id" id="teacher_id" readonly class="form-control">
            </div>

            <!-- Semester Id Field -->
            <div class="form-group">
                {!! Form::label('semester_id', 'Semester Id:') !!}
                <input type="text" name="semester_id" id="semester_id" readonly class="form-control">
            </div>

            <!-- Start Time Field -->
            <div class="form-group">
                {!! Form::label('start_time', 'Start Time:') !!}
                <input type="text" name="start_time" id="start_time" readonly class="form-control">
            </div>

            <!-- End Time Field -->
            <div class="form-group">
                {!! Form::label('end_time', 'End Time:') !!}
                <input type="text" name="end_time" id="end_time" readonly class="form-control">
            </div>

            <!-- Status Field -->
            <div class="form-group">
                {!! Form::label('status', 'Status:') !!}
                <input type="text" name="updated_at" id="updated_at" readonly class="form-control">
            </div>


            <!-- Created At Field -->
            <div class="form-group">
                {!! Form::label('created_at', 'Created At:') !!}
                <input type="text" name="updated_at" id="updated_at" readonly class="form-control">

            </div>

            <!-- Updated At Field -->
            <div class="form-group">
                {!! Form::label('updated_at', 'Updated At:') !!}
                <input type="text" name="updated_at" id="updated_at" readonly class="form-control">
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
    var class_id = button.data('class_id');
    var course_id = button.data('course_id');
    var level_id = button.data('level_id');
    var shift_id = button.data('shift_id');
    var classroom_id = button.data('classroom_id');
    var batch_id = button.data('batch_id');
    var day_id = button.data('day_id');
    var time_id = button.data('time_id');
    var semester_id = button.data('semester_id');
    var start_time = button.data('start_time');
    var end_time = button.data('end_time');
    var status = button.data('status');
    var Scheduleid = button.data('Scheduleid');

    var modal = $(this);
    modal.find('.modal-title').text('Class Schedule View');
    modal.find('.modal-body #course_id').val(course_id);
    modal.find('.modal-body #class_id').val(class_id);
    modal.find('.modal-body #level_id').val(level_id);
    modal.find('.modal-body #shift_id').val(shift_id);
    modal.find('.modal-body #classroom_id').val(classroom_id);
    modal.find('.modal-body #batch_id').val(batch_id);
    modal.find('.modal-body #day_id').val(day_id);
    modal.find('.modal-body #time_id').val(time_id);
    modal.find('.modal-body #semester_id').val(semester_id);
    modal.find('.modal-body #start_time').val(start_time);
    modal.find('.modal-body #end_time').val(end_time);
    modal.find('.modal-body #status').val(status);
    modal.find('.modal-body #Scheduleid').val(Scheduleid);

    )};



</script>
@endpush --}}