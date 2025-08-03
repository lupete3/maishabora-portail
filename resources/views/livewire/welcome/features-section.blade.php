<section class="section features__v2" id="features">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-lg-flex p-5 rounded-4 content" data-aos="fade-in" data-aos-delay="0">
                    <div class="row">
                        <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="h-100 flex-column justify-content-between d-flex">
                                        <div>
                                            <h2 class="mb-4">Pourquoi nous choisir</h2>
                                            <p class="mb-5">Découvrez l'avenir de la finance avec nos services financiers sécurisés, efficaces et conviviaux. Notre plateforme de pointe garantit la sécurité, la simplicité et l'efficacité de vos transactions, vous permettant de prendre le contrôle de votre avenir financier avec confiance.</p>
                                        </div>
                                        <div class="align-self-start"><a class="glightbox btn btn-play d-inline-flex align-items-center gap-2" href="https://www.youtube.com/watch?v=DQx96G4yHd8" data-gallery="video"><i class="bi bi-play-fill"></i> Voir la Vidéo</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row justify-content-end">
                                <div class="col-lg-11">
                                    <div class="row">
                                        @foreach($features as $feature)
                                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                                            <div class="icon text-center mb-4"><i class="{{ $feature->icon }} fs-4"></i></div>
                                            <h3 class="fs-6 fw-bold mb-3">{{ $feature->title }}</h3>
                                            <p>{{ $feature->description }}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>