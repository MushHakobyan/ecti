<div class="container is-fullhd tutors is-clipped">
    <div class="level">
        <h2 class="level-left">Our tutors</h2>
        <a class="has-text-weight-semibold level-right">See All</a>
    </div>
    <div class="tutors-swiper">
        <div class="swiper-wrapper">
            @foreach ([[1, 2], [3, 4], [5, 6], [7, 8]] as $item)
                <div class="swiper-slide">
                    <a href="">
                        <div class="card is-flex line-1 is-shadowless">
                            <div class="card-image">
                                <figure class="image is-100x100">
                                    <img src="{{ asset('img/tutor-'.$item[0].'.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <h4>Larisa Alaverdyan</h4>
                                <p class="has-text-danger has-text-weight-medium">SEO Spesialist</p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="card is-flex line-2 is-shadowless">
                            <div class="card-image">
                                <figure class="image is-100x100">
                                    <img src="{{ asset('img/tutor-'.$item[1].'.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <h4>Larisa Alaverdyan</h4>
                                <p class="has-text-danger has-text-weight-medium">SEO Spesialist</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>