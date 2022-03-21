@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Information utilisateur</p>
              <button class="btn btn-primary btn-sm ms-auto">Besoin d'aide ?</button>
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Identité</p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">ID Client </label>
                  <input class="form-control" value="{{ number_format(Auth::user()->id) }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Email</label>
                  <input class="form-control" type="email" value="{{ (Auth::user()->email) }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Prénom</label>
                  <input class="form-control" type="text" value="{{ (Auth::user()->firstname) }}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nom</label>
                  <input class="form-control" type="text" value="{{ (Auth::user()->lastname) }}">
                </div>
              </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Informations de Contact</p>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Addresse</label>
                  <input class="form-control" type="text" value="{{ (Auth::user()->address) }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">City</label>
                  <input class="form-control" type="text" value="{{ (Auth::user()->city) }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Country</label>
                  <input class="form-control" type="text" value="{{ (Auth::user()->country) }}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Postal code</label>
                  <input class="form-control" type="text" value="{{ (Auth::user()->postalcode) }}">
                </div>
              </div>
            </div>
            <hr class="horizontal dark">

          </div>
        </div>
      </div>

    </div>
@endsection