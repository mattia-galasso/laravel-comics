@extends("layouts.master")

@php
    $comics = config("comics");
@endphp

@section("content")
    <main>
        {{-- Jumbotron --}}
        <div id="jumbotron">
          <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron Image" />
        </div>
    
        {{-- Current Series --}}
        <section class="pt-5 pb-4" id="main-box">
            <div id="current-series">CURRENT SERIES</div>
            
            {{-- Comics List --}}
            <div class="container">
                <ul class="row gx-0 gy-3" id="comics-list">
                    @foreach ($comics as $comic)
                        <li class="col col-2">
                            <figure>
                                <div class="comicImage">
                                    <img src={{ $comic['thumb'] }} alt={{ $comic['series'] }} />
                                </div>
                                <figcaption class="my-2">{{ $comic['series'] }}</figcaption>
                            </figure>
                        </li>
                    @endforeach
                </ul>
                <div id="btn-box">
                    <button id="more-btn">LOAD MORE</button>
                </div>
            </div>
        </section>
            
        {{-- Banner --}}
        <section id="bannerSection">
            <div class="container">
              <ul id="bannerList">
                <li>
                  <img class="iconComics" src={{ Vite::asset('resources/img/buy-comics-digital-comics.png') }} alt="Icon" />
                  DIGITAL COMICS
                </li>
                <li>
                  <img class="iconBanner" src={{ Vite::asset('resources/img/buy-comics-merchandise.png') }} alt="Icon" />
                  DC MERCHANDISE
                </li>
                <li>
                  <img class="iconBanner" src={{ Vite::asset('resources/img/buy-comics-subscriptions.png') }} alt="Icon" />
                  SUSCRIPTION
                </li>
                <li>
                  <img class="iconLocator" src={{ Vite::asset('resources/img/buy-comics-shop-locator.png') }} alt="Icon" />
                  COMIC SHOP LOCATOR
                </li>
                <li>
                  <img class="iconBanner" src={{ Vite::asset('resources/img/buy-dc-power-visa.svg') }} alt="Icon" />
                  DC POWER VISA
                </li>
              </ul>
            </div>
        </section>
    </main>
@endsection