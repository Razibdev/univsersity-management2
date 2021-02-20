<div class="table-responsive">
    <div class="panel">
        <div class="panel-body">
            <div class="wait" id="wait">

            </div>
        </div>
    </div>
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
                <td> @if ($teacher->gender == 0)
                    Male
                    @else 
                    Female
                    
                @endif</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->phone }}</td>
                <td> <input type="checkbox" class="js-switch" data-id="{{$teacher->teacher_id}}" name="status" {{$teacher->status == 1 ? 'checked' : ''}} /></td>
                <td><img src="{{asset('teacher_images/'.$teacher->image)}}" alt="" width="50px" height="50px" style="border-radius: 50%; vertical-align:middle; "></td>
                <td>
                    {!! Form::open(['route' => ['teachers.destroy', $teacher->teacher_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ url('prints-teachers', [$teacher->teacher_id]) }}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-print"></i></a>
                        <a target="_blank" href="{{ route('teachers.show', [$teacher->teacher_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('teachers.edit', [$teacher->teacher_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.js-switch').change(function(){
                let status = $(this).prop('checked') == true ? 1 : 0;
                let teacherId = $(this).data('id');

                $.ajax({
                    dataType:'json',
                    type:"GET",
                    url: "{{url('teacher-status-updated')}}",
                    data:{'status': status, 'teacher_id' : teacherId},
                    success:function(data){
                        console.log(data.message);
                        toastr.options.closeButton = true;
                        toastr.options.closeMethod = 'fadeOut';
                        toastr.options.closeDuration = 100;
                        toastr.success(data.message);

                    }
                })
            });
        });
    </script>
@endpush