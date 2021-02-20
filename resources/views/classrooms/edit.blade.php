@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classroom
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classroom, ['route' => ['classrooms.update', $classroom->classroom_id], 'method' => 'patch']) !!}

                   <div class="form-group col-md-6">
                    {!! Form::label('classroom_name', 'Classroom Name:') !!}
                    {!! Form::text('classroom_name', null, ['class' => 'form-control']) !!}
                </div>
    
                <div class="form-group col-md-6">
                    {!! Form::label('classroom_code', 'Classroom Code:') !!}
                    {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
                </div>
    
                <div class="form-group col-md-12">
                    {!! Form::label('classroom_description', 'Classroom Description:') !!}
                    {!! Form::textarea('classroom_description', null, ['class' => 'form-control', 'rows' => '4']) !!}
                </div>
                
                <div class="form-group col-md-6">
                    {!! Form::label('classroom_status', 'Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('classroom_status', 0) !!}
                        {!! Form::checkbox('classroom_status', '1', null, ['class' => 'razib']) !!}
                    </label>
                </div>

                <div class="form-group col-sm-12">
                    {!! Form::submit('Update Classroom', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('classrooms.index') }}" class="btn btn-default">Cancel</a>
                </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection