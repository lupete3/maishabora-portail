<section class="section pricing__v2" id="pricing">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-5 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Tarifs</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Un plan pour chaque budget</h2>
                <p data-aos="fade-up" data-aos-delay="200">Découvrez l'avenir de la finance avec nos services financiers sécurisés, efficaces et conviviaux</p>
            </div>
        </div>
        <div class="row">
            @foreach($pricingPlans as $plan)
                @if($plan->is_popular)
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                        <div class="p-5 rounded-4 price-table popular h-100">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="mb-3">{{ $plan->name }}</h3>
                                    <p>{{ $plan->description }}</p>
                                    <div class="price mb-4"><strong class="me-1">{{ $plan->price_string }}</strong></div>
                                    <div><a class="btn btn-white hover-outline" href="{{ $plan->button_link }}">{{ $plan->button_text }}</a></div>
                                </div>
                                <div class="col-md-6 pricing-features">
                                    <h4 class="text-uppercase fw-bold mb-3">Avantages</h4>
                                    <ul class="list-unstyled d-flex flex-column gap-3">
                                        @foreach(json_decode($plan->features) as $feature)
                                        <li class="d-flex gap-2 align-items-start mb-0">
                                            <span class="icon rounded-circle position-relative mt-1"><i class="bi bi-check"></i></span>
                                            <span>{{ $feature }}</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-5 rounded-4 price-table h-100">
                            <h3>{{ $plan->name }}</h3>
                            <p>{{ $plan->description }}</p>
                            <div class="price mb-4"><strong>{{ $plan->price_string }}</strong></div>
                            <div><a class="btn" href="#">Postuler</a></div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>