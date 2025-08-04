<div>
    <x-slot name="title">{{ __('FAQ') }}</x-slot>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('FAQ') }}</h5>
            <button wire:click="create()" class="btn btn-primary">{{ __('Create New FAQ') }}</button>
        </div>

        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            @if($isOpen)
                @include('livewire.admin.faq.form')
            @endif

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Question') }}</th>
                            <th>{{ __('Answer') }}</th>
                            <th>{{ __('Order') }}</th>
                            <th>{{ __('Open by Default') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ Str::limit($faq->question, 50) }}</td>
                                <td>{{ Str::limit($faq->answer, 70) }}</td>
                                <td>{{ $faq->display_order }}</td>
                                <td>
                                    <span class="badge bg-label-{{ $faq->is_open_by_default ? 'success' : 'danger' }}">
                                        {{ $faq->is_open_by_default ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                                <td>
                                    <button wire:click="edit({{ $faq->id }})" class="btn btn-sm btn-primary">{{ __('Edit') }}</button>
                                    <button wire:click="delete({{ $faq->id }})" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $faqs->links() }}
            </div>
        </div>
    </div>
</div>