<h1 style="font-weight: bold;"><i class="fa fa-money"></i>FEE STRUCTURE</h1>
<div class="table-responsive">
    <div class="panel-body">
        <div class="form-gorup col-md-4">
            <input type="text" name="" id="" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <select name="" id="" class="form-control">  
                <option value=""></option>
            </select>
        </div>

        <div class="form-group col-md-4">
            <select name="" id="" class="form-control">  
                <option value=""></option>
            </select>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Structure</h4>
        </div>
    </div>
    <table class="table" id="feeStructures-table">
        <thead>
            <tr>
                <th>Semester</th>
                <th>Course & Level</th>
                <th>Admissionfee</th>
                <th>Semesterfee</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($feeStructures as $feeStructures)
            <tr>
                <td>{{ $feeStructures->semester_name}}</td>
            <td>{{ $feeStructures->course_name }} | <span class="names"> Level: </span>{{ $feeStructures->level }}</td>
            <td><b>$ </b> {{ $feeStructures->admissionFee }}</td>
            <td><b>$ </b> {{ $feeStructures->semesterFee }}</td>
                <td>
                    {!! Form::open(['route' => ['feeStructures.destroy', $feeStructures->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('feeStructures.show', [$feeStructures->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('feeStructures.edit', [$feeStructures->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
