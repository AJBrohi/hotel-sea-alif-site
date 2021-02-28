<?php
include('header.php')
?>

<body class="bg">
    <div class="container w-100">
        <!-- start #header -->
        <header id="header">
            <!-- start #menu -->
            <?php
            include('navbar.php')
            ?>
            <!-- end #menu -->
        </header>
        <!-- end #header -->

        <!-- start #main -->
        <main>
            <!-- start slider -->
            <?php
            include('slider.php')
            ?>
            <!-- end slider -->

            <!-- start rooms -->
            <section class="mt-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="master-room">
                            <h3>Rooms</h3>
                            <!-- <a href="">View All Rooms</a> -->
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="room_slider">
                            <div class="slider_section owl-carousel">
                                <div class="item1">
                                    <div class="image">
                                        <img class="image__img" src="assets/img/rooms/room1.JPG" alt="">
                                        <div class="image__overlay image__overlay--blur">
                                            <div class="image__title">
                                                <p>Couple AC Room</p>
                                            </div>
                                            <div class="image__description">
                                                <p>Two double bed with attached washroom and free WIFI service.</p>
                                                <p class="taka">Price: BDT <span class="taka-amount ms-2">1500</span>/night</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item1">
                                    <div class="image">
                                        <img class="image__img" src="assets/img/rooms/room2.JPG" alt="">
                                        <div class="image__overlay image__overlay--blur">
                                            <div class="image__title">
                                                <p>Twin Couple AC Room</p>
                                            </div>
                                            <div class="image__description">
                                                <p>One double bed with attached washroom and free WIFI service.</p>
                                                <p class="taka">Price: BDT <span class="taka-amount ms-2">1000</span>/night</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item1">
                                    <div class="image">
                                        <img class="image__img" src="assets/img/rooms/room3.JPG" alt="">
                                        <div class="image__overlay image__overlay--blur">
                                            <div class="image__title">
                                                <p>Couple Deluxe Non-AC Room</p>
                                            </div>
                                            <div class="image__description">
                                                <p>Two single bed with attached washroom and free WIFI service.</p>
                                                <p class="taka">Price: BDT <span class="taka-amount ms-2">2000</span>/night</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item1">
                                    <div class="image">
                                        <img class="image__img" src="assets/img/rooms/room4.JPG" alt="">
                                        <div class="image__overlay image__overlay--blur">
                                            <div class="image__title">
                                                <p>Twin Couple Deluxe Non-AC Room</p>
                                            </div>
                                            <div class="image__description px-5">
                                                <p>Two double bed with attached washroom and free WIFI service.</p>
                                                <p class="taka">Price: BDT <span class="taka-amount ms-2">3000</span>/night</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item1">
                                    <div class="image">
                                        <img class="image__img" src="assets/img/rooms/room4.JPG" alt="">
                                        <div class="image__overlay image__overlay--blur">
                                            <div class="image__title">
                                                <p>Couple Economy Non-AC Room</p>
                                            </div>
                                            <div class="image__description px-5">
                                                <p>Two double bed with attached washroom and free WIFI service.</p>
                                                <p class="taka">Price: BDT <span class="taka-amount ms-2">3000</span>/night</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item1">
                                    <div class="image">
                                        <img class="image__img" src="assets/img/rooms/room4.JPG" alt="">
                                        <div class="image__overlay image__overlay--blur">
                                            <div class="image__title">
                                                <p class="center">Twin Couple Economy Non-AC Room</p>
                                            </div>
                                            <div class="image__description px-5">
                                                <p>Two double bed with attached washroom and free WIFI service.</p>
                                                <p class="taka">Price: BDT <span class="taka-amount ms-2">3000</span>/night</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end rooms -->

            <!-- start gallery -->
            <section class="mt-5" id="gallery">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Gallery</h3>
                        <div id="lb-back">
                            <div id="lb-img"></div>
                        </div>
                        <div class="container gallery-img-height mt-5 zoom">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery1.JPG" class="d-block w-100 zoomPic" alt="Image1"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery2.JPG" class="d-block w-100 zoomPic" alt="Image2"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery3.JPG" class="d-block w-100 zoomPic" alt="Image3"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery4.JPG" class="d-block w-100 zoomPic" alt="Image4"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery5.JPG" class="d-block w-100 zoomPic" alt="Image5"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery6.JPG" class="d-block w-100 zoomPic" alt="Image6"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery7.JPG" class="d-block w-100 zoomPic" alt="Image7"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery8.JPG" class="d-block w-100 zoomPic" alt="Image8"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery9.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery10.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery11.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                                <div class="col-sm-12 col-md-6 col-lg-3"><img src="./assets/img/gallery/gallery12.JPG" class="d-block w-100 zoomPic" alt="Image9"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end gallery -->

            <!-- start about us -->
            <!-- <section class="mt-5 remove-margin">
                <div class="about_us position-relative">
                    <img src="assets/img/gallery/about.jpg" class="img-fluid" alt="">
                    <div class="position-absolute">
                        <div class="row text-center">
                            <div class="col-sm-12 col-md-6 col-lg-3 about_text">
                                <h3>A Little More About</h3>
                                <div class="bord"></div>
                                <h2>Hotel Sea Alif</h2>
                                <span>Cheap | Comfort | Safety | Security</span>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-3 about_right">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eius? Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga id rem non odio officiis necessitatibus. Dolorem provident perspiciatis cum. Possimus itaque provident voluptatum cumque molestias, nam eius, incidunt, minima iure deleniti natus non! Adipisci, et eius esse optio tenetur libero.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- start about section -->
            <section class="mt-5 remove-margin">
                <div class="overlay">
                    <img src="assets/img/gallery/about.jpg" class="img-fluid overlay-image" alt="">
                    <div class="row d-flex justify-content-center align-items-center about-overlay">
                        <div class="col-sm-12 col-md-10 col-lg-8">
                            <h3>A Little More About</h3>
                            <!-- <div class="bord"></div> -->
                            <h2>Hotel Sea Alif</h2>
                            <p>Cheap | Comfort | Safety | Security</p>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-4 text-center">
                            <p style="font-size: 20px;">Hotel Sea Alif is one of the living standard luxury hotels in Cox's Bazaar in affordable for all classes.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about us -->

            <!-- start places to visit -->
            <section class="container mt-3">
                <div class="row">
                    <div class="col-md-12 mt-5 text-center">
                        <h4 style="font-size: 25px;">Places to Visit in</h4>
                        <h3 style="font-size: 35px; letter-spacing: 1px; font-weight: 500;">Cox's Bazar</h3>
                    </div>
                    <div class="places">
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" class="w-100 img-fluid" alt="">
                                <h4>Cox's Bazar Sea Beach</h4>
                                <p>Cox's Bazar Beach, located at Cox's Bazar, Bangladesh, is the longest natural sea
                                    beach in the
                                    world running 150 kilometres.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" alt="">
                                <h4>Sonadia Island</h4>
                                <p>Sonadia Island is a small island of about 9 square kilometres (3.5 square miles),
                                    offshore of the
                                    Cox's Bazar coast in Chittagong Division, Bangladesh</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" alt="">
                                <h4>Himchori Waterfall</h4>
                                <p>Observe the diverse wildlife found at Himchori Waterfall, with over 55 animal species
                                    and 117
                                    plant species located in the national park, including elephants, tigers, wild boars,
                                    sloths, and
                                    many more.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" alt="">
                                <h4>Ramu</h4>
                                <p>Ramu is a village in Bangladesh. It is the headquarters of Ramu Upazila, Cox's Bazar
                                    District. It
                                    is located on the Baghkhali River, approximately sixteen miles from Cox's Bazar</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" alt="">
                                <h4>Adinath Temple</h4>
                                <p>Adinath Temple, located on the summit of Mainak Hill on Maheshkhali Island off the
                                    coast of Cox's
                                    Bazar, Bangladesh, is dedicated to the Hindu God, Shiva, who is worshipped as
                                    Adinath.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" alt="">
                                <h4>Kolatoli Point</h4>
                                <p>Kolatoli Point is a part of Cox's Bazar beach situated near Dolphine Moure of Cox's
                                    Bazar city.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" alt="">
                                <h4>100 feet Buddha</h4>
                                <p>100 Feet Buddha is located in Cox's Bazar. Plan to see 100 Feet Buddha and other
                                    attractions that
                                    appeal to you using our Cox's Bazar trip maker tool.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" alt="">
                                <h4>Laboni Beach</h4>
                                <p>The oldest beach area in Cox's Bazar and undoubtedly the most popular one. Amazing
                                    view of the
                                    coastal line all day round. Hotels are very nearby. There is big market to buy
                                    souvenir.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/gallery/beach.jpg" alt="">
                                <h4>Saint Martin</h4>
                                <p>St. Martin's Island is a small island (area only 3 km2) in the northeastern part of
                                    the Bay of
                                    Bengal, about 9 km south of the tip of the Cox's Bazar-Teknaf peninsula, and forming
                                    the
                                    southernmost part of Bangladesh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end places to visit -->
        </main>
        <!-- end #main -->

        <!-- start #footer -->
        <?php
        include('footer.php')
        ?>
        <!-- end #footer -->
</body>

</html>