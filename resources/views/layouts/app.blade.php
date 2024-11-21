
@include('layouts.head')

<body>
    <div id="body">
        @include('layouts.nav-vertical')

        <div class="contenedor">
            @include('layouts.nav-horizontal')
            
            <div id="module_title">
                <h1>
                    @yield('module_title')
                </h1>
                
            </div>

            <div class="bodyAll">
                @yield('content')
            </div>
            

            
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.scripts')
</body>
