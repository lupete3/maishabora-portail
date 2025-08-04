<div>
    <x-slot name="title">{{ __('Caractéristiques') }}</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Caractéristiques') }}</h5>
            <button wire:click="create()" class="btn btn-primary">{{ __('Créer une nouvelle caractéristique') }}</button>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if($isOpen)
                @include('livewire.admin.features.form')
            @endif

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Icône') }}</th>
                            <th>{{ __('Titre') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th>{{ __('Ordre') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($features as $feature)
                            <tr>
                                <td><i class="{{ $feature->icon }} fs-4"></i></td>
                                <td>{{ $feature->title }}</td>
                                <td>{{ Str::limit($feature->description, 50) }}</td>
                                <td>{{ $feature->display_order }}</td>
                                <td>
                                    <button wire:click="edit({{ $feature->id }})" class="btn btn-sm btn-primary">{{ __('Modifier') }}</button>
                                    <button wire:click="delete({{ $feature->id }})" class="btn btn-sm btn-danger">{{ __('Supprimer') }}</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $features->links() }}
            </div>
        </div>
    </div>
</div>
