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
          		<th>Customer Name</th>
          		<th>Email</th>
          		<th>Phone No.</th>
          		<th>Doctor</th>
          		<th>Date</th>
          		<th>Message</th>
          		<th>Status</th>
          		<th>Appointment</th>
          		<th>Action</th>
          	</tr>


          	@foreach($data as $appoint)

          	<tr class="value">
          		<td style="padding: 10px; color: black;">{{$appoint->name}}</td>
          		<td style="padding: 10px; color: black;">{{$appoint->email}}</td>
          		<td style="padding: 10px; color: black;">{{$appoint->phone}}</td>
          		<td style="padding: 10px; color: black;">{{$appoint->doctor}}</td>
          		<td style="padding: 10px; color: black;">{{$appoint->date}}</td>
          		<td style="padding: 10px; color: black;">{{$appoint->message}}</td>
          		<td style="padding: 10px; color: black;">{{$appoint->status}}</td>
          		<td style="padding: 10px; color: black;"><a class="btn btn-success" href="{{url('approve',$appoint->id)}}">Approved</a></td>
          		<td style="padding: 10px; color: black;"><a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Cancel</a></td>

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
