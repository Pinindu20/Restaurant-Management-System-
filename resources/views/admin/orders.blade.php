<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

    @include("admin.admincss");

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar");

    <div class="container" align="center">

      <h1 style="color:black"> Customer Orders </h1>

    <form action="{{url('/search')}}" method="GET">

      @csrf

      <input style="border-radius: 20px; width:50%" type="text" class="form-control text-primary" id="search" name="search" placeholder="Search" style="width:50%">

        <input style="margin-top: 10px;" type="submit" value="Search" class="btn btn-success">

    </form>
    <br>


    <table  bgcolor="black" align="center" >
        <tr>
            <td style="padding: 20px">Name</td>
            <td style="padding: 20px">Phone</td>
            <td style="padding: 20px">Address</td>
            <td style="padding: 20px">Foodname</td>
            <td style="padding: 20px">Price</td>
            <td style="padding: 20px">Quantity</td>
            <td style="padding: 20px">Total Price</td>

        </tr>

        @foreach ($data as $data)

        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->foodname}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->price * $data->quantity}}</td>

        </tr>
        @endforeach

    </table>

    </div>

    </div>

    @include("admin.adminscript");n.adminscript");

  </body>
</html>
