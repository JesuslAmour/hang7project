@extends('dashboard.layouts.master', ['title' => 'register'])

@section('body')
<form id="msform" class="container">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">La géolocalisation</li>
        <li>Social Profiles</li>
        <li>Personals Informations</li>
        <li>Informations intéllectuelles</li>
        <li>Personal Details</li>
        <li>Personal Details</li>
        <li>Personal Details</li>
        <li>Personal Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <h2 class="fs-title">Votre position géographyque</h2>
        <h3 class="fs-subtitle">Première étape</h3>
        <div>
            <select>
                <option>Région</option>
                <option>Centre</option>
                <option>Ouest</option>
                <option>Nord</option>
                <option>Sud</option>
            </select>
            <select>
                <option>Département</option>
                <option>MFoundi</option>
                <option>LéKié</option>
            </select>
        </div>
        <input type="text" name="commune" placeholder="Commune" />
        <input type="text" name="quartier" placeholder="Quartier" />
        <input type="text" name="lieu" placeholder="Lieu dit" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Informations personnelles</h2>
        <h3 class="fs-subtitle">Deuxieme étape</h3>
        <input type="text" name="nom" placeholder="Nom & Prénom" />
        <label for="">Date et lieu de naissance</label>
        <div>
            <select>
                <option>Jour</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <select>
                <option>Mois</option>
                <option>Janvier</option>
                <option>Février</option>
                <option>Mars</option>
                <option>Avril</option>
            </select>
            <select>
                <option>Année</option>
                <option>2021</option>
                <option>2020</option>
                <option>2019</option>
                <option>2018</option>
            </select>
        </div>
        <input type="text" name="lieu-nais" placeholder="Lieu de Naissance" />

        <div class="radio-box">
            <span>Sexe : </span>
            <span>
                <input type="radio" name="rdo" id="opt1" class="hidden"/>
                <label for="opt1" class="radio">Homme</label>
            </span>
            <span>
                <input type="radio" name="rdo" id="opt1" class="hidden"/>
                <label for="opt1" class="radio">Femme</label>
            </span>
        </div>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Votre identité</h2>
        <h3 class="fs-subtitle">Troisieme étape</h3>
        <div>
            <input type="text" name="fname" placeholder="Nationalité" />
            <input type="text" name="fname" placeholder="Commune d'origine" />
        </div>
        <div>
            <select>
                <option>Région d'origine</option>
                <option>Centre</option>
                <option>Ouest</option>
                <option>Nord</option>
                <option>Sud</option>
            </select>
            <select>
                <option>Département d'origine</option>
                <option>Département</option>
                <option>MFoundi</option>
                <option>LéKié</option>
            </select>
        </div>
        <div>
            <input type="text" name="lname" placeholder="N°CNI" />
            <input type="text" name="lname" placeholder="Du" />
            <input type="text" name="lname" placeholder="Au" />
        </div>
        <div>
            <input type="text" name="lname" placeholder="NIU" />
            <input type="text" name="lname" placeholder="CDI" />
        </div>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Vos informations intéllectuelles</h2>
        <h3 class="fs-subtitle">Quatrième étape</h3>
        <input type="text" name="lname" placeholder="Niveau d'étude" />
        <input type="text" name="phone" placeholder="Formation professionnelle(s)" />
        <div>
            <select>
                <option>Situation matrimoniale</option>
                <option>Célibataire</option>
                <option>Marié(e)</option>
                <option>Veuf(ve)</option>
            </select>
        </div>
        <input type="number" name="lname" placeholder="Nombre d'enfants" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Votre Occupation</h2>
        <h3 class="fs-subtitle">Cinquieme étape</h3>
        <div>
            <input type="text" name="phone" placeholder="Metier" />
            <input type="number" name="phone" placeholder="Ancienneté" />
        </div>
        <div class="radio-box">
            <span>Formalisé : </span>
            <span>
                <input type="radio" name="rdo" id="opt1" class="hidden"/>
                <label for="opt1" class="radio">Oui</label>
            </span>
            <span>
                <input type="radio" name="rdo" id="opt1" class="hidden"/>
                <label for="opt1" class="radio">Non</label>
            </span>
        </div>
        <hr>
        <div class="radio-box">
            <span>
                <input type="radio" name="rdo" id="opt1" class="hidden"/>
                <label for="opt1" class="radio">Employé</label>
            </span>
            <span>
                <input type="radio" name="rdo" id="opt1" class="hidden"/>
                <label for="opt1" class="radio">Employeur</label>
            </span>
        </div>
        <hr>
        <input type="text" name="phone" placeholder="Nombre d'employé" />
        <div class="radio-box">
            <select>
                <option>CNPS</option>
                <option>Oui</option>
                <option>Non</option>
            </select>
            <select>
                <option>CPTE Bancaire</option>
                <option>Oui</option>
                <option>Non</option>
            </select>
        </div>
        <input type="number" name="lname" placeholder="Nom" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Votre Occupation</h2>
        <h3 class="fs-subtitle">Cinquieme étape (2)</h3>
        <div>
            <input type="text" name="phone" placeholder="Secteur" />
            <input type="number" name="phone" placeholder="Filière" />
        </div>
        <input type="number" name="phone" placeholder="Carte ART/COM" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Legalisation de votre entreprise</h2>
        <h3 class="fs-subtitle">Sixieme étape</h3>
        <div>
            <input type="text" name="phone" placeholder="Montant Impôt libératoire trimestrielle" />
            <input type="number" name="phone" placeholder="Montant patente annuelle" />
        </div>
        <div>
            <select>
                <option>Régime d'imposition</option>
                <option>Impôt libératoire</option>
                <option>REEL</option>
                <option>SIMPLIFIÉ</option>
            </select>
        </div>
        <input type="number" name="phone" placeholder="Carte ART/COM" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Vos Contacts</h2>
        <h3 class="fs-subtitle">Troisieme étape</h3>
        <input type="number" name="phone" placeholder="Téléphone" />
        <input type="email" name="fname" placeholder="Email" />
        <input type="number" name="fname" placeholder="Whatsapp" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
</form>
@stop

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('dashboard/css/register.css') }}"/>
@stop

@section('script.footer')
    <script src="{{ asset('dashboard/js/register.js') }}"></script>
@stop
