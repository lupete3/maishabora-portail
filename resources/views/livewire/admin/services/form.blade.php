<div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $service_id ? 'Modifier le Service' : 'Créer un Service' }}</h5>
                <button type="button" class="btn-close" wire:click="closeModal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icône</label>
                        <input type="text" class="form-control" id="icon" wire:model="icon" placeholder="ex: bi bi-cash-coin">
                        @error('icon') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="title" wire:model="title">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" wire:model="description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Lien</label>
                        <input type="text" class="form-control" id="link" wire:model="link">
                        @error('link') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="display_order" class="form-label">Ordre d'affichage</label>
                        <input type="number" class="form-control" id="display_order" wire:model="display_order">
                        @error('display_order') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" wire:click="closeModal">Annuler</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="store()">Enregistrer</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
