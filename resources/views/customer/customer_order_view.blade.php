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
    <style>
            .card{
          overflow: hidden;
          border: 0 !important;
          border-radius: 20px !important;
          box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1) ;
          font-weight: bold;
          
        }
        
        </style>
  </head>
  <body>
    <div class="container">
  
            @foreach ($items as $item)
            <div class="row">
            <div class="col-lg-3 col-md-3 col-s-3">
                <div class="card" style="width: 12rem;">
                    <img src="{{$item->picture}}" alt="picture" >
                </div>
                <div class="p-4">

                </div>
                </div>
                <div class="col-lg-4 col-md-3 col-s-3">
                            <h6>Product Name : {{$item->productname}}</h6>
                            <h6>Product Details : {{$item->detail}}</h6>
                            <h6>Price : {{$item->price}} LKR</h6>
                            
                </div>

                <div class="col-lg-3 col-md-3 col-s-3">
                <h6 style="color:darkgoldenrod;">Delivery Person : {{$item->name}}</h6>
                                @if ($item->delivery == 'delivered')
                                 <h5 style="color: green;">Delivered</h5>
                                 @else
                                 @if ($item->delivery == 'cancelled')
                                 <h5 style="color: red;">Cancelled</h5>
                                 @else
                                 <form action="place-status" method="POST">
                                 @csrf  
                                 <input type="hidden" value="cancelled" name="btn">    
                                 <input type="hidden" value="{{$item->id}}" name="orderid">                           
                                 <button type="submit" class="btn btn-danger">Cancel Order</button>                          
                                 </form>
                                 @endif
                                 @endif
                </div>
                  
        </div>
            @endforeach           
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

            </div>
        </div>
    </div>
</x-app-layout>