<section class="section services__v3" id="services">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Nos Services</span>
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Favoriser l'innovation financière grâce à des services de pointe</h2>
            </div>
        </div>
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="service-card p-4 rounded-4 h-100 d-flex flex-column justify-content-between gap-5">
                    <div>
                        <span class="icon mb-4"><i class="{{ $service->icon }} fs-1"></i></span>
                        <h3 class="fs-5 mb-3">{{ $service->title }}</h3>
                        <p class="mb-4">{{ $service->description }}</p>
                    </div>
                    <a class="special-link d-inline-flex gap-2 align-items-center text-decoration-none" href="{{ $service->link }}">
                        <span class="icons"><i class="icon-1 bi bi-arrow-right-short"></i><i class="icon-2 bi bi-arrow-right-short"></i></span>
                        <span>Lire la suite</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>