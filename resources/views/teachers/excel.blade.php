<div class="modal fade left" id="import_excel_teacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLab1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLab1"><i class="fa fa-file-text-o" aria-hidden="true"> New Teacher Form</i></h5>
                <button class="close" type="button" data-dismiss="modal" aria-level="close"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <div class="modal-body">
            <form action="{{url('excel-import-teachers')}}" method="POST" enctype="multipart/form-data">@csrf

               {{ Form::file('file', null, ['class' => 'form-control', 'placeholder' => 'choose Excel file'])}}
                {{-- <input type="file" name="file" id="file" class="form-control" placeholder="Choose Excel File" style="border: none;"> --}}
            
            

            </div>

            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                {!! Form::submit('Import Excel', ['class' => 'btn btn-primary']) !!}
            </div>
        </form>
        </div>
    </div>
</div>