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
          align-items: center;
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
        .details{
            width: 25rem;
            margin: 4%;
            box-shadow: 0 0.1rem 2rem 0 rgba(2, 250, 5, 0.1) !important ;
           
        }
        .heading{
           text-align:center;

        }
       
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="heading pb-4">
                    <h3>Product Details</h3>
                </div>
                <div class="card mx-auto" style="width: 25rem;">
                   
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
              
                            <div class="carousel-item active">
                            <img src="{{asset('uploads/products/'.$items->picture1)}}" class="d-block w-100 card-img-top" alt="plant1">
                            </div>
                            <div class="carousel-item">
                                
                            <img src="{{asset('uploads/products/'.$items->picture2)}}" class="d-block w-100 card-img-top" alt="plant2">
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
                            <p class="card-text">Price: {{$items->price}} LKR</p>
                            <p class="card-text">Product_Name: {{$items->name}}</p>
                        </div>
                        <div class="card">
                            <div class="details">
                                  <h5>Description</h5>
                                  <p >{{$items->detail}} </p>
                             </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>