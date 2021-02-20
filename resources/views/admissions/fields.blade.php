
<style>
    .image{
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }
    .teacher-image{
        height: 160px;
        padding-left: 1px;
        padding-right: 1px;
        background: #eee;
        width: 140px;
        margin: 0 auto;
        border-radius: 50%;
        vertical-align: middle;
    }

    .image > input[type="file"]{
        display: none;

    }

    .btn-choose{
        padding:5px;
        text-align: center;
        background: gray;
        border: none;
        color: black;
        border-radius: 50%;
    }

    .fieldset{
        margin-top: 5px;
    }

    .fieldset legend{
        display: block;
        width: 100%;
        padding: 0px;
        font-size: 15px;
        border: 0;
        line-height: inherit;
        color: #797979;
        border-bottom:1px solid #e5e5e5;

    }
</style>

<div class="row">
    <div class="col-lg-12">
        
<div class="modal fade left" id="admission-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog" style="width: 90%" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-file-text-o" aria-hidden="true"> New Admission Form</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <b><i class="fa fa-book"></i><legend></legend><h3>Admission Details: </h3></b> <b class="pull-right"></b>
                    </div>
                    <div class="panel-body" style="padding-bottom: 4px;">
                        {{-- 
                        <input type="hidden" name="teacher_id" value="{{$teacher_id}}" id="teacher_id">   --}}
                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}"> 
                    <input type="hidden" name="dateregistered" id="dateregistered" value="{{date('Y-m-d')}}">
                    <input type="hidden" name="username" id="username" value="{{$rand_password}}">
                    <input type="hidden" name="password" id="password" value="{{$rand_password}}">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">

                        </div>


                    

                        <!-- First Name Field -->
                        <div class="form-group col-md-4">
                            {!! Form::text('first_name', null, ['class' => 'form-control text-capitalize', 'id' => 'first_name', 'placeholder' => 'Enter First Name Here']) !!}
                        </div>

                        <!-- Last Name Field -->
                        <div class="form-group col-md-4">
                            {!! Form::text('last_name', null, ['class' => 'form-control text-capitalize','id' => 'last_name', 'placeholder' => 'Enter Last Name Here']) !!}
                        </div>



                        <!-- Gender Field -->
                        <div class="col-md-4 form-group">
                            <fieldset>
                                <legend for="gender">Gender</legend>
                                <table style="width:100%; margin-top: -14px;">
                                    <tr style="border-bottom: 1px solid #ccc">
                                        <td><label><input type="radio" name="gender" id="gender" value="0" checked> Male</label></td>

                                        <td><label><input type="radio" name="gender" id="gender" value="1"> Female</label></td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>



                        <!-- Dob Field -->
                        <div class="col-md-4 form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar teacherdob"> Dob</i>
                                </div>
                                {!! Form::text('dob', null, ['class' => 'form-control text-capitalize','id'=>'dob', 'placeholder' => 'YYYY-MM-DD']) !!}
                            </div>
                            
                        </div>





                        <!-- Passport Field -->
                        <div class="form-group col-md-4">
                            {!! Form::text('passport', null, ['class' => 'form-control text-capitalize', 'id' => 'passport', 'placeholder' => 'Enter Passport Number here']) !!}
                        </div>


                        <!-- Status Field -->
                        <div class="col-md-4 form-group">
                            <fieldset>
                                <legend>Status</legend>
                                <table style="width: 100%; margin-top: -14px;">
                                    <tr style="border-bottom: 1px solid #ccc;">
                                        <td>
                                            <label>
                                                <input type="radio" name="status" id="status" value="0" required checked>
                                            </label> Single
                                        </td>
                                        <td>
                                            <label>
                                                <input type="radio" name="status" id="status" value="1">
                                            </label> Married
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>


                        <!-- Nationality Field -->
                        <div class="form-group col-md-4">
                            {!! Form::text('nationality', null, ['class' => 'form-control text-capitalize', 'id' => 'nationality', 'placeholder' => 'Enter Natonality here']) !!}
                        </div>

                        <!-- Phone Field -->
                        <div class="form-group col-md-4">
                            {!! Form::text('phone', null, ['class' => 'form-control text-capitalize','id' => 'phone', 'placeholder' => 'Enter Phone Number here']) !!}
                        </div>



                        <!-- Email Field -->
                        <div class="form-group col-md-4">
                            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter Email Address Here']) !!}
                            
                        </div>


                        <!-- Department Field -->
                        <div class="form-group col-md-4" style="margin-top: 30px;">
                            <select name="department_id" id="department_id" class="form-control">
                                <option value="" selected disabled>Choose Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->department_id}}">{{$department->department_name}}</option>
                                @endforeach
                            </select>
                        
                        </div>

                        <br>
                        <!-- Faculty Field -->
                        <div class="form-group col-md-4" style="margin-top: 30px;">
                            <select name="faculty_id" id="faculty_id" class="form-control">
                                <option value="" selected disabled>Choose Faculty</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{$faculty->faculty_id}}">{{$faculty->faculty_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <br>
                        <!-- Batch Field -->
                        <div class="form-group col-md-4" style="margin-top: 30px;">
                            <select name="batch_id" id="batch_id" class="form-control">
                                <option value="" selected disabled>Choose Batch</option>
                                @foreach ($batches as $batch)
                                    <option value="{{$batch->batch_id}}">{{$batch->batch}}</option>
                                @endforeach
                            </select>
                        
                        </div>
                        <br>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="form-group form-group-login">
                                <table style="margin: 0 auto;">
                                    <thead>
                                        <tr class="info">

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="image">
                                                {!! Html::image('teacher_images/profile.png', null, ['class' => 'teacher-image', 'id' => 'showImage']) !!}
                                                <input type="file" name="image" id="image" accept="image/x-png, image/png, image/jpg, image/jpeg">

                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="text-align: center; background: #ddd;">
                                                <input type="button" name="browse_file" id="browse_file" value="Choose" class="form-control text-capitalize btn-choose btn btn-outline-danger">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        </div>
                        </div>

                        <br>
                        <!-- Address Field -->

                            <div class="panel-heading pull-left" style="margin-top: -20px">
                                <b><i class="fa fa-map-marker"></i> Guadians Details</b>
                            </div>
                                <br>
                                <div class="panel-body" style="padding-bottom:10px; margin-top:0;">
                                    <div class="row">
                                        <!-- Father Name Field -->
                        <div class="form-group col-md-4">
                            {!! Form::text('father_name', null, ['class' => 'form-control', 'id' => 'father_name', 'placeholder' => 'Enter Father Name Here']) !!}
                            
                        </div>

                        <!-- Mother Name Field -->
                        <div class="form-group col-md-4">
                            {!! Form::text('Mother_name', null, ['class' => 'form-control', 'id' => 'Mother_name', 'placeholder' => 'Enter Mother Name Here']) !!}
                            
                        </div>

                        <!-- Father Phone Field -->
                        <div class="form-group col-md-4">
                            {!! Form::number('father_phone', null, ['class' => 'form-control', 'id' => 'father_phone', 'placeholder' => 'Enter Father Phone Number Here']) !!}
                            
                        </div>
                            </div>
                                </div>
                            
                            



                        <!-- Address Field -->

                        <div class="panel-heading pull-left" style="margin-top: -20px">
                            <b><i class="fa fa-map-marker"></i> Address</b>
                        </div>
                            <br>
                            <div class="panel-body" style="padding-bottom:10px; margin-top:0;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::textarea('address', null, ['class' => 'form-control text-capitalize', 'id' => 'address', 'placeholder' => 'Enter Address Here', 'cols' => '40', 'rows' => '2']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="panel-heading pull-left" style="margin-top: -20px">
                                <b><i class="fa fa-map-marker"></i> Current Address</b>
                            </div>
                                <br>
                                <div class="panel-body" style="padding-bottom:10px; margin-top:0;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {!! Form::textarea('current_address', null, ['class' => 'form-control text-capitalize', 'id' => 'current_address', 'placeholder' => 'Enter Address Here', 'cols' => '40', 'rows' => '2']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                            {!! Form::submit('Register Student', ['class' => 'btn btn-info']) !!}
                        </div>
</div>
</div>


</div>

</div>
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
            
        });


        $('#browse_file').on('click', function(){
            $('#image').click();

        });

        $('#image').on('change', function(e){
            showFile(this, '#showImage');

        });

        function showFile(fileInput, img, showName){
            if(fileInput.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $(img).attr('src', e.target.result);

                }
                reader.readAsDataURL(fileInput.files[0]);

            }
            $(showName).text(fileInput.files[0].name);
        }
    </script>


@endpush








{{-- 
<!-- Roll No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('roll_no', 'Roll No:') !!}
    {!! Form::text('roll_no', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Father Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_name', 'Father Name:') !!}
    {!! Form::text('father_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Mother Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Mother_name', 'Mother Name:') !!}
    {!! Form::text('Mother_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Father Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_phone', 'Father Phone:') !!}
    {!! Form::text('father_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('current_address', 'Current Address:') !!}
    {!! Form::textarea('current_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Passport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport', 'Passport:') !!}
    {!! Form::text('passport', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Dateregistered Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateregistered', 'Dateregistered:') !!}
    {!! Form::text('dateregistered', null, ['class' => 'form-control','id'=>'dateregistered']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dateregistered').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class_id', 'Class Id:') !!}
    {!! Form::number('class_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admissions.index') }}" class="btn btn-default">Cancel</a>
</div> --}}
