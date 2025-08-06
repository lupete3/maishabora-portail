<div class="row g-4">
    <style>
.icon-box {
    transition: all 0.3s ease;
}
.card:hover .icon-box {
    transform: translateY(-5px);
}
.hover-shadow-lg {
    transition: all 0.3s ease;
}
.hover-shadow-lg:hover {
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    transform: translateY(-5px);
}
.bg-purple {
    background-color: #6f42c1;
}
.text-purple {
    color: #6f42c1;
}
</style>
    {{-- Features Card --}}
    <div class="col-12 col-sm-6 col-lg-4">
        <a wire:navigate href="{{ route('admin.features') }}" class="text-decoration-none">
            <div class="card h-100 shadow-sm hover-shadow-lg transition-all border-0">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-3 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-lightning-charge-fill" viewBox="0 0 16 16">
                                    <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title fw-bold text-dark">Fonctionnalités</h5>
                            <div class="d-flex align-items-baseline mt-2">
                                <span class="display-6 fw-bold text-primary">{{ $stats['features'] }}</span>
                                <span class="ms-2 text-muted">enregistrées</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1">
                            Gérer <i class="bi bi-arrow-right-short"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- Services Card --}}
    <div class="col-12 col-sm-6 col-lg-4">
        <a wire:navigate href="{{ route('admin.services') }}" class="text-decoration-none">
            <div class="card h-100 shadow-sm hover-shadow-lg transition-all border-0">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-success bg-opacity-10 text-success rounded-3 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1A1.5 1.5 0 0 0 1.5 7H6v2H1.5A1.5 1.5 0 0 0 0 10.5v1A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5v-1A1.5 1.5 0 0 0 14.5 9H10V7h4.5A1.5 1.5 0 0 0 16 5.5v-1A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title fw-bold text-dark">Services</h5>
                            <div class="d-flex align-items-baseline mt-2">
                                <span class="display-6 fw-bold text-success">{{ $stats['services'] }}</span>
                                <span class="ms-2 text-muted">enregistrés</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1">
                            Gérer <i class="bi bi-arrow-right-short"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- Testimonials Card --}}
    <div class="col-12 col-sm-6 col-lg-4">
        <a wire:navigate href="{{ route('admin.testimonials') }}" class="text-decoration-none">
            <div class="card h-100 shadow-sm hover-shadow-lg transition-all border-0">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-warning bg-opacity-10 text-warning rounded-3 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title fw-bold text-dark">Témoignages</h5>
                            <div class="d-flex align-items-baseline mt-2">
                                <span class="display-6 fw-bold text-warning">{{ $stats['testimonials'] }}</span>
                                <span class="ms-2 text-muted">enregistrés</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3 py-1">
                            Gérer <i class="bi bi-arrow-right-short"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- FAQ Card --}}
    <div class="col-12 col-sm-6 col-lg-4">
        <a wire:navigate href="{{ route('admin.faq') }}" class="text-decoration-none">
            <div class="card h-100 shadow-sm hover-shadow-lg transition-all border-0">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-info bg-opacity-10 text-info rounded-3 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title fw-bold text-dark">FAQ</h5>
                            <div class="d-flex align-items-baseline mt-2">
                                <span class="display-6 fw-bold text-info">{{ $stats['faqs'] }}</span>
                                <span class="ms-2 text-muted">questions</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-info bg-opacity-10 text-info rounded-pill px-3 py-1">
                            Gérer <i class="bi bi-arrow-right-short"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- Pricing Plans Card --}}
    <div class="col-12 col-sm-6 col-lg-4">
        <a wire:navigate href="{{ route('admin.pricing') }}" class="text-decoration-none">
            <div class="card h-100 shadow-sm hover-shadow-lg transition-all border-0">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-danger bg-opacity-10 text-danger rounded-3 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                    <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title fw-bold text-dark">Plans Tarifaires</h5>
                            <div class="d-flex align-items-baseline mt-2">
                                <span class="display-6 fw-bold text-danger">{{ $stats['pricing_plans'] }}</span>
                                <span class="ms-2 text-muted">enregistrés</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-1">
                            Gérer <i class="bi bi-arrow-right-short"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- How It Works Card --}}
    <div class="col-12 col-sm-6 col-lg-4">
        <a wire:navigate href="{{ route('admin.how-it-works') }}" class="text-decoration-none">
            <div class="card h-100 shadow-sm hover-shadow-lg transition-all border-0">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-secondary bg-opacity-10 text-secondary rounded-3 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title fw-bold text-dark">Comment ça marche</h5>
                            <div class="d-flex align-items-baseline mt-2">
                                <span class="display-6 fw-bold text-secondary">{{ $stats['how_it_works_steps'] }}</span>
                                <span class="ms-2 text-muted">étapes</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-1">
                            Gérer <i class="bi bi-arrow-right-short"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    {{-- Stats Card --}}
    <div class="col-12 col-sm-6 col-lg-4">
        <a wire:navigate href="{{ route('admin.stats') }}" class="text-decoration-none">
            <div class="card h-100 shadow-sm hover-shadow-lg transition-all border-0">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0">
                            <div class="icon-box bg-purple bg-opacity-10 text-purple rounded-3 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                                    <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title fw-bold text-dark">Statistiques Publiques</h5>
                            <div class="d-flex align-items-baseline mt-2">
                                <span class="display-6 fw-bold text-purple">{{ $stats['stats_items'] }}</span>
                                <span class="ms-2 text-muted">éléments</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="badge bg-purple bg-opacity-10 text-purple rounded-pill px-3 py-1">
                            Gérer <i class="bi bi-arrow-right-short"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

