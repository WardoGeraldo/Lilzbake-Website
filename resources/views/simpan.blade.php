<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LilzBake - Kreasi Roti Premium</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #fff8f3;
            color: #5a3e36;
        }

        header {
            background-color: #fff1e6;
            padding: 1.5rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 2rem;
            color: #d08462;
        }

        nav a {
            color: #a85b36;
            text-decoration: none;
            margin: 0 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #f08d49;
        }

        .hero {
            background-image: url('{{ asset('fotoBackground2.jpg') }}');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 6rem 2rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: inherit;
            background-size: cover;
            background-position: center;
            filter: blur(5px);
            transform: scale(1.05);
            z-index: 0;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(255, 248, 240, 0.2);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            background-color: rgba(255, 245, 235, 0.6);
            backdrop-filter: blur(8px);
            padding: 6rem;
            border-radius: 1.5rem;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 700px;
            animation: fadeInUp 1s ease-in-out;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.2rem;
            line-height: 1.2;
            margin: 0 0 1rem;
            color: #7b3f2b;
        }

        .hero p {
            font-size: 1rem;
            font-weight: 500;
            color: #a85b36;
            letter-spacing: 1px;
            margin-bottom: 0.25rem; /* Tighter spacing */
            text-transform: uppercase;
        }

        .btn {
            background-color: #a85b36;
            color: #fff;
            padding: 0.55rem 1.5rem;
            border: none;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background-color: #f08d49;
        }

        section {
            padding: 5rem 2rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: #8c4b2c;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .text-center {
            text-align: center;
        }

        .galeri img {
            width: 280px;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .galeri img:hover {
            transform: scale(1.05);
        }

        .video-section {
            background-color: #fff1e6;
            padding: 4rem 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .video-wrapper {
            width: 100%;
            max-width: 360px;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        video {
            width: 100%;
            display: block;
            border-radius: 1.5rem;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">LilzBake</div>
    <nav>
        <a href="#">Beranda</a>
        <a href="#tentang">Tentang</a>
        <a href="#galeri">Galeri</a>
        <a href="#video">Video</a>
        <a href="#kontak">Kontak</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-content">
        <p>SINCE 2019</p>
        <h1>Premium Bread & Hampers<br>By LilzBake</h1>
        <a href="#kontak" class="btn">Order Now</a>
    </div>
</section>

<section id="tentang" style="background-color: #fffaf5;">
    <div style="max-width: 800px; margin: 0 auto;" class="text-center">
        <h2 class="section-title">Tentang LilzBake</h2>
        <p style="font-size: 1.1rem;">
            LilzBake telah berdiri sejak tahun 2019, dikenal karena menyajikan berbagai pilihan roti dan pastry premium yang dibuat dengan sepenuh hati. Setiap gigitan dari produk kami membawa kembali kenangan masa kecil—hangat, manis, dan penuh cinta. Kami percaya bahwa makanan bukan hanya sekadar kebutuhan, tapi juga pengalaman yang membekas di hati.
            <br><br>
            Di LilzBake, kami menggunakan bahan-bahan terbaik: tepung pilihan, mentega berkualitas tinggi, susu segar, dan tidak ada pengawet. Semua diproses secara handmade oleh tangan-tangan terampil, sehingga menghasilkan tekstur yang lembut, aroma yang menggoda, dan rasa autentik yang tidak mudah dilupakan.
            <br><br>
            Dari roti klasik hingga hampers cantik yang cocok untuk hadiah istimewa, LilzBake hadir untuk melengkapi momen-momen penting Anda—baik itu sarapan keluarga, bingkisan ulang tahun, bingkisan natal, hingga hantaran spesial di hari raya. Kami menghadirkan rasa nostalgia yang dibalut dalam sentuhan premium, eksklusif hanya untuk Anda.
        </p>
    </div>
</section>

<section id="galeri" class="galeri">
    <div style="max-width: 1000px; margin: 0 auto;" class="text-center">
        <h2 class="section-title">Galeri</h2>
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; margin-top: 2rem;">
            <p>Roti Sisir <br><img src="{{ asset('fotoSisirNougat.jpg') }}" alt="Roti 1" > </p>
            <p>Roti Bantal <br><img src="{{ asset('roti bantal.jpg') }}" alt="Roti 2" > </p>
            <p>Roti Smeer <br><img src="{{ asset('roti smeer.jpg') }}" alt="Roti 3" > </p>
            <p>Cake Jadoel <br><img src="{{ asset('FOTO BAGUS 5.jpg') }}" alt="Roti 4" > </p>
            <p>Soes Vla <br><img src="{{ asset('soes.jpg') }}" alt="Roti 5" > </p>
            <p>Roti Sobek <br><img src="{{ asset('FOTO BAGUS 2.jpg') }}" alt="Roti 6" > </p>
        </div>
    </div>
</section>

<section id="video" class="video-section">
    <h2 class="section-title">Video Produk</h2>
    <p class="text-center" style="margin-bottom: 2rem;">Lihat lebih dekat kelezatan produk LilzBake melalui video sinematik kami.</p>
    <div class="video-wrapper">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('videoBagus.mp4') }}" type="video/mp4">
            Browser Anda tidak mendukung tag video.
        </video>
    </div>
</section>

<section id="kontak" style="background-color: #fffaf5;">
    <div style="max-width: 600px; margin: 0 auto;" class="text-center">
        <h2 class="section-title">Kontak Kami</h2>
        <p style="margin-bottom: 2rem; font-size: 1.1rem;">Hubungi kami untuk pemesanan atau pertanyaan lebih lanjut.</p>
        <a href="https://wa.me/6281217800067" target="_blank" class="btn">WhatsApp</a>
        <a href="https://instagram.com/lilzbake" target="_blank" class="btn" style="margin-top: 1rem; background-color: #a85b36;">Instagram</a>
    </div>
</section>

</body>

<footer style="background-color: #fff1e6; padding: 2rem 1rem; text-align: center; color: #8c4b2c; font-size: 0.95rem; border-top: 1px solid #f5d8c1;">
    <p style="margin: 0.5rem 0;">&copy; 2019-Now LilzBake. All rights reserved.</p>
    <p style="margin: 0.5rem 0;">Dibuat dengan <span style="color: #f08d49;">&#10084;</span> di Surabaya</p>
</footer>
</html>