@extends('layouts.layoutAdmin')

@section('contenu')
    <h1>Bienvenue sur la page Admin</h1>
    <br/>
    <div>
        <a href="users"><button type="button" class="btn btn-outline-primary" >Utilisateurs</button></a>
    </div>
    <br/>
    <div>
        <a href="wedboards"><button type="button" class="btn btn-outline-primary">Tableau de bord mariés</button></a>
    </div>
    <br/>

@endsection
