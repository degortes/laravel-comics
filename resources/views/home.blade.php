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
                        <p>{{$item['series']}}</p>
                    </div>

                @endforeach

            </div>

        </div>

    </section>
</main>
@endsection
