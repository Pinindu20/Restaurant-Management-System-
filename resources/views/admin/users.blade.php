
<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss");

  </head>

  <body>

    <div class="container-scroller">

  @include("admin.navbar");

  <div style="position: relative; top: 60px; right: -250px; text-align: center;">

    <div align="center" style="right: 20px">

        <h1 style="color:black"> Registered Users </h1>
    </div>


    <table style="margin: 0 auto; background-color: gray; border: 3px solid; text-align: center; width: 150%;">
      <tr>
          <th style="padding: 20px">Name</th>
          <th style="padding: 20px">Email</th>
          <th style="padding: 20px">Action</th>
      </tr>

      @foreach($data as $data)
      <tr>
          <td style="padding: 10px">{{$data->name}}</td>
          <td style="padding: 10px">{{$data->email}}</td>

          @if($data->usertype=="0")
          <td style="padding: 10px"><a href="{{url('/deleteuser',$data->id)}}" style="color: red;">Delete</a></td>
          @else
          <td><a>Not allowed</a></td>
          @endif
      </tr>
      @endforeach
    </table>

  </div>



  @include("admin.adminscript");

  </body>
</html>
    </body>
</html>
