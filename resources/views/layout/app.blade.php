<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{--    cdn link for font-awesome--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- tailwind css-->
    @vite('resources/css/app.css')

    {{--    custom css--}}
    {{--    <style>--}}
    {{--        #bg-photo{--}}
    {{--            position: relative;--}}
    {{--        }--}}
    {{--        --}}{{--#bg-photo:before{--}}
    {{--        --}}{{--    content:'';--}}
    {{--        --}}{{--url("{{asset('storage/images/officebg.png')}}")--}}
    {{--        --}}{{--    width: 100%;--}}
    {{--        --}}{{--    height: 100%;--}}
    {{--        --}}{{--    background:url("{{asset('storage/images/officebg.png')}}");--}}
    {{--        --}}{{--    background-repeat: no-repeat;--}}
    {{--        --}}{{--    object-fit: contain;--}}
    {{--        --}}{{--    position: absolute;--}}
    {{--        --}}{{--    top: 0;--}}
    {{--        --}}{{--    left: 0;--}}
    {{--        --}}{{--}--}}
    {{--    </style>--}}

    {{--    custom css--}}
    <style>
        #home-content{
            position: relative;
        }

        #login-box{
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #content{
            position: relative;
        }

        #footer{
            position: absolute;
            bottom: 10px;
            left: 0;

            display: flex;
            justify-content: space-between;
        }

    </style>
</head>
<body>

<div class="md:container md:mx-auto h-screen" >
    <div class="navbar bg-base-100 drop-shadow-lg flex justify-between">
        <a class="btn btn-ghost text-xl">Job-Hydro</a>
        <div class="w-1/4 flex justify-between">
            <a href="#" class="btn btn-outline btn-sm">Sign Up </a>
            <a href="#" class="btn btn-sm btn-neutral">Sign Up As Company</a>
        </div>
    </div>


    <form action="" method="post" class="flex items-center mt-3">
        <input type="text" placeholder="Search here" class="input w-full border border-neutral-950 me-3"/>
        <button type="button" class="btn btn-primary">Search</button>
    </form>
    <div class="flex mt-3">
        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle"/>
            <div class="drawer-content flex flex-col ">
                <!-- Page content here -->
                <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                    Open drawer
                </label>

                @yield('content')

            </div>
            <div class="drawer-side">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu bg-base-200 text-base-content min-h-full w-72 p-4">
                    <!-- Sidebar content here -->
                    <li><a href="#">Posts</a></li>
                    <li><a href="#">Post Create</a></li>
                    <li><a href="#">Applications</a></li>
                    <li><a>Payments</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<!-- daisy ui -->
<script type="module" src="/src/main.js"></script>
</body>
</html>
