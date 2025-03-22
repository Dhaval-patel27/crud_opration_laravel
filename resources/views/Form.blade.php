<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="POST" class="container" enctype="multipart/form-data">
      @csrf
      <h1>Register Form</h1>
      <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>    
        @endif
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>    
        @endif
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> 
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>    
        @endif
      </div>
      
      
      <div class="form-check">
        <input class="form-check-input"  name="gender" type="radio" value="Male" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="gender" type="radio" value="Female" name="flexRadioDefault" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
          Female <br>
          @if ($errors->has('gender'))
        <span class="text-danger">{{ $errors->first('gender') }}</span>    
        @endif
        </label>
        <div class="form-group">
          <label for="exampleInputImage">Upload Image</label>
          <input type="file" class="form-control" name="image" id="exampleInputImage" placeholder="">
        </div>
        @if ($errors->has('image'))
        <span class="text-danger">{{ $errors->first('image') }}</span>    
        @endif
        <br>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>