@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classes, ['route' => ['classes.update', $classes->class_id], 'method' => 'patch']) !!}

                   <div class="form-group col-md-6 col-sm-12">
                    {!! Form::label('class_name', 'Class Name:') !!}
                    {!! Form::text('class_name', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Shift Field -->
                <div class="form-group col-md-6 col-sm-12">
                    {!! Form::label('class_code', 'Class Code:') !!}
                    {!! Form::text('class_code', null, ['class' => 'form-control']) !!}
                </div>


                <div class="form-group col-md-12">
                    {!! Form::submit('Updated Classes', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('classes.index') }}" class="btn btn-default">Cancel</a>
                </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection