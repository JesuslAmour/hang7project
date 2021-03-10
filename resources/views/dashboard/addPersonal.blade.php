@extends('dashboard.layouts.master', ['title' => 'Add Personal'])

@section('body')
    <div class="addPerson">
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom & Prenom *</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mot de passe *</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Role *</label>
                <select class="form-select form-select-sm form-control" aria-label=".form-select-sm example">
                  <option selected>Admin</option>
                  <option value="1">Manager</option>
                  <option value="2">User</option>
                  <option value="3">Client</option>
                </select>
            </div>
            <div class="mb-3 form-check text-center">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label text-dark" for="exampleCheck1">Je confirme que ces informations sont correctes</label>
            </div>

            <div class="d-grid gap-2 mt-5">
                <button class="btn btn-primary form-control" type="button">Ajouter une nouvelle personne</button>
            </div>
        </form>
    </div>
@stop

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('dashboard/css/addPersonal.css') }}"/>
@stop

@section('script.footer')
    <script src="{{ asset('dashboard/js/register.js') }}"></script>
@stop
