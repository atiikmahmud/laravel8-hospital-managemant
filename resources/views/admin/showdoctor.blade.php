<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 

    @include('admin.css')

    <style type="text/css">
      table{
        padding-top:100px;
      }
      th{
        padding:15px;
        background-color: black;
        text-align: center;
      }
      .value{
        text-align: center;
        background-color: skyblue;
        padding:15px;
      }



    </style>
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top: 50px;">

          <table align="center">
          	<tr>
          		<th>Doctor Name</th>
          		<th>Phone No.</th>
          		<th>Speciality</th>
          		<th>Room No.</th>
          		<th>Image</th>
          		<th>Update</th>
          		<th>Delete</th>
          	</tr>


          	@foreach($data as $doctor)

          	<tr class="value">
          		<td style="padding: 10px; color: black;">{{$doctor->name}}</td>
          		<td style="padding: 10px; color: black;">{{$doctor->phone}}</td>
          		<td style="padding: 10px; color: black;">{{$doctor->speciality}}</td>
          		<td style="padding: 10px; color: black;">{{$doctor->speciality}}</td>
          		<td style="padding: 10px; color: black;"><img src="doctorimage/{{$doctor->image}}" height="60px" width="60px"></td>
          		<td style="padding: 10px; color: black;"><a href="{{url('updatedoctor',$doctor->id)}}" class="btn btn-primary" onclick="return confirm('are you sure to edit this doctor?')">Update</a></td>

          		<td style="padding: 10px; color: black;"><a href="{{url('deletedoctor',$doctor->id)}}" class="btn btn-danger" onclick="return confirm('are you sure to delete this doctor?')">Deteted</a></td>
          		
          	</tr>
          	@endforeach

          </table>
         
        </div>
      </div>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
