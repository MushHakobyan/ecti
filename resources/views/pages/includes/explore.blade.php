<div class="explore">
    <div class="container is-fullhd">
        <div class="columns is-marginless">
        <div class="column is-3 is-paddingless">
            <h2>Explore</h2>               
            <ul class="aside-menu">
                <li><a>Business</a></li>
                <li><a>Computer Science</a></li>
                <li><a>Math & logic</a></li>
                <li><a>Personal Development</a></li>
                <li><a>Arts</a></li>
                <li><a>Human Rights</a></li>
                <li><a>Data Science</a></li>
                <li><a>Web Design</a></li>
                <li><a>Security</a></li>
                <li><a>Telecom</a></li>
            </ul>
            <a class="has-text-weight-semibold explore-all">Explore All</a>
        </div>
        <div class="column is-9 is-paddingless">
            <div class="">
                <h2>Upcoming Courses</h2>
            </div>
            <div class="swiper-container" style="padding: 20px 10px; margin-left: -10px">
                <div class="swiper-wrapper">
                    @foreach ([1, 2, 3] as $item)
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="{{ asset('img/Rectangle8.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="">
                                        <h4>The Data Science Course 2020: Complete Data Science Bootcamp</h4>
                                        <p class="body-1">Mathematics, Statistics, Python</p>
                                    </div>
                                    <div class="body-2">
                                        <span class="tag">Data Scince</span>
                                        <span>10 July, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    
</div>