
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
                          padding: 2%;
                      }
                      .card img{
                          text-align: center;
                          border-radius: 10%
                      }
                      .details{
                          overflow: hidden;
                        border: 0 !important;
                        border-radius: 20px !important;
                        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1) ;
                        font-weight: bold;
                        
                      }
                      .heading{
                          text-align: center;
                          padding-bottom: 10% !important;
                          padding-top: 5%;

                      }

                      
                  </style>
                  <title>Hello, world!</title>
                </head>
                <body>
                  <div class="container">
                      <div class="row">
                        
                              <div class="heading  text-uppercase">
                                  <h4>Details of User</h4>
                              </div>
                              <div class="card mx-auto pb-4 col-6" style="width: 20rem;">
                              @if(Auth::user()->role == "admin")
                              
                              <img src="{{$user->picture}}" class="card-img-top" alt="user picture1">
                              @else
                              <img src="{{asset('uploads/users/'.$user->picture)}}" class="card-img-top" alt="user picture">
                              @endif
                          </div>

                          <div class="details col-6">
                              <ul class="list-group list-group-flush m-4">
                                      <li class="list-group-item">Name: {{$user->name}}</li>
                                      <li class="list-group-item">Email: {{$user->email}}</li>
                                        <li class="list-group-item">Gender: {{$user->gender}}</li>
                                        <li class="list-group-item">Address: {{$user->address}}</li>
                                        <li class="list-group-item">Mobile Number: {{$user->mobile}}</li>
                              </ul>
                          </div>
                              
                          </div>
                      </div>
                  </div>

                
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                  
                </body>
              </html>

