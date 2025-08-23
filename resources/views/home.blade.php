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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6a11cb;
            --secondary: #2575fc;
            --dark: #2c3e50;
            --light: #f5f7fa;
            --gray: #7f8c8d;
            --accent: #ff6b6b;
            --success: #1dd1a1;
        }
        
        body {
            background: linear-gradient(135deg, var(--light) 0%, #c3cfe2 100%);
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 500;
        }
        
        .nav-link {
            position: relative;
            margin: 0 10px;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .hero-section {
            padding: 120px 0 100px;
            text-align: center;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 0 0 40px 40px;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 60%);
            transform: rotate(30deg);
        }
        
        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        
        .hero-subtitle {
            font-size: 1.4rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto 30px;
            font-weight: 300;
        }
        
        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background: white;
            color: var(--primary);
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        .group-info {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .group-info:hover {
            transform: translateY(-5px);
        }
        
        .section-title {
            color: var(--primary);
            margin-bottom: 30px;
            font-size: 2.5rem;
            position: relative;
            display: inline-block;
            font-weight: 700;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        
        .member-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            height: 100%;
            position: relative;
        }
        
        .member-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.15);
        }
        
        .member-img-container {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
        }
        
        .member-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.7s ease;
        }
        
        .member-card:hover .member-img {
            transform: scale(1.1);
        }
        
        .member-info {
            padding: 25px;
            text-align: center;
        }
        
        .member-name {
            font-size: 1.6rem;
            margin-bottom: 10px;
            color: var(--dark);
            font-weight: 600;
        }
        
        .member-role {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1.1rem;
            position: relative;
            display: inline-block;
        }
        
        .member-role::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 2px;
            background: var(--secondary);
        }
        
        .member-desc {
            color: var(--gray);
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, var(--light) 0%, #e6e6e6 100%);
            color: var(--primary);
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }
        
        .social-links a:hover {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            transform: translateY(-5px);
        }
        
        .feature-box {
            text-align: center;
            padding: 30px 20px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .feature-box:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }
        
        .feature-box i {
            font-size: 2.5rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .feature-box h4 {
            color: var(--dark);
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .feature-box p {
            color: var(--gray);
            line-height: 1.6;
        }
        
        form .form-control {
            border-radius: 10px;
            padding: 12px 20px;
            border: 1px solid #e6e6e6;
            transition: all 0.3s ease;
        }
        
        form .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(37, 117, 252, 0.3);
        }
        
        footer {
            text-align: center;
            padding: 50px 0;
            background: linear-gradient(135deg, var(--dark) 0%, #4a6491 100%);
            color: white;
            border-radius: 40px 40px 0 0;
            margin-top: 60px;
        }
        
        .floating-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
            z-index: 100;
            opacity: 0;
            visibility: hidden;
        }
        
        .floating-btn.show {
            opacity: 1;
            visibility: visible;
        }
        
        .floating-btn:hover {
            transform: scale(1.1) rotate(180deg);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }
        
        /* Particles container */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }
        
        .particles-content {
            position: relative;
            z-index: 1;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fadeIn {
            animation: fadeIn 1s ease forwards;
        }
        
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .member-img-container {
                height: 250px;
            }
        }
    </style>
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
            <p class="hero-subtitle animate-fadeIn delay-1">Tim yang berdedikasi dan penuh dengan kreativitas untuk mencapai tujuan bersama</p>
            <a href="#members" class="cta-button animate-fadeIn delay-2">Kenali Anggota Kami</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="container" id="about">
        <div class="group-info">
            <h2 class="section-title">Tentang Kelompok Kami</h2>
            <p class="lead">Kami adalah kelompok yang terdiri dari 6 anggota dengan berbagai latar belakang dan keahlian. Dengan semangat kolaborasi dan inovasi, kami siap menghadapi tantangan dan menciptakan solusi yang berdampak positif.</p>
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
                        <img src="{{ asset('images/anggota/1.jpg') }}" alt="Ahmad Rizki" class="member-img" onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Ahmad Rizki</h3>
                        <p class="member-role">Ketua Tim</p>
                        <p class="member-desc">Seorang pemimpin yang visioner dengan pengalaman 5 tahun di industri teknologi.</p>
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
                        <img src="{{ asset('images/anggota/2.jpg') }}" alt="Siti Rahayu" class="member-img" onerror="this.src='https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Siti Rahayu</h3>
                        <p class="member-role">UI/UX Designer</p>
                        <p class="member-desc">Spesialis dalam menciptakan pengalaman pengguna yang intuitif dan menarik.</p>
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
                        <img src="{{ asset('images/anggota/3.jpg') }}" alt="Budi Santoso" class="member-img" onerror="this.src='https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
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
                        <img src="{{ asset('images/anggota/4.jpg') }}" alt="Dewi Anggraini" class="member-img" onerror="this.src='https://images.unsplash.com/photo-1567532939604-b6b5b0db1604?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
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
                        <img src="{{ asset('images/anggota/5.jpg') }}" alt="Joko Prasetyo" class="member-img" onerror="this.src='https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
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
                        <img src="{{ asset('images/anggota/6.jpg') }}" alt="Maya Indah" class="member-img" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'">
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

    <!-- Floating Button -->
    <a href="#" class="floating-btn">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap & jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    
    <!-- Custom Script -->
    <script>
        $(document).ready(function() {
            // Initialize particles.js
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: '#ffffff'
                    },
                    shape: {
                        type: 'circle',
                        stroke: {
                            width: 0,
                            color: '#000000'
                        }
                    },
                    opacity: {
                        value: 0.5,
                        random: false,
                        anim: {
                            enable: false,
                            speed: 1,
                            opacity_min: 0.1,
                            sync: false
                        }
                    },
                    size: {
                        value: 3,
                        random: true,
                        anim: {
                            enable: false,
                            speed: 40,
                            size_min: 0.1,
                            sync: false
                        }
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: '#ffffff',
                        opacity: 0.4,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: false,
                        straight: false,
                        out_mode: 'out',
                        bounce: false,
                        attract: {
                            enable: false,
                            rotateX: 600,
                            rotateY: 1200
                        }
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'grab'
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    },
                    modes: {
                        grab: {
                            distance: 140,
                            line_linked: {
                                opacity: 1
                            }
                        },
                        bubble: {
                            distance: 400,
                            size: 40,
                            duration: 2,
                            opacity: 8,
                            speed: 3
                        },
                        repulse: {
                            distance: 200,
                            duration: 0.4
                        },
                        push: {
                            particles_nb: 4
                        },
                        remove: {
                            particles_nb: 2
                        }
                    }
                },
                retina_detect: true
            });

            // Scroll to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.floating-btn').addClass('show');
                    $('.navbar').css('padding', '10px 0');
                } else {
                    $('.floating-btn').removeClass('show');
                    $('.navbar').css('padding', '15px 0');
                }
            });
            
            $('.floating-btn').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 800);
            });
            
            // Smooth scrolling for navigation links
            $('a.nav-link').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 70
                    }, 800);
                }
            });
            
            // Animation for elements on scroll
            function animateOnScroll() {
                $('.animate-fadeIn').each(function() {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    
                    if (position < scroll + windowHeight - 100) {
                        $(this).css({
                            'opacity': '1',
                            'transform': 'translateY(0)'
                        });
                    }
                });
            }
            
            // Initialize animation
            $('.animate-fadeIn').css({
                'opacity': '0',
                'transform': 'translateY(20px)',
                'transition': 'all 0.8s ease'
            });
            
            $(window).on('scroll', animateOnScroll);
            $(window).on('load', animateOnScroll);
            animateOnScroll(); // Initial check
        });
    </script>
</body>
</html>