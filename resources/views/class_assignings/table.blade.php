<div class="modal fade" id="Classschedule-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style="width: 90%;" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-user-o"> Generate a Class For Teacher</i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                {!! Form::open(array('route' => 'insert', 'id' => 'mult', 'method' => 'post')) !!}@csrf
                {{-- 'route' => 'insert', --}}
                @include('class_assignings.fields')

                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="classAssignings-table">
                        <thead>
                           
                        </thead>
                        <tbody>
                        @foreach($classSchedules as $classSchedule)
                            <tr>
                            
                                <td><input type="checkbox" name="multiclass[]" id="multiclass" value="{{$classSchedule->schedule_id }}"> </td>
                                <td>{{ $classSchedule->course_name }}</td>
                                <td>{{ $classSchedule->class_name }}</td>
                                <td>{{ $classSchedule->level }}</td>
                                <td>{{ $classSchedule->shift }}</td>
                                <td>{{ $classSchedule->classroom_name }}</td>
                                <td>{{ $classSchedule->name }}</td>
                                <td>{{ $classSchedule->time }}</td>
                                <td>{{ $classSchedule->semester_name }}</td>
                                <td>{{ $classSchedule->batch }}</td>
                                 <td> {{date('d-m-Y', strtotime($classSchedule->start_time)) }}</td>
                                 <td> {{date('d-m-Y', strtotime($classSchedule->end_time)) }}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $classAssignings->links() }}
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                {!! Form::submit('Generate Class Assign', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>






<div class="table-responsive">
    <table class="table" id="classAssignings-table">
        <thead>
            <tr>
                <th>Teacher</th>
                <th>Semester</th>
                <th>Course</th>
                <th>Details</th>
                {{-- <th>Batch Id</th>
                <th>Day Id</th>
                <th>Time Id</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classAssignings as $classAssigning)
            <tr>
                <td>{{ $classAssigning->first_name }} {{ $classAssigning->last_name }}</td>
                <td>{{ $classAssigning->semester_name }}</td>
                <td>{{ $classAssigning->course_name }}</td>
                <td>
                    {{ $classAssigning->level }} | {{ $classAssigning->time }} | {{ $classAssigning->name }} | {{ $classAssigning->class_name }} | {{ $classAssigning->shift }} | {{ $classAssigning->batch }} | {{ $classAssigning->classroom_name }}
                </td>
                <td>
                    {!! Form::open(['route' => ['classAssignings.destroy', $classAssigning->class_assign_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                    <a href="#" class='show-modal btn btn-default btn-xs' data-id="{{$classAssigning->class_assign_id}}" data-name="{{$classAssigning->name}}" data-fname="{{$classAssigning->first_name}}" data-lname="{{$classAssigning->last_name}}" data-shift="{{$classAssigning->shift}}" data-level="{{$classAssigning->level}}" data-time="{{$classAssigning->time}}" data-classroom_name="{{$classAssigning->classroom_name}}" data-class_name="{{$classAssigning->class_name}}" data-batch="{{$classAssigning->batch}}" data-course_name="{{$classAssigning->course_name}}" data-created_at="{{$classAssigning->created_at}}" data-semester_name="{{$classAssigning->semester_name}}"><i class="glyphicon glyphicon-eye-open"> </i></a>

                        <a href="{{ route('classAssignings.edit', [$classAssigning->class_assign_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
