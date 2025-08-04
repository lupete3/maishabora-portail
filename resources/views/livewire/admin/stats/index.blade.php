<div>
    <x-slot name="title">{{ __('Statistiques') }}</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Gérer les Statistiques') }}</h5>
            <button wire:click="create" class="btn btn-primary">{{ __('Ajouter une nouvelle statistique') }}</button>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if($isOpen)
                @include('livewire.admin.stats.form')
            @endif

            <div class="table-responsive text-nowrap mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Ordre') }}</th>
                            <th>{{ __('Libellé') }}</th>
                            <th>{{ __('Valeur') }}</th>
                            <th>{{ __('Durée (s)') }}</th>
                            <th>{{ __('Actif') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($stats as $stat)
                            <tr>
                                <td>{{ $stat->display_order }}</td>
                                <td><strong>{{ $stat->label }}</strong></td>
                                <td>{{ $stat->end_value }}{{ $stat->suffix }}</td>
                                <td>{{ $stat->duration_in_seconds }}</td>
                                <td>
                                    @if($stat->is_active)
                                        <span class="badge bg-label-success me-1">{{ __('Actif') }}</span>
                                    @else
                                        <span class="badge bg-label-danger me-1">{{ __('Inactif') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="edit({{ $stat->id }})" class="btn btn-sm btn-primary">{{ __('Modifier') }}</button>
                                    <button wire:click="delete({{ $stat->id }})" onclick="return confirm('Êtes-vous sûr?')" class="btn btn-sm btn-danger">{{ __('Supprimer') }}</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">{{ __('Aucune statistique trouvée.') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
             <div class="mt-4">
                {{ $stats->links() }}
            </div>
        </div>
    </div>
</div>
