<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Employees</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="pb-4">
            <a href="{{'registration-emp'}}" class="btn btn-success" >Enroll New Employee</a>
            </div>
       
        <table  class="table table-success table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Action</th>
                </tr>
            </thead>
            
              @foreach ($items as $item)
              <tbody>
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->mobile}}</td>
                  <td>
                  <div class="btn-group">
                    <a href="{{"show-emp/".$item->id}}" class="btn btn-success active" aria-current="page">Show</a>
                    <a href="{{"edit-emp/".$item->id}}" class="btn btn-primary">Edit</a>
                    <a href="{{"delete-emp/".$item->id}}" class="btn btn-danger">Delete</a>
                  </div>
                  </td>
                </tr>
                </tbody>
              @endforeach  
               
            
          </table>
        </div>
      </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

            </div>
        </div>
    </div>
</x-app-layout>