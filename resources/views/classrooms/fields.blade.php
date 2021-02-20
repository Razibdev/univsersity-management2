<style>
    .razib{
        top: -10px;
        left: 25px;
         
    }
</style>
<div class="modal fade left" id="classroom-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-registered" aria-hidden="true"> Add New Classrooms</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">

            <div class="form-group">
                {!! Form::label('classroom_name', 'Classroom Name:') !!}
                {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('classroom_code', 'Classroom Code:') !!}
                {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('classroom_description', 'Classroom Description:') !!}
                {!! Form::text('classroom_description', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('classroom_status', 'Status:') !!}
                <label class="checkbox-inline">
                    {!! Form::hidden('classroom_status', 0) !!}
                    {!! Form::checkbox('classroom_status', '1', null, ['class' => 'razib']) !!}
                </label>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
            {!! Form::submit('Create Classroom', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
</div>