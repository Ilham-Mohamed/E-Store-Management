

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         body{
          height: 100nv;
          display: flex;
          flex-direction: column;
          /* align-items: center; */
          justify-content: center;
          padding: 70px;
        }
        .card{
          overflow: hidden;
          border: 0 !important;
          border-radius: 20px !important;
          box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1) ;
          font-weight: bold;
          
        }
        .btn{
           margin-left: 30%;
           
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <x-customer_navbar/>
        <div class="row pt-4">
           
            
        
                    @foreach ($items as $item)
                    <div class="col-4 pb-3">
                        <div class="card  pb-3" style="width: 18rem;">
                            <img src="{{asset('uploads/products/'.$item->picture1)}}" class="d-block w-100 card-img-top" class="card-img-top" alt="product picture">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text"> {{$item->price}} LKR</p>
                                
                                <a href="{{"place-order/".$item['id']}}" class="btn btn-success">Place Order</a>
                            </div>
                    
                        </div>
                    </div>
                    @endforeach
                    
           
        </div>   
                
        
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>





 