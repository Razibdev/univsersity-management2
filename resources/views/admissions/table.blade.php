<div class="table-responsive">
    <table class="table" id="admissions-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Department</th>
                <th>Faculty</th>
                <th>Batch</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admissions as $admission)
            <tr>
                <td>{{ $admission->first_name }} {{ $admission->last_name }}</td>
                 <td>{{$admission->department_name}}</td>
                 <td>{{$admission->faculty_name}}</td>
                 <td>{{$admission->batch}}</td>
                <td>@if ($admission->gender == 0)
                    <span>Male</span>
                    @else 
                    <span>Female</span>
                @endif</td>
                <td>@if ($admission->status ==0)
                    <span>Single</span>
                    @else 
                    <span>Married</span>
                @endif </td>
                <td><img src="{{asset('student_images/'.$admission->image)}}" width="50" height="50" style="border-radius: 50%; vertical-align:middle;"></td>
                <td>
                    {!! Form::open(['route' => ['admissions.destroy', $admission->student_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admissions.show', [$admission->student_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admissions.edit', [$admission->student_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
