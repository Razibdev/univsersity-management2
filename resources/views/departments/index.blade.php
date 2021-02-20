@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Departments</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#department-add-modal"> <i class="fa fa-plus-circle"> Add New Department</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('departments.table')
            </div>
        </div>
        <div class="text-center">
            @include('departments.fields')
        </div>
    </div>
@endsection

