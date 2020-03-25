<div class="upcoming-courses">
    <div class="container is-fullhd">
        <div class="columns is-marginless">
            <div class="column is-3 is-paddingless">
                <h2>Explore</h2>               
                <ul class="aside-menu">
                    <li><a href="">Business</a></li>
                    <li><a href="">Computer Science</a></li>
                    <li><a href="">Math & logic</a></li>
                    <li><a href="">Personal Development</a></li>
                    <li><a href="">Arts</a></li>
                    <li><a href="">Human Rights</a></li>
                    <li><a href="">Data Science</a></li>
                    <li><a href="">Web Design</a></li>
                    <li><a href="">Security</a></li>
                    <li><a href="">Telecom</a></li>
                </ul>
                <a href="explore" class="has-text-weight-semibold explore-all">Explore All</a>
            </div>
            <div class="column is-9 is-paddingless">
                <div class="">
                    <h2>Upcoming Courses</h2>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ([1, 2, 3] as $item)
                            <div class="swiper-slide">
                                <a href="">
                                    <div class="card">
                                        <div class="card-image">
                                            <figure class="image">
                                                <img src="{{ asset('img/upcoming-courses-'.$item.'.png') }}">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <div class="content">
                                                <h4>The Data Science Course 2020: Complete Data Science Bootcamp</h4>
                                                <p class="body-1">Mathematics, Statistics, Python</p>
                                                <div class="body-2">
                                                    <span class="is-tag">Data Scince</span>
                                                    <span>10 July, 2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>