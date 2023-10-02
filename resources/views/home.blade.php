@extends('layouts.master')

@section('content')


<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Untukmu</span>
                    <h3>Tablet</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="/order" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/tablet.jpg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Untukmu</span>
                    <h3>Sirup</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="/order" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/sirup.jpg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Untukmu</span>
                    <h3>Inhaler</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="/order" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/inhaler.jpg" alt="">
                </div>
            </div>

        </div>


    </div>

</section>
@endsection