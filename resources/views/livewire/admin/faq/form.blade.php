<div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $faq_id ? 'Edit FAQ' : 'Create FAQ' }}</h5>
                <button type="button" class="btn-close" wire:click="closeModal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="question" class="form-label">Question</label>
                        <input type="text" class="form-control" id="question" wire:model="question">
                        @error('question') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="answer" class="form-label">Answer</label>
                        <textarea class="form-control" id="answer" rows="5" wire:model="answer"></textarea>
                        @error('answer') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="display_order" class="form-label">Display Order</label>
                        <input type="number" class="form-control" id="display_order" wire:model="display_order">
                        @error('display_order') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="is_open_by_default" wire:model="is_open_by_default">
                        <label class="form-check-label" for="is_open_by_default">Open by Default</label>
                        @error('is_open_by_default') <span class="text-danger">{{ $message }}</span>@enderror
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
