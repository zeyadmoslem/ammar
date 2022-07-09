<?php
session_start();
$title = 'Leistungen';
include 'includes/head.php';
include 'includes/header.php';
?>


<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70 text-center">
                            <h2>Unsere Leistungen</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
        <!--? About Area Start -->
        <section class="about-area services_site section-padding30 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-11">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption">

                        <div class="pricing-list">
                                <h4 class="title">Herren: </h4>
                                <ul>
                                    <li>Trocken Schneiden <span class="price">15 €</span></li>
                                    <li>Waschen + Schneiden <span class="price">18 €</span></li>
                                    <li>Waschen + Schneiden + Bart Komplett<span class="price">28 €</span></li>
                                    <li>Enthaarungswax (Wangen + Ohren)<span class="price">5 €</span></li>
                                    <li>Gesichtsmasken<span class="price">8 €</span></li>
                                    <li>Haarkur<span class="price">8 €</span></li>
                                    <li>Augenbrauen<span class="price">7 €</span></li>
                                    <li>Bart Komplett (Vollerasur)<span class="price">10 €</span></li>
                                    <li>Kinder (Bis 10 Jahre)<span class="price">10 €</span></li>
                                    <li>Clippers Paket <span class="price">40 €</span> <span class="desc">Waschen, Schneiden, Bartpflege, Wax
                                            Gesichtsmaske, Harrkur</span></li>

                                </ul>
                            </div>

                    </div>
                </div>
            </div>

            <div class="row align-items-center pt-30">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption">
                        <div class="pricing-list">
                                <h4 class="title">Damen: </h4>
                                <span class="sizes">S &nbsp; &nbsp; &nbsp; &nbsp;M &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; L</span>
                                <ul>
                                    <li>Waschen, Schneiden, Föhnen<span class="price">30€ &nbsp; &nbsp; &nbsp;40€ &nbsp; &nbsp; &nbsp;45€</span></li>
                                    <li>Waschen- Styling <span class="price">20€ &nbsp; &nbsp; &nbsp;25€ &nbsp; &nbsp; &nbsp;30€</span></li>
                                    <li>Ansatzfarbe <span class="price">Ab 35€</span></li>
                                    <li>Dauerwelle (mit Schneiden und Föhnen) <span class="price">Ab 95€</span></li>
                                    <li>Halber Kopf Strähnen - Schneiden Föhnen<span class="price">Ab 75€</span></li>
                                    <li>Strähnen - Schneiden- Föhnen <span class="price">Ab 100€ </span></li>
                                    <li>Kopfhautpflege<span class="price">Ab 10€ </span></li>
                                </ul>
                                <h4 class="price_desc">Preise Variieren je nach Haarlänge und Haardicke</h4>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="assets/img/gallery/about3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Shape -->
        <div class="about-shape">
            <img src="assets/img/gallery/about-shape.png" alt="">
        </div>
    </section>
    <!-- About-2 Area End -->

</main>
<?php
include 'includes/footer.php' 
?>