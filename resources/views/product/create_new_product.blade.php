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
            <h5>Add a New Product</h5>
            <form action="{{route('product-add')}}" method="POST" enctype="multipart/form-data">
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif

                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" name="name" >
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail</label>
                     <input type="text" class="form-control" name="detail">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                     <input type="text" class="form-control" name="price">
                </div>

                <div class="mb-3">
                    <label for="picture1" class="form-label">Picture 1</label>
                     <input type="file" class="form-control" name="picture1">
                </div>

                <div class="mb-3">
                    <label for="picture2" class="form-label">Picture 2</label>
                     <input type="file" class="form-control" name="picture2">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>