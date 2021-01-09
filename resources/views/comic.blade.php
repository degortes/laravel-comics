@extends('layouts.app')

@section('seo-title','Home')
@section('content')
<main>
    <section id="jumbo"></section>
    <section id="details">
        <div class="h-bar">
            <div class="container">
                <figure class="big-cover">
                    <span class="text-up">comic book</span>
                    <img src="{{$comic['thumb']}}" alt="">
                    <p class="text-up">view gallery</p>
                </figure>
            </div>
        </div>
    </section>
    <section id="info-comic">
        <div class="container">
            <div class="expanded-info">
                <h1 class="text-up">{{$comic['title']}}</h1>
                <div class="info-bar">
                    <div class="info-left">
                        <p>U.S. Price <span>{{$comic['price']}}</span> </p>
                        <p class="text-up">available</p>
                    </div>
                    <div class="info-right">
                        <p>Check Availability ▼ </p>
                    </div>
                </div>
                <div class="description">
                    <p>{{$comic['description']}}</p>
                </div>

            </div>
            <div class="advertising">
                <h4 class="text-up">advertisement</h4>
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <section id="summary">
        <div class="container">
            <div class="talent">
                <h2>Talent</h2>
                <ul>
                    <li>
                        <h4>Art By</h4>
                        <div class="right-sum">
                            @foreach ($comic['artists'] as $artist)
                                <a href="#">{{$artist}}@if (!$loop->last),@endif</a>
                                @endforeach
                        </div>
                    </li>
                    <li>
                        <h4>Written By</h4>
                        <div class="right-sum">
                            @foreach ($comic['writers'] as $artist)
                                <a href="#">{{$artist}}@if (!$loop->last),@endif</a>
                                @endforeach
                        </div>
                    </li>
                </ul>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <ul>
                    <li>
                        <h4>Series</h4>
                        <div class="right-sum">
                            <a class="text-up"href="#">{{$comic['series']}}</a>
                        </div>
                    </li>
                    <li>
                        <h4>U.S. Price</h4>
                        <div class="right-sum">
                            <p>{{$comic['price']}}</p>
                        </div>
                    </li>
                    <li>
                        <h4>On Sale Date:</h4>
                        <div class="right-sum">
                            <p>{{DateTime::CreateFromFormat('Y-m-d' , $comic['sale_date'])->format('M d Y')}}</p>
                        </div>
                    </li>
                    <li>
                        <h4>Volume/Issue #:</h4>
                        <div class="right-sum">
                            <p>1000</p>
                        </div>
                    </li>
                    <li>
                        <h4>Trim Size:</h4>
                        <div class="right-sum">
                            <p>1000</p>
                        </div>
                    </li>
                    <li>
                        <h4>Page Count:</h4>
                        <div class="right-sum">
                            <p>1000</p>
                        </div>
                    </li>
                    <li>
                        <h4>Rated:</h4>
                        <div class="right-sum">
                            <p>1000</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="more-services">
        <div class="container cta">
            <figure>
                <figcaption class="text-up">digital comics</figcaption>
                <img src="{{asset('images/cta-icons.png')}}" alt="">
            </figure>
            <figure>
                <figcaption class="text-up">Shop Dc</figcaption>
                <img src="{{asset('images/cta-icons.png')}}" alt="">
            </figure>
            <figure>
                <figcaption class="text-up">comic shop locator</figcaption>
                <img src="{{asset('images/cta-icons.png')}}" alt="">
            </figure>
            <figure>
                <figcaption class="text-up">subscriptions</figcaption>
                <img src="{{asset('images/cta-icons.png')}}" alt="">
            </figure>
        </div>

    </section>


</main>
@endsection
