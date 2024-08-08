<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    @include("admin.admincss");

  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar");


    <div style="position: relative; top: 60px; right: -150px ">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div>
                <label style="color: black"> Title </label>
                <input style="color: blue" type="text" name="title" value="{{$data->title}}" required>
            </div>

            <div>
                <label style="color: black"> Price </label>
                <input style="color: blue" type="num" name="price"  value="{{$data->price}}" required>
            </div>


            <div>
                <label style="color: black"> Description </label>
                <input style="color: blue" type="text" name="description"  value="{{$data->description}}" required>
            </div>


            <div>
                <label style="color: black">old Image </label>
                <img height="200" width="200" src="/foodimage/{{$data->image}}">
            </div>

            <div>
                <label style="color: black">New Image </label>
                <input  style="color: black" type="file" name="image" required>
            </div>



            <div>

                <input style="color: black" type="submit" value="Save">
            </div>

        </form>

        <div>



    </div>

    @include("admin.adminscript");n.adminscript");

  </body>
</html>
