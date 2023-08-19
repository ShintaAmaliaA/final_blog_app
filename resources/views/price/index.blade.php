<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

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
    <header class="position-fixed w-100 transition text-black">
        <div class="d-flex p-4 container">
            <a href="{{ route('webpage') }}" class="d-flex text-decoration-none">
                <img src="{{ asset('img/Logo Scarwash Warna Baru.JPG') }}" alt="Logo Perusahaan" style="width: 80px; height: 50px; border-radius: 10px;">
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="{{ route('location.index') }}" class="btn text-black">
                    Location
                </a>
                <a href="{{ route('blog.public_pages.homepage') }}" class="btn text-black">
                    Blog
                </a>
                <a href="{{ route('price.index') }}" class="btn btn-dark">
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
            <a href="{{ route('location.index') }}" class="btn text-white">
                Location
                <hr />
            </a>
            <a href="{{ route('blog.public_pages.homepage') }}" class="btn text-white">
                Blog
                <hr />
            </a>
            <div>
                <a href="{{ route('price.index') }}" class="btn btn-light w-100">PRICE LIST</a>
            </div>
        </div>
    </header>

    <!-- SECTION SEARCH -->
    <section style="padding-top:100px;">
        <div class="text-center text-black py-5" style="background-image: url('https://img.freepik.com/free-photo/background-with-leafs_53876-31140.jpg?w=740&t=st=1689767337~exp=1689767937~hmac=75cd3e04b2e295e18549c801ee45bbea0d7398c95a7901f5abc7270001977d69'); background-size: cover;">
            <h1>PRICE LIST</h1>
        </div>

        <div class="container">
                <div class="col-lg-12 d-flex justify-content-center">
                    <img src="{{ asset('img/PRICELIST SCARWASH.JPG') }}" class="img-fluid" alt="Pricelist Scarwash">
                </div>
        </div>


    </section>

    <hr />
    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <p>
                    <b>Cuci Sepatu No.1 di SURABAYA | Sedjak 2016 </b>
                </p>
                <b>Contact:</b>
                <p>+6281259899595</p>
                <b>IG</b>
                <p>scar.wash</p>
            </div>

            <div class="col-lg-8">
                <p>Kami adalah penyedia jasa perawatan sepatu No 1 di Surabaya dan Sidoarjo yang memiliki dan telah memiliki 7 offline store yang bisa dikunjungi secara langsung
                    Kami memberikan sentuhan ahli untuk perawatan sepatu dan tas kesayangan Anda.</p>
                <b>Office</b>
                <p>
                    Tersedia 5 offline store yang tersebar di surabaya dan 2 di Sidoarjo.
                </p>
                <div class="d-flex justify-content-between">
                    <b><a href="#about-us">About us</a></b>
                    <b><a href="https://www.Whatsapp.com/+6281259899595">Contact Us</a></b>
                    <b><a href="#hire-us">Hire Us</a></b>
                </div>
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright by Peduli Digital x Yes Tech : by Rico Arisandy
        </div>
    </footer>


    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
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
