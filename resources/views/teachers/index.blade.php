@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Teachers</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#teacher-add-modal"><i class="fa fa-plus"> Add New Teacher</i></a>
        </h1>
          {{------------------------------- PDF button ---------------------------}}
          <div class="btn-group btn pull-right" style="margin-top: -17px; float: left; margin-right:0px;">
            <button type="button" class="btn btn-danger" ><i class="fa fa-file-pdf-o" style="color: white;"></i> PDF</button>
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown </span>
            </button>

            <ul class="dropdown-menu" role="menu" id="export-menu">
                <li id="export-to-pdf">
                <a href="{{url('pdf-download-teachers')}}">Download PDF</a>
                </li>
                <li role="separator" class="divider"></li>
                <li id="import-to-pdf"> <a href="#">Import PDF</a></li>
            </ul>

        </div>
        {{------------------------------- Excel button ---------------------------}}
        <div class="btn-group btn pull-right" style="margin-top: -17px; float: left; margin-right:0px;">
            <button type="button" class="btn btn-success" ><i class="fa fa-file-pdf-o" style="color: white;"></i> Excel</button>
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown </span>
            </button>

            <ul class="dropdown-menu" role="menu" id="export-menu">
                <li id="export-to-pdf">
                <a href="{{url('excel-export-teachers_xlsx')}}">Export Xlsx</a>
                </li>
                <li role="separator" class="divider"></li>
                <li id="export-to-pdf">
                    <a href="{{url('excel-export-teachers_xls')}}">Export Xls </a>
                 </li>
                <li role="separator" class="divider"></li>
                <li id="export-to-pdf"> <a href="{{url('excel-export-teachers_csv')}}">Export CSV</a></li>

                <li role="separator" class="divider"></li>
                <li id="import-to-pdf"> <a href="#" data-toggle="modal" data-target="#import_excel_teacher">Import Excel</a></li>
            </ul>

        </div>
      

    </section>
    <div class="content">
        <div class="clearfix"></div>
        
        @include('flash::message')
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('teachers.table')
                    @include('teachers.excel')


                    {{-- {!! Form::open(['route' => 'teachers.store']) !!} --}}

            <form action="{{route("teachers.store")}}" method="post" enctype="multipart/form-data">@csrf

                    @include('teachers.fields')

                    {{-- {!! Form::close() !!} --}}

                </form>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

