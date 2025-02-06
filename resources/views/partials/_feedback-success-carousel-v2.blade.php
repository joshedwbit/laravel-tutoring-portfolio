@push('scripts')
  @vite('resources/js/feedback-success-carousel-v2.js')
@endpush

<div class="swiper swiper--success-stories">
    <div class="swiper-wrapper swiper-wrapper-centered">
        <div class="swiper-slide"><img src="{{ asset('images/png/a2-a.png') }}" alt="a2 grade a" title="a2 grade a"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/a2-b.png') }}" alt="a2 grade b" title="a2 grade b"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-5.png') }}" alt="gcse grade 5" title="gcse grade 5"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-5(2).png') }}" alt="gcse grade 5" title="gcse grad 5"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-6.png') }}" alt="gcse grade 6" title="gcse grade 6"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-6(2).png') }}" alt="gcse grade 6" title="gcse grade 6"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-8.png') }}" alt="gcse grade 8" title="gcse grade 8"></div>
    </div>

    <div class="swiper-button-next">
      <img class="" src="{{ asset('images/svg/arrow-right.svg') }}" alt="arrow-right">
    </div>
    <div class="swiper-button-prev">
      <img class="" src="{{ asset('images/svg/arrow-left.svg') }}" alt="arrow-left">
    </div>
</div>