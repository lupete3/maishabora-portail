<section class="section contact__v2" id="contact">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-7 mx-auto text-center">
                <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Contact</span>
                <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Contactez-nous</h2>
                <p data-aos="fade-up" data-aos-delay="100">Utilisez nos outils pour développer vos concepts et donner vie à votre vision. Une fois terminé, partagez vos créations sans effort.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex gap-5 flex-column">
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon d-block"><i class="bi bi-telephone"></i></div>
                        <span>
                            <span class="d-block">Téléphone</span>
                            <strong>{{ $contact->phone }}</strong>
                        </span>
                    </div>
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon d-block"><i class="bi bi-send"></i></div>
                        <span>
                            <span class="d-block">Email</span>
                            <strong>{{ $contact->email }}</strong>
                        </span>
                    </div>
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon d-block"><i class="bi bi-geo-alt"></i></div>
                        <span>
                            <span class="d-block">Adresse</span>
                            <address class="fw-bold">{!! $contact->address !!}</address>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <form id="contactForm">
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="name">Nom</label>
                                <input class="form-control" id="name" type="text" name="name" required="">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2" for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" required="">
                            </div>
                        </div>
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="subject">Sujet</label>
                                <input class="form-control" id="subject" type="text" name="subject">
                            </div>
                        </div>
                        <div class="row gap-3 gap-md-0 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required=""></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary fw-semibold" type="submit">Envoyer le Message</button>
                    </form>
                    <div class="mt-3 d-none alert alert-success" id="successMessage">Message envoyé avec succès !</div>
                    <div class="mt-3 d-none alert alert-danger" id="errorMessage">L'envoi du message a échoué. Veuillez réessayer plus tard.</div>
                </div>
            </div>
        </div>
    </div>
</section>