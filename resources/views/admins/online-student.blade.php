@extends('layouts.php')
@section('cotent')
<section class="content-header">
    <h1 class="pull-left">Admissions</h1>
    <h1 class="pull-right">
       <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#admission-add-modal"><i class="fa fa-plus-circle"> Add New Admission</i></a>
    </h1>
</section>

<div class="box box-primary">
    <div class="box-body">
        <div class="col-md-6">
            <div class="panel-default">
                <div class="panel-heading" style="text-transform: uppercase; ">
                </div>
                    <div class="panel-body">
                        @include('admins.online-teacher-table')
                    
                    </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel-default">
                <div class="panel-heading">

                </div>

                <div class="panel-body">
                    @include('admins.online-student-table')
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center">

</div>
@endsection