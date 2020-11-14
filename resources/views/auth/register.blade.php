@extends('racine')


@section('title')
    Nouveau Utilisateur
@endsection

@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-5">
            <h4 class="page-title">Gestion des Utilisateurs</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Quickoo</a></li>
                        <li class="breadcrumb-item"><a href="/">Utilisateurs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>



<div class="container-fluid">
        <div class="alert alert-dismissible alert-warning col-12">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Si l'utilisateur est un client c'est recommondé de laisser le mode passe par defaut : quickoo2020 </a>.
          </div>
    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="card">
                <div class="card-header">
                    Ajouter un nouveau utilisateur:
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('register') }}">


                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('ICE') }}</label>

                            <div class="col-md-4">
                                <input id="description" type="text" class="form-control"  name="description" value="{{ old('description') }}" >

                            </div>
                            <label for="ville" class="col-md-2 col-form-label text-md-right">{{ __('Ville') }}</label>

                            <div class="col-md-4">
                                <input id="ville" type="text" class="form-control" value="{{ old('ville') }}"  name="ville">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-2 col-form-label text-md-right">{{ __('Téléphone') }}</label>

                            <div class="col-md-4">
                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}"   required >
                            </div>
                            <label for="image" class="col-md-2 col-form-label text-md-right">{{ __('Url de l\'image') }}</label>

                            <div class="col-md-4">
                                <input id="image" type="text" class="form-control" name="image" value="{{ old('image') }}"  >

                
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="adresse" class="col-md-2 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-10">
                                <textarea name="adresse" id="adresse" cols="100" rows="5"></textarea required>
                            </div>
                            
                            
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" value="quickoo2020" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-4">
                                <input id="password-confirm"  value="quickoo2020"  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="roles" class="col-md-2 col-form-label text-md-right">Rôles Quickoo: </label>
                            <div class="col-md-10 d-flex p-t-10 justify-content-around">
                                <div class="form-check">
                                    <input type="radio" name="roles[]" value="1" id="admin" >
                                    <label for="admin">Admin</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roles[]" value="3" id="Livreur" >
                                    <label for="Livreur">Livreur</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roles[]" value="4" id="Personnel" >
                                    <label for="Personnel">Personnel</label>
                                </div>
                            </div>
                            <label for="roles" class="col-md-2 col-form-label text-md-right">Client : </label>
                            <div class="col-md-10 d-flex p-t-10 justify-content-around">
                            <div class="form-check">
                                <input type="radio" name="roles[]" value="2" id="cl" checked>
                                <label for="cl">Collecte, Livraison</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="roles[]" value="5" id="cls">
                                <label for="cls">Collecte, livraison, stockage</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="roles[]" value="0" id="s">
                                <label for="s">Stockage</label>
                            </div>
                        
                            </div>
                        </div>
                        <div class="form-group row">

                            <label for="n" class="col-md-4 col-form-label text-md-right">{{ __('Poids Normal') }}</label>
                            <div class="col-md-2">
                                <input id="n" type="number" class="form-control" name="n" value="{{ 0,old('n') }}"   required >
                            </div>

                            <label for="v" class="col-md-4 col-form-label text-md-right">{{ __('Poids Volumineux') }}</label>
                            <div class="col-md-2">
                                <input id="v" type="number" class="form-control" name="v" value="{{ 0,old('v') }}"   required >
                            </div>
                          
                        </div>

                        <div class="form-group row">
                           
                            <label for="nh" class="col-md-4 col-form-label text-md-right">{{ __('Poids Normal Hors Tanger') }}</label>
                            <div class="col-md-2">
                                <input id="nh" type="number" class="form-control" name="nh" value="{{0, old('nh') }}"   required >
                            </div>

                            <label for="vh" class="col-md-4 col-form-label text-md-right">{{ __('Poids Volumineux Hors Tanger') }}</label>
                            <div class="col-md-2">
                                <input id="vh" type="number" class="form-control" name="vh" value="{{ 0,old('vh') }}"   required >
                            </div>

                        </div>

                    

                        <div class="form-group row">
                            <div class="col-12 d-flex justify-content-around ">
                                <button type="submit" class="btn btn-primary" style="width: 30%;">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>


                    </form>

                </div>
            
            </div>
        
        </div>

    </div>

</div>
@endsection
