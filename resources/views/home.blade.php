@extends('layouts.app')

@section('seo-title','Home')
@section('content')
<main>
    <section id="jumbo"></section>
    <section id="products">
        <div class="wrapper">
            <h2 class="text-up">Current series</h2>
            <div class="comic-bag">
                @foreach ($comics as $item)
                    <div class="comic-card">
                        <figure>
                            <img src="{{$item['thumb']}}" alt="">
                        </figure>
                        <p class="text-up">{{$item['series']}}</p>
                    </div>

                @endforeach

            </div>
            <div class="load-more">
                <a class="btn text-up"href="#">load more</a>
            </div>
        </div>
        <nav class="cta">
            <div class="wrapper">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{asset('/images/buy-comics-digital-comics.png')}}" alt="">
                            <span class="text-up">digital comics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('/images/buy-comics-merchandise.png')}}" alt="">
                            <span class="text-up">dc merchandise</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('/images/buy-comics-subscriptions.png')}}" alt="">
                            <span class="text-up">subscription</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('/images/buy-comics-shop-locator.png')}}" alt="">
                            <span class="text-up">comics shop locator</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{asset('/images/buy-dc-power-visa.svg')}}" alt="">
                            <span class="text-up">dc power visa</span>
                        </a>
                    </li>
                </ul>

            </div>
        </nav>


    </section>
</main>
@endsection
