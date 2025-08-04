<div>
    <x-slot name="title">{{ __('Étapes de Fonctionnement') }}</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Étapes de Fonctionnement') }}</h5>
            <button wire:click="create()" class="btn btn-primary">{{ __('Créer une nouvelle étape') }}</button>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if($isOpen)
                @include('livewire.admin.how-it-works.form')
            @endif

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Étape') }}</th>
                            <th>{{ __('Titre') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($steps as $step)
                            <tr>
                                <td>{{ $step->step_number }}</td>
                                <td>{{ $step->title }}</td>
                                <td>{{ Str::limit($step->description, 70) }}</td>
                                <td>
                                    <button wire:click="edit({{ $step->id }})" class="btn btn-sm btn-primary">{{ __('Modifier') }}</button>
                                    <button wire:click="delete({{ $step->id }})" class="btn btn-sm btn-danger">{{ __('Supprimer') }}</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $steps->links() }}
            </div>
        </div>
    </div>
</div>
