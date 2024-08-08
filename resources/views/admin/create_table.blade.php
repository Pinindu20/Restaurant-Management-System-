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

            <h1 style="color:black"> Create Table </h1>
        </div>




        <form action="{{url('add_table')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title" class="text-dark">Table title</label>
                <input type="text" style="width: 40%" class="form-control text-primary" id="title" name="title" placeholder="Write a title" required>
            </div>

            <div class="form-group">
                <label for="description" class="text-dark">Description</label>
                <textarea name="description" id="description" class="form-control text-primary" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="price" class="text-dark">Price</label>
                <input type="number" style="width: 40%" class="form-control text-primary" id="price" name="price" placeholder="Price" required>
            </div>

            <div class="form-group">
                <label for="type" class="text-dark">Table type</label>
                <select style="width: 40%" class="form-control" id="category" name="type" >
                    <option style="display: none" value="" selected disabled>Select a category</option>
                    <option  value="Couple">Couple (1-2 people)</option>
                    <option  value="Family">Family (5-6 people)</option>
                    <option  value="Large Group">Large Group (7+ people)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image" style="color: black;">Upload Image</label><br>
                <input type="file" id="image" name="image" style="display:none" required>
                <label for="image" style="display: inline-block; color: white; background-color: #007bff; border: 1px solid #17a2b8; padding: 6px 12px; cursor: pointer; border-radius: 4px;">Choose file</label>
            </div>


            <div class="form-group">
                <input type="submit" style="width:40%" class="btn btn-primary" value="Add table">
            </div>

        </form>


        <div class="col-md-12">
            <table style="margin-right: 150px;">
                <tr style="color: black">
                    <th style="padding: 20px"> Table Title </th>
                    <th style="padding: 30px"> Description </th>
                    <th style="padding: 20px"> price </th>
                    <th style="padding: 20px"> Table Type </th>
                    <th style="padding: 20px"> Image </th>
                    <th style="padding: 20px"> Action </th>
                    <th style="padding: 20px"> Action2 </th>

                </tr>

                @foreach ($data as $data)
                <tr align="center"  style="color: black">

                    <td>{{$data->table_title}}</td>
                    <td>{!! Str::limit($data->description,150) !!}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->table_type}}</td>
                    <td><img height="200" width="200" src="/table/{{$data->image}}"></td>
                    <td>
                        <a onclick="return confirm('Are you sure to delete this')" href="{{url('/table_delete',$data->id)}}">Delete</a>
                    </td>
                    <td><a href="{{url('/table_update',$data->id)}}">Update</a></td>

                </tr>
                @endforeach

            </table>
        </div>

    </div>
    </div>

    @include("admin.adminscript");n.adminscript");

  </body>
</html>
