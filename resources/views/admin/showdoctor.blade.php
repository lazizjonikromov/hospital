<!DOCTYPE html>
<html lang="en">
  <head>
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
            <div align="center" style="padding-top: 100px;">
                <table>
                    <tr align="center" style="background-color: black;">
                        <th style="padding: 10px;">Doctor Name</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Speciality</th>
                        <th style="padding: 10px;">Room No</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Update</th>
                        <th style="padding: 10px;">Delete</th>
                    </tr>

                    @foreach ($data as $doctor)
                        <tr align="center" style="background-color: skyblue;">
                            <td style="padding: 10px;color:black;">{{$doctor->name}}</td>
                            <td style="padding: 10px;color:black;">{{$doctor->phone}}</td>
                            <td style="padding: 10px;color:black;">{{$doctor->speciality}}</td>
                            <td style="padding: 10px;color:black;">{{$doctor->room}}</td>
                            <td><img src="doctorimage/{{$doctor->image}}" height="100" width="100" alt=""></td>
                            <td style="padding: 10px;color:black;"><a href="{{url('updatedoctor', $doctor->id)}}" class="btn btn-primary">Update</a></td>
                            <td style="padding: 10px;color:black;"><a onclick="return confirm('Are you sure to delete this')" href="{{url('deletedoctor', $doctor->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>





    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>