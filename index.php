<?php
session_start();
$title = 'Startseite';
include 'includes/head.php';
include 'includes/header.php';
?>

<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative fix">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay="0.2s">Damen & Herren</span>
                                <h1 data-animation="fadeInUp" data-delay="0.5s">Mein Bester Friseur</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay="0.2s">Mein Bester Friseur</span>
                                <h1 data-animation="fadeInUp" data-delay="0.5s">Ihre Frisur macht Ihren Look elegant</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- stroke Text -->
        <div class="stock-text">
            <h2>Get More confident</h2>
            <h2>Get More confident</h2>
        </div>

    </div>
    <!-- slider Area End-->
    <!--? About Area Start -->
    <section class="about-area section-padding30 position-relative">
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
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3 mb-35">
                            <span>Über Uns</span>
                            <h2>16 Jahre Erfahrung im Haarschnitt!</h2>
                        </div>
                        <p class="mb-30 pera-bottom">flexibel, komfortabel und modern präsentiert mein bester friseur Ihre Dienstleistungen. Sie können Ihre Lieblingsfrisur auswählen.</p>
                        <p class="pera-top mb-50"><span style="color: #f1e150;">Mein Bester Friseur</span> Ihre Frisur macht Ihren Look elegant</p>
                        <img src="assets/img/gallery/signature.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row align-items-center pt-30">
                <div class="col-lg-6 col-md-12">
                    <div class="about-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3 mb-35">
                            <h2>Damen und Herren Friseur Salon</h2>
                        </div>
                        <p class="mb-30 pera-bottom">Lassen Sie Ihr Haar das Fenster zur Welt in Ihrem Kopf sein.</p>
                        <p class="pera-top mb-50"><span style="color: #f1e150;">Mein Bester Friseur</span> Ihre Frisur macht Ihren Look elegant</p>
                        <img src="assets/img/gallery/signature.png" alt="">
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
    <!--? Services Area Start -->
    <section class="service-area pb-170">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-11 col-sm-11">
                    <div class="section-tittle text-center mb-90">
                        <span>Professionelle Dienste</span>
                        <h2>Unsere besten Dienstleistungen, die wir Ihnen anbieten</h2>
                    </div>
                </div>
            </div>
            <!-- Section caption -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <img src="assets/img/elements/womean.jpeg" alt="" width="100%" height="100%">
                        </div>
                        <div class="service-cap">
                            <h4><a>Damen</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption active text-center mb-30">
                        <div class="service-icon">
                            <img src="assets/img/elements/mean.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="service-cap">
                            <h4><a>Herren</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <img src="assets/img/elements/kids.jpg" alt="" width="100%" height="100%">
                        </div>
                        <div class="service-cap">
                            <h4><a>Kinder</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!-- Best Pricing Area Start -->
    <div class="best-pricing section-padding2 position-relative">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="section-tittle mb-50 text-center">
                        <span>Unser bester Preis</span>
                        <h2>Wir bieten den besten Preis<br> in der Stadt!</h2>
                    </div>
                    <!-- Pricing  -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 flex-content-center ">
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
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-s-20  flex-content-center">
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
                </div>
            </div>
        </div>

    </div>
    <!-- Best Pricing Area End -->

    <!-- Cut Details Start -->
    <div class="cut-details section-bg section-padding2" data-background="assets/img/gallery/section_bg02.png">
        <div class="container">
            <div class="cut-active dot-style">
                <div class="single-cut">
                    <div class="cut-icon mb-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                            <image x="0px" y="0px" width="50px" height="50px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                        </svg>
                    </div>
                    <div class="cut-descriptions">
                        <p>Super freundlicher Friseur. Schönes Friseurstudio und super Schnitt :-) nur zu empfehlen!!!
                        </p>
                        <span>M. Zeyad</span>
                    </div>
                </div>
                <div class="single-cut">
                    <div class="cut-icon mb-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                            <image x="0px" y="0px" width="50px" height="50px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                        </svg>
                    </div>
                    <div class="cut-descriptions">
                        <p>TOP!!! Kann ich nur empfehlen. Gut, schnell und günstig. Ohne Termin, waschen, schneiden für 15€.
                        </p>
                        <span>R. Herrman</span>
                    </div>
                </div>
                <div class="single-cut">
                    <div class="cut-icon mb-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px">
                            <image x="0px" y="0px" width="50px" height="50px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAQAAAC0NkA6AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBQ4MDDIERuyfAAADc0lEQVRYw7WYXWxTZRjH/+e0ikhh7QgfiYJZZ7bhBC6mU0LQ6DBADNGYLEaNJGpi4jTEQczYjQG8EL2ThAUTvTRGBwmECyBA+XRKHJpUL1yXFseWbe1ixgZCSAg/Lmo9bXe+up0+/5vT//Oc9/ee8z7nqwbyGbVqUL2iiuiurmtMKf2tu/52DXtW1OhVtekFRZTSkCY1rYcV0VI1arl+VULH9JvnGLhpHT/wD728z+M22QVs5ksyJOlkgds4zqlWEgzSQQ3uEzF4ju8ZpZsHK4NEOcgo7xL2AFhq4CgDtPmHPEWGg0R9AwrayjD77CY2s/RtsrRXDMhrCSc5wyIvyE6GaJ4lQogQB/idZW6QjxlkxRwQee0lWdoupec0a9uqlauHM8VrYyXqyLIuEIQIcYLPZ0JC/EJnQIh8C4xYDV0wO0hgBAgRm0kxrxhSS46mQBFCHKa7GLKbbwNHiCayRAqQCBMBdVW5etlRgGzjWFUQYgMDGHnIaZfbSIxTWNFP3MGzl0GaViQWMVXoAhv9SGn0O3hO+oLPkHiZ4y5FacrD3nPSJn5GptbrJ7+P+VnERa3VA6bWKFlFyC0NqdFUXOkqQqS06kwt1XhVIeNaZiqqSZeS0z4955jWwrBCuudSskvSRklSTDEXzznuaJ74l/m+rt4Wm3Zt8WxhcYAOU5Na7OuwJ3165RHTlKlhrfQFaZckXfH0ymOFhsNKaZX6POYSU7v2SZJ6XTz7aFJKbKfH9ZxuLLp9pIk5evaKM4ZMndXzrjOJ/7+V0Uv/rYKdZx9tOi8Jg3HqPY+kn66iGdt59jrMe/nnyX52V+mhVcsNFuchLWQqeH+vRB9xCBVeJC7xZhUQYTKstyBb+JNQ4JB3OJvfKhgJPggYEeEaz5ZCmpgI4H2+WD18Xdi2zG4uBbj8r5GxvtUs2+AE+wNCrCZHq/W7OBUlya4AEI9yjbeKnfL0VbrmiIgzyCelXnnJI/zBV3NYm6cZoaPcnVkW4yQXZtVpBp1keWVmxq7YpIsc2ys8nmbOc5k6u5zTLqtIkOQNn/eBer4hx4eY9nm3XbdwkTSfun67PEQ7R8ixh1rnKsPj/64WbdPrmtI5XdGAruqGrmu+IlquBj2hDXpGl/WdDumm2yBeEEky9KRe1Go16jFFFNVt3dSEUvpLfbqgae8B7gNdcvnkrRzZ4gAAAABJRU5ErkJggg==" />
                        </svg>
                    </div>
                    <div class="cut-descriptions">
                        <p>Sehr zu empfehlen. Haarschnitt top. Bartrasur ebenfalls sehr professionell.
                        </p>
                        <span>S. Ali</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cut Details End -->

</main>
<?php
include 'includes/footer.php' 
?>