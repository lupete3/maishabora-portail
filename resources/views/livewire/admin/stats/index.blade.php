<div>
    <x-slot name="title">{{ __('Stats') }}</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Manage Stats') }}</h5>
            <button wire:click="create" class="btn btn-primary">{{ __('Add New Stat') }}</button>
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
                            <th>{{ __('Order') }}</th>
                            <th>{{ __('Label') }}</th>
                            <th>{{ __('Value') }}</th>
                            <th>{{ __('Duration (s)') }}</th>
                            <th>{{ __('Active') }}</th>
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
                                        <span class="badge bg-label-success me-1">{{ __('Active') }}</span>
                                    @else
                                        <span class="badge bg-label-danger me-1">{{ __('Inactive') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="edit({{ $stat->id }})" class="btn btn-sm btn-primary">{{ __('Edit') }}</button>
                                    <button wire:click="delete({{ $stat->id }})" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">{{ __('No stats found.') }}</td>
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
