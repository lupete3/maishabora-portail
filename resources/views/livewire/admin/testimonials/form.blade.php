<div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $testimonial_id ? 'Edit Testimonial' : 'Create Testimonial' }}</h5>
                <button type="button" class="btn-close" wire:click="closeModal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="quote" class="form-label">Quote</label>
                        <textarea class="form-control" id="quote" rows="4" wire:model="quote"></textarea>
                        @error('quote') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="author_name" class="form-label">Author Name</label>
                        <input type="text" class="form-control" id="author_name" wire:model="author_name">
                        @error('author_name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="author_title" class="form-label">Author Title</label>
                        <input type="text" class="form-control" id="author_title" wire:model="author_title">
                        @error('author_title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="author_image" class="form-label">Author Image</label>
                        <input type="file" class="form-control" id="author_image" wire:model="new_author_image">
                        @error('new_author_image') <span class="text-danger">{{ $message }}</span>@enderror

                        @if ($new_author_image)
                            <div class="mt-2">
                                <p>Preview:</p>
                                <img src="{{ $new_author_image->temporaryUrl() }}" alt="Image Preview" class="img-thumbnail" width="100">
                            </div>
                        @elseif ($author_image_path)
                            <div class="mt-2">
                                <p>Current Image:</p>
                                <img src="{{ asset($author_image_path) }}" alt="Current Image" class="img-thumbnail" width="100">
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="display_order" class="form-label">Display Order</label>
                        <input type="number" class="form-control" id="display_order" wire:model="display_order">
                        @error('display_order') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" wire:click="closeModal">Cancel</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
