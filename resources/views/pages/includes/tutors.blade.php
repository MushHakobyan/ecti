<div class="container is-fullhd tutors is-clipped">
    <div class="level">
        <h2 class="level-left">Our tutors</h2>
        <a class="has-text-weight-semibold level-right">See All</a>
    </div>
    <div class="tutors-section">
        {{-- <div class="swiper-container-2"> --}}
            <div class="swiper-wrapper">
                @foreach ([[1, 2], [3, 4], [5, 6], [7, 8]] as $item)
                    <div class="swiper-slide">
                        <a href="">
                            <div class="is-flex line-1">
                                <div>
                                    <figure class="image is-100x100">
                                        <img src="{{ asset('img/tutor-'.$item[0].'.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="tutors-content">
                                    <h4>Larisa Alaverdyan</h4>
                                    <p class="has-text-danger has-text-weight-medium">SEO Spesialist</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="is-flex line-2">
                                <div>
                                    <figure class="image is-100x100">
                                        <img src="{{ asset('img/tutor-'.$item[1].'.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="tutors-content">
                                    <h4>Larisa Alaverdyan</h4>
                                    <p class="has-text-danger has-text-weight-medium">SEO Spesialist</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        {{-- </div> --}}
    </div>
</div>