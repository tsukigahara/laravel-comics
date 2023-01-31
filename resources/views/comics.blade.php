@extends('layout.main')
@section('head')
<title>Comics</title>    
@endsection
@section('content')
    <section class="comics">
        <!-- jumbo div -->
        <div class="jumbo" style="background-image: url('{{ Vite::asset('resources/img/jumbotron.jpg')}}')">
            <!-- title -->
            <div class="section_title">
                CURRENT SERIES
            </div>
        </div>
        <!-- contents -->
        <div class="container p-5">
            <!-- bootrap grid system -->
            <div class="row row-cols-lg-6 row-cols-md-4 row-cols-sm-3 row-cols-2 g-3">
                <!-- vfor using props -->
                <div class="col">
                    <a href="comic_details">
                        <!-- card -->
                        <div class="card bg-transparent">
                            <!-- card image -->
                            <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" class="card-img-top rounded-0" alt="">
                            <!-- card boby -->
                            <div class="card-body px-0">
                                <!-- card title -->
                                <h5 class="card-title my_card-title">ACTION COMICS</h5>
                                <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                    additional
                                    content. This content is a little bit longer.</p> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection