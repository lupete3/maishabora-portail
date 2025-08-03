<section class="section howitworks__v1" id="how-it-works">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 text-center mx-auto">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Comment ça marche</span>
                <h2 data-aos="fade-up" data-aos-delay="100">Comment ça marche</h2>
                <p data-aos="fade-up" data-aos-delay="200">Notre plateforme est conçue pour rendre la gestion de vos finances simple et efficace. Suivez ces étapes faciles pour commencer :</p>
            </div>
        </div>
        <div class="row g-md-5">
            @foreach($steps as $step)
            <div class="col-md-6 col-lg-3">
                <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative" data-aos="fade-up" data-aos-delay="{{ ($loop->index * 600) }}">
                    @if(!$loop->last)
                        @if($loop->index % 2 == 0)
                        <div data-aos="fade-right" data-aos-delay="{{ ($loop->index * 600) + 500 }}"><img class="arch-line" src="{{ asset('assets/images/arch-line.svg') }}" alt="Ligne d'arche"></div>
                        @else
                        <div data-aos="fade-right" data-aos-delay="{{ ($loop->index * 600) + 500 }}"><img class="arch-line reverse" src="{{ asset('assets/images/arch-line-reverse.svg') }}" alt="Ligne d'arche inversée"></div>
                        @endif
                    @endif
                    <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">{{ $step->step_number }}</span>
                    <div>
                        <h3 class="fs-5 mb-4">{{ $step->title }}</h3>
                        <p>{{ $step->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>