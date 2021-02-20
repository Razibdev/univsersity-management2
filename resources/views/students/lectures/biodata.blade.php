@extends('layouts.frontLayout.app')

@section('content')

<style>
    input[readonly], textarea[readonly]{
        background:white !important;
        border: none;
    }
    span{
        padding-left: 20px;
    }

    .input-icon{
      position: absolute;
      right: 20px;
      top: calc(50% - 0.55em);

    }
    .input-wrapper{
      position: relative;
    }
</style>
    <section class="content-header">
        <h1>
            students
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">

            <!-- Content Header (Page header) -->
            <section class="content-header">
            <h1>
                User Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">User profile</li>
            </ol>
            </section>

            <!-- Main content -->
            <section class="content">

            <div class="row">
                <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{asset('student_images/'.$students->image)}}" width="50" height="50" style="width: 150px; height:150px; border-radius:50%; vertical-align:middle; " alt="User profile picture">

                    <h3 class="profile-username text-center">{{$students->first_name}} {{$students->last_name}}</h3>

                    <p class="text-muted text-center">students</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                        <b>Followers</b> <a class="pull-right">1,322</a>
                        </li>
                        <li class="list-group-item">
                        <b>Following</b> <a class="pull-right">543</a>
                        </li>
                        <li class="list-group-item">
                        <b>Friends</b> <a class="pull-right">13,287</a>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                    <p class="text-muted">Malibu, California</p>

                    <hr>

                    <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                    <p>
                        <span class="label label-danger">UI Design</span>
                        <span class="label label-success">Coding</span>
                        <span class="label label-info">Javascript</span>
                        <span class="label label-warning">PHP</span>
                        <span class="label label-primary">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                <div class="nav-tabs-custom " >
                    <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">students Class TimeTable</a></li>
                    <li><a href="#timeline" data-toggle="tab">Full Details</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                    <div class="active tab-pane" id="activity">

                      <section class="content-header">
                        <h1>
                           Class Time Table
                        </h1>
                    </section>
                    <div class="content">
                        @include('adminlte-templates::common.errors')
                        <div class="box box-primary" style="box-shadow: none;">
                            <div class="box-body"><br> <br>
                              
                            </div>
                          </div> 
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                      <section class="content-header">
                        <h1>
                           Student Biodata / Profile
                        </h1>
                    </section>
                    <div class="content">
                        @include('adminlte-templates::common.errors')
                        <div class="box box-primary" style="box-shadow: none;">
                            <div class="box-body"><br> <br>

                      <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Full Name</label>

                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" value="{{$students->first_name}} {{$students->last_name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" value="{{$students->email}}" readonly>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="inputName" class="col-sm-2 control-label">Gender</label>

                            <div class="col-sm-4">
                                @if ($students->gender == 0)
                                    <span>Male</span>
                                @else 
                                <span>Female</span>
                                @endif
                            </div>

                            
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputName" class="col-sm-2 control-label">Status</label>

                            <div class="col-sm-4">
                                @if ($students->status == 0)
                                    <span>Single</span>
                                @else 
                                <span>Married</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Date of Birth</label>

                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" value="{{$students->dob}}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Phone No: </label>

                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" value="{{$students->phone}}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Passport No: </label>

                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" value="{{$students->passport}}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" readonly>{{$students->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Nationality</label>

                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" value="{{$students->nationality}}" readonly>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Register Date</label>

                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" value="{{date('Y-m-d', strtotime($students->dateregistered))}}" readonly>
                            </div>
                        </div>

                        </form>
                       </div>
                        </div>
                      </div> 
                    </div>
                      <!-- /.tab-pane -->


                  
                  <div class="tab-pane" id="settings">
                    <section class="content-header">
                      <h1>
                          Change Password
                      </h1>
                  </section>
                  <div class="content">
                      @include('adminlte-templates::common.errors')
                      <div class="box box-primary" style="box-shadow: none;">
                          <div class="box-body"><br> <br>
                          <form class="form-horizontal" action="{{url('/student-update-password')}}" method="get">@csrf
                      <div class="form-group">
                      <input type="hidden" name="email" id="email" value="{{$students->email }}">
                        <label for="old_password" class="col-sm-2 control-label">Old Password</label>
    
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="old_password" name="old_password" placeholder="Enter Your old Password">
                          <i class="input-icon" id="messageError"></i>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="new_password" class="col-sm-2 control-label">New Password</label>
    
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="new_password" name="new_password" placeholder="Enter New Password">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-info">Update Password</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  </div>
                </div>
              </div>
                
                   
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            </section>
            <!-- /.content -->
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
      $(document).ready(function(){
        $('#old_password').keyup(function(){
          var old_password = $(this).val();
          // alert(old_password)
          $.ajax({
            type:"get",
            url:"/verify-password",
            data:{old_password:old_password},
            success:function(response){
              if(response == 'false'){
                $('#messageError').html('<font color="red">Password Incorrect</font>');
              }else if(response == 'true'){
                $('#messageError').html('<font color="green">Password correct</font>');

              }
            }
          })
        });
      });
    </script>
@endpush