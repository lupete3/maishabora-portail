<div>
    <x-slot name="title">{{ __('Services') }}</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Services') }}</h5>
            <button wire:click="create()" class="btn btn-primary">{{ __('Créer un nouveau service') }}</button>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if($isOpen)
                @include('livewire.admin.services.form')
            @endif

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Icône') }}</th>
                            <th>{{ __('Titre') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th>{{ __('Lien') }}</th>
                            <th>{{ __('Ordre') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($services as $service)
                            <tr>
                                <td><i class="{{ $service->icon }} fs-4"></i></td>
                                <td>{{ $service->title }}</td>
                                <td>{{ Str::limit($service->description, 50) }}</td>
                                <td><a href="{{ $service->link }}" target="_blank">{{ __('Lien') }}</a></td>
                                <td>{{ $service->display_order }}</td>
                                <td>
                                    <button wire:click="edit({{ $service->id }})" class="btn btn-sm btn-primary">{{ __('Modifier') }}</button>
                                    <button wire:click="delete({{ $service->id }})" class="btn btn-sm btn-danger">{{ __('Supprimer') }}</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $services->links() }}
            </div>
        </div>
    </div>
</div>
