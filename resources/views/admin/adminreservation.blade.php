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


    {{-- <div class="col-md-12" style="position: relative; top:70px; right:-150px">

        <div align="center" style="right: 20px">

            <h1 style="color:black;"> Reservation </h1>
        </div>

        <table bgcolor="gray" border="1px" style=" margin-right: 400px">

            <tr>
                <th style="padding: 20px;"> table_id </th>
                <th style="padding: 20px;"> customer name </th>
                <th style="padding: 20px;"> email </th>
                <th style="padding: 20px;"> phone </th>
                <th style="padding: 20px;"> date </th>
                <th style="padding: 20px;"> check-in time </th>
                <th style="padding: 20px;"> check-out time </th>
                <th style="padding: 20px;"> Status </th>
                <th style="padding: 20px;"> Table title </th>
                <th style="padding: 20px;"> Price </th>
                <th style="padding: 20px;"> image </th>
                <th style="padding: 20px;"> Delete </th>
                <th style="padding: 20px;"> Status update </th>



            </tr>

            @foreach ($data as $data)

            <tr align="center">
                <td> {{$data->table_id}} </td>
                <td> {{$data->name}} </td>
                <td> {{$data->email}} </td>
                <td> {{$data->phone}} </td>
                <td> {{$data->date}} </td>
                <td> {{$data->check_in}} </td>
                <td> {{$data->check_out}} </td>

                <td>

                    @if ($data->status == 'approve')

                    <span style="color: skyblue;">Approved</span>

                    @endif

                    @if ($data->status == 'reject')

                    <span style="color: red;">Rejected</span>

                    @endif

                    @if ($data->status == 'waiting')

                    <span style="color: yellow;">waiting</span>

                    @endif

                </td>



                <td>{{$data->table->table_title}}</td>
                <td> {{$data->table->price}} </td>
                <td>
                    <img src="/table/{{$data->table->image}}" alt="">
                </td>
                <td>
                  <a onclick="return confirm('Are you sure to delete this');" class="btn btn-danger" href="{{url('delete_reservation',$data->id)}}">Delete</a>
                </td>

                <td>
                    <span style="padding-bottom: 10px">
                        <a class="btn btn-success" href="{{url('approve_book',$data->id)}}">Approve</a>
                    </span>
                    <a class="btn btn-warning" href="{{url('reject_book',$data->id)}}">Rejected</a>
                </td>

            </tr>

            @endforeach

        </table>
    </div> --}}






    <div class="container-fluid" style="margin-top: 70px;">
        <div class="text-center mb-4" style="position: relative; right: 20px;">
            <h1 style="color: black;">Reservation</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped" style="background-color: gray; border: 1px solid black; width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th style="padding: 20px; color:aliceblue;">Table ID</th>
                        <th style="padding: 20px; color:aliceblue;">Customer Name</th>
                        <th style="padding: 20px; color:aliceblue;">Email</th>
                        <th style="padding: 20px; color:aliceblue;">Phone</th>
                        <th style="padding: 20px; color:aliceblue;">Date</th>
                        <th style="padding: 20px; color:aliceblue;">Check-in Time</th>
                        <th style="padding: 20px; color:aliceblue;">Check-out Time</th>
                        <th style="padding: 20px; color:aliceblue;">Status</th>
                        <th style="padding: 20px; color:aliceblue;">Table Title</th>
                        <th style="padding: 20px; color:aliceblue;">Price</th>
                        <th style="padding: 20px; color:aliceblue;">Image</th>
                        <th style="padding: 20px; color:aliceblue;">Delete</th>
                        <th style="padding: 20px; color:aliceblue;">Status Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr align="center">
                        <td style="padding: 20px;">{{$data->table_id}}</td>
                        <td style="padding: 20px;">{{$data->name}}</td>
                        <td style="padding: 20px;">{{$data->email}}</td>
                        <td style="padding: 20px;">{{$data->phone}}</td>
                        <td style="padding: 20px;">{{$data->date}}</td>
                        <td style="padding: 20px;">{{$data->check_in}}</td>
                        <td style="padding: 20px;">{{$data->check_out}}</td>
                        <td style="padding: 20px;">
                            @if ($data->status == 'approve')
                                <span style="color: skyblue;">Approved</span>
                            @elseif ($data->status == 'reject')
                                <span style="color: red;">Rejected</span>
                            @elseif ($data->status == 'waiting')
                                <span style="color: yellow;">Waiting</span>
                            @endif
                        </td>
                        <td style="padding: 20px;">{{$data->table->table_title}}</td>
                        <td style="padding: 20px;">{{$data->table->price}}</td>
                        <td style="padding: 20px;">
                            <img src="/table/{{$data->table->image}}" alt="" style="width: 100%">
                        </td>
                        <td style="padding: 20px;">
                            <a onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger" href="{{url('delete_reservation',$data->id)}}">Delete</a>
                        </td>
                        <td style="padding: 20px;">
                            <a class="btn btn-success mb-2" href="{{url('approve_book',$data->id)}}" style="display: block; margin-bottom: 10px;">Approve</a>
                            <a class="btn btn-warning" href="{{url('reject_book',$data->id)}}" style="display: block;">Reject</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>





    </div>

    @include("admin.adminscript");n.adminscript");

  </body>
</html>
