@extends('layouts.main')

@section('container')
<main>
    <div class="container">
        <section id="quote">
            <div class="row align-items-center">
                <div class="col-7" id="quote-text">
                    <h1>
                        Bumi adalah satu-satunya rumah kita, dan kita
                        harus menjaganya.<br>
                        -Mahatma Gandhi
                    </h1>
                </div>
                <div class="col-5">
                    <img src="img/quote.png" alt="Menanam pohon">
                </div>
            </div>
        </section>
        <section id="why-we-should-care">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/1.png" class="d-block w-100" alt="generasi mendatang">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mengapa Kita Harus Peduli?</h5>
                            <p>Karena Bumi bukan hanya tempat tinggal kita, tapi warisan yang akan kita
                                tinggalkan bagi generasi mendatang. Di sini, setiap pohon yang tumbuh bukan sekadar
                                tumbuhan, melainkan simbol kepedulian kita terhadap lingkungan.</p>
                        </div>
                        <div class="layer"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mengubah Masa Depan</h5>
                            <p>Setiap pohon yang kita tanam bukan hanya memperindah pemandangan, tapi juga
                                memberikan oksigen untuk bernapas. Ini adalah investasi nyata untuk masa depan yang
                                lebih hijau.</p>
                        </div>
                        <div class="layer"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/3.png" class="d-block w-100" alt="Menghubungkan Komunitas">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Menghubungkan Komunitas</h5>
                            <p>Melalui kampanye-kampanye penanaman pohon, kita membangun ikatan yang kuat di antara
                                berbagai komunitas. Bersama-sama, kita memperkuat rasa tanggung jawab kita terhadap
                                lingkungan.</p>
                        </div>
                        <div class="layer"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/4.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Memberi Dampak Nyata</h5>
                            <p>Tiap langkah kecil, tiap pohon yang tumbuh adalah bagian dari perubahan besar. Kita
                                tidak hanya berbicara tentang perubahan, tapi kita menjadi bagian darinya.</p>
                        </div>
                        <div class="layer"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/5.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Melindungi Habitat</h5>
                            <p>Pohon bukan hanya memberikan udara bersih, tapi juga menjadi tempat tinggal bagi
                                beragam spesies. Kita melindungi habitat alamiah dan menjaga keberagaman hayati.</p>
                        </div>
                        <div class="layer"></div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/6.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Bergabunglah dengan Bumi Kita, karena setiap tindakan kecil kita hari ini akan
                                membawa perubahan besar untuk hari esok yang lebih baik.</h5>
                        </div>
                        <div class="layer"></div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section id="about-us">
            <div class="row mt-5 pt-5">
                <div class="col-md-5 custom-col">
                    <div class="container d-flex justify-content-center align-items-center">
                        <img src="img/logo-bumi-kita.png" alt="logo-bumi-kita" style="max-width: 250px">
                    </div>
                    <div class="container d-flex justify-content-center align-items-center my-3">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item"><a href="#"><i class="fa-brands fa-instagram fs-2"></i></a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-brands fa-youtube fs-2"></i></a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-brands fa-linkedin-in fs-2"></i></a>
                            </li>
                            <li class="list-group-item"><a href="#"><i class="fa-brands fa-x-twitter fs-2"></i></a></li>
                            <li class="list-group-item"><a href="#"><i
                                        class="fa-brands fa-square-facebook fs-2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 text-center">
                    <h4>About Us</h4>
                    <p class="fs-5 text-justify">
                        Bumi Kita adalah panggung bagi semangat kepedulian dan aksi nyata terhadap lingkungan. Visi kami
                        adalah menciptakan kebun yang hijau di setiap sudut bumi, satu pohon pada satu langkah. Melalui
                        platform ini, komunitas yang memimpikan kebun hijau dapat dengan mudah berhubungan dengan para
                        volunteer yang ingin beraksi. Kami menyediakan wadah untuk menjembatani keinginan komunitas
                        menanam pohon dengan semangat sukarelawan yang siap memberikan tangan dan hati untuk
                        mewujudkannya. Dari satu tindakan kecil hingga gerakan bersama, kami menyatukan langkah untuk
                        mewariskan bumi yang lebih hijau kepada generasi mendatang.
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
