<section class="hero__v6 section" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row">
                    <div class="col-lg-11">
                        <span class="hero-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="0">
                            {{ $heroSection->subtitle }}
                        </span>
                        <h1 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">
                            {{ $heroSection->title }}
                        </h1>
                        <p class="hero-description mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="200">
                            {{ $heroSection->description }}
                        </p>
                        <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300">
                            <a class="btn" href="{{ $heroSection->button_one_link }}">{{ $heroSection->button_one_text }}</a>
                            <a class="btn btn-white-outline" href="{{ $heroSection->button_two_link }}">
                                {{ $heroSection->button_two_text }}
                                <svg class="lucide lucide-arrow-up-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"></path>
                                    <path d="M7 17 17 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-img">
                    <img class="img-card img-fluid" src="{{ asset($heroSection->image_card_path) }}" alt="Image card" data-aos="fade-down" data-aos-delay="600">
                    <img class="img-main img-fluid rounded-4" src="{{ asset($heroSection->image_main_path) }}" alt="Hero Image" data-aos="fade-in" data-aos-delay="500">
                </div>
            </div>
        </div>
    </div>
</section>