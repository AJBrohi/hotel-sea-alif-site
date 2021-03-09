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
                            <h3 class="borderrr">Rooms</h3>
                            <!-- <a href="">View All Rooms</a> -->
                        </div>

                    </div>
                </div>
                <div class="row mt-5">
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
                                        <img class="image__img" src="assets/img/rooms/room5.JPG" alt="">
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
                                        <img class="image__img" src="assets/img/rooms/room6.JPG" alt="">
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
                        <h3 class="master-room borderrr text-center">Gallery</h3>
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
                        <h4 style="font-size: 23px; color:darkgoldenrod; font-weight:600; margin-left:50px;">Places to Visit in</h4>
                        <h3 class="borderrr master-room" style="font-size: 35px; letter-spacing: 1px; font-weight: 600;">Cox's Bazar</h3>
                    </div>
                    <div class="places">
                        <div class="row mt-4">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places1.jpg" class="w-100 img-fluid" alt="Cox's Bazar Sea Beach">
                                <h4>Cox's Bazar Sea Beach</h4>
                                <p>Cox's Bazar, the most alluring place of interest for Bangladesh, and not just for Bangladesh it's the longest ocean sea shore on the planet. 120 Kilometers sandy ocean sea shore with a delicate slant and it's the traveler capital of Bangladesh.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places3.jpg" alt="Himchori Waterfall">
                                <h4>Himchori Waterfall</h4>
                                <p>Numerous attractions are for the sightseers around Cox's Bazar. You can come Himchori to see it's Waterfall, this is renowned for cascade, however in the colder time of year season it diminishes yet during the blustery season it's actually a breathtaking and full cascade can be appreciated.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places2.jpg" alt="Sonadia Island">
                                <h4>Sonadia Island</h4>
                                <p>Sonadia Island is found 15 km north-west of Cox's Bazar Sadar and south of Maheshkhali Dwip.Sonadia Island is encircled by the ocean sea shore on the three sides. Then again, the common little trees, channels and various kinds of birds and ocean creatures have made the spot special and appealing. Also, the island is known as the paradise of birds.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places4.jpg" alt="Ramu">
                                <h4>Ramu</h4>
                                <p>Ramu is situated on the Baghkhali River, around sixteen miles from Cox's Bazar. Ramu has Mosque, pagodas, Buddhist cloisters, and a bronze Buddha sculpture that is 13-feet in stature.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places6.jpg" alt="Radiant Fish World">
                                <h4>Radiant Fish World</h4>
                                <p>Radiant Fish World is the spot to investigate experience with some information. It is the main ocean aquarium in Bangladesh. On the off chance that you are searching for eco-the travel industry with amusement, Radiant Fish World can be the most ideal decision for you.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places5.jpg" alt="Adinath Temple">
                                <h4>Adinath Temple</h4>
                                <p>Adinath Temple, situated on the culmination of Mainak Hill on Maheshkhali Island off the bank of Cox's Bazar, Bangladesh, is committed to the Hindu God, Shiva, who is venerated as Adinath. The sanctuary is acclaimed for the yearly reasonable held at the foot of Mainak Hill in the long stretch of Phalgun according to the Bengali schedule.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places8.png" alt="Inani Beach">
                                <h4>Inani Beach</h4>
                                <p>Inani Beach is an ocean sea shore in Ukhia Upazila of Cox's Bazar District, around 18 kilometers in length. It has a decent view and has heaps of coral stones. The Hills can be seen from one side and the ocean on the other which makes it truly amazing. The perspective on the dawn and dusk of this sea shore is entirely paramount.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places7.jpg" alt="Bangabandhu Safari Park">
                                <h4>Bangabandhu Safari Park</h4>
                                <p>The Bangabandhu Safari Park at Dulahazra has been set up in 2001 which is situated on Cox's Bazar high route under Chakoria Upazilla. The Park is home to 340 types of plants and 286 types of birds. It is first government safari park in Bangladesh.</p>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <img src="assets/img/places/places9.jpg" alt="Saint Martin">
                                <h4>Saint Martin</h4>
                                <p>St. Martin's Island is a little island in the northeastern piece of the Bay of Bengal. It is the lone coral island in Bangladesh. The best way to arrive at St. Martin's Island is by water transportation: boats and ships from Cox Bazar and Teknaf.</p>
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