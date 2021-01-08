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

            </div>
            <div class="advertising">
                <h4 class="text-up">advertisement</h4>
                <img src="{{asset('images/adv.jpg')}}" alt="">

            </div>


        </div>


    </section>

</main>
@endsection
