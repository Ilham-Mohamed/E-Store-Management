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

                    <title>Hello, world!</title>
                </head>
                <body>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="pb-4">
                                    <h4>ORDER DETAILS</h4>
                                </div>
                                
                                    <table class="table table-success table-striped">
                                        <thead>
                                            <tr>
                                                
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Detail</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Customer Address</th>
                                                <th scope="col">Customer Mobile No</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Delivered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                            <tr>
                                                
                                                <td>{{$item->productname}}</td>
                                                <td>{{$item->detail}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{$item->customername}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>{{$item->mobile}}</td>
                                                <td>{{$item->created_at}}</td>
                                                
                                                @if ($item->delivery == 'delivered')
                                                <td style="color: green;">Delivered</td>
                                                @else
                                                @if ($item->delivery == 'cancelled')
                                                <td style="color: red;">Cancelled</td>
                                                @else
                                                <td>
                                                <form action="place-status" method="post">
                                                @csrf
                                                <input type="hidden" name="orderid" value="{{$item->id}}">
                                                <input type="hidden" name="btn" value="delivered">
                                                <button type="submit" class="btn btn-success">Yes</button>
                                                </form>
                                                </td>
                                                @endif
                                                
                                                @endif
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
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