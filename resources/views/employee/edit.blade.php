<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <form action="/edit-emp" method="POST" enctype="multipart/form-data">
                 @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif

                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf
                <input type="hidden" name="id" value="{{$data['id']}}"><br>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" name="name" value="{{$data['name']}}">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$data['email']}}">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Gender</label>
                    <input type="text" class="form-control" name="gender" value="{{$data['gender']}}">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{$data['address']}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Mobile No</label>
                    <input type="text" class="form-control" name="mobile" value="{{$data['mobile']}}">
                </div>

                <div class="form-input">
                    <span><i class="fa fa-envelope-o"></i></span>
                    <input type="file" name="picture" placeholder="Photo" tabindex="10" value="{{old('picture')}}">

                  </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>