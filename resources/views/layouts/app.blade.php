<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/lightbox.js') }}" defer></script>
    <script
        src="https://cdn.tiny.cloud/1/p7sn2ffanek16bxhnsjzzr66m2g4spad3g1ezo8jc50027dj/tinymce/5/tinymce.min.js"
        referrerpolicy="origin">
    </script>
    <script src="{{ asset('js/myscripts.js') }}" defer></script>
    <script>
        // tinymce.init({
        //     selector: 'textarea',
        //     height: 500,
        //     plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        //     toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
        //     toolbar_mode: 'floating',
        //     tinycomments_mode: 'embedded',
        //     tinycomments_author: 'Author name',
        // });

    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">

        @include('layouts.navi')

        <main class="py-0">

            <div class="jumbotron bg text-white">
                <div class="container">
                    <h1 class="display-3 font-weight-bold p-3">Forestry Ideas</h1>
                    <p class="lead p-3">Ecological Science and Forestry Ecology is the scientific study of organisms in
                        relation to the physical and biological environment.</p>

                        <p class="pl-3" ><small>ISSN 1314-3905 (Print)</small></p>
                        <p class="pl-3" ><small>ISSN 2603-2996 (Online)</small></p>

                    {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> --}}
                </div>
            </div>

            <div class="container">
                @yield('content')
            </div>

           @include('layouts.footer')

        </main>
    </div>
</body>

</html>
