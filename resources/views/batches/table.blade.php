<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batch)
            <tr>
                <td>{{ $batch->batch }}</td>
              
                <td>
                    
                    {!! Form::open(['route' => ['batches.destroy', $batch->batch_id], 'method' => 'delete']) !!}
                    
                    <div class='btn-group'>
                    <a href="#" data-toggle="modal" data-target="#batch-view-modal" data-batch_id="{{$batch->batch_id}}" data-batch_name="{{$batch->batch}}" data-created_at="{{$batch->created_at}}" data-updated_at="{{$batch->updated_at}}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"> View</i></a>
                    
                        <a href="{{ route('batches.edit', [$batch->batch_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"> Edit</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


{{-- add to modal now --}}

<div class="modal fade" id="batch-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <input type="hidden" name="batch_id" id="batch_id">

                <!-- Batch Field -->
                <div class="form-group">
                        {!! Form::label('batch_name', 'Batch:') !!}
                        {!! Form::text('batch_name', null, ['class' => 'form-control', 'id' => 'batch_name', 'readonly']) !!}
                    
                </div>


                <!-- Created At Field -->
                <div class="form-group">
                    {!! Form::label('created_at', 'Created At:') !!}
                    <input type="text" name="created_at" id="created_at" class="form-control" readonly>

                </div>

                <!-- Updated At Field -->
                <div class="form-group">
                    {!! Form::label('updated_at', 'Updated At:') !!}
                    <input type="text" name="updated_at" class="form-control" id="updated_at" readonly>

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
        $('#batch-view-modal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget) ;
            var batch_name = button.data('batch_name');
            var created_at = button.data('created_at');
            var updated_at = button.data('updated_at');
            var batch_id = button.data('batch_id');
            var modal = $(this);

            modal.find('.modal-title').text('View Batch Information');
            modal.find('.modal-body #batch_name').val(batch_name);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #batch_id').val(batch_id);
        });

    });
    </script>

@endpush


