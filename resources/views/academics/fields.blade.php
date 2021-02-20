<div class="modal fade left" id="academic-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-registered" aria-hidden="true">Add New Academic</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">

            <!-- Academic Year Field -->
            <div class="form-group">
                {!! Form::label('academic_year', 'Academic Year:') !!}
                {!! Form::text('academic_year', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
            {!! Form::submit('Create Academic', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
</div>
