<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | wecan.do | Turnitin Bot</title>
  <link rel="icon" type="image/x-icon" href="{{asset('wecando.ico')}}" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

    <!-- Logo + Language Switcher -->
    <div class="flex items-center justify-between w-full max-w-md mb-6">
      <a href="#" class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
        <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
        Flowbite    
      </a>

      <!-- Language Dropdown -->
      <div class="relative inline-block text-left">
        <button id="languageDropdownButton" data-dropdown-toggle="languageDropdown" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:text-gray-200 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500">
          Language
          <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.586l3.71-4.355a.75.75 0 111.14.976l-4.25 5a.75.75 0 01-1.14 0l-4.25-5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
          </svg>
        </button>

        <div id="languageDropdown" class="hidden z-10 w-40 bg-white rounded-lg shadow dark:bg-gray-700">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="languageDropdownButton">
            <li>
              <a href="?lang=en" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">English</a>
            </li>
            <li>
              <a href="?lang=id" class="block px-4 py-2 hove</p>r:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Bahasa Indonesia</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Logo + Language Switcher -->

    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
          Sign in to your account
        </h1>

        <!-- Button Login with Google -->
        <div class="flex justify-center">
          <a href="{{route('login.google')}}" class="w-full flex items-center justify-center px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 dark:hover:bg-gray-600">
            <img class="w-5 h-5 mr-2" src="https://img.icons8.com/?size=100&id=17949&format=png&color=000000" alt="Google logo">
            Sign in with Google
          </a>
        </div>

        <!-- OR divider -->
        <div class="flex items-center my-4">
          <div class="flex-grow h-px bg-gray-300 dark:bg-gray-600"></div>
          <span class="px-3 text-sm text-gray-500 dark:text-gray-400">or</span>
          <div class="flex-grow h-px bg-gray-300 dark:bg-gray-600"></div>
        </div>

        <form class="space-y-4 md:space-y-6" action="{{ route('login')}}" method="POST">
            @csrf
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
          </div>
          <div class="flex items-center justify-between">
            <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
          </div>
          <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            Don’t have an account yet? <a href="{{route('register')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
          </p>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400 mt-1">
            Back to <a href="{{ route('welcome') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Home</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<!-- SweetAlert2: Menampilkan pesan Error atau Success -->
@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Login Gagal',
        text: '{{ session('error') }}',  <!-- Gunakan tanda kutip tunggal di dalam JavaScript -->
        confirmButtonColor: '#d33'
    });
</script>
@endif

@if (session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: '{{ session('success') }}',  <!-- Gunakan tanda kutip tunggal di dalam JavaScript -->
        confirmButtonColor: '#3085d6'
    });
</script>
@endif

</body>
=======

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>wecan.do - Login Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/x-icon" href="{{ asset('wecando.ico') }}">
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang Kembali, Bro!!!</h1>
                                    </div>
                                    <!-- Form Login -->
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" 
                                                id="exampleInputEmail" 
                                                name="email"
                                                aria-describedby="emailHelp" 
                                                placeholder="Masukkan Emailmu Bro!!" 
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" 
                                                id="exampleInputPassword" 
                                                name="password"
                                                placeholder="Password" 
                                                required>
                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div> --}}
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <a href="{{route('login.google')}}" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login lewat Google
                                    </a>
                                    {{-- <a href="{{ url('auth/facebook') }}" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login lewat Facebook
                                    </a> --}}
                                    <hr>
                                    <div class="text-center">
                                        <a class="medium" href="{{ url('register') }}">Belum Punya Akun?? Daftar disini bro!!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>
    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: '{{ session('error') }}',
        });
    </script>
@endif


</body>

>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
</html>
