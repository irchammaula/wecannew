<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengalihan ke Turnitin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(-45deg, #6a11cb, #2575fc, #6a11cb, #00c6ff);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .fade-in {
            animation: fadeIn 1.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .disabled {
            pointer-events: none;
            opacity: 0.6;
        }

        /* Grid Background Animation */
        .grid-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(20, 50px); /* Adjust grid size */
            grid-template-rows: repeat(20, 50px);    /* Adjust grid size */
            gap: 5px;
            z-index: -1;
            animation: moveGrid 10s linear infinite;
        }

        /* Style for each grid square */
        .grid-background div {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.5);
            animation: gridPulse 3s ease-in-out infinite;
        }

        /* Pulse animation for grid boxes */
        @keyframes gridPulse {
            0% {
                transform: scale(1);
                opacity: 0.2;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.5;
            }
            100% {
                transform: scale(1);
                opacity: 0.2;
            }
        }

        /* Move the grid in an animation */
        @keyframes moveGrid {
            0% {
                transform: translateX(0) translateY(0);
            }
            100% {
                transform: translateX(50px) translateY(50px);
            }
        }

        /* Styling for the quote box */
        .quote-box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .quote-text {
            font-style: italic;
            color: #333;
            font-size: 18px;
        }

        .quote-footer {
            font-weight: bold;
            color: #444;
            text-align: right;
        }

        .quote-box p {
            margin-bottom: 0;
        }
    </style>

<script>
    let countdown = 30;

    window.onload = function () {
    const url = @json($url);
    const backButton = document.getElementById('backBtn');
    const countdownText = document.getElementById('countdownText');
    const openTabButton = document.getElementById('openTabBtn');
    const errorText = document.getElementById('errorText');

    const interval = setInterval(() => {
        countdown--;
        countdownText.textContent = `Menunggu dokumen dimuat dalam ${countdown} detik...`;

        if (countdown <= 0) {
            clearInterval(interval);
            countdownText.textContent = 'Silakan klik tombol untuk membuka dokumen.';
            
            backButton.removeAttribute('disabled');
            openTabButton.removeAttribute('disabled');
            backButton.classList.remove('disabled');
            openTabButton.classList.remove('disabled');
        }
    }, 1000);

    // Tambah event listener saat tombol diklik
    openTabButton.addEventListener('click', function () {
        window.open(url, '_blank');
    });

    backButton.addEventListener('click', function () {
        history.back();
    });
};
</script>

</head>
<body>

<div class="grid-background">
    <!-- Grid squares will be generated here via CSS -->
</div>

<div class="card shadow-lg p-4 fade-in" style="max-width: 500px; width: 100%;">
    <h4 class="mb-3">Dokumen sedang diproses, harap menunggu...</h4>
    <p>URL akan segera terbuka di tab baru. Mohon tunggu beberapa detik sementara dokumen dimuat.</p>

    <!-- Spinner -->
    <div class="d-flex justify-content-center mt-4">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Motivational Quote Section -->
    <div class="quote-box mt-4 text-center text-dark">
        <blockquote class="blockquote">
            <p class="quote-text">Jika persiapanmu sudah matang, tidak perlu takut dengan dosen penguji, pasti kamu akan berhasil dan lulus.</p>

        </blockquote>
    </div>

    <!-- Error Message for session expired -->
    <div id="errorText" class="alert alert-warning mt-3" style="display: none;"></div>

    <div class="d-grid gap-2 mt-4">
        <button id="openTabBtn" class="btn btn-primary disabled" disabled>Lihat di Tab Baru</button>
        <button id="backBtn" class="btn btn-secondary disabled" disabled>Kembali</button>
        <small id="countdownText" class="text-muted text-center mt-2">Tombol kembali akan aktif dalam 30 detik...</small>
    </div>
</div>

</body>
</html>
