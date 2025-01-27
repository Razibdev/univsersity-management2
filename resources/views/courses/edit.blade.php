@extends('layouts.app')

@section('content')
<style>
    .razib{
        top: -10px;
        left: 25px;
    }
</style>

    <section class="content-header">
        <h1>
            Course
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($course, ['route' => ['courses.update', $course->course_id], 'method' => 'patch']) !!}

                        <!-- Course Name Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('course_name', 'Course Name:') !!}
                            {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Course Code Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('course_code', 'Course Code:') !!}
                            {!! Form::text('course_code', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Description Field -->
                        <div class="form-group col-sm-12 col-md-12">
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}
                        </div>

                        <!-- Status Field -->
                        <div class="form-group col-md-6">
                            {!! Form::label('status', 'Status:') !!}
                            <label class="checkbox-inline">
                                {!! Form::hidden('status', 0) !!}
                                {!! Form::checkbox('status', '1', null, ['class' => 'razib']) !!}
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update Course', ['class' => 'btn btn-success']) !!}
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection