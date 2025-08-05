<div>
    <x-slot name="title">{{ __('Témoignages') }}</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Témoignages') }}</h5>
            <button wire:click="create()" class="btn btn-primary">{{ __('Créer un nouveau témoignage') }}</button>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if($isOpen)
                @include('livewire.admin.testimonials.form')
            @endif

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Auteur') }}</th>
                            <th>{{ __('Citation') }}</th>
                            <th>{{ __('Ordre') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($testimonial->author_image_path) }}" alt="{{ $testimonial->author_name }}" class="avatar avatar-sm me-2">
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">{{ $testimonial->author_name }}</span>
                                            <small class="text-muted">{{ $testimonial->author_title }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ Str::limit($testimonial->quote, 70) }}</td>
                                <td>{{ $testimonial->display_order }}</td>
                                <td>
                                    <button wire:click="edit({{ $testimonial->id }})" class="btn btn-sm btn-primary">{{ __('Modifier') }}</button>
                                    <button wire:click="delete({{ $testimonial->id }})" class="btn btn-sm btn-danger">{{ __('Supprimer') }}</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $testimonials->links() }}
            </div>
        </div>
    </div>
</div>
