<!-- Faculty Name Field -->
<div class="form-group">
    {!! Form::label('faculty_name', 'Faculty Name:') !!}
    <p>{{ $faculty->faculty_name }}</p>
</div>

<!-- Faculty Code Field -->
<div class="form-group">
    {!! Form::label('faculty_code', 'Faculty Code:') !!}
    <p>{{ $faculty->faculty_code }}</p>
</div>

<!-- Faculty Description Field -->
<div class="form-group">
    {!! Form::label('faculty_description', 'Faculty Description:') !!}
    <p>{{ $faculty->faculty_description }}</p>
</div>

<!-- Faculty Status Field -->
<div class="form-group">
    {!! Form::label('faculty_status', 'Faculty Status:') !!}
    <p>{{ $faculty->faculty_status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $faculty->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $faculty->updated_at }}</p>
</div>

