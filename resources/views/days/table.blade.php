<div class="table-responsive">
    <table class="table" id="days-table">
        <thead>
            <tr>
                <th>Day</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($days as $day)
            <tr>
                <td>{{$day->name}}</td>
                <td>
                    {!! Form::open(['route' => ['days.destroy', $day->day_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                    <a data-toggle="modal" data-target="#day-view-modal" data-day_id="{{$day->day_id}}" data-name="{{$day->name}}" data-created_at="{{$day->created_at}}" data-updated_at="{{$day->updated_at}}" class='btn btn-warning btn-xs' ><i class="glyphicon glyphicon-eye-open"> View</i></a>
                        <a href="{{ route('days.edit', [$day->day_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"> Edit</i></a>
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

<div class="modal fade" id="day-view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <input type="hidden" name="day_id" id="day_id">

                <!-- Created At Field -->
                <div class="form-group">
                    {!! Form::label('name', 'Day:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'readonly']) !!}
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
        $('#day-view-modal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget) ;
            var name = button.data('name');
            var created_at = button.data('created_at');
            var updated_at = button.data('updated_at');
            var day_id = button.data('day_id');
            var modal = $(this);

            modal.find('.modal-title').text('View Class Information');
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #created_at').val(created_at);
            modal.find('.modal-body #updated_at').val(updated_at);
            modal.find('.modal-body #day_id').val(day_id);
        });

    });
    </script>

@endpush
