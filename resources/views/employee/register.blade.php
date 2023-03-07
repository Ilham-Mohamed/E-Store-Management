<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Custom Authentication</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <h4>Employee Registration</h4><hr>
                <form action="{{route('register-employee')}}" method="POST" enctype="multipart/form-data">
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif

                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf
                   <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
                      <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>

                   <div class="form-group">
                     <label for="email">Email</label>
                     <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('email')}}">
                     <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="form-input">
                        <span><i class="fa fa-envelope-o"></i></span>
                        <select name="gender">
                            <option >Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                     <label for="name">Address</label>
                     <input type="text" class="form-control" placeholder="Address" name="address" value="{{old('address')}}">
                      <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                     <label for="name">Mobile No</label>
                     <input type="text" class="form-control" placeholder="Enter Mobile No" name="mobile" value="{{old('mobile')}}">
                      <span class="text-danger">@error('mobile') {{$message}} @enderror</span>
                    </div>

                    <div class="form-input">
                    <span><i class="fa fa-envelope-o"></i></span>
                    <input type="file" name="picture" placeholder="Photo " tabindex="10" value="{{old('picture')}}" required>

                    </div>

                   <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                     <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <input type="hidden" class="form-control"  name="role" value="employee">
                   
                   
                   <div class="form-group">
                     <button class="btn btn-block btn-primary" type="submit">register</button>
                   </div>
                    
                   
                </form>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>