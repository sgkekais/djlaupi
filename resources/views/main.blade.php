@extends('layout')

@section('content')
    <!-- Masthead -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">DJ Laupi - Dein Veranstalter für Musik-Events und mehr in Düsseldorf und größerer Umgebung</h1>
                    <hr class="divider my-4">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">&nbsp;</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#UeberMich">Neugierig?</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="page-section pt-5 pb-5" id="UeberMich" >
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0 font-weight-bolder"></h2>
                    <div class="mb-4">
                        <img src="/images/banner_djlaupi.png" class="img-fluid" alt="Banner-DJ-Laupi">
                    </div>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#UberMich2">Mehr Infos!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-primary text-white" id="UberMich2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0 font-weight-bolder">Ich spiele was du brauchst!</h2>
                    <hr class="divider border-white my-4">
                    <div class="mb-4">

                        HERZLICH WILLKOMMEN BEI DJ Laupi ENTERTAINMENT - Dem Veranstalter für Musik-Events und mehr...
                        Ich habe über 10 Jahre Erfahrung als DJ gesammelt. Mir ist besonders wichtig: Professionalität, Zuverlässigkeit, Pünktlichkeit und die Zufriedenheit meiner Kunden.
                        Ich organisiere ein optimales Musikarrangement mit Lichteffekten, Nebelmaschinen, Schaummaschine und Stroboskopen.
                        Ob Geburtstag - Polterabend - Hochzeit - Silberhochzeit - Firmenfeier
                        Sommerfest - Karneval - Privatparty oder Jubiläum.
                        Meine Musikauswahl wird jeder Altersgruppe gerecht.
                        Sie erwartet ein erstklassiges, hochwertiges DJ Equipment mit einem Sound bis zu 3000 W.
                        Für Ansprachen oder Festreden steht Ihnen ein Funkmikrofon zur Verfügung.
                        Zu meinem Service gehört es telefonisch oder in einem persönlichen Gespräch weitere Details für Ihre Feier abzusprechen.

                    </div>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#Leistungen">Noch mehr Infos!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="page-section" id="Leistungen" style="background-image: url('images/about.jpg'); background-size: cover ">
        <div class="container">
            <h2 class="text-center text-white mt-0 font-weight-bolder">Zu Diensten</h2>
            <hr class="divider my-4">
            <div class="row px-4">
                <div class="col-lg-3 col-md-6 text-center bg-white rounded mb-2">
                    <div class="m-4">
                        <i class="fas fa-4x fa-lightbulb text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Abstimmung <i class="fas fa-check" style="color: green"></i></h3>
                        <p class="text-muted mb-0">Optimales Musikarrangement mit Lichteffekten, Stroboskopen, Nebel- und Schaummaschinen </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center bg-white rounded mb-2">
                    <div class="m-4">
                        <i class="fas fa-4x fa-glass-cheers text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Anlass <i class="fas fa-check" style="color: green"></i> </h3>
                        <p class="text-muted mb-0">Geburtstag - Polterabend - Hochzeit - Silberhochzeit - Firmenfeier - Sommerfest - Karneval - Privatparty oder Jubiläum</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center bg-white rounded mb-2">
                    <div class="m-4">
                        <i class="fas fa-4x fa-compact-disc text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Musik <i class="fas fa-check" style="color: green"></i></h3>
                        <p class="text-muted mb-0">Individuell auf Dich und deine Gäste angepasst! Mein Repertoire lässt keine Wünsche offen und umfasst Hits der 60er und 90er, House, Rock & Schlager, Party- und Karnevalshits, Dance Classics, NDW, Ballerman-Hits und Deutsche Musik!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center bg-white rounded mb-2">
                    <div class="m-4">
                        <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Dein Abend <i class="fas fa-check" style="color: green"></i></h3>
                        <p class="text-muted mb-0">Persönliche Playlist? Persönliches Treffen! Zufriedenheit ist mir am wichtigsten.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="page-section portfolio" id="gallery">
        <div class="container-fluid p-0">
            <h2 class="text-center mt-0 font-weight-bolder">Bilder</h2>
            <hr class="divider my-4">
            <div class="row no-gutters">
                @foreach($gallery_items as $gallery_item)
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('storage/'.$gallery_item->imgpath) }}">
                            <img class="img-fluid" src="{{ asset('storage/'.$gallery_item->imgpath) }}" alt="{{ $gallery_item->title }}">
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">
                                    {{ $gallery_item->title }}
                                </div>
                                <div class="project-name">
                                    {{ $gallery_item->subtitle }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container-fluid p-0 mt-4">
            <h2 class="text-center mt-0 font-weight-bolder">Videos</h2>
            <hr class="divider my-4">
            <div class="row no-gutters">
                @foreach($video_links as $video_link)

                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ $video_link->url }}">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $video_link->url }}" allowfullscreen></iframe>
                            </div>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="page-section  text-white" id="Check24" style="background-color: #37474F">
        <div class="container text-center">
            <h2 class="mb-4 font-weight-bolder">Schau dir mein Profil bei Check24 an!</h2>
            <hr class="divider my-4">
            <img src="images/check24.png" class="img-fluid" title="Check24 Top Profi" alt="Check24 Top Profi" width="200px">
            <br>
            <a class="btn btn-light btn-xl mt-4" href="https://profis.check24.de/profil/dj-laupi/lovqob" title="Zu Check24" target="_blank">Zu Check24</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="page-section" id="Kontakt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0 font-weight-bolder">Lass von Dir hören!</h2>
                    <hr class="divider my-4">
                    <p class="text-muted mb-5">Ich habe dein Interesse gewecket und Du möchtest mir eine Anfrage stellen? Melde Dich für ein persönliches Angebot.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>+49 (0) 176 70 95 92 25</div>
                </div>
                <div class="col-lg-3 text-center mb-5 mb-lg-0">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <a class="d-block" href="mailto:djlaupi@gmail.com">djlaupi@gmail.com</a>
                </div>
                <div class="col-lg-3 text-center mb-5 mb-lg-0">
                    <a href="https://www.facebook.com/djlaupi/" target="_blank" title="DJ Laupi auf Facebook">
                        <i class="fab fa-facebook fa-3x mb-3 text-muted"></i>
                        <div>Facebook</div>
                    </a>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="https://www.youtube.com/channel/UCyXp0mka0-ffk3vgtqtKFvw" target="_blank" title="DJ Laupi auf YouTube">
                        <i class="fab fa-youtube fa-3x mb-3 text-muted"></i>
                        <div>YouTube</div>
                    </a>
                </div>

            </div>
            <div class="row justify-content-center mt-5">
                <img class="" src="images/logo_small.png" alt="DJ Laupi Logo">
            </div>
        </div>
    </section>
@endsection