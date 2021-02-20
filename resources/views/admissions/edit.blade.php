@extends('layouts.app')

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

@section('content')
    <section class="content-header">
        <h1>
            Admission
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($admission, ['route' => ['admissions.update', $admission->student_id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
{{-- 
               <form method="POST" action="{{route('admissions.update', $admission->student_id)}}" enctype="multipart/form-data" >@csrf @method('patch') --}}

                 
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <b><i class="fa fa-book"></i><legend></legend><h3>Admission Details: </h3></b> <b class="pull-right"></b>
                    </div>
                    <div class="panel-body" style="padding-bottom: 4px;">
                        
                        <input type="hidden" name="dateregistered" value="{{date('Y-m-d')}}" id="dateregistered">  
                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}"> 
                   
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">

                        </div>


                    

                        <!-- First Name Field -->
                        <div class="form-group col-md-4">
                            {!! Form::text('first_name', null, ['class' => 'form-control text-capitalize', 'id' => 'first_name', 'value' => '{{Enter First Name Here}}']) !!}
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
                                        <td><label><input type="radio" name="gender" id="gender" value="0" {{$admission->gender == 0 ? 'checked' : ''}}> Male</label></td>

                                        <td><label><input type="radio" name="gender" id="gender" value="1" {{$admission->gender == 1 ? 'checked' : ''}}> Female</label></td>
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
                                                <input type="radio" name="status" id="status" value="0" {{$admission->status == 0 ? 'checked' : ''}}>
                                                
                                            </label> Single
                                        </td>
                                        <td>
                                            <label>
                                                <input type="radio" name="status" id="status" value="1" {{$admission->status == 1 ? 'checked' : ''}}>
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
                                    <option value="{{$department->department_id}}" {{$department->department_id == $admission->department_id ? 'selected': ''}}>{{$department->department_name}}</option>
                                @endforeach
                            </select>
                        
                        </div>

                        <br>
                        <!-- Faculty Field -->
                        <div class="form-group col-md-4" style="margin-top: 30px;">
                            <select name="faculty_id" id="faculty_id" class="form-control">
                                <option value="" selected disabled>Choose Faculty</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{$faculty->faculty_id}}" {{$faculty->faculty_id == $admission->faculty_id ? 'selected': ''}}>{{$faculty->faculty_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <br>
                        <!-- Batch Field -->
                        <div class="form-group col-md-4" style="margin-top: 30px;">
                            <select name="batch_id" id="batch_id" class="form-control">
                                <option value="" selected disabled>Choose Batch</option>
                                @foreach ($batches as $batch)
                                    <option value="{{$batch->batch_id}}" {{$batch->batch_id == $admission->batch_id ? 'selected': ''}}>{{$batch->batch}}</option>
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
                                                {!! Html::image('student_images/'.$admission->image, null, ['class' => 'teacher-image', 'id' => 'showImage']) !!}
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
                                
                                <div class="modal-footer">
                                    <a href="{{ route('admissions.index') }}" class="btn btn-default">Back</a>
                                    {!! Form::submit('Update Student', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>

                   {!! Form::close() !!}
                {{-- </form> --}}
               </div>
           </div>
       </div>
   </div>
@endsection



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
