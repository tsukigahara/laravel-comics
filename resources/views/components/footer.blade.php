<div class="top">
        <div class="container">
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <h5>DIGITAL COMICS</h5>
            </a>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <h5>DIGITAL COMICS</h5>
            </a>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <h5>DIGITAL COMICS</h5>
            </a>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <h5>DIGITAL COMICS</h5>
            </a>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <h5>DIGITAL COMICS</h5>
            </a>

        </div>
    </div>

    <!-- footer -->
    <footer style="background-image: url('{{ Vite::asset('resources/img/footer-bg.jpg')}}')">
        <!-- bg dc logo (needs to fix) -->
        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">

        <div class="container">

            <!-- footer nav -->
            <nav>
                <!-- v-for using props -->
                <div class="d-none d-lg-block">
                    <!-- nav name -->
                    <h3>DC COMICS</h3>

                    <!-- link list -->
                    <ul>
                        <li>
                            <a href="#">
                            Characters
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            Comics
                            </a>
                        </li>
                        <li>  
                            <a href="#">
                            Movies
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            TV
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            Games
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            Videos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            News
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </footer>

    <!-- bottom bar -->
    <div class="bottom">
        <div class="container">
            <!-- sign button -->
            <a name="" id="" class="btn btn-outline-primary rounded-0" href="#" role="button">SIGN UP NOW!</a>

            <!-- follow options -->
            <div>
                <h3>FOLLOW US</h3>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                </a>
                <a href="">
                    <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
</template>