@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Academics</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" data-toggle="modal" data-target="#academic-add-modal"><i class="fa fa-plus-circle"> Add New Academic</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('academics.table')

                    {!! Form::open(['route' => 'academics.store']) !!}

                    @include('academics.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

