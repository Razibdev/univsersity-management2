<div class="modal fade" id="btnShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style="width: 70%;" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: orange; color:white;">
          <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-user-o"></i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover" id="classAssignings-table">
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
                        <input type="hidden" name="show-id" id="show-id">
                        <td class="col-md-2"><b id="first_name"></b> <b id="last_name"></b></td>
                        <td class="col-md-2"><b id="semester_name"></b></td>
                        <td class="col-md-3"><b id="course_name"></b></td>
                        <td>
                            <b id="level"></b> | <b id="time"></b> | <b id="name"></b> | <b id="class_name"></b> | <b id="shift"></b> | <b id="batch"></b> | <b id="classroom_name"></b> | <b id="show_created_at"></b>
                        </td>
                    </tbody>
                </table>
                {{ $classAssignings->links() }}
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>



@push('scripts')
    <script>
        $(document).ready(function(){
            $(document).on('click', '.show-modal', function(){
                $('.modal-title').text('Teacher Class Assignings Details');
                $('.form-horizontal').show();

                $('#show-id').text($(this).data('id'));
                $('#first_name').text($(this).data('fname'));
                $('#last_name').text($(this).data('lname'));
                $('#semester_name').text($(this).data('semester_name'));
                $('#level').text($(this).data('level'));
                $('#shift').text($(this).data('shift'));
                $('#classroom_name').text($(this).data('classroom_name'));
                $('#batch').text($(this).data('batch'));
                $('#time').text($(this).data('time'));
                $('#course_name').text($(this).data('course_name'));
                $('#name').text($(this).data('name'));
                $('#class_name').text($(this).data('class_name'));
                $('#show_created_at').text($(this).data('created_at'));
                $('#btnShow').modal('show');
            });
        });
    </script>
@endpush