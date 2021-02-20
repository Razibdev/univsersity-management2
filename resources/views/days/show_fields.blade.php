<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('name', 'Day:') !!}
    <p>{{ $day->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $day->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $day->updated_at }}</p>
</div>

