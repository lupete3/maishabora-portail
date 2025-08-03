<section class="about__v4 section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="row justify-content-end">
                    <div class="col-md-11 mb-4 mb-md-0">
                        <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">{{ $about->subtitle }}</span>
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">{{ $about->title }}</h2>
                        <div data-aos="fade-up" data-aos-delay="200">
                            {!! nl2br(e($about->description)) !!}
                        </div>
                        <h4 class="small fw-bold mt-4 mb-3" data-aos="fade-up" data-aos-delay="300">Nos Valeurs et Notre Vision</h4>
                        <ul class="d-flex flex-row flex-wrap list-unstyled gap-3 features" data-aos="fade-up" data-aos-delay="400">
                            @foreach(json_decode($about->values) as $value)
                            <li class="d-flex align-items-center gap-2">
                                <span class="icon rounded-circle text-center"><i class="bi bi-check"></i></span>
                                <span class="text">{{ $value }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-wrap position-relative">
                    <img class="img-fluid rounded-4" src="{{ asset($about->image_path) }}" alt="Image Maisha Bora" data-aos="fade-up" data-aos-delay="0">
                    <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="mission-icon text-center rounded-circle"><i class="bi bi-lightbulb fs-4"></i></div>
                        <div>
                            <h3 class="text-uppercase fw-bold">{{ $about->mission_title }}</h3>
                            <p class="fs-5 mb-0">{{ $about->mission_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>