<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Lajur24</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


</head>


<body>
    <div class="loading-wrapper">
        <h2>Loading</h2>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.html"><img style="height: 50px;"
                        src="{{ asset('assets/img/custom/lajur24_logo.png') }}" height="34" alt="logo" /><sub
                        style="padding-top: 10px;" class="text-secondary"><b>LAJUR24</b></sub></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                onclick="page('.calon')" style="cursor: pointer;">Daftar
                                Calon</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                onclick="page('.informasi')" style="cursor: pointer;">Informasi
                                Calon</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section style="padding-top: 7rem;">
            <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center" style="min-height:80vh">
                    <div class="col-md-5 col-lg-6 px-5 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img"
                            src="assets/img/hero/new-hero.svg" alt="hero-header" /></div>
                    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                        <h4 class="fw-bold text-danger mb-3">Quick Count</h4>
                        <h1 class="hero-title">Lajur24</h1>
                        <p class="mb-4 fw-medium">Memberikan informasi seputar hasil quick count pemilu di Ketapang<br
                                class="d-none d-xl-block" />Kalimantan Barat dengan menyajikannya kedalam bentuk
                            informasi<br class="d-none d-xl-block" />yang mudah dan terpercaya</p>
                        <div class="text-center text-md-start"> <a
                                class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                                href="#!" role="button">Lebih lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 calon" id="destination" >

            <div class="container">
                <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img
                        src="assets/img/dest/shape.svg" alt="destination" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">Daftar</h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Calon</h3>
                </div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($calon as $item)
                            <div class="swiper-slide">
                                <div class="card overflow-hidden"
                                    style="background-image: url('@serverstorageuri()/calon/{{ $item['foto'] }}');">
                                    <div class="top">

                                    </div>
                                    <div class="card-body py-4 px-3">
                                        <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                                            <h4 class="text-secondary fw-medium"><span
                                                    class="calon-name">{{ $item['nama'] }}</span></h4>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img class="img-partai"
                                                src="@serverstorageuri()/partai/{{ $item['partai']['foto'] }}"
                                                width="20" />
                                            <span class="fs-0 fw-medium partai-name">Partai
                                                {{ $item['partai']['nama'] }}</span>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary"
                                        onclick="fetchdatacalon('{{ $item['id'] }}', '{{ $item['nama'] }}')">Lihat</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div><!-- end of .container-->

        </section>
        <section id="booking" class="informasi">
            <div class="container">
                <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img
                        src="assets/img/dest/shape.svg" alt="destination" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">Informasi</h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Hasil Pencarian</h3>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 card card-body shadow border">
                        <div class="row" style="min-height: 0px;">
                            <div class="col-lg-8 col-12">
                                <table class="table">
                                    <tr>
                                        <td>
                                            Nama
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td class="info-nama">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Partai
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td class="info-partai">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Daerah Pilih
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <ul class="info-dapil">

                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-lg-4 col-12">
                                <img class="info-foto border rounded overflow-hidden" alt=""
                                    style="width: 100%; height: 100%; object-fit: cover; max-height: 400px;">
                            </div>
                            <div class="col-12">
                                <div id="hc-pie" style="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <section class="pt-6">

            <div class="container">
                <div class="py-8 px-5 position-relative text-center"
                    style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
                    <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img
                            src="assets/img/cta/send.png" style="max-width:70px;" alt="send icon" /></div>
                    <div class="position-absolute end-0 top-0 z-index--1"> <img src="assets/img/cta/shape-bg2.png"
                            width="264" alt="cta shape" /></div>
                    <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img
                            src="assets/img/cta/shape-bg1.png" style="max-width: 340px;" alt="cta shape" /></div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <h2 class="text-secondary lh-1-7 mb-7">Ada pertanyaan, hubungi kami segera! </h2>
                            <div class="row g-3 align-items-center w-lg-75 mx-auto">
                                <div class="col-sm">
                                    <div class="input-group-icon">
                                        <input class="text-pertanyaan form-control form-little-squirrel-control"
                                            type="text" placeholder="Tulis pertanyaan" /><img
                                            class="input-box-icon" src="{{ asset('assets/img/category/icon3.png') }}"
                                            width="17" alt="mail" />
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <button class="btn btn-danger orange-gradient-btn fs--1"
                                        onclick="kirimPertanyaan()">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        {{-- <section class="pb-0 pb-lg-4">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4"
                            src="{{ asset('assets/img/custom/lajur24_logo.png') }}" width="150" alt="lajur24" />
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-1 order-md-2">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Company</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">About</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Careers</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Mobile</a></li>
                        </ul>
                    </div> --}}
        {{-- <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Help/FAQ</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Press</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Affiliate</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">More</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Airlinefees</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Airline</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Low fare tips</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
                        <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social"
                                id="facebook" href="#!"><i class="fab fa-facebook-f"> </i></a><a
                                class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i
                                    class="fab fa-instagram"> </i></a><a
                                class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i
                                    class="fab fa-twitter"> </i></a></div>
                        <h4 class="fw-medium font-sans-serif text-secondary mb-3">Discover our app</h4>
                        <div class="d-flex align-items-center"> <a href="#!"> <img class="me-2"
                                    src="assets/img/play-store.png" alt="play store" /></a><a href="#!"> <img
                                    src="assets/img/apple-store.png" alt="apple store" /></a></div>
                    </div> --}}
        {{-- </div>
            </div><!-- end of .container-->

        </section> --}}
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="py-5 text-center">
            <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved@lajur24.info </p>
        </div>
    </main>




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('vendors/highcharts/highcharts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Initialize Swiper -->
    <script>
        window.addEventListener('load', () => {
            const loader = document.querySelector('.loading-wrapper')

            // loader.classList.add(...['animate__animated', 'animate__fadeOut'])
            divs = loader.querySelectorAll('div')
            initiateLoadingDone(divs, 0)
        })
        const kirimPertanyaan = () => {
            const text = document.querySelector('.text-pertanyaan').value
            window.open('https://wa.me/6289677950614?text=' + encodeURI(text), '_blank')
        }
        const page = (laman) => {
            document.querySelector(laman).scrollIntoView({
                behavior: "smooth",
                block: "start",
                inline: "center"
            });
        }
        var initiateLoadingDone = (divs, x) => {
            if (x >= divs.length) {
                setTimeout(() => {
                    const loader = document.querySelector('.loading-wrapper')
                    loader.classList.add('d-none')
                }, 2000);
                return
            }
            if (x == 0) {
                document.querySelector('.loading-wrapper h2').innerHTML = 'Selamat Datang';
            }
            if (x % 2 == 0) {
                divs[x].classList.add(...['animate__animated', 'animate__fadeOutDown'])
            } else {
                divs[x].classList.add(...['animate__animated', 'animate__fadeOutUp'])
            }
            if (x == 4) {
                document.querySelector('.loading-wrapper h2').innerHTML = '';
            }
            setTimeout(() => {
                initiateLoadingDone(divs, x += 1)
            }, 500);
        }
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            centeredSlides: true,
        });

        const fetchdatacalon = async (id, nama) => {
            const uri = '@serveruri' + '/open-api?d=detailcalon&nama=' + nama + '&id=' + id;
            fetch(uri)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(body => {
                    let data = body.data;
                    if (data.calon.length != 1) {
                        throw new Error('Data found more than one');
                    }
                    const element = document.querySelector('.informasi')

                    element.querySelector('.info-nama').innerHTML = data.calon[0].nama
                    element.querySelector('.info-partai').innerHTML = data.calon[0].partai.nama
                    const data_dapil = () => {
                        ret = ''
                        for (x = 0; x < data.suara.patokan.length; x++) {
                            if (data.suara.masuk[x] == null) {
                                ret = ret + `
                                <li>
                                ` + data.suara.patokan[x].name + `
                                <br>
                                <table class='table'>
                                    <tr>
                                        <td>Total Pemilih</td>
                                        <td>:</td>
                                        <td>Data belum tersedia</td>
                                    </tr>
                                    <tr>
                                        <td>Total TPS</td>
                                        <td>:</td>
                                        <td>Data belum tersedia</td>
                                    </tr>
                                </table>
                            </li>
                            `
                            } else {
                                ret = ret + `
                            <li>
                                ` + data.suara.masuk[x].district_name + `
                                <br>
                                <table class='table'>
                                    <tr>
                                        <td>Total Pemilih</td>
                                        <td>:</td>
                                        <td>` + data.suara.masuk[x].total_suara + ` suara (` + parseFloat(data.suara
                                    .masuk[x]
                                    .total_suara / data.suara.patokan[x].total_pemilih * 100).toFixed(
                                    2) + `% dari keseluruhan di wilayah ini)</td>
                                    </tr>
                                    <tr>
                                        <td>Total TPS</td>
                                        <td>:</td>
                                        <td>` + data.suara.masuk[x].total_tps + ` tps (` + parseFloat(data.suara.masuk[
                                        x]
                                    .total_tps / data.suara.patokan[x].total_tps * 100).toFixed(2) + `% dari keseluruhan di wilayah ini)</td>
                                    </tr>
                                </table>
                            </li>
                            `
                            }
                        }
                        return ret
                    }
                    if (data.suara.patokan.length > 0) {
                        dapil = data_dapil()
                        element.querySelector('.info-dapil').innerHTML = dapil
                    } else {
                        element.querySelector('.info-dapil').innerHTML = '-'
                    }

                    element.querySelector('.info-foto').src = '@serverstorageuri' + '/calon/' + data.calon[0]
                        .foto
                    Highcharts.chart('hc-pie', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'pie',
                        },
                        title: {
                            text: 'Persebaran Suara',
                            align: 'center'
                        },
                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        accessibility: {
                            point: {
                                valueSuffix: '%'
                            }
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    format: '<b>{point.name} ({point.y} Suara Masuk)</b>: {point.percentage:.1f} % '
                                },
                                // events: {
                                // click: function(e) {
                                // console.log(e.y)
                                // },
                                // }
                            }
                        },
                        series: [{
                            name: 'Persentase',
                            colorByPoint: true,
                            data: data_persebaran_suara(data.suara.masuk)
                        }],
                    });

                    element.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                        inline: "center"
                    });
                })
                .catch(error => {
                    console.error('There was a problem with your fetch operation:', error);
                    Toast.fire({
                        icon: "error",
                        title: "500",
                        text: "Terjadi kesalahan saat mengambil data",
                    });
                });
        }

        const data_persebaran_suara = (data) => {
            var template = []
            for (item of data) {
                template.push({
                    name: item.district_name,
                    y: parseInt(item.total_suara),
                })
            }
            return template
        }
    </script>


    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
</body>

</html>
