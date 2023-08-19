<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .debug {
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <!-- HAEDER -->
    <header class="position-fixed w-100 transition text-dark">
        <div class="d-flex p-4 container">
            <a href="/" class="d-flex text-decoration-none">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Perusahaan" style="width: 80px; height: 50px;">
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="/" class="btn text-white">
                    Beranda
                    <hr />
                    <a href="{{ route('location.index') }}" class="btn text-white">
                        Location
                    </a>
                    <a href="{{ route('blog.public_pages.homepage') }}" class="btn text-white">
                        Blog
                        <hr />

                    </a>
                    <a href="{{ route('promo.index') }}" class="btn text-white">
                        Promo
                    </a>
                    <a href="{{ route('galeri.index') }}" class="btn text-white">
                        Galeri
                    </a>
                    <a href="{{ route('price.index') }}" class="btn text-white">
                        PRICE LIST
                    </a>
            </div>

            <!-- RIGHT MOBILE MENU ICON -->
            <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path
                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                </svg>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
            <div onclick="showMenu()" class="pointer ms-auto">
                X
            </div>

            <!-- MENU -->
            <a href="/" class="btn text-white">
                Beranda
                <hr />
                <a href="{{ route('location.index') }}" class="btn text-white">
                    Location
                    <hr />
                </a>
                <a href="{{ route('blog.public_pages.homepage') }}" class="btn text-white">
                    Blog
                    <hr />

                </a>
            </a>
            <a href="{{ route('promo.index') }}" class="btn text-white">
                Promo
                <hr />
            </a>
            <a href="{{ route('galeri.index') }}" class="btn text-white">
                Galeri
                <hr />
            </a>
            <div>
                <a href="{{ route('price.index') }}" class="btn text-white">PRICE LIST</a>
            </div>
        </div>
    </header>

    <!-- SECTION TYPE 1 : HERO -->
    <section class="app-section-hero">
        <div class="container">
            <div class="row">
                <!-- LEFT IMAGE -->
                <div class="col-lg-4 col-12">
                    <img class="w-100 app-hero-img" src="{{ asset('img/background.png') }}">
                </div>

                <!-- RIGHT CONTENT -->
                <div class="col-lg-8 col-12 my-auto d-grid gap-4">
                    <div class="d-grid gap-4 app-hero-first-content">
                        <h1 class="mt-5">Scar Wash</h1>
                        <div>
                            Kami melakukan perawatan secara profesional, dengan teknik khusus, serta menggunakan alat
                            dan bahan premium untuk melakukan perawatan. Dapatkan informasi terbaru mengenai Shoes and
                            Care dengan memasukan email Anda.
                        </div>
                        <div>
                            <form class="d-flex gap-2">
                                <input class="app-input flex-grow-1" placeholder="Enter your email">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <b>Tentang scare wash</b>
                        <div class="row gap-4 mt-4">
                            <div class="col">
                                <b>1+</b>
                                <p>Kami memiliki 2 cabang yaitu di sidoarjo & surabaya.</p>
                            </div>
                            <div class="col">
                                <b>1.000+</b>
                                <p>pasang sepatu telah ditangani.</p>
                            </div>
                            <div class="col">
                                <b>500+</b>
                                <p>Pelanggan puas dengan layanan Kami.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 2 -->
    <section class="bg-black text-white py-5">
        <div class="container">
            <div class="d-flex">
                <h1>Promo Terbaik untuk Anda</h1>
                <a href="{{ route('promo.index') }}" class="btn text-white ms-auto">More >
            </div>
            <div class="row mt-4 gy-4">
                <div class="col-lg-3 col-15 rounded-3">
                    <img class="w-100 object-cover" src="{{ asset('img/promo3.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Ramadhan deep cleaning</b>
                        <a href="{{ route('promoblog.index') }}" class="btn btn-light">Lihat Promo</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover" src="{{ asset('img/promo3.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Ramadhan deep cleaning</b>
                        <a href="{{ route('promoblog.index') }}" class="btn btn-light">Lihat Promo</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover" src="{{ asset('img/promo3.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Ramadhan deep cleaning</b>
                        <a href="{{ route('promoblog.index') }}" class="btn btn-light">Lihat Promo</a>
                    </div>
                </div>

                <div class="col-lg-3 col-12 rounded-3">
                    <img class="w-100 object-cover" src="{{ asset('img/promo3.jpeg') }}">
                    <div class="p-4 bg-secondary d-grid gap-4">
                        <b>Ramadhan deep cleaning</b>
                        <a href="{{ route('promoblog.index') }}" class="btn btn-light">Lihat Promo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 3 -->
    <section class="container py-5 container d-grid gap-4">
        <div class="row">
            <div class="col">
                <h2>Bagaimana Kami Melakukan Perawatan untuk Barang Kesayangan Anda</h2>
            </div>
            <div class="col">
                Kami merupakan jasa perawatan premium sepatu pertama di Indonesia berbasis media sosial.
            </div>
        </div>

        <div>
            <img style="height:400px;" class="w-100 object-fit-cover rounded-3"
                src="{{ asset('img/bgpanjang.png') }}">
        </div>

        <div class="row">
            <div class="col-lg-3">
                <img width="100" height="100" src="https://img.icons8.com/color/48/expert.png"
                    alt="expert" />
                <h3>Expert Technician</h3>
                <p>Berpengalaman di industri cuci sepatu </p>
            </div>

            <div class="col-lg-3">
                <img width="100" height="100"
                    src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-customer-service-online-money-service-flaticons-lineal-color-flat-icons.png"
                    alt="external-customer-service-online-money-service-flaticons-lineal-color-flat-icons" />
                <h3>Customer Service</h3>
                <p>Dukungan customer service yang responsif </p>
            </div>

            <div class="col-lg-3">
                <img width="100" height="100" src="https://img.icons8.com/papercut/60/in-transit.png"
                    alt="in-transit" />
                <h3>Free Pickup Delivery</h3>
                <p>Pickup delivery gratis dengan jarak maksimal 5 km </p>
            </div>

            <div class="col-lg-3">
                <img width="100" height="100" src="https://img.icons8.com/arcade/64/prize.png"
                    alt="prize" />
                <h3>Garansi Layanan</h3>
                <p>Jaminan garansi apabila terjadi kerusakan selama layanan </p>
            </div>
        </div>
    </section>

    <!-- SECTION TYPE 5 : EMBED MAP -->
    <section class="bg-black py-5 text-center">
        <div class="text-white">
            <h1>OUR LOCATION</h1>
            <p>Find us at here</p>
        </div>
        <div class="container">
            <div>
                <iframe class="rounded-3 w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.962455232647!2d112.7355958220893!3d-7.24511289276129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93fc001bc5d%3A0x110e38d8a6c23fbe!2sMonumen%20Tugu%20Pahlawan%20dan%20Museum%20Sepuluh%20Nopember%20Surabaya!5e0!3m2!1sen!2sid!4v1689251639326!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <br>
            <a href="{{ route('location.index') }}" class="btn btn-dark">Lihat Semua Toko<i
                    style="font-size:12px;margin-left:20px;" class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
    </section>

    <!-- SECTION TYPE 6 : GALLERY -->
    <section class="py-5 bg-black text-white">
        <div class="d-flex container">
            <h1>Gallery Kamai</h1>
            <a href="{{ route('galeri.index') }}" class="btn text-white ms-auto my-auto">More ></a>
        </div>

        <div class="row gx-4 mt-4">
            <img style="height:300px;" class="col-2 object-fit-cover" src="{{ asset('img/galeri1.png') }}">
            <img style="height:300px;" class="col-3 object-fit-cover" src="{{ asset('img/galeri2.png') }}">
            <img style="height:300px;" class="col-3 object-fit-cover" src="{{ asset('img/galeri1.png') }}">
            <img style="height:300px;" class="col-3 object-fit-cover" src="{{ asset('img/galeri2.png') }}">
            <img style="height:300px;" class="col-1 object-fit-cover" src="{{ asset('img/galeri1.png') }}">
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <p>Cuci Sepatu No.1 di SURABAYA | Sedjak 2016</p>
                <b>Contact:</b>
                <p>081259899595</p>
                <b>Email</b>
                <p>admin@mail.com</p>
            </div>


            <div class="col-lg-8">
                <b>Office Surabaya</b>
                <p>Kami memberikan sentuhan ahli untuk perawatan sepatu dan tas kesayangan Anda. Kami
                    menawarkan penanganan perawatan secara profesional menggunakan alat dan bahan berkualitas.
                    Sampai saat ini Suda memiliki 5 store yang tersebar di Surabaya.</p>

                <b>Office Sidoarjo</b>
                <p>Kami memberikan sentuhan ahli untuk perawatan sepatu dan tas kesayangan Anda. Kami
                    menawarkan penanganan perawatan secara profesional menggunakan alat dan bahan berkualitas.
                    Sampai saat ini Suda memiliki 2 store yang ada di Sidoarjo.</p>
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright by Peduli Digital x Yes Tech : by Vioneta
        </div>
    </footer>

    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function() {
            // Check the scroll position
            const scrollPosition = window.scrollY;

            // Change the background color if scroll position is 100 or more
            if (scrollPosition >= 100) {
                header.style.backgroundColor = 'white'; // Change the color to your desired value
            } else {
                header.style.backgroundColor = 'transparent'; // Change the color to your desired value
            }
        });

        /**
         * SCRIPT TO SHOW MOBILE MENU
         **/
        const menu = document.getElementById('menu')

        function showMenu() {
            if (menu.classList.contains('show')) {
                menu.classList.remove("show")
                menu.classList.add("hide")
            } else {
                menu.classList.remove("hide")
                menu.classList.add("show")
            }
        }
    </script>
</body>

</html>
