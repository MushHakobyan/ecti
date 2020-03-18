<div class="container is-fullhd tutors">
    <div class="level">
        <h2 class="level-left">Our tutors</h2>
        <a class="has-text-weight-semibold level-right">See All</a>
    </div>
    <div class="tutors-section">
        <div class="swiper-container-2">
            <div class="swiper-wrapper">
                @foreach ([1, 2, 3, 4] as $item)
                    <div class="swiper-slide">
                        <div class="is-flex ilne-1">
                            <div>
                                <figure class="image is-100x100">
                                    <img src="{{ asset('img/Round1.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="tutors-content">
                                <h4>Larisa Alaverdyan</h4>
                                <p class="has-text-danger has-text-weight-medium">SEO Spesialist</p>
                            </div>
                        </div>
                        <div class="is-flex line-2">
                            <div>
                                <figure class="image is-100x100">
                                    <img src="{{ asset('img/Round1.png') }}" alt="">
                                </figure>
                            </div>
                            <div class="tutors-content">
                                <h4>Larisa Alaverdyan</h4>
                                <p class="has-text-danger has-text-weight-medium">SEO Spesialist</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>