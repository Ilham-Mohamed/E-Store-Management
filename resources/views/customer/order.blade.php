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
        padding-top: 10%;
      }
      .card{
        padding: 5%;
      }

      body{
          height: 100nv;
         
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          padding: 70px;
        }
        .orderdet{
          overflow: hidden;
          border: 0 !important;
          border-radius: 20px !important;
          box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1) ;
    
        }
        .details{
            width: 25rem;
            margin: 4%;
            box-shadow: 0 0.1rem 2rem 0 rgba(2, 250, 5, 0.1) !important ;
           
        }
        .heading{
           text-align:center;

        }
        .det{
          overflow: hidden;
          border: 0 !important;
          border-radius: 20px !important;
          box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1) ;
          font-weight: bold;
          
        }
       
    </style>
  </head>
  <body>
      

      <div class="container ">
          <div class="row">
              
                <div class="card col-4 orderdet">
                <form action="{{route('place-order')}}" method="POST">
                        @csrf
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif

                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        
                        @foreach ($product as $p)
                        <label class="input-group-text mb-4">Product Name : {{$p->name}}</label>
                        @endforeach

                        <div class="input-group mb-4">
                            <label class="input-group-text" for="inputGroupSelect01">Employee Name</label>
                            <select class="form-select" name="employeeid">
                                <option selected>Choose...</option>
                                @foreach ($employees as $emp)
                                <option name="employeeid" value="{{$emp->id}}">{{$emp->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        @foreach ($product as $p)
                        <label class="input-group-text mb-4">Price : {{$p->price}}</label>
                        @endforeach

                        @foreach ($product as $p)
                        <input type="hidden" name="productname" value="{{$p->name}}">
                        <input type="hidden" name="detail" value="{{$p->detail}}">
                        <input type="hidden" name="price" value="{{$p->price}}">
                        <input type="hidden" name="picture" value="{{asset('uploads/products/'.$p->picture1)}}">
                        @endforeach
                        <button type="submit" class="btn btn-success">Order</button>
                           
                    </form>
                </div>
                <div class="col-8">
                <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="heading pb-4">
                        <h3>Product Details</h3>
                    </div>
                    <div class="card mx-auto det" style="width: 25rem;">
                    @foreach ($product as $p)
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                  
                                <div class="carousel-item active">
                                <img src="{{asset('uploads/products/'.$p->picture1)}}" class="d-block w-100 card-img-top" alt="plant1">
                                </div>
                                <div class="carousel-item">
                                    
                                <img src="{{asset('uploads/products/'.$p->picture2)}}" class="d-block w-100 card-img-top" alt="plant2">
                                </div>
                                
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Price: {{$p->price}} LKR</p>
                                <p class="card-text">Product_Name: {{$p->name}}</p>
                            </div>
                            <div class="card">
                                <div class="details">
                                      <h5>Description</h5>
                                      <p >{{$p->detail}} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach   
                    </div>

                </div>
            
                 </div>
            </div>
                    
          </div>
      </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>