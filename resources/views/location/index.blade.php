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
    <header class="position-fixed w-100 transition text-white bg-secondary">
        <div class="d-flex p-4 container">
            <a href="{{ route('webpage') }}" class="d-flex text-decoration-none">
                <img src="{{ asset('img/Logo Scarwash Warna Baru.JPG') }}" alt="Logo Perusahaan" style="width: 80px; height: 50px; border-radius: 10px;">
            </a>

            <!-- RIGHT MENU -->
            <div class="ms-auto d-lg-flex d-none gap-2">
                <a href="{{ route('location.index') }}" class="btn text-white">
                    Location
                </a>
                <a href="{{ route('blog.public_pages.homepage') }}" class="btn text-white">
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
    <section class="container" style="padding-top:100px;">
        <div class="text-center">
            <h1>7 Lokasi Kami</h1>
        </div>
        <div class="row gx-2 gy-2 mt-2">
            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya</span>
                    </div>
                    <h2>Store 1 (Surabaya Selatan)</h2>
                    <p>09.00-20.00</p>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.232945720039!2d112.71284229999999!3d-7.327713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc9f986b6fdb%3A0xe7df8bd037983099!2sLaundry%20Sepatu%20Surabaya%20(Scarwash%20Jambangan)!5e0!3m2!1sid!2sid!4v1692435497610!5m2!1sid!2sid"
                         width="540" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark" href="https://goo.gl/maps/RUV5ZNK3GPdWqaZd7">Location</a>
                        <a class="btn btn-success" href="https://www.Whatsapp.com/+6281259899595">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya</span>
                    </div>
                    <h2>Store 2 (Surabaya Pusat)</h2>
                    <p>09.00-20.00</p>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7787099149295!2d112.76240539999999!3d-7.266005799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb66387222e5%3A0xec4739245ca18d8!2sLaundry%20Sepatu%20Surabaya%20(Scarwash%20Dharmahusada)!5e0!3m2!1sid!2sid!4v1692435260711!5m2!1sid!2sid"
                        width="540" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark" href="https://goo.gl/maps/Kwx7pxeH5zvRx6Me8">Location</a>
                        <a class="btn btn-success" href="https://www.Whatsapp.com/+6281259899595">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya</span>
                    </div>
                    <h2>Store 3 (Surabaya Barat)</h2>
                    <p>09.00-20.00</p>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.407210955082!2d112.6708719!3d-7.3080659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fdeb23cd86e1%3A0x5a6f4ff6784a73dc!2sSCAR%20WASH%20Laundry%20Sepatu%20Surabaya!5e0!3m2!1sid!2sid!4v1692435595221!5m2!1sid!2sid"
                         width="540" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark" href="https://goo.gl/maps/LthXxMd5ChCEWem38">Location</a>
                        <a class="btn btn-success" href="https://www.Whatsapp.com/+6281259899595">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya</span>
                    </div>
                    <h2>Store 4 (Surabaya Barat)</h2>
                    <p>09.00-20.00</p>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126652.06731831704!2d112.5553399!3d-7.2548253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd704d13af07%3A0x3c8f13b19de7f899!2sLaundry%20Sepatu%20Surabaya%20(Scarwash%20Citraland)!5e0!3m2!1sid!2sid!4v1692435643942!5m2!1sid!2sid"
                         width="540" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark" href="https://goo.gl/maps/r6g8n2mkkxyNhqCZ8">Location</a>
                        <a class="btn btn-success" href="https://www.Whatsapp.com/+6281259899595">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Surabaya</span>
                    </div>
                    <h2>Store 5 (Surabaya Timur)</h2>
                    <p>09.00-20.00</p>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.643513836677!2d112.7868924!3d-7.2813403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb0159dcbd95%3A0x356042c74f1f9ed7!2sLaundry%20Sepatu%20%26%20Barbershop%20Surabaya%20(Scarwash%20Sukolilo)!5e0!3m2!1sid!2sid!4v1692435710084!5m2!1sid!2sid"
                        width="540" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark" href="https://goo.gl/maps/2v9H5KEVjz7BETe87">Location</a>
                        <a class="btn btn-success" href="https://www.Whatsapp.com/+6281259899595">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Sidoarjo</span>
                    </div>
                    <h2>Store 6 (Sidoarjo)</h2>
                    <p>09.00-20.00</p>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7912.537602636954!2d112.60628925199585!3d-7.435480065309216!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e7e90270df49%3A0x4f591246139be92b!2sScarwash%20Sidoarjo%20-%20Cuci%20Sepatu!5e0!3m2!1sid!2sid!4v1692435761870!5m2!1sid!2sid"
                        width="540" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark" href="https://goo.gl/maps/kG5cw8PjyoGjnYACA">Location</a>
                        <a class="btn btn-success" href="https://www.Whatsapp.com/+6281259899595">Whatsapp</a>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card p-2">
                    <div>
                        <span class="badge bg-secondary">Sidoarjo</span>
                    </div>
                    <h2>Store 7 (Sidoarjo)</h2>
                    <p>09.00-20.00</p>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0894003516596!2d112.7680362!3d-7.343857400000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fba4581167cb%3A0xa75017431d49652c!2sScar%20wash%20Cuci%20sepatu%20dan%20tas!5e0!3m2!1sid!2sid!4v1692435828501!5m2!1sid!2sid"
                         width="540" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-dark" href="https://goo.gl/maps/DvEujPKpqCQd4QeQ8">Location</a>
                        <a class="btn btn-success" href="https://www.Whatsapp.com/+6281259899595">Whatsapp</a>
                    </div>
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
