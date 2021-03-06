@extends('index')
    @section('content')
        <div class="container is-fullhd">
            <div class="slider is-flex has-radius-large">
            <img src="{{asset("svg/slider1.svg")}}" class="slider-svg">
                <div class="content">
                    <h2>Your Course to Success</h2>
                    <p class="content-normal">100,000+ High-Quality On-Demand Online Courses! Find the right instructor for you. Any topic, skill level, or language.</p>
                    <a href="" class="button is-info">Learn more</a>
                </div>
                <figure>
                    <img src="{{ asset('svg/slider2.svg') }}">
                </figure>
            </div>
        </div>
        @include('pages.includes.upcoming-courses')
        @include('pages.includes.tutors')
        <div class="get-started">
            <h1>It’s easy to get started</h1>
            <p class="is-size-5">Jouin our platform for free. Just click button below</p>
            <a href="" class="button is-primary is-rounded">Create a free Account</a>
        </div>

        <div class="container is-fullhd training-courses">
            <h1 class="has-text-centered">Current Training Courses</h1>
            <div class="training-courses-swiper">
                <div class="swiper-wrapper">
                    @foreach ([1, 2, 3] as $item)
                        <div class="swiper-slide">
                            <div class="columns is-block is-marginless">
                                <div class="column">
                                    <a href="">
                                        <div class="card is-flex">
                                            <div class="card-image">
                                                <figure class="image is-150x150">
                                                    <img src="{{ asset('img/tutor1.png') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="has-text-grey">Apple Mac OS X Mavericks - Beyond The Basics</h4>
                                                <a>Apply Now</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="column">
                                    <a href="">
                                        <div class="card is-flex">
                                            <div class="card-image">
                                                <figure class="image is-150x150">
                                                    <img src="{{ asset('img/tutor1.png') }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="card-content">
                                                <h4 class="has-text-grey">Apple Mac OS X Mavericks - Beyond The Basics</h4>
                                                <a>Apply Now</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="load-more-content">
                <button class="button is-outlined is-grey load-more is-rounded">Load more</button>
            </div>
        </div>

        <div class="members">
            <div class="container is-fullhd">
                <div class="members-swiper">
                    <div class="swiper-wrapper">
                        @foreach ([1, 2, 3, 4] as $item)
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="card">
                                        <div class="card-image">
                                            <figure class="image is-80x80">
                                                <img src="{{ asset('img/tutor-'.$item.'.png') }}" alt="" class="is-rounded">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <p>
                                                We spend so much time bringing icons and illustrations into our work but most times the section of the site that gains the most trust from..
                                            </p>
                                            <h3>Anna Bakunts</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
