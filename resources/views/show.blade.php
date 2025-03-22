<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1>Fetch Data</h1>
        <table class="table">
            <thead class="container bg-dark text-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="container bg-info text-light">
                @foreach ($customer as $cust)
                <tr>
                    <td scope="row">{{ $cust->id }}</td>
                    <td>{{ $cust->name }}</td>
                    <td>{{ $cust->email }}</td>
                    <td>{{ $cust->password }}</td>
                    <td>{{ $cust->gender }}</td>
                    <td>
                      <img src="upload/{{ $cust->image }}" class="rounded-circle" width="100" height="100">
                    </td>
                    <td><a href="{{ url('/edit', $cust) }}" class="btn btn-primary btn-sm">Update</a></td>
                    <td><a href="{{ url('/delete', $cust) }}" class="btn btn-danger btn-sm">Delete</a></td>
                    
                    
                </tr>    
                @endforeach
                
                {{-- check for 1 data --}}
                {{-- <tr>
                    <td scope="row">{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->password }}</td>
                    <td>{{ $customer->gender }}</td>
                    <td>{{ $customer->image }}</td>
                    
                </tr> --}}
                
                
            </tbody>
        </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>