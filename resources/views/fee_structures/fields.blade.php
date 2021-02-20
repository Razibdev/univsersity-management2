<style>
    .input-icon{
        position: absolute;
        left: 3px;
        top: calc(60% - .5em);
    }
    input{
        padding-left: 17px;
    }

    .input-wrapper{
        position: relative;

    }
</style>

<div class="modal fade left" id="fee-structure-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog" style="width: 60%" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-registered" aria-hidden="true">Add New Fee</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">
                <!-- Semester Id Field -->
                <div class="form-group col-sm-4">

                    <select name="semester_id" id="semester_id" class="form-control">
                        <option value="">Select Semester</option>
                        @foreach ($semesters as $semester)
                    <option value="{{$semester->semester_id}}">{{$semester->semester_name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Course Id Field -->
                <div class="form-group col-sm-4">

                    <select name="course_id" id="course_id" class="form-control">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                    <option value="{{$course->course_id}}">{{$course->course_name}}</option>
                        @endforeach

                    </select>

                </div>

                <!-- Level Id Field -->
                <div class="form-group col-sm-4">

                    <select name="level_id" id="level_id" class="form-control">
                        <option value="">Select Level</option>
                    </select>
                </div>

                <!-- Admissionfee Field -->
                <div class="form-group col-sm-6">
                    <div class="input-wrapper">
                        {!! Form::text('admissionFee', null, ['class' => 'form-control', 'placeholder' => 'Enter Admission Fee', 'onkeyup' => 'NumbersOnly(event, this);', 'onfucus' => 'this.value=""', 'style' => 'text-align:right;']) !!}<i class="fa fa-money fa-lg input-icon"></i>
                        
                    </div>
                </div>

                <!-- Semesterfee Field -->
                <div class="form-group col-sm-6">
                    <div class="input-wrapper">
                        {!! Form::text('semesterFee', null, ['class' => 'form-control', 'placeholder' => 'Enter Semester Fee', 'onkeyup' => 'NumbersOnly(event, this);', 'onfucus' => 'this.value=""', 'style' => 'text-align:right;']) !!}
                        <i class="fa fa-money fa-lg input-icon"></i>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                {!! Form::submit('Create Fee', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
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

    function NumbersOnly(e, field){
        var val = field.value;
        var num = /^([0-9]+[\,||\.]?[0-9]?[0-9]?|[0-9]+)$/g;
    var number = /^([0-9]+[\,||\.]?[0-9]?[0-9]?|[0-9]+)/g;

        if(num.test(val)){

        }else{
            val = number.exec(val);

            if(val){
                field.value = val[0];            
                }else{
                    field.value ='';
                }
        }

    }
    </script>
@endpush
