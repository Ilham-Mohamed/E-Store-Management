<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
                  @endif

                  @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  @endif
                  @csrf

                 <div class="form-input">
                    <span><i class="fa fa-envelope-o"></i></span>
                    <input type="text" name="name" placeholder="Full Name" tabindex="10" value="{{old('name')}}" required>

                  </div>
                  

                  <div class="form-input">
                    <span><i class="fa fa-envelope-o"></i></span>
                    <input type="email" name="email" placeholder="Email Address" tabindex="10" value="{{old('email')}}" required>

                  </div>

                  <div class="form-input">
                  <span><i class="fa fa-envelope-o"></i></span>
                  <select name="gender">
                      <option >Gender</option>
                      <option value="m">Male</option>
                      <option value="f">Female</option>
                  </select>
                  </div>

                  <div class="form-input">
                    <span><i class="fa fa-envelope-o"></i></span>
                    <input type="text" name="address" placeholder="Address" tabindex="10" value="{{old('address')}}" required>

                  </div>

                  <div class="form-input">
                    <span><i class="fa fa-envelope-o"></i></span>
                    <input type="text" name="mobile" placeholder="Mobile Number" tabindex="10" value="{{old('mobile')}}" required>

                  </div>

                  <div class="form-input">
                    <span><i class="fa fa-envelope-o"></i></span>
                    <input type="file" name="picture" placeholder="Photo URL Link" tabindex="10" value="{{old('picture')}}" required>

                  </div>
                  

                  <div class="form-input">
                    <span><i class="fa fa-key"></i></span>
                    <input type="password" name="password" placeholder="Password" required>
                    
                  </div>

                  <input type="hidden" class="form-control"  name="role" value="customer">
                  
                  <div class="d-grid gap-2">
                    <div class="mb-3">
                      <button type="submit" class="btn btn-block text-uppercase">Sign Up</button>

                    </div>
                  </div>

                  <hr class="my-4">
                  <div class="text-center mb-2">
                    Do You have an account?
                    <a href="/" class="login-link">Login here</a>
                  </div>
           
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
