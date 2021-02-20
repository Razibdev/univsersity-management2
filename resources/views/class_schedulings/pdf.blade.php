<style>
    .names{
        color:red;
        font-family: 'Times New Roman', Times, serif;
        font-display: bold;
        font-size: large;
    }

    table{
        border: 1px solid;
    }
    .vl{
        border-left: 6px solid green;
        height: 500px;
        position: absolute;
        left: 50%;
        margin-left: -3px;
        top:0;
    }
    /* h6, h5{
        display: inline-block;
    } */
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
        <caption style="margin-top: 20px;">Class Schedule PDF</caption>
        <thead>
            <tr>
                <th>Class</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classSchedulinges as $classSchedulinge)
            <tr>
                <td style="text-align: center; border-right:1px solid; border-bottom:1px solid; border-top:1px solid; border-left:1px solid" class="col-md-3">
                    <span class="names">Class: </span> {{ $classSchedulinge->class_name }}
                </td>
                <div class="v"></div>
                <td style="text-align: center; border-right:1px solid; border-bottom:1px solid; border-top:1px solid; border-left:1px solid" class="col-md-9">
                    <span class="names">Level: </span> {{ $classSchedulinge->level }} |  
                    <span class="names">Batch: </span> {{ $classSchedulinge->batch }} | 
                    <span class="names">Day: </span> {{ $classSchedulinge->name }} | 
                    <span class="names">Shift: </span> {{ $classSchedulinge->shift }} | 
                    <span class="names">Time: </span> {{ $classSchedulinge->time }} | 
                    <span class="names">Semester: </span> {{ $classSchedulinge->semester_name }} | 
                    <span class="names">Start Date: </span> {{ $classSchedulinge->start_time }} | 
                    <span class="names">End Date: </span> {{ $classSchedulinge->end_time }} | 
                    <span class="names">Status: </span>@if($classSchedulinge->status ==0)
                    <span style="color: Green">Active</span>
                    @else 
                    <span style="color: red">Inactive</span>
                    @endif
                </td>
           
        </tr>
        @endforeach
        </tbody>
    </table>
    
</div>