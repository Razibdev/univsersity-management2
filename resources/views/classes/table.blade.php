<style>
    input:read-only{
        border:none;
    }
</style>

<div class="table-responsive">
    <table class="table" id="classes-table">
        <thead>
            <tr>
                <td>Class Name</td>
                <td>Class Code</td>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classes as $classes)
            <tr>
                <td>{{ $classes->class_name }}</td>
                <td>{{ $classes->class_code }}</td>
                <td>
                    {!! Form::open(['route' => ['classes.destroy', $classes->class_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    <a data-toggle="modal" data-target="#class-view-modal" data-class_id="{{$classes->class_id}}" data-class_name="{{$classes->class_name}}" data-class_code="{{$classes->class_code}}" data-created_at="{{$classes->created_at}}" data-updated_at="{{$classes->updated_at}}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"> View</i></a>
                        <a href="{{ route('classes.edit', [$classes->class_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"> Edit</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>




{{-- add view modal now --}}

<div class="modal fade" id="class-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <input type="hidden" name="class_id" id="class_id">

                <!-- Created At Field -->
                <div class="form-group">
                    {!! Form::label('class_name', 'Class Name:') !!}
                    {!! Form::text('class_name', null, ['class' => 'form-control', 'id' => 'class_name', 'readonly']) !!}
                </div>
                <!-- Created At Field -->
                <div class="form-group">
                    {!! Form::label('class_code', 'Class Code:') !!}
                    {!! Form::text('class_code', null, ['class' => 'form-control', 'id' => 'class_code', 'readonly']) !!}
                </div>

                <!-- Created At Field -->
                <div class="form-group">
                    {!! Form::label('created_at', 'Created At:') !!}
                    {!! Form::text('created_at', null, ['class' => 'form-control', 'id' => 'created_at', 'readonly']) !!}
                </div>

                <!-- Updated At Field -->
                <div class="form-group">
                    {!! Form::label('updated_at', 'Updated At:') !!}
                    {!! Form::text('updated_at', null, ['class' => 'form-control', 'id' => 'updated_at', 'readonly']) !!}
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>




@push('scripts')
    
    <script>
        $(document).ready(function(){
        $('#class-view-modal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget) ;
            var class_name = button.data('class_name');
            var class_code = button.data('class_code');
            var created_at = button.data('created_at');
            var updated_at = button.data('updated_at');
            var class_id = button.data('class_id');
            var modal = $(this);

            modal.find('.modal-title').text('View Class Information');
            modal.find('.modal-body #class_name').val(class_name);
            modal.find('.modal-body #class_code').val(class_code);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #class_id').val(class_id);
        });

    });
    </script>

@endpush