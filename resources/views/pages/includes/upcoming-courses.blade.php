<div class="upcoming-courses">
    <div class="container is-fullhd">
        <div class="columns is-marginless">
            <div class="column is-3 is-paddingless">
                <div class="menu">
                    <p class="menu-label has-text-weight-semibold is-capitalized">Explore</p>               
                    <ul class="menu-list">
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
                </div>
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
                                                <img src="{{ asset('img/explore-'.$item.'.png') }}">
                                            </figure>
                                        </div>
                                        <div class="card-content">
                                            <div class="content">
                                                <h4>The Data Science Course 2020: Complete Data Science Bootcamp</h4>
                                                <p class="content-normal has-text-black-ter">Mathematics, Statistics, Python</p>
                                                <div class="content-small">
                                                    <span class="is-tag has-text-black-ter">Data Scince</span>
                                                    <span class="has-text-white-ter">10 July, 2020</span>
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