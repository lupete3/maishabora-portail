<section class="section testimonials__v2" id="testimonials">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Témoignages</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Ce que disent nos clients</h2>
                <p data-aos="fade-up" data-aos-delay="200">Histoires réelles de succès et de satisfaction de notre communauté diversifiée</p>
            </div>
        </div>
        <div class="row g-4" data-masonry='{"percentPosition": true }'>
            @foreach($testimonials as $testimonial)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="testimonial rounded-4 p-4">
                    <blockquote class="mb-3">
                        &ldquo;{{ $testimonial->quote }}&rdquo;
                    </blockquote>
                    <div class="testimonial-author d-flex gap-3 align-items-center">
                        <div class="author-img">
                            <img class="rounded-circle img-fluid" src="{{ asset($testimonial->author_image_path) }}" alt="Image de l'auteur">
                        </div>
                        <div class="lh-base">
                            <strong class="d-block">{{ $testimonial->author_name }}</strong>
                            <span>{{ $testimonial->author_title }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>