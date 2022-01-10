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
                    <tr  align="center" style="background-color: black;">
                        <th style="padding: 10px;">Customer Name</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Doctor Name</th>
                        <th style="padding: 10px;">Date</th>
                        <th style="padding: 10px;">Message</th>
                        <th style="padding: 10px;">Status</th>
                        <th style="padding: 10px;">Approved</th>
                        <th style="padding: 10px;">Canceled</th>
                        <th style="padding: 10px;">Send Mail</th>
                    </tr>
                    @foreach ($data as $appoint)
                        <tr align="center" style="background-color: skyblue;">
                            <td style="padding: 10px;color:black;">{{$appoint->name}}</td>
                            <td style="padding: 10px;color:black;">{{$appoint->email}}</td>
                            <td style="padding: 10px;color:black;">{{$appoint->phone}}</td>
                            <td style="padding: 10px;color:black;">{{$appoint->doctor}}</td>
                            <td style="padding: 10px;color:black;">{{$appoint->date}}</td>
                            <td style="padding: 10px;color:black;">{{$appoint->message}}</td>
                            <td style="padding: 10px;color:black;">{{$appoint->status}}</td>
                            <td style="padding: 10px;">
                                <a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approved</a>
                            </td>
                            <td style="padding: 10px;">
                                <a class="btn btn-danger" href="{{url('canceled', $appoint->id)}}">Canceled</a>
                            </td>
                            <td style="padding: 10px;">
                                <a class="btn btn-primary" href="{{url('emailview', $appoint->id)}}">Send Mail</a>
                            </td>
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