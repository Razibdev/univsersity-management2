<div class="modal fade left" id="semester-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-registered" aria-hidden="true">Add New Semester</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">

            <!-- Semester Name Field -->
            <div class="form-group">
                {!! Form::label('semester_name', 'Semester Name:') !!}
                {!! Form::text('semester_name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Semester Code Field -->
            <div class="form-group">
                {!! Form::label('semester_code', 'Semester Code:') !!}
                {!! Form::text('semester_code', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Semester Duration Field -->
            <div class="form-group">
                {!! Form::label('semester_duration', 'Semester Duration:') !!}
                {!! Form::text('semester_duration', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Semester Description Field -->
            <div class="form-group">
                {!! Form::label('semester_description', 'Semester Description:') !!}
                {!! Form::textarea('semester_description', null, ['class' => 'form-control', 'rows' => '4']) !!}
            </div>

            <!-- Submit Field -->
            
            </div>

            <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
            {!! Form::submit('Create Semester', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>
    </div>
</div>


{{-- <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('semesters.index') }}" class="btn btn-default">Cancel</a>
</div> --}}