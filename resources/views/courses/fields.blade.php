<!-- Modal -->
<style>
    .razib{
        top: -10px;
        left: 25px;
         
    }
</style>
<div class="modal fade" id="add-course-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <!-- Course Name Field -->
        <div class="form-group">
            {!! Form::label('course_name', 'Course Name:') !!}
            {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Course Code Field -->
        <div class="form-group">
            {!! Form::label('course_code', 'Course Code:') !!}
            {!! Form::text('course_code', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Description Field -->
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}
        </div>

        <!-- Status Field -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            <label class="checkbox-inline">
                {!! Form::hidden('status', 0) !!}
                {!! Form::checkbox('status', '1', null, ['class' => 'razib']) !!}
            </label>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    </div>
  </div>
</div>
</div>