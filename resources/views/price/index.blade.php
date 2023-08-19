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
    <header class="bg-dark position-fixed w-100 transition text-white">
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

    <!-- SECTION SEARCH -->
    <section style="padding-top:100px;">
        <div class="text-center text-black py-5">
            <h1>PRICE LIST</h1>
        </div>

        <div class="container">
            <div class="col-lg-12 d-flex justify-content-center">
                <img src="{{ asset('img/price.JPG') }}" class="img-fluid" alt="Pricelist Scarwash">
            </div>
        </div>


    </section>

    <hr />

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
