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

        <div align="center">

            <h1 style="color:black"> Update Table </h1>
        </div>


        {{-- <div style="width: 100%"> --}}

        <form style="width: 100%" action="{{url('/edit_table',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title" class="text-dark">Table title</label>
                <input type="text" value="{{$data->table_title}}" style="width: 40%" class="form-control text-primary" id="title" name="title" placeholder="Write a title" required>
            </div>

            <div class="form-group">
                <label for="description" class="text-dark">Description</label>
                <textarea value="{{$data->description}}" name="description" id="description" class="form-control text-primary" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="price" class="text-dark">Price</label>
                <input value="{{$data->price}}" type="number" style="width: 40%" class="form-control text-primary" id="price" name="price" placeholder="Price" required>
            </div>

            <div class="form-group">
                <label for="type" class="text-dark">Table type</label>
                <select style="width: 40%" class="form-control" id="category" name="type" >
                    <option selected value="{{$data->table_type}}">{{$data->table_type}}</option>
                    <option  value="Couple">Couple (1-2 people)</option>
                    <option  value="Family">Family (5-6 people)</option>
                    <option  value="Large Group">Large Group (7+ people)</option>
                </select>
            </div>

            <div>
                <label style="color: black">old Image </label>
                <img height="200" width="200" src="/table/{{$data->image}}">
            </div>

            <div class="form-group">
                <label for="image" style="color: black;">Upload Image</label><br>
                <input type="file" id="image" name="image" style="display:none" required>
                <label for="image" style="display: inline-block; color: white; background-color: #007bff; border: 1px solid #17a2b8; padding: 6px 12px; cursor: pointer; border-radius: 4px;">Choose file</label>
            </div>


            <div class="form-group">
                <input type="submit" style="width:40%" class="btn btn-primary" value="Update table">
            </div>

        </form>

        </div>

    </div>
    {{-- </div> --}}

    @include("admin.adminscript");n.adminscript");

  </body>
</html>

