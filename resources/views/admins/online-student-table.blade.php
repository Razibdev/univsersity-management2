<style>
    input:read-only{
        border: none;
        border-color: transparent;
    }
</style>

<div class="table-responsive">
    <div class="panel">
        <div class="panel-body">
            <div id="wait">

            </div>
        </div>
    </div>


<table class="table table-striped table-bordered table-hover" id="online-student-table">
    <thead>
        <tr>
            <th>SN <sup>o</sup></th>
            <th style="text-align: center">Status</th>
            <th style="text-align: center">Student</th>
            <th style="text-align: center">Login Time</th>
            <th style="text-align: center">Ip Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach (App\Roll::join('admissions', 'admissions.student_id', '=', 'rolls.student_id')->get() as $key => $students)
            @if ($students->isonline == 1)
                <tr>
                <td>{{$key+1}}</td>
                <td><a href="#"><i class="fa fa-circle text-success"></i> Online</a></td>
                <td>{{$students->first_name}} | {{$students->last_name}}</td>
                <td style="text-align: center">{{date('H:i:s', strtotime($students->created_at))}}</td>
                <td style="text-align: center">{{$students->ip_address}}</td>
                </tr>
            
                
            @endif  
        @endforeach
    </tbody>
</table>








</div>



