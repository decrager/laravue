<!DOCTYPE html>

<html lang="en">

<head>
    @include('template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        @include('template.navbar')
        @include('template.sidebar')
        
        <div class="content-wrapper">
            <div class="content">
                <router-view></router-view>
            </div>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
