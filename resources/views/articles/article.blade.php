<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psikolog vs Psikiater - Mental Care</title>

    <!-- CSS dari tema utama -->
    <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo (2).png') }}" type="image/webp">

    <!-- Font Awesome CDN (untuk ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #4b79cf;
            --secondary-color: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.8;
            color: #333;
        }

        .article-header {
            background: linear-gradient(135deg, var(--primary-color), #6a8fd8);
            color: white;
            padding: 5rem 0;
            margin-bottom: 3rem;
        }

        .article-title {
            font-weight: 700;
            font-size: 2.8rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        }

        .article-meta {
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .article-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .section-title {
            color: var(--primary-color);
            border-left: 5px solid var(--primary-color);
            padding-left: 15px;
            margin: 2.5rem 0 1.5rem;
        }

        .comparison-card {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
            border: none;
        }

        .comparison-card:hover {
            transform: translateY(-5px);
        }

        .psychologist-card .card-header {
            background-color: #5d9cec;
            color: white;
        }

        .psychiatrist-card .card-header {
            background-color: #48cfad;
            color: white;
        }

        .highlight-box {
            background-color: var(--secondary-color);
            border-radius: 8px;
            padding: 2rem;
            margin: 3rem 0;
            border-left: 4px solid var(--primary-color);
        }

        .cta-button {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 25px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        @media (max-width: 768px) {
            .article-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    @include('home.header')

    <!-- Header Artikel -->
    <header class="article-header text-center">
        <div class="container">
            <h1 class="article-title">Psikolog vs Psikiater: Apa Perbedaannya?</h1>
            <div class="article-meta">
                <span><i class="fas fa-user-edit me-2"></i> Tim Mental Care</span>
                <span class="mx-3">|</span>
                <span><i class="far fa-calendar-alt me-2"></i> Diperbarui: 15 Juni 2023</span>
            </div>
        </div>
    </header>

    <!-- Konten Artikel -->
    <main class="container article-content">
        <article>
            <p class="lead">Dalam dunia kesehatan mental, ada dua jenis profesional utama yang sering ditemui: psikolog dan psikiater...</p>

            <div class="row">
                <!-- Psikolog -->
                <div class="col-md-6">
                    <div class="card comparison-card psychologist-card h-100">
                        <div class="card-header">
                            <h3 class="mb-0"><i class="fas fa-brain me-2"></i> Psikolog</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Fokus pada Terapi dan Konseling</h4>
                            <p class="card-text">Psikolog adalah ahli yang telah menempuh pendidikan di bidang psikologi...</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Menyediakan psikoterapi</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Menggunakan pendekatan CBT, dll</li>
                                <li class="list-group-item"><i class="fas fa-times-circle text-danger me-2"></i> Tidak meresepkan obat</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Psikiater -->
                <div class="col-md-6">
                    <div class="card comparison-card psychiatrist-card h-100">
                        <div class="card-header">
                            <h3 class="mb-0"><i class="fas fa-user-md me-2"></i> Psikiater</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Ahli Medis dengan Kewenangan Meresepkan Obat</h4>
                            <p class="card-text">Psikiater adalah dokter yang menyelesaikan pendidikan kedokteran dan spesialis psikiatri...</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Bisa mendiagnosis gangguan mental</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Bisa meresepkan obat-obatan</li>
                                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Juga menyediakan psikoterapi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="highlight-box text-center">
                <h3 class="mb-4"><i class="fas fa-hands-helping me-2"></i> Mental Care: Menghubungkan Anda dengan Psikolog & Psikiater</h3>
                <p class="mb-4">Bagi Anda yang ingin mendapatkan dukungan profesional...</p>

                <a href="{{ route('home') }}#appointment" class="btn cta-button text-white btn-lg">
                    <i class="far fa-calendar-check me-2"></i> Buat Janji Konsultasi Sekarang
                </a>
            </div>
        </article>
    </main>

    @include('home.footer')

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
