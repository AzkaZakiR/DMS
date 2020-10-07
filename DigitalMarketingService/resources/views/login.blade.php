<head>
    <title>Login</title>

    {{-- Plugin --}} 
    <link rel="stylesheet" href="{{asset('/plugin/Bootstrap 4.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugin/Font Awesome 4.7.0/css/font-awesome.min.css')}}">
    <script src="{{asset('/plugin/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/plugin/Bootstrap 4.4.1/js/bootstrap.min.js')}}"></script>
</head>

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

{{--@if(session('error'))
    <div class="alert alert-error">
        {{session('error')}}
    </div>
@endif  --}}


<div class="row h-100 w-100 m-0" style="background: #36395a;">
    <div class="container my-auto" style="text-align: center;">
        <div class="row">
            {{-- Vector, Etc --}}
            <div class="col-8 rounded-left" style="background: #f6af09;">
                <div class="row h-100">
                    <div class="m-auto">
                        <img src="{{asset('/assets/default/3972337.png')}}" alt="" height="400em">
                    </div>
                </div>
            </div>

            {{--Login Forms--}}
            <div class="col rounded-right" style="background: #ffffff; padding: 3rem;">

                {{-- Header --}}
                <div class="mb-4">
                    <h4>WELCOME!</h4>
                    <h4>Let's do your change</h4>
                </div>
                <div class="mt-4">
                    {{-- <form action="/postlogin" method="POST"> --}}
                    <form action="{{ route ('login')}}" method="POST"> 
                        @csrf

                        {{-- Username --}}
                        <div class="form-row mb-4">
                            <div class="col-2 align-self-center">
                                <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                        </div>

                        {{-- Password--}}
                        <div class="form-row mb-4">
                            <div class="col-2 align-self-center">
                                <i class="fa fa-lock fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>

                        {{-- Remember Me --}}
                        <div class="form-group form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="rememberPassword">
                            <label class="form-check-label" for="rememberPassword">Remember Password</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px">Login</button>
                    </form>
                    
                    <a href="{{route('register')}}" class="btn btn-info btn-block mb-3" role="button">Register</a>
                    {{-- Google Sign In --}}
                    <a class="btn btn-danger btn-block mb-4" href="#" role="button"><i class="fa fa-google-plus fa-1x" aria-hidden="true"></i>&nbsp;Google</a>
                    <a href="#">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
