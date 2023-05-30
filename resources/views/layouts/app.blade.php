
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">


            <div class="row pt-2" >
                <div class="col-md-6">
                    <p>Welcome <b>{{ Auth::user()->name }}</b>
                </div>

                <div class="col-md-6"  >

                    <div class="float-end">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                                   onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>


                </div>
            </div>

            <hr>



        <div class="row">
            <div class="col-md-2">

                   <a href="{{route('posts.index')}}">Dashboard</a> <br />
                   <a href="{{route('posts.create')}}">Create Post</a>  <br />
                   <a href="{{route('posts.feed')}}">Feed</a>  <br />
                   <a href="{{route('users.people')}}">People</a>  <br />

                   @yield('sidebar')
            </div>

            <div class="col-md-10">
                @yield('content')
            </div>

        </div>
    </div>





    <script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
























{{--<html>--}}
{{--<head>--}}
{{--    <title>App Name - @yield('title')</title>--}}

{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}

{{--<div class="container">--}}
{{--    <div class="row pt-2" >--}}
{{--        <div class="col-md-6">--}}
{{--            <p>Welcome <b>{{ Auth::user()->name }}</b>--}}
{{--        </div>--}}

{{--        <div class="col-md-6"  >--}}

{{--            <div class="float-end">--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}

{{--                    <x-responsive-nav-link :href="route('logout')"--}}
{{--                                           onclick="event.preventDefault();--}}
{{--                                        this.closest('form').submit();">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-responsive-nav-link>--}}
{{--                </form>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}

{{--    <hr>--}}

{{--   <div class="row">--}}
{{--       <div class="col-md-2">--}}
{{--           <a href="{{route('posts.index')}}">Dashboard</a>--}}
{{--           <a href="{{route('posts.create')}}">Create Post</a>--}}

{{--           @yield('sidebar')--}}
{{--       </div>--}}

{{--       <div class="col-md-10">--}}
{{--           @yield('content')--}}
{{--       </div>--}}
{{--   </div>--}}

{{--</div>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"--}}
{{--        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
