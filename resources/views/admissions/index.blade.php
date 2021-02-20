@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Admissions</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#admission-add-modal"><i class="fa fa-plus-circle"> Add New Admission</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admissions.table')
                    {{-- {!! Form::open(['route' => 'admissions.store']) !!} --}}
                    <form action="{{route('admissions.store')}}" method="POST" enctype="multipart/form-data">@csrf

                        @include('admissions.fields')

                    {{-- {!! Form::close() !!} --}}
                </form>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

