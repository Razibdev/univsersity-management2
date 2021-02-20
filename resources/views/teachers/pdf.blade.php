<style>
    .pull{
        text-align: center;
        border: 1px solid;

    }

    th{
        text-align: center;
    }
    table{
        align-content:center;
    }
</style>

<div class="table-responsive-lg">
    <h1 style="float: right; color:blue; margin-top:20px;">Academic Information System</h1>
    <h5><i>Name: </i> GB University</h5>
    <h5><i>Location: </i> Nolam, savar, Dhaka</h5>
    <h6><i>Email: </i> Gonobishawdalay@gmail.com</h6>
    <h6><i> Phone: </i> 01848178478</h6>

</div>

<div class="table-responsive">
    <table class="table table-striped table-hover" id="classAssignings-table">
        <caption style="margin-top: 20px;">All Teachers PDF</caption>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Country</th>
                <th>Passport</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr class="border">

            <td class="col-md-5 pull">{{ $teacher->first_name }} {{ $teacher->last_name }}</td>
            <td class="col-md-1 pull">@if ($teacher->gender == 0)
                Male
                @else 
                Female
            @endif</td>

            <td class="col-md-3 pull">{{ $teacher->email }}</td>
            <td class="col-md-3 pull">{{ $teacher->dob }}</td>
            <td class="col-md-3 pull">{{ $teacher->phone }}</td>
            <td class="col-md-3 pull">{{ $teacher->address }}</td>
            <td class="col-md-3 pull">{{ $teacher->nationality }}</td>
            <td class="col-md-3 pull">{{ $teacher->passport }}</td>
            <td class="col-md-3 pull">@if ($teacher->status == 0)
                Single
                @else 
                Married
            @endif</td>
            

            
        </tr>
        @endforeach
        </tbody>
    </table>
    
</div>