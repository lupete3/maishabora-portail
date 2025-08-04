<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ $stat_id ? __('Edit Stat') : __('Create Stat') }}</h5>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="store">
            <div class="mb-3">
                <label for="label" class="form-label">{{ __('Label') }}</label>
                <input type="text" wire:model="label" id="label" class="form-control" placeholder="e.g., Projects Done">
                @error('label') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="end_value" class="form-label">{{ __('End Value') }}</label>
                        <input type="number" wire:model="end_value" id="end_value" class="form-control">
                        @error('end_value') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="suffix" class="form-label">{{ __('Suffix') }}</label>
                        <input type="text" wire:model="suffix" id="suffix" class="form-control" placeholder="e.g., + or %">
                        @error('suffix') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="duration_in_seconds" class="form-label">{{ __('Animation Duration (s)') }}</label>
                        <input type="number" wire:model="duration_in_seconds" id="duration_in_seconds" class="form-control">
                        @error('duration_in_seconds') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="display_order" class="form-label">{{ __('Display Order') }}</label>
                        <input type="number" wire:model="display_order" id="display_order" class="form-control">
                        @error('display_order') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" wire:model="is_active" class="form-check-input" id="is_active_stat">
                <label class="form-check-label" for="is_active_stat">{{ __('Is Active') }}</label>
            </div>
            <button type="submit" class="btn btn-primary">{{ $stat_id ? __('Update') : __('Save') }}</button>
            <button wire:click="closeModal()" type="button" class="btn btn-secondary">{{ __('Cancel') }}</button>
        </form>
    </div>
</div>
