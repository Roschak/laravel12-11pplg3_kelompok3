<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 3 - {{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-users me-2"></i>Kelompok 3
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#members">Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Particles -->
    <section class="hero-section" id="home">
        <div id="particles-js"></div>
        <div class="container particles-content">
            <h1 class="hero-title animate-fadeIn">Kelompok 3</h1>
            <p class="hero-subtitle animate-fadeIn delay-1">Tim yang berdedikasi dan penuh dengan kreativitas untuk
                mencapai tujuan bersama</p>
            <a href="#members" class="cta-button animate-fadeIn delay-2">Kenali Anggota Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="container" id="about">
        <div class="group-info">
            <h2 class="section-title">Tentang Kelompok Kami</h2>
            <p class="lead">Kami adalah kelompok yang terdiri dari 6 anggota dengan berbagai latar belakang dan
                keahlian. Dengan semangat kolaborasi dan inovasi, kami siap menghadapi tantangan dan menciptakan solusi
                yang berdampak positif.</p>
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <i class="fas fa-lightbulb"></i>
                        <h4>Inovatif</h4>
                        <p>Selalu mencari cara baru untuk menyelesaikan masalah dengan solusi kreatif</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <i class="fas fa-handshake"></i>
                        <h4>Kolaboratif</h4>
                        <p>Bekerja sama secara sinergis untuk mencapai hasil terbaik</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="feature-box">
                        <i class="fas fa-bullseye"></i>
                        <h4>Berkualitas</h4>
                        <p>Memberikan hasil kerja dengan kualitas terjamin dan tepat waktu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Members Section -->
    <section class="container mb-5" id="members">
        <h2 class="text-center section-title mb-5">Anggota Kelompok</h2>

        <div class="row g-4">
            <!-- Anggota 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="member-card animate-fadeIn">
                    <div class="member-img-container">
                        <img src="{{ asset('images/anggota/1.jpg') }}" alt="Ahmad Rizki" class="member-img"
                            onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Ahmad Rizki</h3>
                        <p class="member-role">Ketua Tim</p>
                        <p class="member-desc">Seorang pemimpin yang visioner dengan pengalaman 5 tahun di industri
                            teknologi.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggota 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="member-card animate-fadeIn delay-1">
                    <div class="member-img-container">
                        <img src="{{ asset('images/anggota/2.jpg') }}" alt="Siti Rahayu" class="member-img"
                            onerror="this.src='https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Siti Rahayu</h3>
                        <p class="member-role">UI/UX Designer</p>
                        <p class="member-desc">Spesialis dalam menciptakan pengalaman pengguna yang intuitif dan
                            menarik.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggota 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="member-card animate-fadeIn delay-2">
                    <div class="member-img-container">
                        <img src="{{ asset('images/anggota/3.jpg') }}" alt="Budi Santoso" class="member-img"
                            onerror="this.src='https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Budi Santoso</h3>
                        <p class="member-role">Fullstack Developer</p>
                        <p class="member-desc">Ahli dalam mengembangkan aplikasi web dari frontend hingga backend.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-stack-overflow"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggota 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="member-card animate-fadeIn">
                    <div class="member-img-container">
                        <img src="{{ asset('images/anggota/4.jpg') }}" alt="Dewi Anggraini" class="member-img"
                            onerror="this.src='https://images.unsplash.com/photo-1567532939604-b6b5b0db1604?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Dewi Anggraini</h3>
                        <p class="member-role">Data Analyst</p>
                        <p class="member-desc">Mengubah data kompleks menjadi wawasan yang dapat ditindaklanjuti.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-kaggle"></i></a>
                            <a href="#"><i class="fab fa-medium"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggota 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="member-card animate-fadeIn delay-1">
                    <div class="member-img-container">
                        <img src="{{ asset('images/anggota/5.jpg') }}" alt="Joko Prasetyo" class="member-img"
                            onerror="this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Joko Prasetyo</h3>
                        <p class="member-role">DevOps Engineer</p>
                        <p class="member-desc">Memastikan infrastruktur teknologi berjalan lancar dan efisien.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-digital-ocean"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggota 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="member-card animate-fadeIn delay-2">
                    <div class="member-img-container">
                        <img src="{{ asset('images/anggota/6.jpg') }}" alt="Maya Indah" class="member-img"
                            onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Maya Indah</h3>
                        <p class="member-role">Content Writer</p>
                        <p class="member-desc">Menciptakan konten menarik yang menghubungkan produk dengan pengguna.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-medium"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container mb-5" id="contact">
        <div class="group-info">
            <h2 class="section-title">Kontak Kami</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-start text-center mb-3 mb-md-0">
                    <h4 class="fw-bold">Kelompok 3</h4>
                    <p>Landing Page Anggota Kelompok</p>
                </div>
                <div class="col-md-6 text-md-end text-center">
                    <p>Dibuat dengan <i class="fas fa-heart text-danger"></i> menggunakan Laravel</p>
                    <p>&copy; 2023 Semua Hak Dilindungi</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="floating-btn">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>

</html>