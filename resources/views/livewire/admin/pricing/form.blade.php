<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ $plan_id ? __('Modifier le Plan') : __('Créer un Plan') }}</h5>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="store">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Nom') }}</label>
                        <input type="text" wire:model="name" id="name" class="form-control">
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price_string" class="form-label">{{ __('Chaîne de Prix') }}</label>
                        <input type="text" wire:model="price_string" id="price_string" class="form-control">
                        @error('price_string') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">{{ __('Description') }}</label>
                        <textarea wire:model="description" id="description" rows="3" class="form-control"></textarea>
                        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="features" class="form-label">{{ __('Caractéristiques (une par ligne)') }}</label>
                        <textarea wire:model="features" id="features" rows="8" class="form-control"></textarea>
                        @error('features') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="button_text" class="form-label">{{ __('Texte du Bouton') }}</label>
                        <input type="text" wire:model="button_text" id="button_text" class="form-control">
                        @error('button_text') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="button_link" class="form-label">{{ __('Lien du Bouton') }}</label>
                        <input type="url" wire:model="button_link" id="button_link" class="form-control">
                        @error('button_link') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="display_order" class="form-label">{{ __('Ordre d\'Affichage') }}</label>
                        <input type="number" wire:model="display_order" id="display_order" class="form-control">
                        @error('display_order') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 form-check mt-4">
                        <input type="checkbox" wire:model="is_popular" class="form-check-input" id="is_popular">
                        <label class="form-check-label" for="is_popular">{{ __('Populaire') }}</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 form-check mt-4">
                        <input type="checkbox" wire:model="is_active" class="form-check-input" id="is_active_plan">
                        <label class="form-check-label" for="is_active_plan">{{ __('Actif') }}</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{ $plan_id ? __('Mettre à jour') : __('Enregistrer') }}</button>
            <button wire:click="closeModal()" type="button" class="btn btn-secondary">{{ __('Annuler') }}</button>
        </form>
    </div>
</div>
