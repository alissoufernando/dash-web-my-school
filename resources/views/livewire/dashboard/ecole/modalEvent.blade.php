

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="event" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title text-center" id="staticBackdropLabel">Ajouter un event</h5>

              <button wire:click.prevent='resetInputFieldsEvent' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='saveEvent'>
                <div class="modal-body">
                    <div class="form-layouts-area">
                        <div class="container-fluid">
                                <div class="card-box-style">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Titre" aria-label="Titre" wire:model.lazy='titre'>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="description" aria-label="description" wire:model.lazy='description'>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="lieu" aria-label="lieu" wire:model.lazy='lieu'>
                                    </div>

                                    <div class="mb-3">
                                        <input type="date" class="form-control" placeholder="date_de_debut" aria-label="date_de_debut" wire:model.lazy='date_de_debut'>

                                    </div>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" placeholder="date_de_fin" aria-label="date_de_fin" wire:model.lazy='date_de_fin'>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a wire:click.prevent='resetInputFieldsEvent' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>

                    <button type="submit" class="btn btn-primary btn-sm">
                        Ajouter
                    </button>

                </div>
            </form>

        </div>
    </div>
</div>
