<div class="modal fade left" id="department-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title pull-left" id="exampleModalLab1"><i class="fa fa-home" aria-hidden="true"> Add New Department</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
        <form action="{{route('departments.store')}}" method="POST" id="">@csrf
            <div class="modal-body">
                <!-- Faculty Id Field -->
                <div class="form-group">
                    <select name="faculty_id" id="faculty_id" class="form-control">
                        <option value="" selected disabled>Choose Faculty</option>
                        @foreach ($faculties  as $key => $faculty)
                            <option value="{{$faculty->faculty_id}}">{{$faculty->faculty_name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Department Name Field -->
                <div class="form-group">
                    {!! Form::text('department_name', null, ['class' => 'form-control', 'placeholder' => 'Enter department name here']) !!}
                </div>

                <!-- Department Code Field -->
                <div class="form-group">
                    {!! Form::text('department_code', null, ['class' => 'form-control', 'placeholder' => ' Enter Department Code']) !!}
                </div>

                <!-- Department Description Field -->
                <div class="form-group">
                    {!! Form::textarea('department_description', null, ['class' => 'form-control','rows' => '2', 'placeholder' => 'Enter Department Description here']) !!}
                </div>

                <!-- Department Status Field -->
                <div class="form-group col-md-4">
                    {!! Form::label('department_status', 'Department Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('department_status', 0) !!}
                        {!! Form::checkbox('department_status', '1', null, ['class' => 'razib']) !!}
                    </label>
                </div>



                </div>

                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                    {!! Form::submit('Create Department', ['class' => 'btn btn-primary']) !!}
                </div>

            </form>
        </div>
    </div>
</div>