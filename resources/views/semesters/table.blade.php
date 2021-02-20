<div class="table-responsive">
    <table class="table" id="semesters-table">
        <thead>
            <tr>
                <th>Semester Name</th>
                <th>Semester Code</th>
                <th>Semester Duration</th>
                <th>Semester Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($semesters as $semester)
            <tr>
                <td>{{ $semester->semester_name }}</td>
                <td>{{ $semester->semester_code }}</td>
                <td>{{ $semester->semester_duration }}</td>
                <td>{{ $semester->semester_description }}</td>
                <td>
                    {!! Form::open(['route' => ['semesters.destroy', $semester->semester_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                    <a data-toggle="modal" data-target="#semester-view-modal" data-semester_id="{{$semester->semester_id}}" data-semester_name="{{$semester->semester_name}}" data-semester_code="{{$semester->semester_code}}" data-semester_duration="{{$semester->semester_duration}}" data-semester_description="{{$semester->semester_description}}" data-created_at="{{$semester->created_at}}" data-updated_at="{{$semester->updated_at}}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"> View</i></a>

                        <a href="{{ route('semesters.edit', [$semester->semester_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"> Edit</i></a>
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

<div class="modal fade" id="semester-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <input type="hidden" name="semester_id" id="semester_id">

                <!-- Semester Name Field -->
            <div class="form-group">
                {!! Form::label('semester_name', 'Semester Name:') !!}
                {!! Form::text('semester_name', null, ['class' => 'form-control', 'id' => 'semester_name', 'readonly']) !!}
            </div>

            <!-- Semester Code Field -->
            <div class="form-group">
                {!! Form::label('semester_code', 'Semester Code:') !!}
                {!! Form::text('semester_code', null, ['class' => 'form-control', 'id' => 'semester_code', 'readonly']) !!}
            </div>

            <!-- Semester Duration Field -->
            <div class="form-group">
                {!! Form::label('semester_duration', 'Semester Duration:') !!}
                {!! Form::text('semester_duration', null, ['class' => 'form-control', 'id' => 'semester_duration', 'readonly']) !!}
            </div>

            <!-- Semester Description Field -->
            <div class="form-group">
                {!! Form::label('semester_description', 'Semester Description:') !!}
                {!! Form::text('semester_description', null, ['class' => 'form-control', 'id' => 'semester_description', 'readonly']) !!}
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
        $('#semester-view-modal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget) ;
            var semester_name = button.data('semester_name');
            var semester_code = button.data('semester_code');
            var semester_duration = button.data('semester_duration');
            var semester_description = button.data('semester_description');
            var created_at = button.data('created_at');
            var updated_at = button.data('updated_at');
            var semester_id = button.data('semester_id');
            var modal = $(this);

            modal.find('.modal-title').text('View Class Information');
            modal.find('.modal-body #semester_name').val(semester_name);
            modal.find('.modal-body #semester_code').val(semester_code);
            modal.find('.modal-body #semester_duration').val(semester_duration);
            modal.find('.modal-body #semester_description').val(semester_description);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #semester_id').val(semester_id);
        });

    });
    </script>

@endpush





