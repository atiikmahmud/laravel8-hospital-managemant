<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- partial -->
     <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top: 100px;">

        	<h1 class="text-center" style="font-size: 30px; padding: 20px" >Update Doctor Information</h1>

          @if(session()->has('message'))

        <div class="alert alert-success">
            
          <button type="button" class="close" data-dismiss="alert">
           
         </button>

          {{session()->get('message')}}

        </div>

        @endif

          <form action="{{url('update',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div style="padding: 15px;">
              <label>Doctor Name</label>
              <input type="text" name="name" value="{{$data->name}}" style="color:black;" placeholder="Write the name" required>
            </div>

            <div style="padding: 15px;">
              <label>Phone</label>
              <input type="number" name="phone" value="{{$data->phone}}" style="color:black;" placeholder="Write the number" required>
            </div>

            <div style="padding: 15px;">
              <label>Speciality</label>
              <select name="speciality" style="color:#6c757d; width: 220px" required>
                <option>{{$data->speciality}}</option>
                <option value="skin">skin</option>
                <option value="heart">heart</option>
                <option value="eye">eye</option>
                <option value="nose">nose</option>
              </select>
            </div>

            <div style="padding: 15px;">
              <label>Room No.</label>
              <input type="text" name="room" value="{{$data->room}}" style="color:black;" placeholder="Write the room number" required>
            </div>

            <div style="padding: 15px;">
              <label>Doctor old Image</label>
              <img src="doctorimage/{{$data->image}}" height="60px" width="60px"><br>
              <label>Doctor new Image</label>
              <input type="file" name="file">
            </div>

            <div style="padding: 15px;">
              <input type="submit" value="update" class="btn btn-success">
            </div>
            
          </form>          
        </div>
      </div>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

