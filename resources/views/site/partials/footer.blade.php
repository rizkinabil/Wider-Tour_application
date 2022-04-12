<footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Wider</h2>
                    <p>Find your beloved destination here with our agency</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Categories</h2>
                    @foreach ($categories as $category)
                        <div class="col-6">
                            <a href="#">
                                {{ $category->name }}
                            </a>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Tags</h2>
                    @foreach ($tags as $tag)
                        <div class="col-6">
                            <a href="#">
                                {{ $tag->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">
                                    <p> <span style="font-weight: bold;"> Telkom University </span> <br> Bojogsoang
                                        <br>Kab. Bandung <br> Jawa Barat
                                    </p>
                                </span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62
                                        821338377</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">wider.travel@wider.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">


            </div>
        </div>
    </div>
</footer>
