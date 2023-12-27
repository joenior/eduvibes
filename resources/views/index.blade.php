@extends('layouts.front')

@section('content')
<section class="home" id="home">
        <div class="home-container container grid">
          <div class="home-img-bg">
            <!-- <img src="assets/images/bg-hero.jpg" alt="" class="home-img" /> -->
          </div>

          <div class="home-data">
          <h1 class="home-title">
  Kami mengajarkan Anda <br />
  segala yang perlu Anda ketahui.
</h1>
<p class="home-description">
  Temukan cara Anda belajar & ambil kendali atas hidup Anda serta buat
  sesuatu yang berguna bagi orang lain.
</p>

<div class="home-btns">
  <a href="#course" class="button button-home">Temukan Kursus</a>
</div>
</div>
</div>
</section>

<section class="story section container">
  <div class="story-container grid">
    <div class="story-data">
      <h2 class="section-title story-section-title">Tujuan Kami</h2>
      <h1 class="story-title">
        Nikmati pembelajaran tanpa tekanan
      </h1>

      <p class="story-description">
        Pelajari membuat sesuatu dengan proyek dunia nyata yang membantu meningkatkan kreativitas Anda
      </p>
      <a href="#course" class="button btn-small">Temukan</a>
    </div>
    <div class="story-images">
      <img src="{{ asset('frontend/assets/images/goals.jpg') }}" alt="" class="story-img" />
      <div class="story-square"></div>
    </div>
  </div>
</section>

<section class="products section container" id="course">
  <h2 class="section-title">Semua Kursus</h2>


        <div class="new-container">
          <div class="swiper new-swipper">
            <div class="swiper-wrapper">
            @foreach($courses as $course)
              <article class="products-card swiper-slide">
              <a style="color: inherit;" href="{{ route('courses.show', [$course->slug]) }}" class="products-link">
                <img
                  src="{{ Storage::url($course->course_image) }}"
                  class="products-img"
                  alt=""
                />
                <h3 class="products-title">{{ $course->title }}</h3>
                <div class="products-star">
                @for ($star = 1; $star <= 5; $star++)
                    @if ($course->rating >= $star)
                    <i class="bx bxs-star"></i>
                    @else
                    <i class='bx bx-star'></i>
                    @endif
                @endfor
                </div>
                <span class="products-price">${{ $course->price }}</span>
                @if($course->students()->count() > 5)
                  <button class="products-button">
                    Popular
                  </button>
                @endif
                <span class="products-student">
                {{ $course->students()->count() }} students
                </span>
              </a>
              </article>
            @endforeach
    
            </div>
            <div
              class="swiper-button-next"
              style="
                bottom: initial;
                top: 50%;
                right: 0;
                left: initial;
                border-radius: 50%;
              "
            >
              <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div
              class="swiper-button-prev"
              style="bottom: initial; top: 50%; border-radius: 50%"
            >
              <i class="bx bx-left-arrow-alt"></i>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonial section container">
        <div class="testimonial grid">
          <div class="swiper testimonial-swipper">
            <div class="swiper-wrapper">
              <div class="testimonial-card swiper-slide" style="text-align: center;">
                <div class="testimonial-quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>
                <p class="testimonial-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                  labore reiciendis laboriosam quos at eum, sed sequi tempore
                  perspiciatis magnam iste quas sit minima provident!
                </p>
                <h3 class="testimonial-date">March 27, 2021</h3>

                <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                  <img
                    src="{{ asset('frontend/assets/images/testimonial1.jpg') }}"
                    alt=""
                    class="testimonial-profile-img"
                  />

                  <div class="testimonial-profile-data">
                    <span class="testimonial-profile-name">John Doe</span>
                    <span class="testimonial-profile-detail"
                      >Director of a Company</span
                    >
                  </div>
                </div>
              </div>
              <div class="testimonial-card swiper-slide" style="text-align: center;">
                <div class="testimonial-quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>
                <p class="testimonial-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                  labore reiciendis laboriosam quos at eum, sed sequi tempore
                  perspiciatis magnam iste quas sit minima provident!
                </p>
                <h3 class="testimonial-date">March 27, 2021</h3>

                <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                  <img
                    src="{{ asset('frontend/assets/images/testimonial1.jpg') }}"
                    alt=""
                    class="testimonial-profile-img"
                  />

                  <div class="testimonial-profile-data">
                    <span class="testimonial-profile-name">John Doe</span>
                    <span class="testimonial-profile-detail"
                      >Director of a Company</span
                    >
                  </div>
                </div>
              </div>
              <div class="testimonial-card swiper-slide" style="text-align: center;">
                <div class="testimonial-quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>
                <p class="testimonial-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                  labore reiciendis laboriosam quos at eum, sed sequi tempore
                  perspiciatis magnam iste quas sit minima provident!
                </p>
                <h3 class="testimonial-date">March 27, 2021</h3>

                <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                  <img
                    src="{{ asset('frontend/assets/images/testimonial1.jpg') }}"
                    alt=""
                    class="testimonial-profile-img"
                  />

                  <div class="testimonial-profile-data">
                    <span class="testimonial-profile-name">John Doe</span>
                    <span class="testimonial-profile-detail"
                      >Director of a Company</span
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-button-next" style="right: 30%;left: initial;top:initial;bottom: 3rem;">
              <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div class="swiper-button-prev" style="right: initial;left: 30%;top:initial;bottom: 3rem;">
              <i class="bx bx-left-arrow-alt"></i>
            </div>
          </div>
      </section>

      <section class="newsletter section container">
        <div class="newsletter-bg grid">
          <div>
          <h2 class="newsletter-title">
  Langganan <br />
  Newsletter Kami
</h2>
<p class="newsletter-description">
  Jadilah yang pertama mengetahui kursus-kursus baru dan informasi-informasi menarik!
</p>
</div>


          <form action="" class="newsletter-subscribe">
            <input
              type="email"
              placeholder="Enter your email"
              class="newsletter-input"
            />
            <button class="button">Berlangganan Sekarang</button>
          </form>
        </div>
      </section>
@endsection