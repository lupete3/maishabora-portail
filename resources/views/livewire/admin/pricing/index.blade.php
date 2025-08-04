<div>
    <x-slot name="title">{{ __('Plans Tarifaires') }}</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Gérer les Plans Tarifaires') }}</h5>
            <button wire:click="create" class="btn btn-primary">{{ __('Ajouter un nouveau plan') }}</button>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if($isOpen)
                @include('livewire.admin.pricing.form')
            @endif

            <div class="table-responsive text-nowrap mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Ordre') }}</th>
                            <th>{{ __('Nom') }}</th>
                            <th>{{ __('Prix') }}</th>
                            <th>{{ __('Populaire') }}</th>
                            <th>{{ __('Actif') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($plans as $plan)
                            <tr>
                                <td>{{ $plan->display_order }}</td>
                                <td><strong>{{ $plan->name }}</strong></td>
                                <td>{{ $plan->price_string }}</td>
                                <td>
                                    @if($plan->is_popular)
                                        <span class="badge bg-label-primary me-1">{{ __('Oui') }}</span>
                                    @else
                                        <span class="badge bg-label-secondary me-1">{{ __('Non') }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if($plan->is_active)
                                        <span class="badge bg-label-success me-1">{{ __('Actif') }}</span>
                                    @else
                                        <span class="badge bg-label-danger me-1">{{ __('Inactif') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="edit({{ $plan->id }})" class="btn btn-sm btn-primary">{{ __('Modifier') }}</button>
                                    <button wire:click="delete({{ $plan->id }})" onclick="return confirm('Êtes-vous sûr?')" class="btn btn-sm btn-danger">{{ __('Supprimer') }}</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">{{ __('Aucun plan tarifaire trouvé.') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
             <div class="mt-4">
                {{ $plans->links() }}
            </div>
        </div>
    </div>
</div>
