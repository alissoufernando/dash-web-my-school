

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                @if ($student_id)
                <h5 class="modal-title text-center" id="staticBackdropLabel">Modifier {{ $this->nom }}</h5>
                @else
                <h5 class="modal-title text-center" id="staticBackdropLabel">Ajouter un Studiant</h5>
                @endif
              <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='saveStudent'>
                <div class="modal-body">
                    <div class="form-layouts-area">
                        <div class="container-fluid">
                                <div class="card-box-style">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" wire:model.lazy='nom'>
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="prenoms" aria-label="prenoms" wire:model.lazy='prenoms'>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="nom et prenoms du pere" aria-label="nom du prenoms du pere" wire:model.lazy='nom_prenoms_pere'>
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="nom et prenoms de la mere" aria-label="nom et prenoms de la mere" wire:model.lazy='nom_prenoms_mere'>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a wire:click.prevent='resetInputFields' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>
                    @if ($student_id)
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
