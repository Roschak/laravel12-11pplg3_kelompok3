<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 3 - {{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-users me-2"></i>Kelompok 3</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#members">Anggota</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero-section" id="home">
        <div id="particles-js"></div>
        <div class="container particles-content">
            <h1 class="hero-title animate-fadeIn">Kelompok 3</h1>
            <p class="hero-subtitle animate-fadeIn delay-1">Tim yang berdedikasi dan penuh kreativitas</p>
            <a href="#members" class="cta-button animate-fadeIn delay-2">Kenali Anggota Kami</a>
        </div>
    </section>

    <!-- About -->
    <section class="container" id="about">
        <div class="group-info">
            <h2 class="section-title">Tentang Kelompok Kami</h2>
            <p class="lead">Kami terdiri dari 6 anggota dengan berbagai latar belakang dan keahlian...</p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="feature-box"><i class="fas fa-lightbulb"></i>
                        <h4>Inovatif</h4>
                        <p>Solusi kreatif untuk masalah kompleks</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box"><i class="fas fa-handshake"></i>
                        <h4>Kolaboratif</h4>
                        <p>Bekerja sama secara sinergis</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box"><i class="fas fa-bullseye"></i>
                        <h4>Berkualitas</h4>
                        <p>Hasil kerja berkualitas dan tepat waktu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Members -->
    <section class="container mb-5" id="members">
        <h2 class="text-center section-title mb-5">Anggota Kelompok</h2>
        <div class="row g-4">
            @foreach($members as $member)
                <div class="col-md-6 col-lg-4">
                    <div class="member-card animate-fadeIn">
                        <div class="member-img-container">
                            <img src="{{ $member->image ? asset('images/members/' . $member->image) : 'https://via.placeholder.com/400x400?text=No+Image' }}"
                                alt="{{ $member->name }}" class="member-img"
                                onerror="this.src='https://via.placeholder.com/400x400?text=No+Image'">
                        </div>
                        <div class="member-info">
                            <h3 class="member-name">{{ $member->name }}</h3>
                            <p class="member-role">{{ $member->role }}</p>
                            <p class="member-desc">{{ $member->description }}</p>
                            <div class="social-links">
                                @if($member->linkedin)<a href="{{ $member->linkedin }}" target="_blank"><i
                                class="fab fa-linkedin"></i></a>@endif
                                @if($member->github)<a href="{{ $member->github }}" target="_blank"><i
                                class="fab fa-github"></i></a>@endif
                                @if($member->twitter)<a href="{{ $member->twitter }}" target="_blank"><i
                                class="fab fa-twitter"></i></a>@endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


   <!-- Workflow & Roles -->
<section class="container mb-5" id="workflow">
    <h2 class="section-title text-center">Alur Kerja & Peran Kami</h2>
    <p class="text-center mb-5">Inilah alur kerja tim Kelompok 3 beserta peran masing-masing anggota</p>

    <!-- Workflow Concept (Simple Flow) -->
    <div class="workflow-diagram text-center mb-5">
        <div class="row g-4 justify-content-center">
            <div class="col-md-2">
                <div class="workflow-box p-3 shadow-sm rounded bg-light">
                    <h5>Data Analyst</h5>
                    <p>Menganalisis data & kebutuhan</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="workflow-box p-3 shadow-sm rounded bg-light">
                    <h5>UI/UX Designer</h5>
                    <p>Membuat desain & user flow</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="workflow-box p-3 shadow-sm rounded bg-light">
                    <h5>Front-End</h5>
                    <p>Membangun tampilan website</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="workflow-box p-3 shadow-sm rounded bg-light">
                    <h5>Back-End (x2)</h5>
                    <p>Membangun server & API</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="workflow-box p-3 shadow-sm rounded bg-light">
                    <h5>Full Stack</h5>
                    <p>Menghubungkan front-end & back-end</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="text-center p-3">
        <p>&copy; {{ date('Y') }} Kelompok 3 | Dibuat dengan <i class="fas fa-heart text-danger"></i> Laravel</p>
    </footer>

    <a href="#" class="floating-btn"><i class="fas fa-arrow-up"></i></a>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>