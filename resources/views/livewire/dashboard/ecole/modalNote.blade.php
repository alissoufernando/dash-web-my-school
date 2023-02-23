

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="note" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title text-center" id="staticBackdropLabel">Ajouter une écoles</h5>
              <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='saveNote'>
                <div class="modal-body">
                    <div class="form-layouts-area">
                        <div class="container-fluid">
                                <div class="card-box-style">
                                    <div class="mb-3">
                                        <select wire:ignore name="" id="" class="form-control" wire:model.lazy='matiere_id'>
                                            <option value="">Choisir une matiere</option>
                                            @foreach ($matieres as $matiere)
                                            <option value="{{ $matiere->id }}">{{ $matiere->matiere }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Note" aria-label="Note" wire:model.lazy='note'>
                                    </div>
                                    <div class="mb-3">
                                        <select wire:ignore name="" id="" class="form-control" wire:model.lazy='matiere_id'>
                                            <option value="">Choisir un type</option>
                                            <option value="Interrogatio">Interrogatio</option>
                                            <option value="Devoir">Devoir</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a wire:click.prevent='resetInputFields' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>

                    <button type="submit" class="btn btn-primary btn-sm">
                        Ajouter
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
