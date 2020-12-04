@extends('layouts.layoutAdmin')
@section('contenu')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Mise à jour tableau de bord</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('wedboards.update', $project->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="user_id">ID user:</label>
                    <input type="number" class="form-control" name="user_id" value="{{ $project->user_id }}"/>
                </div>
                <div class="form-group">
                    <label for="activated">Active:</label>
                    <input type="number" class="form-control" name="activated" value="{{ $project->activated }}"/>
                </div>
                <div class="form-group">
                    <label for="title_project">Nom projet:</label>
                    <input type="text" class="form-control" name="title_project" value="{{ $project->title_project }}"/>
                </div>
                <div class="form-group">
                    <label for="wed_date">Date mariage:</label>
                    <input type="text" class="form-control" name="wed_date" value="{{ $project->wed_date }}"/>
                </div>
                <div class="form-group">
                    <label for="wed_city">Ville mariage:</label>
                    <input type="text" class="form-control" name="wed_city" value="{{ $project->wed_city }}"/>
                </div>
                <div class="form-group">
                    <label for="wed_postal_code">Code Postal:</label>
                    <input type="text" class="form-control" name="wed_postal_code" value="{{ $project->wed_postal_code }}"/>
                </div>
                <div class="form-group">
                    <label for="wed_address">Adresse:</label>
                    <input type="text" class="form-control" name="wed_address" value="{{ $project->wed_address }}"/>
                </div>
                <div class="form-group">
                    <label for="nb_guest">Nb invités:</label>
                    <input type="text" class="form-control" name="nb_guest" value="{{ $project->nb_guest }}"/>
                </div>
                <div class="form-group">
                    <label for="budget">Budget:</label>
                    <input type="text" class="form-control" name="budget" value="{{ $project->budget }}"/>
                </div>
                <div class="form-group">
                    <label for="menu">Menu:</label>
                    <input type="text" class="form-control" name="menu" value="{{ $project->menu }}"/>
                </div>
                <div class="form-group">
                    <label for="wine">Vin:</label>
                    <input type="text" class="form-control" name="wine" value="{{ $project->wine }}"/>
                </div>
                <div class="form-group">
                    <label for="costume">Costume:</label>
                    <input type="text" class="form-control" name="costume" value="{{ $project->costume }}"/>
                </div>
                <div class="form-group">
                    <label for="place_price">Loc salle:</label>
                    <input type="text" class="form-control" name="place_price" value="{{ $project->place_price }}"/>
                </div>
                <div class="form-group">
                    <label for="announcement">Faire-parts:</label>
                    <input type="text" class="form-control" name="announcement" value="{{ $project->announcement }}"/>
                </div>
                <div class="form-group">
                    <label for="flower">Fleurs:</label>
                    <input type="text" class="form-control" name="flower" value="{{ $project->flower }}"/>
                </div>
                <div class="form-group">
                    <label for="ceremony">Cérémonie:</label>
                    <input type="text" class="form-control" name="ceremony" value="{{ $project->ceremony }}"/>
                </div>
                <div class="form-group">
                    <label for="hair">Coiffeur:</label>
                    <input type="text" class="form-control" name="hair" value="{{ $project->hair }}"/>
                </div>
                <div class="form-group">
                    <label for="transport">Transport:</label>
                    <input type="text" class="form-control" name="transport" value="{{ $project->transport }}"/>
                </div>
                <div class="form-group">
                    <label for="makeup">Maquillage:</label>
                    <input type="text" class="form-control" name="makeup" value="{{ $project->makeup }}"/>
                </div>
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="text" class="form-control" name="photo" value="{{ $project->photo }}"/>
                </div>
                <div class="form-group">
                    <label for="decoration">Décoration:</label>
                    <input type="text" class="form-control" name="decoration" value="{{ $project->decoration }}"/>
                </div>
                <div class="form-group">
                    <label for="animation">Animation:</label>
                    <input type="text" class="form-control" name="animation" value="{{ $project->animation }}"/>
                </div>
                <div class="form-group">
                    <label for="ring">Alliances:</label>
                    <input type="text" class="form-control" name="ring" value="{{ $project->ring }}"/>
                </div>
                <div class="form-group">
                    <label for="other">Autres:</label>
                    <input type="text" class="form-control" name="other" value="{{ $project->other }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
