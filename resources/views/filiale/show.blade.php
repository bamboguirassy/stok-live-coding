@extends('layouts.app')

@section('content')
    <section data-bs-version="5.1" class="header4 cid-sP8Igy3FaR" id="header4-c">


        <div class="mbr-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="content-wrap">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1">
                        <strong>{{ $filiale->nom }}</strong>
                    </h1>

                    <p class="mbr-fonts-style mbr-text mbr-white mb-3 display-7">
                        Adresse : {{ $filiale->adresse }}</p>

                    <div class="mbr-section-btn"><a class="btn btn-white display-4" href="#" data-toggle="modal"
                            data-bs-toggle="modal" data-target="#mbr-popup-d" data-bs-target="#mbr-popup-d"><span
                                class="mobi-mbri mobi-mbri-letter mbr-iconfont mbr-iconfont-btn"></span>Contacter</a> <a
                            class="btn btn-warning display-4" href="#"><span
                                class="mobi-mbri mobi-mbri-edit mbr-iconfont mbr-iconfont-btn"></span>Modifier</a></div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal mbr-popup cid-sP8JhklnVs fade" tabindex="-1" role="dialog" data-overlay-color="#8caff0"
        data-overlay-opacity="0.8" id="mbr-popup-d" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="container position-static margin-center-pos">
                    <div class="modal-header pb-0">
                        <h5 class="modal-title mbr-fonts-style display-5">Contacter</h5>
                        <button type="button" class="close d-flex" data-dismiss="modal" data-bs-dismiss="modal"
                            aria-label="Close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                fill="currentColor">
                                <path
                                    d="M13.4 12l10.3 10.3-1.4 1.4L12 13.4 1.7 23.7.3 22.3 10.6 12 .3 1.7 1.7.3 12 10.6 22.3.3l1.4 1.4L13.4 12z">
                                </path>
                            </svg>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p class="mbr-text mbr-fonts-style display-7">
                            Envoyer un mail au responsable de la filiale en remplissant le formulaire ci-dessous.</p>

                        <div>



                            <div class="form-wrapper">
                                <!--Formbuilder Form-->
                                <form action="{{ route('send.email.to.responsable',compact('filiale')) }}" method="POST" class="mbr-form form-with-styler"
                                    data-form-title="contactForm">
                                    @csrf
                                    <div class="">
                                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                                        </div>
                                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                        </div>
                                    </div>
                                    <div class="dragArea">
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="objet">
                                            <label for="objet-mbr-popup-d"
                                                class="form-control-label mbr-fonts-style display-7">Objet</label>
                                            <input type="text" name="objet" placeholder="Objet du mail"
                                                data-form-field="objet" class="form-control display-7" required="required"
                                                value="" id="objet-mbr-popup-d">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="message">
                                            <label for="message-mbr-popup-d"
                                                class="form-control-label mbr-fonts-style display-7">Message</label>
                                            <textarea name="message" placeholder="Ecrire le message ici..."
                                                data-form-field="message" class="form-control display-7" required="required"
                                                id="message-mbr-popup-d"></textarea>
                                        </div>
                                        <div class="col-md-auto input-group-btn">
                                            <button type="submit" class="btn btn-primary display-4">Envoyer</button>
                                        </div>
                                    </div>
                                </form>
                                <!--Formbuilder Form-->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <section data-bs-version="5.1" class="table2 marketm4_table2 section-table cid-sP8GYL4NrJ" id="table2-b">



        <div class="container container-table">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <h2 class="mbr-section-title mbr-fonts-style mbr-bold align-center display-2">Liste des produits
                    </h2>
                </div>
            </div>
            <div class="table-wrapper">
                <div class="container">
                    <div class="row search">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="dataTables_filter">
                                <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                                <input class="form-control input-sm" disabled="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container scroll">
                    <table class="table isSearch" cellspacing="0" data-empty="Aucun enregistrement">
                        <thead>
                            <tr class="table-heads">
                                <th class="head-item mbr-medium mbr-fonts-style display-4">Produit</th>
                                <th class="head-item mbr-medium mbr-fonts-style display-4">
                                    Quantité</th>
                                <th class="head-item mbr-medium mbr-fonts-style display-4">
                                    Prix Unitaire</th>
                                <th class="head-item mbr-medium mbr-fonts-style display-4">Disponibilité</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($filiale->produits as $produit)
                            <tr>
                                <td class="body-item mbr-fonts-style display-4">
                                    {{ $produit->nom }}
                                </td>
                                <td class="body-item mbr-fonts-style display-4">{{ $produit->quantite }}</td>
                                <td class="body-item mbr-fonts-style display-4">{{ $produit->prixUntaire }} FCFA</td>
                                <td class="body-item mbr-fonts-style display-4">
                                    @if($produit->disponible)
                                    <div style="width: 50px; background: greenyellow;" class="pt-3"></div>
                                    @else
                                    <div style="width: 50px; background: orange;" class="pt-3"></div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container table-info-container">
                    <div class="row info">
                        <div class="col-md-6">
                            <div class="dataTables_info mbr-fonts-style display-7">
                                <span class="infoBefore">Showing</span>
                                <span class="inactive infoRows"></span>
                                <span class="infoAfter">entries</span>
                                <span class="infoFilteredBefore">(filtered
                                    from</span>
                                <span class="inactive infoRows"></span>
                                <span class="infoFilteredAfter"> total
                                    entries)</span>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="form cid-sP8LDj0zVI" id="formbuilder-e" ng-controller="ProduitController">


        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto mbr-form">
                    <!--Formbuilder Form-->
                    <form action="{{ route('produit.store') }}" method="POST" class="mbr-form form-with-styler" data-form-title="newProduitForm">
                        @csrf
                        <div class="form-row">
                            @foreach ($errors->all() as $error)
                            <div data-form-alert-danger="" class="alert alert-danger col-12">
                                {{$error}}
                            </div>
                            @endforeach
                        </div>
                        <div class="dragArea form-row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="mbr-fonts-style display-2"><strong>Ajouter des produits</strong></h4>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <hr>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="nombreRecords" class="form-label">Combien de produits voulez-vous
                                        ajouter ?</label>
                                    <input ng-change="setRange()" ng-model="nombreEnregistrement" type="number" name="nombreRecords" id="nombreRecords" class="form-control"
                                        placeholder="Le nombre d'enregistrements" aria-describedby="nombreRecordId">
                                    <small id="nombreRecordId" class="text-muted">Pour vous permettre de créer
                                        simultanément plusieurs produits...</small>
                                </div>
                            </div>
                            <input type="number" value="{{$filiale->id}}" name="filiale_id" hidden>
                            <div class="row" ng-repeat="index in range">
                                <h6 class="mbr-fonts-style display-5"><strong><em>Produit @{{index}}</em></strong></h6>
                                <div data-for="nom" class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <label for="nom-formbuilder-e"
                                        class="form-control-label mbr-fonts-style display-7">Nom</label>
                                    <input type="text" name="nom[]" placeholder="Nom du produit" data-form-field="nom"
                                        class="form-control display-7" required="required" value="" id="nom-formbuilder-e">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 form-group" data-for="prixUnitaire">
                                    <label for="prixUnitaire-formbuilder-e"
                                        class="form-control-label mbr-fonts-style display-7">Prix Unitaire</label>
                                    <input type="number" name="prixUnitaire[]" placeholder="Prix Unitaire" max="" min="0"
                                        step="5" data-form-field="prixUnitaire" class="form-control display-7"
                                        required="required" value="" id="prixUnitaire-formbuilder-e">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 form-group" data-for="quantite">
                                    <label for="quantite-formbuilder-e"
                                        class="form-control-label mbr-fonts-style display-7">Quantité</label>
                                    <input type="number" name="quantite[]" placeholder="Quantité Disponible" max="" min="0"
                                        step="1" data-form-field="quantite" class="form-control display-7"
                                        required="required" value="" id="quantite-formbuilder-e">
                                </div>
                                <hr class="pt-2">
                            </div>

                            <div class="col">
                                <button type="submit" class="btn btn-primary display-7">Sauvegarder</button>
                            </div>
                        </div>
                    </form>
                    <!--Formbuilder Form-->
                </div>
            </div>
        </div>
    </section>
@endsection
