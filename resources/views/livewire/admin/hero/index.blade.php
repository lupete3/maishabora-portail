<div>
    <x-slot name="title">{{ __('Hero Section') }}</x-slot>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Manage Hero Section') }}</h5>
        </div>
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <form wire:submit.prevent="update">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">{{ __('Subtitle') }}</label>
                            <input type="text" id="subtitle" wire:model="subtitle" class="form-control">
                            @error('subtitle') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Title') }}</label>
                            <input type="text" id="title" wire:model="title" class="form-control">
                            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">{{ __('Description') }}</label>
                            <textarea id="description" wire:model="description" rows="5" class="form-control"></textarea>
                            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                         <div class="mb-3 form-check">
                            <input type="checkbox" wire:model="is_active" class="form-check-input" id="isActive">
                            <label class="form-check-label" for="isActive">{{ __('Is Active') }}</label>
                            @error('is_active') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="border p-3 rounded mb-3">
                            <h6>{{ __('Button One') }}</h6>
                            <div class="mb-3">
                                <label for="button_one_text" class="form-label">{{ __('Text') }}</label>
                                <input type="text" id="button_one_text" wire:model="button_one_text" class="form-control">
                                @error('button_one_text') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="button_one_link" class="form-label">{{ __('Link') }}</label>
                                <input type="url" id="button_one_link" wire:model="button_one_link" class="form-control">
                                @error('button_one_link') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="border p-3 rounded">
                            <h6>{{ __('Button Two') }}</h6>
                            <div class="mb-3">
                                <label for="button_two_text" class="form-label">{{ __('Text') }}</label>
                                <input type="text" id="button_two_text" wire:model="button_two_text" class="form-control">
                                @error('button_two_text') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <label for="button_two_link" class="form-label">{{ __('Link') }}</label>
                                <input type="url" id="button_two_link" wire:model="button_two_link" class="form-control">
                                @error('button_two_link') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="new_image_card_path" class="form-label">{{ __('Card Image') }}</label>
                            <input type="file" id="new_image_card_path" wire:model="new_image_card_path" class="form-control">
                            @error('new_image_card_path') <div class="text-danger">{{ $message }}</div> @enderror
                            <div wire:loading wire:target="new_image_card_path" class="mt-2">Uploading...</div>
                            @if ($new_image_card_path)
                                <img src="{{ $new_image_card_path->temporaryUrl() }}" class="mt-2 img-thumbnail" style="width: 150px;">
                            @elseif ($existing_image_card_path)
                                <img src="{{ asset('storage/' . $existing_image_card_path) }}" class="mt-2 img-thumbnail" style="width: 150px;">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="new_image_main_path" class="form-label">{{ __('Main Image') }}</label>
                            <input type="file" id="new_image_main_path" wire:model="new_image_main_path" class="form-control">
                            @error('new_image_main_path') <div class="text-danger">{{ $message }}</div> @enderror
                            <div wire:loading wire:target="new_image_main_path" class="mt-2">Uploading...</div>
                            @if ($new_image_main_path)
                                <img src="{{ $new_image_main_path->temporaryUrl() }}" class="mt-2 img-thumbnail" style="width: 150px;">
                            @elseif ($existing_image_main_path)
                                <img src="{{ asset('storage/' . $existing_image_main_path) }}" class="mt-2 img-thumbnail" style="width: 150px;">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
