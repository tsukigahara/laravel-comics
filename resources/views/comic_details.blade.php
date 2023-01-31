@extends('layout.main')
@section('head')
<title>Comics</title>    
@endsection
@section('content')
    <section class="comic-details">
        <!-- jumbo div -->
        <div class="jumbo" style="background-image: url('{{ Vite::asset('resources/img/jumbotron.jpg')}}')">
        </div>
        <div class="container py-5">
                <!-- title -->
                <div class="section_title">
                    <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
                </div>
                <h2>Action Comics #1000: The Deluxe Edition</h2>
                <div>$19.99</div>
                <p>
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p>
                <div class="ads">
                    <small class=" d-block">ADVERTISEMENT</small>
                    <a href="">

                        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
                    </a>
                </div>

            </div>
    </section>
@endsection