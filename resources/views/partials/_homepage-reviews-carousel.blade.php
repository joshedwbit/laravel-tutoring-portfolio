@section('scripts')
  @vite('resources/js/homepage-reviews-carousel.js')
@endsection

<section class="homepage-reviews-carousel--container">
    <div class="reviews-swiper homepage-reviews-carousel" data-aos="fade-up">
        <div class="swiper-wrapper swiper-wrapper-centered">
            @foreach ($reviews as $review)
            <div class="swiper-slide">
                <div class="v2homepage__reviews-card v2homepage__reviews-card--styles">
                    <div class="v2homepage__reviews-card--comments">
                        "{{ substr($review['comments'], 0, 350) }}{!! strlen($review['comments']) > 350 ? '<a href="/reviews">..read more</a>' : '' !!}"
                    </div>
                    <div class="v2homepage__reviews-card-field v2homepage__reviews-card--name">
                        <div class="v2homepage__reviews-card--label">
                            Name
                        </div>
                        <div class="v2homepage__reviews-card--value">
                            {{ $review['name'] ?? 'none' }}
                        </div>
                    </div>
                    <div class="v2homepage__reviews-card-field v2homepage__reviews-card--predicted">
                        <div class="v2homepage__reviews-card--label">
                            Predicted grade
                        </div>
                        <div class="v2homepage__reviews-card--value">
                            {{ $review['predicted'] }}
                        </div>
                    </div>
                    <div class="v2homepage__reviews-card-field v2homepage__reviews-card--achieved">
                        <div class="v2homepage__reviews-card--label">
                            Achieved grade
                        </div>
                        <div class="v2homepage__reviews-card--value">
                            {{ $review['achieved'] }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>