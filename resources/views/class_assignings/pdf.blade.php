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
        <caption style="margin-top: 20px;">Class Assigned PDF</caption>
        <thead>
            <tr>
                <th>Teacher</th>
                <th>Semester</th>
                <th>Course</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classAssignings as $classAssigning)
            <tr class="border">

            <td class="col-md-3 pull">{{ $classAssigning->first_name }} {{ $classAssigning->last_name }}</td>
            <td class="col-md-3 pull">{{ $classAssigning->semester_name }}</td>
            <td class="col-md-6 pull">{{ $classAssigning->course_name }}</td>
            <td class="col-md-6 pull">
                <span style="color: red;">Level: </span> {{ $classAssigning->level }}
                <span style="color: red;">Day: </span> {{ $classAssigning->name }}
                <span style="color: red;">Shift: </span> {{ $classAssigning->shift }}
                <span style="color: red;">Classroom: </span> {{ $classAssigning->classroom_name }}
                
            </td>

            
        </tr>
        @endforeach
        </tbody>
    </table>
    
</div>