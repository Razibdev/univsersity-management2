@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Semester
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($semester, ['route' => ['semesters.update', $semester->semester_id], 'method' => 'patch']) !!}

                        <!-- Semester Name Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('semester_name', 'Semester Name:') !!}
                            {!! Form::text('semester_name', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Semester Code Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('semester_code', 'Semester Code:') !!}
                            {!! Form::text('semester_code', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Semester Duration Field -->
                        <div class="form-group col-md-12">
                            {!! Form::label('semester_duration ', 'Semester Duration:') !!}
                            {!! Form::text('semester_duration', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Semester Description Field -->
                        <div class="form-group col-md-12">
                            {!! Form::label('semester_description', 'Semester Description:') !!}
                            {!! Form::textarea('semester_description', null, ['class' => 'form-control', 'rows' => '4']) !!}
                        </div>

                        <div class="form-group col-md-12">
                            {!! Form::submit('Update Semester', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('semesters.index') }}" class="btn btn-default">Cancel</a>
                        </div>

                       

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection