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
                        <span>Art By</span>
                        <div class="right-sum">
                            @foreach ($comic['artists'] as $artist)
                                <a href="#">{{$artist}}@if (!$loop->last),@endif</a>
                                @endforeach
                        </div>
                    </li>
                    <li>
                        <span>Written By</span>
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
                        <span>Series</span>
                        <div class="right-sum">
                            <a href="#">{{$comic['series']}}</a>
                        </div>
                    </li>
                    <li>
                        <span>U.S. Price</span>
                        <div class="right-sum">
                            <a href="#">{{$comic['price']}}</a>
                        </div>
                    </li>
                    <li>
                        <span>On Sale Date:</span>
                        <div class="right-sum">
                            <a href="#">{{$comic['sale_date']}}</a>
                        </div>
                    </li>
                    <li>
                        <span>Volume/Issue #:</span>
                        <div class="right-sum">
                            <a href="#">1000</a>
                        </div>
                    </li>
                    <li>
                        <span>Trim Size:</span>
                        <div class="right-sum">
                            <a href="#">1000</a>
                        </div>
                    </li>
                    <li>
                        <span>Page Count:</span>
                        <div class="right-sum">
                            <a href="#">1000</a>
                        </div>
                    </li>
                    <li>
                        <span>Date:</span>
                        <div class="right-sum">
                            <a href="#">1000</a>
                        </div>
                    </li>

                </ul>


            </div>


        </div>
    </section>


</main>
@endsection
