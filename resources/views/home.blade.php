<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{--    cdn link for font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- tailwind css-->
    @vite('resources/css/app.css')
    <style>
        #home-content {
            position: relative;
        }

        #login-box {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        #content {
            position: relative;
        }

        #footer {
            position: absolute;
            bottom: 10px;
            left: 0;

            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>

    <div class="md:container md:mx-auto h-screen">
        <div class="navbar bg-base-100 drop-shadow-lg flex justify-between">
            <a class="btn btn-ghost text-xl">Job-Hydro</a>
            <div class="w-1/4 flex justify-between">
                @if (auth()->user())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline btn-sm">Logout</button>
                    </form>

                    <a href="#" class="btn btn-sm btn-neutral">{{ auth()->user()->name }}</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline btn-sm">Login</a>
                @endif
            </div>
        </div>
        <div class="container flex h-[93vh] font-family" id="home-content">
            {{--        Home Content is here --}}
            <div class="w-1/2  flex h-full items-center " id="content">
                <div class="h-4/5 xl:h-full flex flex-col justify-around  p-4 ps-0">
                    <h1 class="text-6xl h-44 leading-relaxed font-medium">Hire Local Top Developers</h1>
                    <div class="card shadow-xl pb-4 ps-5 text-2xl font-medium">Great Execution, Pixel Perfect Work
                        Delivered by Team -</div>

                    <div class="card bg-base-100 w-96 shadow-xl">
                        <div class="card-body">

                            <p class="font-medium">Allen Hein</p>
                            <p>(Creator)</p>
                            <p class="font-medium">Thu Ta</p>
                            <p>(Creator)</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-wide border-b-neutral-950">Get Started (Join for free)<i
                            class="fa-solid fa-right-long"></i></a>

                </div>
                <div id="footer" class="w-full p-4">
                    <small>Privacy Policy</small>
                    <small>Terms & Conditions</small>
                </div>
            </div>

            {{--        Bg Photo Content --}}
            <div class="w-1/2 h-full" id="bg-photo">
                <img src="{{ asset('storage/images/officebg.png') }}" alt=""
                    style="width: 100%; height: 100%; object-fit: cover">
            </div>

            {{--        login box --}}
            @if (!auth()->user())
                <div class="card bg-base-100 w-48 shadow-xl rounded-none" id="login-box">
                    <div class="card-body">
                        <h3>Start Posting Job Positions</h3>
                        <a href="{{ route('employer.index') }}" class="link link-hover text-[10px] text-end">Sign Up <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- daisy ui -->
    <script type="module" src="/src/main.js"></script>
</body>

</html>
