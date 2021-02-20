<div class="modal fade left" id="faculty-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-registered" aria-hidden="true"> Add New Faculty</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">

                <!-- Faculty Name Field -->
                <div class="form-group">
                    {!! Form::label('faculty_name', 'Faculty Name:') !!}
                    {!! Form::text('faculty_name', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Faculty Code Field -->
                <div class="form-group">
                    {!! Form::label('faculty_code', 'Faculty Code:') !!}
                    {!! Form::text('faculty_code', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Faculty Description Field -->
                <div class="form-group">
                    {!! Form::label('faculty_description', 'Faculty Description:') !!}
                    {!! Form::textarea('faculty_description', null, ['class' => 'form-control', 'rows' => '4']) !!}
                </div>

                <!-- Faculty Status Field -->
                <div class="form-group">
                    {!! Form::label('faculty_status', 'Faculty Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('faculty_status', 0) !!}
                        {!! Form::checkbox('faculty_status', '1', null, ['class' => 'razib']) !!}
                    </label>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                {!! Form::submit('Create Faculty', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>
