
<?php

include "../resources/views/templates/resourcesFile.php";
?>
<head>
<style>
.company_txt{
    text-align:center;
    font-size:250%;
    font-weight:bold;
    padding-left:3%;
}
.box{
    padding-left:3%;
    padding-right:3%;
}
.atag{
    font-size:130%;
    color:black;
}
</style>
</head>
<body style="margin:0;padding:0;">
<?php include "../resources/views/header.blade.php"; ?>
<div > <span class="company_txt">Company Name : {{$c_name}}</span>

<div style="float:left;padding-left:4%;padding-top:1%;padding-right:2%;border-right: 5px solid #9b2;">
<ul class="nav flex-column">
  <li class="active"><a  class="atag" data-toggle="pill" href="#home">Post Circular</a></li>
  <li><a class="atag"  data-toggle="pill" href="{{Session::get('host_name')}}">Applicants List</a></li>
  <li><a  class="atag" data-toggle="pill" href="#menu2"></a></li>
</ul>
</div><br>


</div>
<div style="float:;padding-left:20%">
<div class="tab-content" >
  <div id="home" class="tab-pane fade in active">
    <h3>Create a job circular</h3>
    <form method="post" enctype="multipart/form-data" action="/create_circular" class="form-horizontal col-sm-5"  >
        <input type="text" class="form-control" name="job_title" placeholder="Job Title"><br>
        <input type="text" class="form-control" name="salary" placeholder="Salary"><br>
        <textarea  rows="4" cols="50" class="form-control" name="job_description" placeholder="Job Description"></textarea><br>
        <textarea  rows="4" cols="50" class="form-control" name="location" placeholder="Location"></textarea><br>
        
        <input type="text" class="form-control" name="country" placeholder="Country"><br>
        <input type="submit" value="Post" class="btn btn-success" style="width:100%"><br>
    </form>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>
</div>
<div style="float:right;padding-right:4%;">
    <table class="table table-striped">
        <tr>
        <th>Job Title</th>
        <th>Deadline</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
@foreach($circulars as $dt)
        <tr>
            <td>{{$dt->job_title}}</td>
            <td>{{$dt->deadline}} </td>
        <tr>
@endforeach
    </table>
</div>
</div>

</body>