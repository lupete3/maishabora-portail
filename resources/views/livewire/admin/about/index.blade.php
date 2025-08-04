<div>
    <x-slot name="title">{{ __('About Section') }}</x-slot>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">{{ __('Edit About Section') }}</h5>
        </div>
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" wire:model="subtitle">
                    @error('subtitle') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" wire:model="title">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="5" wire:model="description"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="mb-3">
                    <label for="values" class="form-label">Values (comma separated)</label>
                    <input type="text" class="form-control" id="values" wire:model="values">
                    @error('values') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" wire:model="new_image">
                    @error('new_image') <span class="text-danger">{{ $message }}</span>@enderror

                    @if ($new_image)
                        <div class="mt-2">
                            <p>Preview:</p>
                            <img src="{{ $new_image->temporaryUrl() }}" alt="Image Preview" class="img-thumbnail" width="200">
                        </div>
                    @elseif ($image_path)
                        <div class="mt-2">
                             <p>Current Image:</p>
                            <img src="{{ asset($image_path) }}" alt="Current Image" class="img-thumbnail" width="200">
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="mission_title" class="form-label">Mission Title</label>
                    <input type="text" class="form-control" id="mission_title" wire:model="mission_title">
                    @error('mission_title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="mb-3">
                    <label for="mission_description" class="form-label">Mission Description</label>
                    <textarea class="form-control" id="mission_description" rows="3" wire:model="mission_description"></textarea>
                    @error('mission_description') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>