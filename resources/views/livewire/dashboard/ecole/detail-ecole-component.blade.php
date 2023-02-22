<div>
    <main class="main-content-wrap style-two">
        <!-- Start Page Title Area -->
        <div class="page-title-area mt-5">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="page-title">
                            <h3>Listes des Classes</h3>
                            <!-- Button trigger modal -->

                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="page-title-list">
                            <li>Dashboard</li>
                            <li>Ecoles</li>
                            <li>Classes</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="table-responsive" data-simplebar>
                    <div class="others-title">
                        <h3 class="d-inline">Listes des Classes</h3>

                        <a type="button" class="btn  btn-info btn-sm float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                            Ajouter
                        </a>
                    </div>

                    <table class="table align-middle mb-0">
                        {{-- <thead>
                            <tr>
                                <th class="">N°</th>
                                <th class="">Numero</th>
                                <th class="">Adresse</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @if ($classes == "")

                            <tr>
                                <p>Auccune donnée n'est disponible</p>
                            </tr>

                            @else

                            @foreach ($classes as $classe)
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $classe->nom }}
                                </td>

                                <td>
                                    {{ $classe->scolarite }}
                                </td>
                                <td>
                                    <ul class="d-flex justify-content-betweens">
                                        <li>
                                            <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Détails" href="{{route('dashboard.datail-classes',['id' => $classe->id])}}">
                                                <img src="{{ asset('assets/dash/images/icon/call-2.svg') }}" alt="call-2">
                                            </a>
                                        </li>

                                        <li>
                                            <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Supprimer" href="#" wire:click.prevent="deleteStudent({{$classe->id}})">
                                                <img src="{{ asset('assets/dash/images/icon/trash-2.svg') }}" alt="trash-2">
                                            </a>

                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Contact List Area -->

         <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="table-responsive" data-simplebar>
                    <div class="others-title">
                        <h3 class="d-inline">Listes des matiere</h3>

                        <a type="button" class="btn  btn-info btn-sm float-end" data-bs-toggle="modal" data-bs-target="#Matiere">
                            Ajouter
                        </a>
                    </div>

                    <table class="table align-middle mb-0">
                        {{-- <thead>
                            <tr>
                                <th class="">N°</th>
                                <th class="">Numero</th>
                                <th class="">Adresse</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @if ($matieres == "")

                            <tr>
                                <p>Auccune donnée n'est disponible</p>
                            </tr>

                            @else

                            @foreach ($matieres as $matiere)
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $matiere->matiere }}
                                </td>
                                <td>
                                    <ul class="d-flex justify-content-betweens">

                                        <li>
                                            <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Supprimer" href="#" wire:click.prevent="deletematiere({{$matiere->id}})">
                                                <img src="{{ asset('assets/dash/images/icon/trash-2.svg') }}" alt="trash-2">
                                            </a>

                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Contact List Area -->
          <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="table-responsive" data-simplebar>
                    <div class="others-title">
                        <h3 class="d-inline">Listes des students</h3>
                    </div>

                    <table class="table align-middle mb-0">
                        {{-- <thead>
                            <tr>
                                <th class="">N°</th>
                                <th class="">Numero</th>
                                <th class="">Adresse</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @if ($students == "")

                            <tr>
                                <p>Auccune donnée n'est disponible</p>
                            </tr>

                            @else

                            @foreach ($students as $student)
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $student->nom }}
                                </td>

                                <td>
                                    {{ $student->prenoms }}
                                </td>
                                <td>
                                    {{ $student->nom_prenoms_pere }}
                                </td>

                                <td>
                                    {{ $student->nom_prenoms_mere }}
                                </td>
                                <td>
                                    <ul class="d-flex justify-content-betweens">



                                        <li>
                                            <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Supprimer" href="#" wire:click.prevent="deleteStudent({{$student->id}})">
                                                <img src="{{ asset('assets/dash/images/icon/trash-2.svg') }}" alt="trash-2">
                                            </a>

                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Contact List Area -->
          <!-- Start Contact List Area -->
        <div class="contact-list-area">
            <div class="container-fluid">
                <div class="table-responsive" data-simplebar>
                    <div class="others-title">
                        <h3 class="d-inline">Listes des events</h3>

                        <a type="button" class="btn  btn-info btn-sm float-end" data-bs-toggle="modal" data-bs-target="#event">
                            Ajouter
                        </a>
                    </div>

                    <table class="table align-middle mb-0">
                        {{-- <thead>
                            <tr>
                                <th class="">N°</th>
                                <th class="">Numero</th>
                                <th class="">Adresse</th>
                                <th class="">Actions</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @if ($events == "")
                            <tr>
                                <p>Auccune donnée n'est disponible</p>
                            </tr>
                            @else
                            @foreach ($events as $event)
                            <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                                <td>
                                    {{ $event->motif }}
                                </td>

                                <td>
                                    {{ $event->contenu }}
                                </td>

                                <td>
                                    {{ $event->lieu }}
                                </td>

                                <td>
                                    {{ $event->date_debut_evenement }}
                                </td>

                                <td>
                                    {{ $event->date_fin_evenement }}
                                </td>
                                <td>
                                    <ul class="d-flex justify-content-betweens">


                                        <li>
                                            <a type="button" data-container="body" data-toggle="popover" data-placement="top" title="Supprimer" href="#" wire:click.prevent="deleteEvent({{$event->id}})">
                                                <img src="{{ asset('assets/dash/images/icon/trash-2.svg') }}" alt="trash-2">
                                            </a>

                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Contact List Area -->

        <div class="flex-grow-1"></div>

        <!-- Start Footer Area -->
        @include('livewire.dashboard.partials.footer')

        <!-- End Footer Area -->
    </main>
    @include('livewire.dashboard.ecole.modalClasse')
    @include('livewire.dashboard.ecole.modalEvent')
    @include('livewire.dashboard.ecole.modalMatiere')

</div>
@section('scripts')
<script src="{{ asset('assets/dash/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/dash/js/jbox.all.min.js') }}"></script>
@endsection

