

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                @if ($ecole_id)
                <h5 class="modal-title text-center" id="staticBackdropLabel">Modifier {{ $this->nom }}</h5>
                @else
                <h5 class="modal-title text-center" id="staticBackdropLabel">Ajouter une écoles</h5>
                @endif
              <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='saveEcole'>
                <div class="modal-body">
                    <div class="form-layouts-area">
                        <div class="container-fluid">
                                <div class="card-box-style">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" wire:model.lazy='nom'>
                                    </div>

                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Votre email" aria-label="votre email" wire:model.lazy='email'>

                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="adresse" class="form-control" placeholder="Votre adresse" aria-label="votre adresse" wire:model.lazy='adresse'>

                                    </div>
                                    <div class="">
                                        <input type="tel" name="contact" class="form-control" placeholder="Téléphone" aria-label="Téléphone" wire:model.lazy='contact'>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a wire:click.prevent='resetInputFields' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>
                    @if ($ecole_id)
                    <button type="submit" class="btn btn-primary btn-sm">
                        Modifier
                    </button>
                    @else
                    <button type="submit" class="btn btn-primary btn-sm">
                        Ajouter
                    </button>
                    @endif
                </div>
            </form>

        </div>
    </div>
</div>
