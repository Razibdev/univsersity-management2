@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Fee Structures</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#" data-toggle="modal" data-target="#fee-structure-add-modal"><i class="fa fa-plus-circle"></i> Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('fee_structures.table')

                    {!! Form::open(['route' => 'feeStructures.store']) !!}

                        @include('fee_structures.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

