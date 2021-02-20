<div class="modal fade left" id="classscheduling-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-registered" aria-hidden="true">Edit Class Scheduled</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            {{-- {!! Form::model($classScheduling, ['route' => ['classSchedulings.update', $classScheduling->schedule_id], 'method' => 'patch']) !!} --}}
        <form action="{{route('classSchedulings.update','Scheduleid')}}" method="post" >@csrf @method('put')
            <div class="modal-body" style="height: 355px;">
                <input type="hidden" name="Scheduleid" id="Scheduleid" >
            <!-- Course Id Field -->
            <div class="row">
            <!-- Level Id Field -->
            <div class="form-group col-sm-6">
                <select name="class_ids" id="class_ids" class="form-control">
                    <option value="">Select Class</option>
                    @foreach ($class as $cla)
                        
                        <option value="{{$cla->class_id}}">{{$cla->class_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-sm-6">
                <select name="course_ids" id="course_ids" class="form-control">
                    <option value="">Select Course</option>
                    @foreach ($course as $cour)
                        
                    <option value="{{$cour->course_id}}">{{$cour->course_name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Level Id Field -->
            <div class="form-group col-sm-6">
                <select name="level_ids" id="level_ids" class="form-control">
                    <option value="">Select level</option>
                    @foreach ($level as $lev)
                    <option value="{{$lev->level_id}}">{{$lev->level}}</option>
                    @endforeach
                    
                </select>
            </div>

            <!-- Shift Id Field -->
            <div class="form-group col-sm-6">
                <select name="shift_ids" id="shift_ids" class="form-control">
                    <option value="">Select Shift</option>
                    @foreach ($shift as $shif)
                        
                    <option value="{{$shif->shift_id}}">{{$shif->shift}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Classroom Id Field -->
            <div class="form-group col-sm-6">
                <select name="classroom_ids" id="classroom_ids" class="form-control">
                    <option value="">Select Classroom</option>
                    @foreach ($classroom as $room)
                        
                    <option value="{{$room->classroom_id}}">{{$room->classroom_name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Batch Id Field -->
            <div class="form-group col-sm-6">
                <select name="batch_ids" id="batch_ids" class="form-control">
                    <option value="">Select Batch</option>
                    @foreach ($batch as $ba)
                        
                    <option value="{{$ba->batch_id}}">{{$ba->batch}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Day Id Field -->
            <div class="form-group col-sm-6">
                <select name="day_ids" id="day_ids" class="form-control">
                    <option value="">Select Day</option>
                    @foreach ($day as $da)
                        
                    <option value="{{$da->day_id}}">{{$da->name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Time Id Field -->
            <div class="form-group col-sm-6">
                <select name="time_ids" id="time_ids" class="form-control">
                    <option value="">Select Time</option>
                    @foreach ($time as $tim)
                        
                    <option value="{{$tim->time_id}}">{{$tim->time}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Semester Id Field -->
            <div class="form-group col-sm-6">
                <select name="semester_ids" id="semester_ids" class="form-control">
                    <option value="">Select Semester</option>
                    @foreach ($semester as $sem)
                        
                    <option value="{{$sem->semester_id}}">{{$sem->semester_name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Start Time Field -->
            <div class="form-group col-sm-6">
                <input type="text" name="start_times" id="start_times" class="form-control" placeholder="Start Date">
               
            </div>
            </div>

            
            <!-- End Time Field -->
            <div class="form-group col-sm-6" style="left: -13px;">
                <input type="text" name="end_times" id="end_times" class="form-control" placeholder="End Date">
                
            </div>


            <!-- Status Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('sta', 'Status:', ['id' => 'sta']) !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('sta', 0) !!}
                        {!! Form::checkbox('sta', '1', null, ['class' => 'razib']) !!}
                    </label>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
            {!! Form::submit('Update Scheduling', ['class' => 'btn btn-primary']) !!}
        </div>
        {{-- {!! Form::close() !!} --}}
        </form>

    </div>
</div>
</div>


@push('scripts')
    <script>
       

       
// $('#course_id').on('change', function(e){
    
//     var course_id = $(this).val();
//     var level = $('#level_id');
//    $(level).empty();
//     $.get("{{route('dynamicLevel')}}",{course_id:course_id}, function(data){

//         $.each(data, function(index, l){
//             $(level).append($('<option/>',{
//                 value: l.level_id,
//                 text: l.level
//             }));
//         });
//     });
// });


        $(document).on('click', '#Edit', function(data){
            var Scheduleid = $(this).data('schedule_id');
            $('#Scheduleid').val(Scheduleid);
            
            $.get('{{ route('edit')}}', {Scheduleid:Scheduleid}, function(data){
                console.log(data);
                $('#class_ids').val(data.class_id);
                $('#course_ids').val(data.course_id);
                $('#level_ids').val(data.level_id);
                $('#shift_ids').val(data.shift_id);
                $('#classroom_ids').val(data.classroom_id);
                $('#batch_ids').val(data.batch_id);
                $('#day_ids').val(data.day_id);
                $('#time_ids').val(data.time_id);
                $('#semester_ids').val(data.semester_id);
                $('#start_times').val(data.start_time);
                $('#end_times').val(data.end_time);
                $('#sta').val(data.status);
            })
        })


        $('#start_time').datetimepicker({
            format:'YYYY-MM-DD',
            useCurrent:false
        });

        $('#end_time').datetimepicker({
                format:'YYYY-MM-DD',
                useCurrent:false
            });

    </script>
@endpush