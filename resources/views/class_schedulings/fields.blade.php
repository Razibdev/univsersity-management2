<div class="modal fade left" id="classscheduling-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-registered" aria-hidden="true">Class Scheduled</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body" style="height: 355px;">
            
            <!-- Course Id Field -->
            <div class="row">
            <!-- Level Id Field -->
            <div class="form-group col-sm-6">
                <select name="class_id" id="class_id" class="form-control">
                    <option value="">Select Class</option>
                    @foreach ($class as $cla)
                        
                        <option value="{{$cla->class_id}}">{{$cla->class_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-sm-6">
                <select name="course_id" id="course_id" class="form-control">
                    <option value="">Select Course</option>
                    @foreach ($course as $cour)
                        
                    <option value="{{$cour->course_id}}">{{$cour->course_name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Level Id Field -->
            <div class="form-group col-sm-6">
                <select name="level_id" id="level_id" class="form-control">
                    <option value="">Select level</option>
                    {{-- @foreach ($level as $lev)
                    <option value="{{$lev->level_id}}">{{$lev->level}}</option>
                    @endforeach --}}
                    
                </select>
            </div>

            <!-- Shift Id Field -->
            <div class="form-group col-sm-6">
                <select name="shift_id" id="shift_id" class="form-control">
                    <option value="">Select Shift</option>
                    @foreach ($shift as $shif)
                        
                    <option value="{{$shif->shift_id}}">{{$shif->shift}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Classroom Id Field -->
            <div class="form-group col-sm-6">
                <select name="classroom_id" id="classroom_id" class="form-control">
                    <option value="">Select Classroom</option>
                    @foreach ($classroom as $room)
                        
                    <option value="{{$room->classroom_id}}">{{$room->classroom_name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Batch Id Field -->
            <div class="form-group col-sm-6">
                <select name="batch_id" id="batch_id" class="form-control">
                    <option value="">Select Batch</option>
                    @foreach ($batch as $ba)
                        
                    <option value="{{$ba->batch_id}}">{{$ba->batch}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Day Id Field -->
            <div class="form-group col-sm-6">
                <select name="day_id" id="day_id" class="form-control">
                    <option value="">Select Day</option>
                    @foreach ($day as $da)
                        
                    <option value="{{$da->day_id}}">{{$da->name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Time Id Field -->
            <div class="form-group col-sm-6">
                <select name="time_id" id="time_id" class="form-control">
                    <option value="">Select Time</option>
                    @foreach ($time as $tim)
                        
                    <option value="{{$tim->time_id}}">{{$tim->time}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Semester Id Field -->
            <div class="form-group col-sm-6">
                <select name="semester_id" id="semester_id" class="form-control">
                    <option value="">Select Semester</option>
                    @foreach ($semester as $sem)
                        
                    <option value="{{$sem->semester_id}}">{{$sem->semester_name}}</option>
                    
                    @endforeach
                </select>
            </div>

            <!-- Start Time Field -->
            <div class="form-group col-sm-6">
                <input type="text" name="start_time" id="start_time" class="form-control" placeholder="Start Date">
               
            </div>
            </div>

            
            <!-- End Time Field -->
            <div class="form-group col-sm-6" style="left: -13px;">
                <input type="text" name="end_time" id="end_time" class="form-control" placeholder="End Date">
                
            </div>


            <!-- Status Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('status', 'Status:') !!}
                <label class="checkbox-inline razib">
                    {!! Form::checkbox('status', '1', null) !!}
                </label>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
            {!! Form::submit('Create Scheduling', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
</div>


@push('scripts')
    <script>
        $('#start_time').datetimepicker({
            format:'YYYY-MM-DD',
            useCurrent:false
        });

        $('#end_time').datetimepicker({
                format:'YYYY-MM-DD',
                useCurrent:false
            });

        // we will write our code ok


        $('#course_id').on('change', function(e){
    
            var course_id = $(this).val();
            var level = $('#level_id');
            $(level).empty();
                $.get("{{route('dynamicLevel')}}",{course_id:course_id}, function(data){

                    $.each(data, function(index, l){
                        $(level).append($('<option/>',{
                            value: l.level_id,
                            text: l.level
                        }));
                    });
                });
        });



    </script>
@endpush