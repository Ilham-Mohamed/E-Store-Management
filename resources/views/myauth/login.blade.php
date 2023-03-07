<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
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
    
        }
        .img-left {
          background-color:#9ACD32 ;
          width: 30%;
        }
        .img-left:hover{
          background: #CCCC00;
        }

        .card-body{
          padding: 2rem;
        }
        .title{
          margin-bottom:2rem ;
        }
        .form-input{
          position: relative;
        }
        .form-input input{
          width: 100%;
          height: 45px;
          padding-left: 4px;
          margin-bottom: 20px;
          box-sizing: border-box;
          box-shadow: none;
          border: 1px solid #00000020;
          border-radius: 50px;
          outline: none;
          background: transparent;
        }

        .form-input span{
          position: absolute;
          top: 10px;
          padding-left: 15px;
          color: #007bff;
        }

        .form-input input::placeholder{
          color: black;
          padding-left: 0px;
        }
        .form-input input:focus, .form-input input:valid{
          border: 2px solid #454b69;
        }
        .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before{
          background-color: #007bff !important;
          border: 0px;
        }
        .form-box button[type="submit"]{
          margin-top: 10px;
          border: none;
          cursor: pointer;
          border-radius: 50px;
          background: #9ACD32;
          color: #fff;
          font-size: 90%;
          font-weight: bold;
          letter-spacing: .1rem;
          transition: 0.5s;
          padding: 12px;
          width: 50%;
          margin-left: 25%;

        }
        .form-box button[type="submit"]:hover{
          background: #0069d9;
        }
        .forget-link, .register-link{
          color: #0069d9;
          text-decoration: none;
          
        }

        .form-box .btn-social{
          color: white !important ;
          border: 0;
          font-weight: bold;
          
        }

        .form-box .btn-facebook{
          background: #4866a8;
        }
        .form-box .btn-google{
          background: #da3f34;
        }
        .form-box .btn-twitter{
          background: #33ccff;
        }

        .form-box .btn-facebook:hover{
          background: #3d578f;
        }
        .form-box .btn-google:hover{
          background: #bf3b31;
        }
        .form-box .btn-twitter{
          background: #2eb7e5;
        }

    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="row px-3">
        <div class="col-lg-10 col-xl-9 col-sm-12 card flex-row mx-auto px-0">
            <div class="img-left  d-lg-flex d-md-flex"></div>

            <div class="card-body col-sm-12 col-md-10">
              <h4 class="title text-center mt-4">
                Login into account
              </h4>
              <form class="form-box px-3"  action="{{ route('login') }}" method="POST">
                  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif
                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf
              
                  <div class="form-input">
                    <span><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="email" placeholder="Email Address" tabindex="10" required>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                  </div>

                  <div class="form-input">
                    <span><i class="fa fa-key"></i></span>
                    <input type="password" name="password" placeholder="Password" required>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  </div>

                  <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="cb1" name="">
                      <label class="custom-control-label" for="cb1">Remember me</label>
                    </div>
                  </div>
                  <div class="d-grid gap-2">
                    <div class="mb-3">
                      <button type="submit" class="btn btn-block text-uppercase">Login</button>

                    </div>
                  </div>

                  <div class="text-right pb-3">
                    <a href="#" class="forget-link">Forget Password?</a>
                  </div>
                  
                  <div class="row mb-3">
                    <div class="col-4">
                      <a href="#" class="btn btn-block btn-social btn-facebook">facebook</a>
                    </div>
                    <div class="col-4">
                      <a href="#" class="btn btn-block btn-social btn-google">google</a>
                    </div>
                    <div class="col-4">
                      <a href="#" class="btn btn-block btn-social btn-twitter">twitter</a>
                    </div>
                  </div>

                  <hr class="my-4">
                  <div class="text-center mb-2">
                    Don't have an account?
                    <a href="register" class="register-link">Register here</a>
                  </div>
              </form>
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