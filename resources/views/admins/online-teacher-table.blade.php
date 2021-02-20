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
            <th style="text-align: center">User</th>
            <th style="text-align: center">Ip Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach (App\Models\User::all() as $key => $teachers)
            
                <tr>
                <td>{{$key+1}}</td>

                @if ($teachers->isOnline())
                <td><a href="#"><i class="fa fa-circle text-success"></i> Online</a></td>
                @else 
                <td><a href="#"><i class="fa fa-circle text-danger"></i> Offline</a></td>
                    
                 @endif  

                <td>{{$teachers->name}}</td>
                <td style="text-align: center">{{date('H:i:s', strtotime($teachers->created_at))}}</td>
                </tr>
            
                
        @endforeach
    </tbody>
</table>








</div>



