@section('scripts')
  @vite('resources/js/homepage-reviews-carousel.js')
@endsection

<div class="reviews-swiper homepage-reviews-carousel--container" data-aos="fade-up">
    <div class="swiper-wrapper swiper-wrapper-centered">
        @foreach ($reviews as $review)
        <div class="swiper-slide">
            <div class="v2homepage__reviews-card v2homepage__reviews-card--styles">
                <div class="v2homepage__reviews-card--comments">
                    "{{ $review['comments'] }}"
                </div>
                <div class="v2homepage__reviews-card--name">
                    {{ $review['name'] ?? 'none' }}
                </div>
                <div class="v2homepage__reviews-card--predicted">
                    {{ $review['predicted'] }}
                </div>
                <div class="v2homepage__reviews-card--achieved">
                    {{ $review['achieved'] }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>