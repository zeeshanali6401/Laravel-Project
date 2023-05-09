<!doctype html>
<html lang="en">
  <head>
    @include('layouts.header')
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <div style="float: right;">
    <form class="d-flex ms-auto" action="">
        <input type="search" name="search" class="form-control mb-2 placeholder="Search">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
   </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Address</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>P.Code</th>
                <th>Course</th>
                <th>Email</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $customers)
            <tr>
                <td>{{$customers->customer_id}}</td>
                <td>{{$customers->name}}</td>
                <td>{{$customers->fatherName}}</td>
                <td>{{$customers->state}}{{$customers->city}}</td>
                <td>{{$customers->address}}</td>

                <td>
                    @if ($customers->inlineRadioOptions == 'M')
                        Male                        
                    @elseif ($customers->inlineRadioOptions == 'F')
                        Female
                    @elseif ($customers->inlineRadioOptions == 'O')
                        Others
                    @endif
                </td>

                <td>{{$customers->dob}}</td>
                <td>{{$customers->postalCode}}</td>
                <td>{{$customers->course}}</td>
                <td>{{$customers->email}}</td>
                <td><a href="{{route('customer.delete', ['id' => $customers->customer_id])}}"><button class="btn btn-danger" onclick="return confirm('Are your sure to delete {{$customers->name}} record ?')">Delete</button></a></td>
                <td><a href="{{route('customer.edit', ['id' => $customers->customer_id])}}"><button class="btn btn-primary">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>  
    <div class="" style="margin: auto; width: 45%">
        {{ $customer->links() }}
    </div>
  </body>
</html>