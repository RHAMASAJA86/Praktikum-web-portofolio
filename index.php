<?php
// Single page - PHP bisa dipakai nanti untuk fitur dinamis
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Ubaydillah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        /* ─── SMOOTH SCROLL ─── */
        html { scroll-behavior: smooth; }

        /* ─── PARTICLES BACKGROUND ─── */
        #particles-js {
            position: fixed;
            width: 100%; height: 100%;
            z-index: -1; top: 0; left: 0;
        }

        /* ─── BASE ─── */
        body {
            margin: 0; padding: 0;
            background: linear-gradient(135deg, #0f172a, #1e1b4b, #0f172a);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        /* ─── NAVBAR ─── */
        .navbar-custom {
            position: sticky; top: 0; z-index: 999;
            background: rgba(5, 20, 60, 0.90);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .brand-title {
            color: #fff; font-size: 1.4rem; font-weight: 700; text-decoration: none;
        }
        .brand-title:hover { color: #93c5fd; }
        .nav-link {
            color: #93c5fd !important; font-weight: 600;
            border-radius: 8px; padding: 8px 16px !important;
            transition: all 0.3s ease;
        }
        .nav-link:hover, .nav-link.active {
            background-color: #0d6efd !important; color: #fff !important;
        }
        .nav-link-login {
            background: linear-gradient(135deg, #3b82f6, #3b82f6) !important;
            color: #fff !important;
            border-radius: 10px !important;
        }
        .nav-link-login:hover {
            background: linear-gradient(135deg, #3b82f6, #2563eb) !important;
            transform: translateY(-2px);
        }

        /* ─── SECTION OFFSET ─── */
        section { scroll-margin-top: 70px; }

        /* ─── HERO HOME ─── */
        .hero-home {
            min-height: calc(100vh - 70px);
            display: flex; align-items: center; padding: 60px 0;
            position: relative;
        }
        .hero-home::before {
            content: '';
            position: absolute; width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(109,40,217,0.18) 0%, transparent 70%);
            top: 50%; right: 5%; transform: translateY(-50%);
            pointer-events: none;
        }
        .photo-wrapper { display: flex; justify-content: center; align-items: center; }
        .photo-ring {
            width: 280px; height: 280px; border-radius: 50%;
            border: 3px solid #3b82f6;
            box-shadow: 0 0 30px rgba(109,40,217,0.5), 0 0 60px rgba(109,40,217,0.2);
            overflow: hidden; display: flex; align-items: center; justify-content: center;
            background: #0d0f1a;
            animation: pulse-ring 3s ease-in-out infinite;
        }
        .photo-ring img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; }
        .photo-ring .photo-placeholder { font-size: 100px; color: #3b82f6; opacity: 0.7; }
        .hero-label {
            font-size: 0.9rem; font-weight: 700; letter-spacing: 4px;
            color: #0d6efd; text-transform: uppercase; margin-bottom: 10px;
        }
        .hero-name {
            font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 800;
            color: #fff; line-height: 1.1; margin-bottom: 20px;
        }
        .hero-desc {
            font-size: 1.05rem; color: #94a3b8; line-height: 1.8;
            max-width: 460px; margin-bottom: 36px;
        }
        .btn-hero-fill {
            background: #0d6efd; color: #fff; border: 2px solid #0d6efd;
            border-radius: 10px; padding: 12px 28px; font-weight: 600;
            font-size: 0.95rem; text-decoration: none; transition: all 0.3s ease;
            display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-hero-fill:hover {
            background: #3b82f6; border-color: #0d6efd; color: #fff;
            transform: translateY(-3px); box-shadow: 0 8px 25px rgba(109,40,217,0.5);
        }
        .btn-hero-outline {
            background: transparent; color: #e2e8f0;
            border: 2px solid rgba(255,255,255,0.25); border-radius: 10px;
            padding: 12px 28px; font-weight: 600; font-size: 0.95rem;
            text-decoration: none; transition: all 0.3s ease;
            display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-hero-outline:hover {
            background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.5);
            color: #fff; transform: translateY(-3px);
        }

        /* ─── SECTION DIVIDER ─── */
        .section-divider {
            border: none; height: 1px; margin: 60px 0;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.12), transparent);
        }

        /* ─── PAGE HEADING ─── */
        .page-heading {
            border-radius: 16px; padding: 45px 30px;
            color: white; text-align: center; margin-bottom: 30px;
        }

        /* ─── PROFIL CARD ─── */
        .profil-card {
            background: rgba(15,23,42,0.85);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 20px; color: white;
        }
        .profil-row {
            display: flex; align-items: center; padding: 14px 0;
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }
        .profil-row:last-child { border-bottom: none; }
        .profil-label { font-size: 13px; color: #94a3b8; width: 80px; flex-shrink: 0; }
        .profil-value { font-weight: 600; color: #e2e8f0; }

        /* ─── CARD PORTO ─── */
        .card-porto {
            background: rgba(15,23,42,0.85);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 16px; color: white; transition: all 0.3s ease;
        }
        .card-porto:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0,0,0,0.6);
            border-color: #3b82f6;
        }

        /* ─── PRAKTIKUM LINKS ─── */
        .prak-link {
            display: block; text-decoration: none; color: #cbd5e1;
            padding: 9px 14px; margin: 7px 0; border-radius: 10px;
            background: rgba(255,255,255,0.05); transition: all 0.3s ease;
            font-size: 14px; border: 1px solid rgba(255,255,255,0.06);
        }
        .prak-link:hover {
            background: #3b82f6; color: #fff;
            transform: translateX(6px); border-color: #3b82f6;
        }

        /* ─── SKILL ─── */
        .skill-card {
            background: rgba(15,23,42,0.85);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 16px; color: white;
            padding: 28px; transition: all 0.3s ease;
        }
        .skill-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            border-color: #6d28d9;
        }
        .skill-icon {
            width: 56px; height: 56px; border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 26px; margin-bottom: 16px;
        }
        .skill-bar-wrap {
            background: rgba(255,255,255,0.08);
            border-radius: 50px; height: 8px; margin-top: 8px; overflow: hidden;
        }
        .skill-bar-fill {
            height: 100%; border-radius: 50px;
            background: linear-gradient(90deg, #6d28d9, #3b82f6);
            transition: width 1.5s ease;
        }
        .skill-name { font-size: 14px; color: #94a3b8; margin-bottom: 4px; }
        .skill-pct  { font-size: 13px; color: #7c3aed; font-weight: 700; float: right; }

        /* ─── CONTACT ─── */
        .contact-card {
            background: rgba(15,23,42,0.85);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 20px; color: white; padding: 32px;
        }
        .contact-info-item {
            display: flex; align-items: center; gap: 16px;
            padding: 16px 0; border-bottom: 1px solid rgba(255,255,255,0.07);
        }
        .contact-info-item:last-child { border-bottom: none; }
        .contact-icon {
            width: 48px; height: 48px; border-radius: 12px; flex-shrink: 0;
            display: flex; align-items: center; justify-content: center; font-size: 20px;
        }
        .contact-label { font-size: 12px; color: #64748b; margin-bottom: 2px; }
        .contact-value { font-weight: 600; color: #e2e8f0; font-size: 14px; }
        .form-control-dark {
            background: rgba(255,255,255,0.06) !important;
            border: 1px solid rgba(255,255,255,0.12) !important;
            color: #e2e8f0 !important; border-radius: 10px !important;
            padding: 12px 16px !important; transition: all 0.3s ease;
        }
        .form-control-dark:focus {
            background: rgba(255,255,255,0.1) !important;
            border-color: #6d28d9 !important;
            box-shadow: 0 0 0 3px rgba(109,40,217,0.2) !important; outline: none;
        }
        .form-control-dark::placeholder { color: #475569 !important; }
        .btn-send {
            background: linear-gradient(135deg, #3b82f6, #3b82f6);
            border: none; color: #fff; border-radius: 10px;
            padding: 13px 32px; font-weight: 700; font-size: 0.95rem;
            width: 100%; transition: all 0.3s ease; cursor: pointer;
        }
        .btn-send:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(109,40,217,0.5);
        }

        /* ─── FOOTER ─── */
        .footer-bar {
            background: rgba(0,0,0,0.5);
            border-top: 1px solid rgba(255,255,255,0.07);
            text-align: center; padding: 22px; margin-top: 60px;
        }

        /* ─── MOBILE MENU ─── */
        #navMenuMobile { display: none; }
        #navMenuMobile.show { display: flex !important; }
    </style>
</head>

<body>
    <div id="particles-js"></div>

    <!-- NAVBAR -->
    <nav class="navbar-custom d-flex flex-wrap align-items-center justify-content-between px-4 py-3">
        <!-- KIRI: Brand -->
        <a href="#beranda" class="brand-title"></i>My Portofolio</a>

        <!-- Hamburger (mobile) -->
        <button class="d-lg-none border-0 bg-transparent text-white fs-4 p-1" id="navToggle" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>

        <!-- KANAN: Menu Desktop -->
        <ul class="nav nav-pills mb-0 d-none d-lg-flex" id="navMenu">
            <li class="nav-item"><a href="#beranda"    class="nav-link"><i class="bi bi-house-door me-1"></i>Home</a></li>
            <li class="nav-item"><a href="#profil"     class="nav-link"><i class="bi bi-person me-1"></i>About</a></li>
            <li class="nav-item"><a href="#skill"      class="nav-link"><i class="bi bi-lightning-charge me-1"></i>Skill</a></li>
            <li class="nav-item"><a href="#portofolio" class="nav-link"><i class="bi bi-briefcase me-1"></i>Project</a></li>
            <li class="nav-item"><a href="#contact"    class="nav-link"><i class="bi bi-envelope me-1"></i>Contact</a></li>
            <li class="nav-item ms-2">
                <a href="login.php" class="nav-link nav-link-login">
                    <i class="bi bi-box-arrow-in-right me-1"></i>Login
                </a>
            </li>
        </ul>


    <div class="container py-4">

        <!-- BERANDA -->
        <section id="beranda">
            <div class="hero-home">
                <div class="row align-items-center w-100 g-5">
                    <!-- KIRI: Foto -->
                    <div class="col-lg-5 col-md-6 photo-wrapper" data-aos="fade-right" data-aos-duration="1000">
                        <div class="photo-ring">
                            <img src="img/profile.png" alt="Foto Ubaydillah"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                            <i class="bi bi-person-fill photo-placeholder" style="display:none;"></i>
                        </div>
                    </div>
                    <!-- KANAN: Teks -->
                    <div class="col-lg-7 col-md-6" data-aos="fade-left" data-aos-duration="1000">
                        <p class="hero-label">Halo, Saya</p>
                        <h1 class="hero-name">M. Ubaydillah<br>Romadhon</h1>
                        <p class="hero-desc">
                            Mahasiswa yang sedang membangun
                            pengalaman digital yang bermakna melalui kode dan kreativitas.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#portofolio" class="btn-hero-fill">
                                <i class="bi bi-folder2-open"></i> Lihat Project
                            </a>
                            <a href="#contact" class="btn-hero-outline">
                                <i class="bi bi-envelope"></i> Kontak Saya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-divider">

        <!-- ABOUT -->
        <section id="profil">
            <div class="page-heading" style="background: linear-gradient(135deg, #1e3a5f, #0d6efd);"
                data-aos="fade-down">
                <h2 class="fw-bold mb-2"><i class="bi bi-person-badge me-2"></i>About</h2>
                <p class="mb-0 opacity-75 fs-6">Data diri pemilik website</p>
            </div>

            <div class="row justify-content-center" data-aos="zoom-in">
                <div class="col-md-6 col-lg-5">
                    <div class="profil-card p-4 shadow-lg">
                        <div class="text-center mb-4">
                            <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width:90px;height:90px;background:linear-gradient(135deg,#3b82f6,#6d28d9);">
                                <i class="bi bi-person-fill fs-1 text-white"></i>
                            </div>
                            <h4 class="fw-bold mb-0" style="color:#e2e8f0;">M. Ubaydillah Romadhon</h4>
                            <small class="text-secondary">Mahasiswa Aktif</small>
                        </div>
                        <div class="px-2">
                            <div class="profil-row">
                                <span class="profil-label"><i class="bi bi-person me-2 text-primary"></i>Nama</span>
                                <span class="profil-value">M. Ubaydillah Romadhon</span>
                            </div>
                            <div class="profil-row">
                                <span class="profil-label"><i class="bi bi-card-text me-2 text-primary"></i>NIM</span>
                                <span class="profil-value">202457201031</span>
                            </div>
                            <div class="profil-row">
                                <span class="profil-label"><i class="bi bi-mortarboard me-2 text-primary"></i>Prodi</span>
                                <span class="profil-value">Sistem Informasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-divider">

        <!-- SKILL -->
        <section id="skill">
            <div class="page-heading"
                style="background: linear-gradient(135deg, #1e3a5f, #0d6efd);"
                data-aos="fade-down">
                <h2 class="fw-bold mb-2"><i class="bi bi-lightning-charge me-2"></i>Skill</h2>
                <p class="mb-0 opacity-75 fs-6">Teknologi dan kemampuan yang saya kuasai</p>
            </div>

            <!-- Skill Bar Cards -->
            <div class="row g-4 mb-4">
                <!-- Card 1: Web Development -->
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="0">
                    <div class="skill-card">
                        <div class="skill-icon" style="background:rgba(59,130,246,0.15); color:#3b82f6;">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <h5 class="fw-bold mb-1" style="color:#e2e8f0;">Web Development</h5>
                        <p class="mb-3" style="color:#64748b; font-size:13px;">Membangun halaman web dengan teknologi modern</p>
                        <div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="skill-name">HTML5</span><span class="skill-pct">70%</span>
                            </div>
                            <div class="skill-bar-wrap"><div class="skill-bar-fill" data-width="70" style="width:0%"></div></div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="skill-name">CSS3</span><span class="skill-pct">30%</span>
                            </div>
                            <div class="skill-bar-wrap"><div class="skill-bar-fill" data-width="30" style="width:0%"></div></div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="skill-name">Bootstrap</span><span class="skill-pct">35%</span>
                            </div>
                            <div class="skill-bar-wrap"><div class="skill-bar-fill" data-width="30" style="width:0%"></div></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Programming -->
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="skill-card">
                        <div class="skill-icon" style="background:rgba(109,40,217,0.15); color:#6d28d9;">
                            <i class="bi bi-braces"></i>
                        </div>
                        <h5 class="fw-bold mb-1" style="color:#e2e8f0;">Programming</h5>
                        <p class="mb-3" style="color:#64748b; font-size:13px;">Bahasa pemrograman yang dikuasai</p>
                        <div>
                            <div class="d-flex justify-content-between mb-1">
                                <span class="skill-name">Java</span><span class="skill-pct">75%</span>
                            </div>
                            <div class="skill-bar-wrap"><div class="skill-bar-fill" data-width="75" style="width:0%"></div></div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="skill-name">PHP</span><span class="skill-pct">45%</span>
                            </div>
                            <div class="skill-bar-wrap"><div class="skill-bar-fill" data-width="30" style="width:0%"></div></div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="skill-name">MySQL</span><span class="skill-pct">50%</span>
                            </div>
                            <div class="skill-bar-wrap"><div class="skill-bar-fill" data-width="50" style="width:0%"></div></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tool Badges -->
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="skill-card text-center">
                        <div class="skill-icon mx-auto" style="background:rgba(251,146,60,0.15); color:#fb923c;">
                            <i class="bi bi-git"></i>
                        </div>
                        <h6 class="fw-bold" style="color:#e2e8f0;">Git & GitHub</h6>
                        <p style="color:#64748b; font-size:13px; margin:0;">Version control &amp; kolaborasi kode</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="skill-card text-center">
                        <div class="skill-icon mx-auto" style="background:rgba(34,197,94,0.15); color:#22c55e;">
                            <i class="bi bi-filetype-json"></i>
                        </div>
                        <h6 class="fw-bold" style="color:#e2e8f0;">VS Code</h6>
                        <p style="color:#64748b; font-size:13px; margin:0;">Editor kode utama yang digunakan</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="skill-card text-center">
                        <div class="skill-icon mx-auto" style="background:rgba(59,130,246,0.15); color:#3b82f6;">
                            <i class="bi bi-database"></i>
                        </div>
                        <h6 class="fw-bold" style="color:#e2e8f0;">XAMPP</h6>
                        <p style="color:#64748b; font-size:13px; margin:0;">Local server untuk pengembangan web</p>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-divider">

        <!-- PORTOFOLIO -->
        <section id="portofolio">
            <div class="page-heading"
                style="background: linear-gradient(135deg, #1e3a5f, #0d6efd);"
                data-aos="fade-down">
                <h2 class="fw-bold mb-2"><i class="bi bi-briefcase me-2"></i>Project</h2>
                <p class="mb-0 opacity-75 fs-6">
                    List dan tabel untuk menyusun informasi secara terstruktur dan rapi.
                </p>
            </div>

            <div class="row g-4 justify-content-center">

                <!-- Modul 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card-porto p-4 h-100">
                        <h5 class="text-center text-primary fw-bold mb-4">
                            <i class="bi bi-folder2-open me-2"></i>Modul 1
                        </h5>
                        <a href="praktikum/Praktikum-web-modul01/modul1/prak1_ubay.html" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 1</a>
                        <a href="praktikum/Praktikum-web-modul01/modul1/prak2_ubay.html" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 2</a>
                        <a href="praktikum/Praktikum-web-modul01/modul1/prak3_ubay.html" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 3</a>
                        <p class="mt-4 small text-center" style="color:#64748b;">Penggunaan CSS untuk mengatur tampilan dan layout.</p>
                    </div>
                </div>

                <!-- Modul 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-porto p-4 h-100">
                        <h5 class="text-center text-primary fw-bold mb-4">
                            <i class="bi bi-folder2-open me-2"></i>Modul 2
                        </h5>
                        <a href="praktikum/Praktikum-web-modul02/modul2/prak1_ubay.html" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 1</a>
                        <a href="praktikum/Praktikum-web-modul02/modul2/prak2_ubay.html" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 2</a>
                        <a href="praktikum/Praktikum-web-modul02/modul2/prak3_ubay.html" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 3</a>
                        <a href="praktikum/Praktikum-web-modul02/modul2/prak4_ubay.html" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 4</a>
                        <p class="mt-4 small text-center" style="color:#64748b;">Penggunaan CSS untuk mengatur tampilan dan layout.</p>
                    </div>
                </div>

                <!-- Modul 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-porto p-4 h-100">
                        <h5 class="text-center text-primary fw-bold mb-4">
                            <i class="bi bi-folder2-open me-2"></i>Modul 3
                        </h5>
                        <a href="praktikum/Praktikum-web-modul03/modul3/biodata.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 1</a>
                        <a href="praktikum/Praktikum-web-modul03/modul3/tugas_pertama.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 2</a>
                        <a href="praktikum/Praktikum-web-modul03/modul3/tugas_kedua.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 3</a>
                        <a href="praktikum/Praktikum-web-modul03/modul3/ketiga.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 4</a>
                        <p class="mt-4 small text-center" style="color:#64748b;">Penggunaan CSS untuk mengatur tampilan dan layout.</p>
                    </div>
                </div>

                <!-- Modul 4 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card-porto p-4 h-100">
                        <h5 class="text-center text-primary fw-bold mb-4">
                            <i class="bi bi-folder2-open me-2"></i>Modul 4
                        </h5>
                        <a href="praktikum/Praktikum-web-modul04/modul4/kondisi.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 1</a>
                        <a href="praktikum/Praktikum-web-modul04/modul4/kondisi1.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 2</a>
                        <a href="praktikum/Praktikum-web-modul04/modul4/kondisi2.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 3</a>
                        <a href="praktikum/Praktikum-web-modul04/modul4/kondisi3.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 4</a>
                        <p class="mt-4 small text-center" style="color:#64748b;">Penggunaan CSS untuk mengatur tampilan dan layout.</p>
                    </div>
                </div>

                <!-- Modul 5 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-porto p-4 h-100">
                        <h5 class="text-center text-primary fw-bold mb-4">
                            <i class="bi bi-folder2-open me-2"></i>Modul 5
                        </h5>
                        <a href="praktikum/Praktikum-web-modul05/modul5/tugas1.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 1</a>
                        <a href="praktikum/Praktikum-web-modul05/modul5/tugas2.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 2</a>
                        <a href="praktikum/Praktikum-web-modul05/modul5/tugas3.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 3</a>
                        <p class="mt-4 small text-center" style="color:#64748b;">Penggunaan CSS untuk mengatur tampilan dan layout.</p>
                    </div>
                </div>

                <!-- Modul 6 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-porto p-4 h-100">
                        <h5 class="text-center text-primary fw-bold mb-4">
                            <i class="bi bi-folder2-open me-2"></i>Modul 6
                        </h5>
                        <a href="praktikum/Praktikum-web-modul06/modul6/array1.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 1</a>
                        <a href="praktikum/Praktikum-web-modul06/modul6/array2.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 2</a>
                        <a href="praktikum/Praktikum-web-modul06/modul6/array3.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 3</a>
                        <p class="mt-4 small text-center" style="color:#64748b;">Penggunaan CSS untuk mengatur tampilan dan layout.</p>
                    </div>
                </div>

                <!-- Modul 7 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card-porto p-4 h-100">
                        <h5 class="text-center text-primary fw-bold mb-4">
                            <i class="bi bi-folder2-open me-2"></i>Modul 7
                        </h5>
                        <a href="praktikum/praktikum-web-modul07/form_text.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 1</a>
                        <a href="praktikum/praktikum-web-modul07/kalkulator.html" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 2</a>
                        <a href="praktikum/praktikum-web-modul07/form_login.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 3</a>
                        <p class="mt-4 small text-center" style="color:#64748b;">Penggunaan CSS untuk mengatur tampilan dan layout.</p>
                    </div>
                </div>

                <!-- Modul 8 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-porto p-4 h-100">
                        <h5 class="text-center text-primary fw-bold mb-4">
                            <i class="bi bi-folder2-open me-2"></i>Modul 8
                        </h5>
                        <a href="praktikum/praktikum-web-modul08/tugas/tugas1.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 1</a>
                        <a href="praktikum/praktikum-web-modul08/function2.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 2</a>
                        <a href="praktikum/praktikum-web-modul08/function.php" class="prak-link"><i class="bi bi-file-earmark-code me-2 text-primary"></i>Praktikum 3</a>
                        <p class="mt-4 small text-center" style="color:#64748b;">Penggunaan CSS untuk mengatur tampilan dan layout.</p>
                    </div>
                </div>

            </div>
        </section>

        <hr class="section-divider">

        <!-- CONTACT -->
        <section id="contact">
            <div class="page-heading"
                style="background: linear-gradient(135deg, #1e3a5f, #0d6efd);"
                data-aos="fade-down">
                <h2 class="fw-bold mb-2"><i class="bi bi-envelope me-2"></i>Contact</h2>
                <p class="mb-0 opacity-75 fs-6">Hubungi saya untuk kolaborasi atau pertanyaan</p>
            </div>

            <div class="row g-4 align-items-start">
                <!-- Kiri: Info Kontak -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="contact-card h-100">
                        <h5 class="fw-bold mb-1" style="color:#e2e8f0;">Mari Terhubung!</h5>
                        <p style="color:#64748b; font-size:14px; margin-bottom:24px;">
                            Jangan ragu untuk menghubungi saya melalui berbagai platform berikut.
                        </p>
                        <div class="contact-info-item">
                            <div class="contact-icon" style="background:rgba(59,130,246,0.15); color:#3b82f6;">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <div class="contact-label">Email</div>
                                <div class="contact-value">ubaydillah@email.com</div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon" style="background:rgba(34,197,94,0.15); color:#22c55e;">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div>
                                <div class="contact-label">WhatsApp</div>
                                <div class="contact-value">+62 85608168639</div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon" style="background:rgba(99,102,241,0.15); color:#818cf8;">
                                <i class="bi bi-instagram"></i>
                            </div>
                            <div>
                                <div class="contact-label">Instagram</div>
                                <div class="contact-value">@ubaydillah</div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon" style="background:rgba(14,165,233,0.15); color:#0ea5e9;">
                                <i class="bi bi-github"></i>
                            </div>
                            <div>
                                <div class="contact-label">GitHub</div>
                                <div class="contact-value">github.com/ubaydillah</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kanan: Form -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="contact-card">
                        <h5 class="fw-bold mb-4" style="color:#e2e8f0;">Kirim Pesan</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" style="color:#94a3b8; font-size:13px;">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-dark" placeholder="Masukkan nama kamu">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" style="color:#94a3b8; font-size:13px;">Email</label>
                                <input type="email" class="form-control form-control-dark" placeholder="email@contoh.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="color:#94a3b8; font-size:13px;">Subjek</label>
                                <input type="text" class="form-control form-control-dark" placeholder="Topik pesan kamu">
                            </div>
                            <div class="col-12">
                                <label class="form-label" style="color:#94a3b8; font-size:13px;">Pesan</label>
                                <textarea class="form-control form-control-dark" rows="5" placeholder="Tulis pesanmu di sini..."></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn-send" onclick="kirimPesan()">
                                    <i class="bi bi-send-fill me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        AOS.init({ duration: 900, once: false });
    </script>

    <!-- SKILL BAR ANIMATION -->
    <script>
        const skillObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.querySelectorAll('.skill-bar-fill').forEach(bar => {
                        const w = bar.getAttribute('data-width');
                        setTimeout(() => { bar.style.width = w + '%'; }, 200);
                    });
                }
            });
        }, { threshold: 0.3 });
        document.querySelectorAll('#skill').forEach(s => skillObserver.observe(s));
    </script>

    <!-- HIGHLIGHT MENU AKTIF SAAT SCROLL -->
    <script>
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => link.classList.remove('active'));
                    document.querySelectorAll(`.nav-link[href="#${entry.target.id}"]`)
                            .forEach(a => a.classList.add('active'));
                }
            });
        }, { threshold: 0.3 });

        sections.forEach(sec => observer.observe(sec));
    </script>

    <!-- MOBILE MENU TOGGLE -->
    <script>
        document.getElementById('navToggle').addEventListener('click', function () {
            const m = document.getElementById('navMenuMobile');
            m.classList.toggle('show');
        });
        document.querySelectorAll('#navMenuMobile .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navMenuMobile').classList.remove('show');
            });
        });
    </script>

    <!-- FORM KIRIM PESAN -->
    <script>
        function kirimPesan() {
            const btn = document.querySelector('.btn-send');
            btn.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i>Pesan Terkirim!';
            btn.style.background = 'linear-gradient(135deg, #059669, #10b981)';
            setTimeout(() => {
                btn.innerHTML = '<i class="bi bi-send-fill me-2"></i>Kirim Pesan';
                btn.style.background = 'linear-gradient(135deg, #6d28d9, #3b82f6)';
            }, 3000);
        }
    </script>

</body>
</html>