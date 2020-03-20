@extends('index')
    @section('home')
        @include('pages/includes.slider')
        @include('pages/includes.explore')
        @include('pages/includes.tutors')
        <div class="get-started">
            <h1>It’s easy to get started</h1>
            <p class="is-size-5">Jouin our platform for free. Just click button below</p>
            <a class="button is-primary has-text-weight-semibold is-rounded">Create a free Account</a>
        </div>

        <div class="container is-fullhd training-courses">
            <h1 class="has-text-centered">Current Training Courses</h1>
            <div class="swiper-container" style="padding: 5px 5px 20px">
                <div class="swiper-wrapper">
                    @foreach ([1, 2, 3] as $item)
                        <div class="swiper-slide">
                            <div class="card is-flex line-1">
                                <div class="card-image">
                                    <figure class="image is-150x150">
                                        <img src="{{ asset('img/Round1.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <h4>Apple Mac OS X Mavericks - Beyond The Basics</h4>
                                    <a>Apply Now</a>
                                </div>
                            </div>
                            <div class="card is-flex line-2">
                                <div class="card-image">
                                    <figure class="image is-150x150">
                                        <img src="{{ asset('img/Round1.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <h4>Apple Mac OS X Mavericks - Beyond The Basics</h4>
                                    <a>Apply Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="load-more-content">
                <a class="button is-outlined load-more is-rounded is-grey">Load more</a>
            </div>
        </div>

        <div class="members">
            <div class="container is-fullhd">
                <div class="swiper-container-1" style="padding: 0 5px">
                    <div class="swiper-wrapper">
                        @foreach ([1, 2, 3, 4] as $item)
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-80x80">
                                            <img src="{{ asset('img/Circle-L.png') }}" alt="" class="is-rounded">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            We spend so much time bringing icons and illustrations into our work but most times the section of the site that gains the most trust from..
                                        </p>
                                        <h3>Anna Bakunts</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('pages/includes.menu')
    @endsection
