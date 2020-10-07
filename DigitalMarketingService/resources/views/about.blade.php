<head>
    <title>About</title>

    {{-- Plugin --}}
    <link rel="stylesheet" href="{{asset('/plugin/Bootstrap 4.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/plugin/Font Awesome 4.7.0/css/font-awesome.min.css')}}">
    <script src="{{asset('/plugin/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/plugin/Bootstrap 4.4.1/js/bootstrap.min.js')}}"></script>
</head>

<body>
    <div class="row h-100 w-100 m-0">
        <div class="col-1" style="background: #21222A;"></div>
        <div class="col" style="background: #DFD9D9;">
            
            
            {{-- Search and Header --}}
            <div class="row align-items-center mt-3">
                <h2>Hello {{ Auth::user()->username }}</h2>
    
                {{-- Header --}}
                <div class="col-3" style="text-align: center;">
                    <h4 class="m-0" style="font-size: 20pt; color: #7c7c7c;"><i class="fa fa-id-card mr-2" aria-hidden="true"></i>&nbsp;About</h4>
                </div>

                {{-- Search --}}
                <div class="col-7">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
                    </div>
                </div>
                <a href="/logout">Logout</a>            
            </div>
        </div>
    </div>
</body>
