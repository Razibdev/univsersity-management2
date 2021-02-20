@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batch
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row" style="padding-left: 6px;">
                   {!! Form::model($batch, ['route' => ['batches.update', $batch->batch_id], 'method' => 'patch']) !!}

                   <div class="input-group col-md-6">
                    {!! Form::label('batch', 'Batch Year:', ['class' => 'input-group-addon']) !!}
                    {!! Form::text('batch', null, ['class' => 'form-control']) !!}
                    </div>
                
                    <br>
                <div class="form-group col-md-12">
                    
                    {!! Form::submit('Update Batch', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a>
                </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection