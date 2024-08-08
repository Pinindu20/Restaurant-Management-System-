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


    <div style="position: relative; top: 60px; right: -150px ">

        <div align="center">

            <h1 style="color:black"> Upload Food </h1>
        </div>

        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title" class="text-dark">Title</label>
                <input type="text" style="width: 40%" class="form-control text-primary" id="title" name="title" placeholder="Write a title" required>
            </div>

            <div class="form-group">
                <label for="price" class="text-dark">Price</label>
                <input type="number" style="width: 40%" class="form-control text-primary" id="price" name="price" placeholder="Price" required>
            </div>

            <div class="form-group">
                <label for="image" style="color: black;">Image</label><br>
                <input type="file" id="image" name="image" style="display:none" required>
                <label for="image" style="display: inline-block; color: white; background-color: #007bff; border: 1px solid #17a2b8; padding: 6px 12px; cursor: pointer; border-radius: 4px;">Choose file</label>
            </div>

            <div class="form-group">
                <label for="description" class="text-dark">Description</label>
                <input type="text" style="width: 40%" class="form-control text-primary" id="description" name="description" placeholder="Description" required>
            </div>

            <div class="form-group">
                <input type="submit" style="width:40%" class="btn btn-primary" value="Save">
            </div>

        </form>

        <div>
            <table>
                <tr style="color: black">
                    <th style="padding: 30px"> Food name </th>
                    <th style="padding: 30px"> Price </th>
                    <th style="padding: 30px"> Description </th>
                    <th style="padding: 30px"> Image </th>
                    <th style="padding: 30px"> Action </th>
                    <th style="padding: 30px"> Action2 </th>
                </tr>


                @foreach ($data as $data)
                <tr align="center"  style="color: black">

                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                </tr>
                @endforeach

            </table>
        </div>


    </div>

    </div>

    @include("admin.adminscript");

  </body>
</html>
