<section class="form cid-sP8pBdNxQJ" id="formbuilder-6">


    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto mbr-form">
                <!--Formbuilder Form-->
                <form enctype="multipart/form-data" action="{{ route('filiale.store') }}" method="POST" class="mbr-form form-with-styler"
                    data-form-title="newFilialeForm">
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
                            <h4 class="mbr-fonts-style display-5">Ajouter une nouvelle filiale</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div data-for="nom" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="nom-formbuilder-6"
                                class="form-control-label mbr-fonts-style display-7">Nom</label>
                            <input type="text" name="nom" placeholder="Nom" data-form-field="nom"
                                class="form-control display-7" required="required" value="" id="nom-formbuilder-6">
                        </div>
                        <div data-for="nomResponsable" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="nomResponsable-formbuilder-6"
                                class="form-control-label mbr-fonts-style display-7">Nom du responsable</label>
                            <input type="text" name="nomResponsable" placeholder="Nom complet du responsable"
                                data-form-field="nomResponsable" class="form-control display-7" required="required"
                                value="" id="nomResponsable-formbuilder-6">
                        </div>
                        <div data-for="photoResponsable" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="photoResponsable-formbuilder-6"
                                class="form-control-label mbr-fonts-style display-7">Photo du Responsable</label>
                            <input type="file" accept="image/*" name="photoResponsable"
                                placeholder="Selectionner la photo du responsable"
                                data-form-field="photoResponsable" class="form-control display-7"
                                required="required" value="" id="photoResponsable-formbuilder-6">
                        </div>
                        <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="email-formbuilder-6"
                                class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="text" name="email" placeholder="Email" data-form-field="email"
                                class="form-control display-7" required="required" value="" id="email-formbuilder-6">
                        </div>
                        <div data-for="telephone" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="telephone-formbuilder-6"
                                class="form-control-label mbr-fonts-style display-7">Téléphone:</label>
                            <input type="text" name="telephone" placeholder="Téléphone" data-form-field="telephone"
                                required="required" class="form-control display-7" value=""
                                id="telephone-formbuilder-6">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="adresse">
                            <label for="adresse-formbuilder-6"
                                class="form-control-label mbr-fonts-style display-7">Adresse</label>
                            <textarea name="adresse" placeholder="Adresse" data-form-field="adresse"
                                required="required" class="form-control display-7"
                                id="adresse-formbuilder-6"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <hr>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-fonts-style display-7">Détails inauguration</p>
                        </div>
                        <div ng-init="inaugure=0" data-for="inaugure" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <div class="form-control-label">
                                <label for="inaugure-formbuilder-6" class="mbr-fonts-style display-7">Inaugurée
                                    ?</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input ng-model="inaugure" type="radio" name="inaugure" data-form-field="inaugure"
                                    class="form-check-input display-7" value="0" ng-checked="inaugure==0"
                                    id="inaugure-formbuilder-6">
                                <label class="form-check-label display-7">Non</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input ng-model="inaugure" type="radio" name="inaugure" data-form-field="inaugure"
                                    class="form-check-input display-7" value="1" id="inaugure-formbuilder-6">
                                <label class="form-check-label display-7">Oui</label>
                            </div>
                        </div>
                        <div ng-if="inaugure==1" data-for="dateInauguration" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="dateInauguration-formbuilder-6"
                                class="form-control-label mbr-fonts-style display-7">Date inauguration</label>
                            <input type="date" name="dateInauguration" data-form-field="dateInauguration"
                                required="required" class="form-control display-7" value="2018-07-22"
                                id="dateInauguration-formbuilder-6">
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
