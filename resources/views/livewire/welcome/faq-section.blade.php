<section class="section faq__v2" id="faq">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6 col-lg-7 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">FAQ</span>
                <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Questions Fréquemment Posées</h2>
                <p data-aos="fade-up" data-aos-delay="100">Trouvez ici les réponses aux questions les plus courantes sur nos services de microfinance.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-content">
                    <div class="accordion custom-accordion" id="accordionPanelsStayOpenExample">
                        @foreach($faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ !$faq->is_open_by_default ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $loop->iteration }}" aria-expanded="{{ $faq->is_open_by_default ? 'true' : 'false' }}" aria-controls="panelsStayOpen-collapse{{ $loop->iteration }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse {{ $faq->is_open_by_default ? 'show' : '' }}" id="panelsStayOpen-collapse{{ $loop->iteration }}">
                                <div class="accordion-body">{{ $faq->answer }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>