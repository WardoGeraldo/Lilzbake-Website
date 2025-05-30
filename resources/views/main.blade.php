<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LilzBake - Roti & Cake Jadul Premium</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #8B4513;
            background-color: #feecc8;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            background: linear-gradient(135deg, #feecc8 0%, #f8d7da 100%);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #8B4513;
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #8B4513;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: #CD853F;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #feecc8 0%, #f8d7da 30%, #ffffff 70%, #feecc8 100%);
            padding: 120px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="bread" patternUnits="userSpaceOnUse" width="20" height="20"><circle cx="10" cy="10" r="1" fill="%23CD853F" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23bread)"/></svg>');
            pointer-events: none;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(139, 69, 19, 0.1);
            letter-spacing: 2px;
        }
        
        .hero .subtitle {
            font-size: 1.4rem;
            color: #CD853F;
            margin-bottom: 2rem;
            font-style: italic;
            font-weight: 300;
            letter-spacing: 1px;
        }
        
        .hero-description {
            font-size: 1.2rem;
            color: #8B4513;
            max-width: 700px;
            margin: 0 auto 3rem;
            line-height: 1.8;
            font-weight: 400;
        }
        
        .hero-features {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin: 3rem 0;
            flex-wrap: wrap;
        }
        
        .hero-feature {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(255, 255, 255, 0.7);
            padding: 1.5rem;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.1);
            backdrop-filter: blur(10px);
            min-width: 150px;
        }
        
        .hero-feature i {
            font-size: 2.5rem;
            color: #CD853F;
            margin-bottom: 1rem;
        }
        
        .hero-feature h3 {
            font-family: 'Playfair Display', serif;
            color: #8B4513;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        
        .hero-feature p {
            color: #8B4513;
            font-size: 0.9rem;
            text-align: center;
            margin: 0;
        }
        
        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, #CD853F, #8B4513);
            color: white;
            padding: 18px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.3);
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(139, 69, 19, 0.4);
        }
        
        .cta-button.secondary {
            background: transparent;
            color: #8B4513;
            border: 2px solid #CD853F;
            box-shadow: none;
        }
        
        .cta-button.secondary:hover {
            background: #CD853F;
            color: white;
            box-shadow: 0 8px 25px rgba(139, 69, 19, 0.3);
        }
        
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            overflow: hidden;
        }
        
        .floating-bread {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-bread:nth-child(1) {
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .floating-bread:nth-child(2) {
            top: 25%;
            right: 15%;
            animation-delay: 2s;
        }
        
        .floating-bread:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
        
        .floating-bread:nth-child(4) {
            bottom: 30%;
            right: 10%;
            animation-delay: 1s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }
        
        /* About Section */
        .about {
            padding: 80px 0;
            background: white;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        
        .about-text h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #8B4513;
            margin-bottom: 1.5rem;
        }
        
        .about-text p {
            margin-bottom: 1.5rem;
            color: #8B4513;
            font-size: 1.1rem;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .feature-item {
            background: #feecc8;
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
        }
        
        .feature-item i {
            font-size: 2rem;
            color: #CD853F;
            margin-bottom: 1rem;
        }
        
        .feature-item h4 {
            color: #8B4513;
            margin-bottom: 0.5rem;
        }
        
        .about-image {
            position: relative;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        /* Products Section */
        .products {
            padding: 80px 0;
            background: linear-gradient(135deg, #feecc8 0%, #f8d7da 100%);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #8B4513;
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: #CD853F;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
        }
        
        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .product-info {
            padding: 1.5rem;
        }
        
        .product-info h3 {
            font-family: 'Playfair Display', serif;
            color: #8B4513;
            margin-bottom: 0.5rem;
        }
        
        .product-info p {
            color: #CD853F;
            font-size: 0.9rem;
        }
        
        /* Video Section */
        .video-section {
            padding: 80px 0;
            background: white;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            justify-items: center;
        }

        .video-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(139, 69, 19, 0.2);
            max-width: 350px;
            width: 100%;
        }

        .video-placeholder {
            width: 100%;
            height: 500px; /* Fixed height for consistent card size */
            position: relative;
            background: linear-gradient(135deg, #feecc8, #f8d7da);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .video-placeholder video {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover; /* Cover to fill the container properly */
            position: absolute;
            top: 0;
            left: 0;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: rgba(139, 69, 19, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            transition: transform 0.3s ease;
            z-index: 10;
        }

        .play-button:hover {
            transform: translate(-50%, -50%) scale(1.1);
        }

        .video-title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            color: white;
            padding: 2rem 1.5rem 1.5rem;
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            z-index: 5;
        }
        
        /* Services Section */
        .services {
            padding: 80px 0;
            background: linear-gradient(135deg, #feecc8 0%, #f8d7da 100%);
        }
        
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .service-card i {
            font-size: 3rem;
            color: #CD853F;
            margin-bottom: 1rem;
        }
        
        .service-card h3 {
            font-family: 'Playfair Display', serif;
            color: #8B4513;
            margin-bottom: 1rem;
        }
        
        .service-card p {
            color: #8B4513;
        }
        
        /* Contact Section */
        .contact {
            padding: 80px 0;
            background: white;
        }
        
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        
        .contact-info h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: #8B4513;
            margin-bottom: 0.5rem;
        }
        
        .contact-info p {
            padding-bottom: 18px;
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .contact-item i {
            font-size: 1.5rem;
            color: #CD853F;
            margin-right: 1rem;
            width: 30px;
        }
        
        .contact-item span {
            color: #8B4513;
            font-size: 1.1rem;
        }
        
        .contact-item a {
            color: #8B4513;
            text-decoration: none;
        }
        
        .contact-item a:hover {
            color: #CD853F;
        }
        
        .map-placeholder {
            width: 100%;
            background: #feecc8;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 0;
            aspect-ratio: 4 / 3; /* maintain consistent box ratio */
        }

        .map-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }


        
        /* Footer */
        footer {
            background: linear-gradient(135deg, #8B4513, #CD853F);
            color: white;
            padding: 3rem 0 2rem;
            text-align: center;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h3 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 1rem;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            color: white;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }
        
        .social-links a:hover {
            color: #feecc8;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 2rem;
            color: rgba(255,255,255,0.8);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 3rem;
            }
            
            .hero-features {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .hero-feature {
                min-width: auto;
                width: 100%;
                max-width: 280px;
                margin: 0 auto;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .cta-button {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }
            
            .about-content,
            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .video-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .video-card {
                max-width: 300px;
                margin: 0 auto;
            }
            
            .video-placeholder {
                height: 400px;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
        }
        
        .smooth-scroll {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="smooth-scroll">
    <!-- Header -->
    <header>
        <nav class="container">
            <a href="#home" class="logo">LILZBAKE</a>
            <ul class="nav-links">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#products">Produk</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="floating-elements">
            <div class="floating-bread">🍞</div>
            <div class="floating-bread">🥖</div>
            <div class="floating-bread">🧁</div>
            <div class="floating-bread">🍰</div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1>LILZBAKE</h1>
                <p class="subtitle">Baked with Love - Est. 2019</p>
                <p class="hero-description">Menyajikan roti dan cake jadul premium dengan cita rasa nostalgia yang tak terlupakan. Dibuat dengan bahan-bahan terbaik tanpa pengawet untuk kepuasan Anda.</p>
                
                <div class="hero-features">
                    <div class="hero-feature">
                        <i class="fas fa-award"></i>
                        <h3>Premium Quality</h3>
                        <p>Bahan terbaik tanpa pengawet</p>
                    </div>
                    <div class="hero-feature">
                        <i class="fas fa-heart"></i>
                        <h3>Cita Rasa Nostalgia</h3>
                        <p>Rasa autentik yang menggugah kenangan</p>
                    </div>
                    <div class="hero-feature">
                        <i class="fas fa-shipping-fast"></i>
                        <h3>Layanan Terpercaya</h3>
                        <p>Delivery & custom order tersedia</p>
                    </div>
                </div>
                
                <div class="cta-buttons">
                    <a href="#contact" class="cta-button">
                        <i class="fas fa-phone-alt"></i>
                        Pesan Sekarang
                    </a>
                    <a href="#products" class="cta-button secondary">
                        <i class="fas fa-eye"></i>
                        Lihat Produk
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Tentang LilzBake</h2>
                    <p>LilzBake adalah bakery yang mengkhususkan diri dalam pembuatan roti dan cake jadul premium dengan cita rasa nostalgia yang autentik. Sejak didirikan pada tahun 2019, kami berkomitmen untuk memberikan yang terbaik bagi pelanggan.</p>
                    <p>Kami menyediakan berbagai produk seperti roti bantal, roti sisir, roti smeer, dan cake jadoel dalam bentuk hampers yang menarik. Selain itu, kami juga melayani sebagai supplier untuk cafe, toko, dan menangani pesanan untuk berbagai event spesial.</p>
                    
                    <div class="features">
                        <div class="feature-item">
                            <i class="fas fa-leaf"></i>
                            <h4>Bahan Premium</h4>
                            <p>Tanpa pengawet</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-heart"></i>
                            <h4>Dibuat dengan Cinta</h4>
                            <p>Cita rasa nostalgia</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-users"></i>
                            <h4>Layanan Profesional</h4>
                            <p>Ramah & terpercaya</p>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-gift"></i>
                            <h4>Custom Order</h4>
                            <p>Event & hampers</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="logo lilzbake.jpg" alt="LilzBake Bakery">
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <div class="section-title">
                <h2>Produk Unggulan</h2>
                <p>Koleksi roti dan cake jadul premium dengan cita rasa nostalgia yang tak terlupakan</p>
            </div>
            
            <div class="product-grid">
                <div class="product-card">
                    <img src="fotoRotiBantalBagus.jpg" alt="Roti Bantal Premium">
                    <div class="product-info">
                        <h3>Roti Bantal Premium</h3>
                        <p>Roti bantal lembut dengan tekstur yang sempurna dan rasa yang menggugah selera</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="FOTO BAGUS 4.jpg" alt="Roti Sisir Klasik">
                    <div class="product-info">
                        <h3>Roti Sisir Klasik</h3>
                        <p>Roti sisir tradisional dengan tekstur super lembut dan aroma khas mentega yang menggoda, menghadirkan cita rasa nostalgia.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="roti smeer.jpg" alt="Roti Smeer Istimewa">
                    <div class="product-info">
                        <h3>Roti Smeer Istimewa</h3>
                        <p>Roti smeer dengan olesan mentega premium yang melumer di mulut</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="CakeJadul.jpg" alt="Cake Jadoel Signature">
                    <div class="product-info">
                        <h3>Cake Jadoel Signature</h3>
                        <p>Cake dengan resep tradisional yang telah disempurnakan dengan sentuhan modern</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="rotiSobek.jpg" alt="Roti Sobek">
                    <div class="product-info">
                        <h3>Roti Sobek</h3>
                        <p>Roti klasik yang lembut, cocok untuk jadi teman sarapan dan ngopi.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="soes2.jpg" alt="Kue Soes">
                    <div class="product-info">
                        <h3>Kue Soes</h3>
                        <p>Kue Soes dengan rasa klasik dan unik, tersedia dengan rasa vanilla rum, coklat, dan ragout.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="eclair.jpg" alt="Kue Eclair">
                    <div class="product-info">
                        <h3>Kue Eclair</h3>
                        <p>Kue Eclair dengan vla dan topping yang cocok untuk dijadikan makan penutup.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="fotoHampers.jpg" alt="Hampers Spesial">
                    <div class="product-info">
                        <h3>Hampers Spesial</h3>
                        <p>Paket hampers cantik, dapat request rasa sesuai keinginan. Cocok untuk acara-acara tertentu dan bisa request tambahan dekorasi.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="Assorted Bread.jpg" alt="Assorted Bread">
                    <div class="product-info">
                        <h3>Assorted Bread</h3>
                        <p>Berbagai varian roti dengan topping dan isian savoury yang menggoda selera.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <<section class="video-section">
    <div class="container">
        <div class="section-title">
            <h2>Video Produk</h2>
            <p>Saksikan keindahan produk dan hampers premium dari LilzBake</p>
        </div>
        
        <div class="video-grid">
            <div class="video-card">
                <div class="video-placeholder">
                    <video id="video1" muted loop playsinline>
                        <source src="{{ asset('videoBagus.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                    <div class="play-button" onclick="toggleVideo('video1', this)">
                        <i class="fas fa-play"></i>
                    </div>
                    <div class="video-title">Hampers Roti Premium</div>
                </div>
            </div>
            <div class="video-card">
                <div class="video-placeholder">
                    <video id="video2" muted loop playsinline>
                        <source src="{{ asset('video roti sisir.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                    <div class="play-button" onclick="toggleVideo('video2', this)">
                        <i class="fas fa-play"></i>
                    </div>
                    <div class="video-title">Roti Sisir</div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Kami</h2>
                <p>Berbagai layanan terbaik kami untuk memenuhi kebutuhan roti dan cake Anda</p>
            </div>
            
            <div class="service-grid">
                <div class="service-card">
                    <i class="fas fa-gift"></i>
                    <h3>Hampers Premium</h3>
                    <p>Paket hampers cantik dengan koleksi roti dan cake terbaik untuk hadiah spesial Anda</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-store"></i>
                    <h3>Supplier Cafe & Toko</h3>
                    <p>Menjadi supplier terpercaya untuk kebutuhan roti dan cake cafe, serta toko Anda</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>Event Catering</h3>
                    <p>Melayani pesanan untuk berbagai event seperti pernikahan, acara kantor, dan hari besar</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-birthday-cake"></i>
                    <h3>Custom Order</h3>
                    <p>Pembuatan roti dan cake sesuai dengan keinginan dan request khusus Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info">
                    <h2>Hubungi Kami</h2>
                    <p>Siap melayani pesanan dan konsultasi produk yang terbaik untuk Anda</p>
                    
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Surabaya Timur, Jawa Timur</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <a href="https://wa.me/6281217800067">0812-1780-0067</a>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-instagram"></i>
                        <a href="https://instagram.com/lilzbake" target="_blank">@lilzbake</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <span>Buka Setiap Hari: 08.00 - 21.00 WIB, tersedia di GrabFood!</span>
                    </div>
                </div>
                <div class="map-placeholder">
                    {{-- <i class="fas fa-map-marked-alt" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                    <p>Lokasi Surabaya Timur</p> --}}
                    <img src="fotoReminder.jpg" alt="reminder Bakery">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>LilzBake</h3>
                    <p>Bakery premium dengan cita rasa nostalgia yang tak terlupakan. Baked with Love sejak 2019.</p>
                    <div class="social-links">
                        <a href="https://instagram.com/lilzbake" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/6281217800067" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Produk</h3>
                    <p>Roti Bantal • Roti Sisir • Roti Smeer • Cake Jadoel • Hampers Premium • Custom Order</p>
                </div>
                <div class="footer-section">
                    <h3>Layanan</h3>
                    <p>Hampers • Supplier Cafe • Event Catering • Custom Order • Delivery Service</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 LilzBake. All rights reserved. Baked with Love in Surabaya.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(254, 236, 200, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'linear-gradient(135deg, #feecc8 0%, #f8d7da 100%)';
                header.style.backdropFilter = 'none';
            }
        });

        // Product card hover effect
        document.querySelectorAll('.product-card, .service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
    <script>
    function toggleVideo(videoId, button) {
        const video = document.getElementById(videoId);
        const icon = button.querySelector('i');
        
        if (video.paused) {
            // Start video2 at 0.5 seconds to skip black cover
            if (videoId === 'video2' && video.currentTime === 0) {
                video.currentTime = 0.5;
            }
            video.play();
            icon.classList.remove('fa-play');
            icon.classList.add('fa-pause');
            button.style.opacity = '0.7';
        } else {
            video.pause();
            icon.classList.remove('fa-pause');
            icon.classList.add('fa-play');
            button.style.opacity = '1';
        }
    }

    // Reset play button when video ends and set video2 to start at 0.5s
    document.addEventListener('DOMContentLoaded', function() {
        const videos = document.querySelectorAll('video');
        videos.forEach(video => {
            video.addEventListener('ended', function() {
                const card = this.closest('.video-card');
                const button = card.querySelector('.play-button');
                const icon = button.querySelector('i');
                
                icon.classList.remove('fa-pause');
                icon.classList.add('fa-play');
                button.style.opacity = '1';
                
                // Reset video2 to 0.5 seconds when it ends
                if (this.id === 'video2') {
                    this.currentTime = 0.5;
                }
            });
        });
        
        // Set initial time for video2 to show a frame at 0.5s instead of black
        const video2 = document.getElementById('video2');
        if (video2) {
            video2.addEventListener('loadeddata', function() {
                this.currentTime = 0.5;
            });
        }
    });
    </script>
</body>
</html>