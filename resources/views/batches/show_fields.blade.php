<!-- Batch Field -->
<div class="form-group">
    {!! Form::label('batch', 'Batch:') !!}
    <p>{{ $batch->batch }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $batch->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $batch->updated_at }}</p>
</div>

