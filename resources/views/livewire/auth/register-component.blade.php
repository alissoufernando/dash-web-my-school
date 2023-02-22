<div>
    <!-- Start Account Area -->
    <div class="account-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="account-content">
                        <div class="account-header">
                            <a href="index.html">
                                <img src="assets/dash/images/main-logo.svg" alt="main-logo">
                            </a>
                            <h3>Registration</h3>
                        </div>

                        <form class="account-wrap" wire:submit.prevent='register'>
                            <div class="form-group mb-24 icon">
                                <input type="text" class="form-control" placeholder="Nom" wire:model="nom">
                                <img src="assets/dash/images/icon/user-square.svg" alt="user-square">
                            </div>
                            <div class="form-group mb-24 icon">
                                <input type="text" class="form-control" placeholder="Prenoms" wire:model="prenoms">
                                <img src="assets/dash/images/icon/user-square.svg" alt="user-square">
                            </div>
                            <div class="form-group mb-24 icon">
                                <input type="tel" class="form-control" placeholder="Télephone" wire:model="tel">
                                <img src="assets/dash/images/icon/user-square.svg" alt="user-square">
                            </div>
                            <div class="form-group mb-24 icon">
                                <select name="" class="form-control" id="" wire:model="sexe">
                                    <option value="" selected>Choisir votre sexe</option>
                                    <option value="M">Masculin</option>
                                    <option value="F">Feminin</option>
                                </select>
                                <img src="assets/dash/images/icon/user-square.svg" alt="user-square">
                            </div>

                            <div class="form-group mb-24 icon">
                                <input type="email" class="form-control" placeholder="Email" wire:model="email">
                                <img src="assets/dash/images/icon/sms.svg" alt="sms">
                            </div>
                            <div class="form-group mb-24 icon">
                                <input type="password" class="form-control" placeholder="Password" wire:model="mot_de_passe">
                                <img src="assets/dash/images/icon/key.svg" alt="key">
                            </div>
                            <div class="form-group mb-24">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree <a href="terms.html">Terms & Policy</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-24">
                                <button type="submit" class="default-btn">Registration</button>
                            </div>
                            <div class="form-group mb-24">
                                <p class="account">Already Have An Account? <a href="{{ route('login') }}">Log In</a></p>
                            </div>
                        </form>

                        <ul class="account-social-link">
                            <li>
                                <a href="https://www.google.com/" target="_blank">
                                    <i class='bx bxl-google' ></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account Area -->
</div>
