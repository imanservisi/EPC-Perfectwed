@extends('layouts.layoutAdmin')

@section('contenu')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Ajouter un tableau de bord</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('wedboards.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="user_id">ID user:</label>
                        <input type="number" class="form-control" name="user_id"/>
                    </div>
                    <div class="form-group">
                        <label for="activated">Active:</label>
                        <input type="number" class="form-control" name="activated"/>
                    </div>
                    <div class="form-group">
                        <label for="title_project">Nom projet:</label>
                        <input type="text" class="form-control" name="title_project"/>
                    </div>
                    <div class="form-group">
                        <label for="wed_date">Date mariage:</label>
                        <input type="text" class="form-control" name="wed_date"/>
                    </div>
                    <div class="form-group">
                        <label for="wed_city">Ville mariage:</label>
                        <input type="text" class="form-control" name="wed_city"/>
                    </div>
                    <div class="form-group">
                        <label for="wed_postal_code">Code Postal:</label>
                        <input type="text" class="form-control" name="wed_postal_code"/>
                    </div>
                    <div class="form-group">
                        <label for="wed_address">Adresse:</label>
                        <input type="text" class="form-control" name="wed_address"/>
                    </div>
                    <div class="form-group">
                        <label for="nb_guest">Nb invités:</label>
                        <input type="text" class="form-control" name="nb_guest"/>
                    </div>
                    <div class="form-group">
                        <label for="budget">Budget:</label>
                        <input type="text" class="form-control" name="budget"/>
                    </div>
                    <div class="form-group">
                        <label for="menu">Menu:</label>
                        <input type="text" class="form-control" name="menu"/>
                    </div>
                    <div class="form-group">
                        <label for="wine">Vin:</label>
                        <input type="text" class="form-control" name="wine"/>
                    </div>
                    <div class="form-group">
                        <label for="costume">Costume:</label>
                        <input type="text" class="form-control" name="costume"/>
                    </div>
                    <div class="form-group">
                        <label for="place_price">Loc salle:</label>
                        <input type="text" class="form-control" name="place_price"/>
                    </div>
                    <div class="form-group">
                        <label for="announcement">Faire-parts:</label>
                        <input type="text" class="form-control" name="announcement"/>
                    </div>
                    <div class="form-group">
                        <label for="flower">Fleurs:</label>
                        <input type="text" class="form-control" name="flower"/>
                    </div>
                    <div class="form-group">
                        <label for="ceremony">Cérémonie:</label>
                        <input type="text" class="form-control" name="ceremony"/>
                    </div>
                    <div class="form-group">
                        <label for="hair">Coiffeur:</label>
                        <input type="text" class="form-control" name="hair"/>
                    </div>
                    <div class="form-group">
                        <label for="transport">Transport:</label>
                        <input type="text" class="form-control" name="transport"/>
                    </div>
                    <div class="form-group">
                        <label for="makeup">Maquillage:</label>
                        <input type="text" class="form-control" name="makeup"/>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo:</label>
                        <input type="text" class="form-control" name="photo"/>
                    </div>
                    <div class="form-group">
                        <label for="decoration">Décoration:</label>
                        <input type="text" class="form-control" name="decoration"/>
                    </div>
                    <div class="form-group">
                        <label for="animation">Animation:</label>
                        <input type="text" class="form-control" name="animation"/>
                    </div>
                    <div class="form-group">
                        <label for="ring">Alliances:</label>
                        <input type="text" class="form-control" name="ring"/>
                    </div>
                    <div class="form-group">
                        <label for="other">Autres:</label>
                        <input type="text" class="form-control" name="other"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
