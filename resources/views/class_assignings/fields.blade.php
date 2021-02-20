<div class="input-group col-md-12 input_fields_wrap">
    <input type="hidden" name="class_assign_id" id="class_assign_id">
    <select name="teacher_id" id="teacher_id" class="form-control" style="width:50%; margin-top:10px; float: right;">
        <option value="0" selected disabled >Select Teacher</option>
        @foreach ($teacher as $teach)
        <option value="{{$teach->teacher_id}}">{{$teach->first_name}} {{$teach->last_name}}</option>
        @endforeach
    </select>
</div>
<br><br><br>

<div class="clearfix"></div>
{{-- <div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-info">Generate Class Assign</button>
</div> --}}
























{{-- <!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_id', 'Level Id:') !!}
    {!! Form::number('level_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shift_id', 'Shift Id:') !!}
    {!! Form::number('shift_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Classroom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('classroom_id', 'Classroom Id:') !!}
    {!! Form::number('classroom_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Batch Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('batch_id', 'Batch Id:') !!}
    {!! Form::number('batch_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Day Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('day_id', 'Day Id:') !!}
    {!! Form::number('day_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time_id', 'Time Id:') !!}
    {!! Form::number('time_id', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classAssignings.index') }}" class="btn btn-default">Cancel</a>
</div> --}}
