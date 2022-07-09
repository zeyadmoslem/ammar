<header>
        <!--? Header Start -->
        <div class="header-area header-transparent pt-40">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-1">
                            <div class="logo">
                                <a href="index.html">Mein Bester Friseur</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="<?= $title == 'Startseite' ? 'active' : ''?>" ><a href="index.php">Startseite</a></li>
                                            <li class="<?= $title == 'Leistungen' ? 'active' : ''?>" ><a href="services.php">Leistungen</a></li>
                                            <li class="<?= $title == 'Impressum' ? 'active' : ''?>" ><a href="imprint.php">Impressum</a></li>
                                            <li class="<?= $title == 'Kontakt' ? 'active' : ''?>" ><a href="contact.php">Kontakt</a></li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>