<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>OBATEKER</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="../images/logo-obatekerv2.png" width="230%" alt="Obateker."></a>

        <nav class="navbar">
            <a href="/home">Beranda</a>
            <a href="/obats">Halaman Admin</a>
            <a href="/obat">Obat</a>
            <a href="/order">Order</a>
            <a href="">Welcome, {{ Auth::user()->name }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <a><button type="submit">Logout</button></a>
            </form>
            
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>

    <form action="" id="search-form">
        <input type="search" placeholder="Search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    @yield('content')


    <section class="about" id="about">

        <h3 class="sub-heading"> Tetang kami </h3>
        <h1 class="heading"> Kenapa memilih kami? </h1>

        <div class="row">

            <div class="image">
                <img src="../images/logo-obatekerv2.png" alt="">
            </div>

            <div class="content">
                <h3>Farmasi terbaik di sekitar</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta odio corporis nihil!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque deleniti iste alias, eum natus.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>gratis ongkir</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>pembayaran yang mudah</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>pelayanan 24 jam</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Lokasi</h3>
                <a href="">malang</a>
                <a href="">malang</a>
                <a href="">malang</a>
                <a href="">malang</a>
                <a href="">malang</a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="">Beranda</a>
                <a href="">Obat</a>
                <a href="">Artikel</a>
                <a href="">Order</a>
                <a href="">Login</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="">+621</a>
                <a href="">+621</a>
                <a href="">example@test.com</a>
                <a href="">example@test.com</a>
                <a href="">Malang</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="">Facebook</a>
                <a href="">Twitter</a>
                <a href="">Instagram</a>
                <a href="">linkedin</a>
            </div>
        </div>

        <div class="credit"> copyright &#169 2022</div>
    </section>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>