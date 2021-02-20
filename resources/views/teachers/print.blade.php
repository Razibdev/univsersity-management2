<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>InfyOm Generator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    <style>
        .title{
            font-size: 25px;
            font-weight: 600;
            letter-spacing: 0.1rem;
            text-decoration: none;
            text-decoration: underline;
            text-transform: uppercase;
            float: right;
            color: blue;
            margin-top: 20px;
            margin-right: 15%;
        }
        
        .pull{
            text-align: center;
            border: 1px solid;
        }
        
        td1{
            text-align: center;
            border: 1px solid;
        }
        
        </style>
        
</head>

<body class="skin-blue sidebar-mini">

<div class="wrapper">
    <section class="invoice">
        <div class="row">
            <small class="pull-right"><?php echo date('D-M-Y') ?></small>
            <div class="navbar-custom-menu">
                <div class="col-xs-12">
                    {{-- <a href="#"><img src="" alt=""></a> --}}
                    <h1 class="title">Academic Information System</h1>

                    @foreach ($teachers as $teacher)
                        
                </div>
            </div>
            <br>

            <div class="row no-print">
                <div class="col-xs-12">
                    <button type="button" class="btn btn-danger pull-right">
                        <a href="{{url('pdf-download-teacher-single',[$teacher->teacher_id])}}" style="color: #fff;" ><i class="fa fa-download"></i> Generate PDF</a>
                    </button>

                    <button type="button" class="btn btn-info pull-right" style="margin-right: 5px;" ><i class="fa fa-print" onclick="window.print();"> Print</i></button>
                </div>
            </div>

            <div class="row-invoice-info">
                <div class="col-sm-4 invoice-col" style="margin-left: 40px;">
                    <address>
                        <h3 style="font-weight:600; font-size:20px; font-style:bold; ">Address, GB University</h3>
                        Nolam, Savar, Dhaka <br>
                        Phone: 01848178478 <br>
                        Email: razibhossen8566@gmail.com
                    </address>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 table-responsive" style="margin-left: 10px; padding-right: 50px;">
                    <table class="table table-striped" style="margin-left:8px;">
                        <thead>
                            <h3 style="text-align: center; font-size: 30px; font-weight:600;  ">
                                <b style="color: red;">Teacher </b>{{$teacher->first_name}} {{$teacher->last_name}}
                            </h3>
                        </thead>

                        <tbody>
                        <tr><td><img src="{{asset('teacher_images/'.$teacher->image)}}" alt="" class="rounded-circle" width="50px;" height="50px;" style="border-radius:50%; vertical-align:middle;"> </td></tr>
                        <tr><th scope="col"> Full Name </th> <td>{{$teacher->first_name}} {{$teacher->last_name}}</td></tr>
                        <tr><th scope="col"> Nationality </th> <td>{{$teacher->nationality}} </td></tr>
                        <tr><th scope="col"> Date of Birth </th> <td>{{$teacher->dob}} </td></tr>

                        <tr><th scope="col"> Gender </th> <td>@if ($teacher->gender == 0)Male @else Female @endif </td></tr>

                        <tr><th scope="col"> Phone </th> <td>{{$teacher->phone}} </td></tr>
                        <tr><th scope="col"> Email </th> <td>{{$teacher->email}} </td></tr>
                        <tr><th scope="col"> Address </th> <td>{{$teacher->address}} </td></tr>
                        <tr><th scope="col"> Passport </th> <td>{{$teacher->passport}} </td></tr>

                        <tr><th scope="col"> Status </th> <td>@if ($teacher->status == 0)Single @else Married @endif </td></tr>

                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>


  <!-- jQuery 3.1.1 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

  @stack('scripts')
</body>
</html>