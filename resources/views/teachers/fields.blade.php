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
        
<div class="modal fade left" id="teacher-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog" style="width: 90%" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-file-text-o" aria-hidden="true"> New Teacher Form</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <b><i class="fa fa-book"></i><legend></legend><h3>Teacher Details: </h3></b> <b class="pull-right"></b>
                    </div>
                    <div class="panel-body" style="padding-bottom: 4px;">
                        {{-- 
                        <input type="hidden" name="teacher_id" value="{{$teacher_id}}" id="teacher_id">   --}}
                    <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}"> 
                    <input type="hidden" name="dateregistered" id="dateregistered" value="{{date('Y-m-d')}}">
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


{{-- <!-- Dateregistered Field -->
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
@endpush --}}


<!-- Gender Field -->
<div class="col-md-4 form-group">
    <fieldset>
        <legend for="gender">Gender</legend>
        <table style="width:100%; margin-top: 14px;">
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







{{-- <!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Nationality Field -->
<div class="form-group col-md-4">
    {!! Form::text('nationality', null, ['class' => 'form-control text-capitalize', 'id' => 'nationality', 'placeholder' => 'Enter Natonality here']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-md-4">
    {!! Form::text('phone', null, ['class' => 'form-control text-capitalize','id' => 'phone', 'placeholder' => 'Enter Phone Number here']) !!}
</div>


<!-- Email Field -->
<div class="form-group col-md-8">
    {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter Email Address Here']) !!}
    
</div>

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

<!-- Address Field -->
<div class="panel panel-default">
{{-- <div class="panel-heading" style="margin-top: -20px">
    <b><i class="fa fa-map-marker"></i> Address</b>
</div> --}}
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
</div>

<!-- Image Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div> --}}


</div>

</div>
</div>
</div>

<div class="modal-footer">
    <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
    {!! Form::submit('Register Teacher', ['class' => 'btn btn-primary']) !!}
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