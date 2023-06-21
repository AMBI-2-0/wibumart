<head>
    <title>{{ $title }}</title>

    
</head>


<div class="d-flex row pe-5" style="height:100%">
    <div class="d-flex col-auto">
        @include('dashboard.sidebar')
    </div>
    <div class="col mt-3">
        <div class="container-fluid">
            <h2>{{ $title }}</h2>
            
            <hr>
            
            @yield('content')

        </div>
    </div>
</div>
