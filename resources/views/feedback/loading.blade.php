<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memproses Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script
  src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
  type="module"
></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .loading-container {
            text-align: center;
        }

        .loading-container h4 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .loading-container p {
            font-size: 1rem;
            color: #6c757d;
        }

        .spinner-border {
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <div class="loading-container">
        <h4>Memproses Feedback...</h4>
        <p>Mohon tunggu, Anda akan diarahkan ke halaman feedback dalam beberapa saat.</p>

        <!-- Animasi Dinosaurus -->
        <dotlottie-player
        src="https://lottie.host/66c863ea-953a-4985-b304-df7e93561826/DON7MJYHOa.lottie"
        background="transparent"
        speed="1"
        style="width: 300px; height: 300px"
        loop
        autoplay
      ></dotlottie-player>

        <!-- Spinner tambahan -->
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <script>
        // Redirect ke URL feedback setelah 2 menit (120.000 ms)
        setTimeout(() => {
            window.location.href = "{{ $feedbackUrl }}";
        }, 3000); // 120 detik
    </script>
</body>

</html>