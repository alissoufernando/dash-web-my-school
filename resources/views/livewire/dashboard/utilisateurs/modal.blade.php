

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                @if ($user_id)
                <h5 class="modal-title text-center" id="staticBackdropLabel">Modifier {{ $this->nom }} {{ $this->prenoms  }}</h5>
                @else
                <h5 class="modal-title text-center" id="staticBackdropLabel">Ajouter un utilisateur</h5>
                @endif
              <button wire:click.prevent='resetInputFields' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='saveUser'>
                <div class="modal-body">
                    <div class="form-layouts-area">
                        <div class="container-fluid">
                                <div class="card-box-style">
                                    @if ($user_id)
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" wire:model.lazy='nom'>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Prenoms" aria-label="Prenoms" wire:model.lazy='prenoms'>
                                    </div>
                                    <div class="mb-3">
                                        <select name="" class="form-control" id="" wire:model.lazy='sexe'>
                                            <option value="" selected>Choisir votre sexe</option>
                                            <option value="Masculin">Masculin</option>
                                            <option value="Feminin">Feminin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Votre email" aria-label="votre email" wire:model.lazy='email'>

                                    </div>
                                    <div class="">
                                        <input type="tel" name="tel" class="form-control" placeholder="Téléphone" aria-label="Téléphone" wire:model.lazy='tel'>
                                    </div>
                                    @else
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" wire:model.lazy='nom'>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Prenoms" aria-label="Prenoms" wire:model.lazy='prenoms'>
                                    </div>
                                    <div class="mb-3">
                                        <select name="" class="form-control" id="" wire:model.lazy='sexe'>
                                            <option value="" selected>Choisir votre sexe</option>
                                            <option value="M">Masculin</option>
                                            <option value="F">Feminin</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Votre email" aria-label="votre email" wire:model.lazy='email'>

                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" name="phone" class="form-control" placeholder="Téléphone" aria-label="Téléphone" wire:model.lazy='tel'>
                                    </div>
                                    <div class="">
                                        <input type="password" class="form-control"  aria-label="Mode de passe" wire:model.lazy='mot_de_passe'>
                                    </div>
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a wire:click.prevent='resetInputFields' class="btn btn-danger float-end" type="button" data-bs-dismiss="modal">Fermer</a>
                    @if ($user_id)
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
