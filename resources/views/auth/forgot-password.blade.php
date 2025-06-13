<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>MalekBD - Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('assets/css/colors/blue.css')}}" id="theme" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <section id="wrapper">
        <div class="login-register" style="background-image:url('../assets/images/background/login-register.jpg');">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" required autofocus placeholder="Email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                    {{-- @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif --}}
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
    @if(session('success'))
        <script>
            $.toast({
                heading: 'Success',
                text: @json(session('success')),
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
        </script>
    @endif
    @if($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                $.toast({
                    heading: 'Something is wrong',
                    text: @json($error),
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3000, 
                    stack: 6
                });
            @endforeach
        </script>
    @endif


    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
