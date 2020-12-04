@extends('layouts.layoutAdmin')

@section('contenu')
    <div>
        <a style="margin: 19px;" href="{{ route('wedboards.create')}}" class="btn btn-primary">Nouveau tableau de bord</a>
    </div>

    <div class="row">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <div class="col-sm-12">
            <h1 class="display-3">Tableaux de bord utilisateurs</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Id user</td>
                    <td>Active</td>
                    <td>Nom projet</td>
                    <td>Date mariage</td>
                    <td>Ville mariage</td>
                    <td>Code Postal</td>
                    <td>Adresse</td>
                    <td>Nb invités</td>
                    <td>Budget prév</td>
                    <td>Menu</td>
                    <td>Vin</td>
                    <td>Costumes</td>
                    <td>Loc salle</td>
                    <td>Faire-parts</td>
                    <td>Fleurs</td>
                    <td>Cérémonie</td>
                    <td>Coiffeur</td>
                    <td>Transport</td>
                    <td>Maquillage</td>
                    <td>Photo</td>
                    <td>Décoration</td>
                    <td>Animation</td>
                    <td>Alliances</td>
                    <td>Autres</td>
                    <td>Date création</td>
                    <td></td>
                    <td></td>


                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->user_id}}</td>
                        <td>{{$project->activated}}</td>
                        <td>{{$project->title_project}}</td>
                        <td>{{$project->wed_date}}</td>
                        <td>{{$project->wed_city}}</td>
                        <td>{{$project->wed_postal_code}}</td>
                        <td>{{$project->wed_address}}</td>
                        <td>{{$project->nb_guest}}</td>
                        <td>{{$project->budget}}</td>
                        <td>{{$project->menu}}</td>
                        <td>{{$project->wine}}</td>
                        <td>{{$project->costume}}</td>
                        <td>{{$project->place_price}}</td>
                        <td>{{$project->announcement}}</td>
                        <td>{{$project->flower}}</td>
                        <td>{{$project->ceremony}}</td>
                        <td>{{$project->hair}}</td>
                        <td>{{$project->transport}}</td>
                        <td>{{$project->makeup}}</td>
                        <td>{{$project->photo}}</td>
                        <td>{{$project->decoration}}</td>
                        <td>{{$project->animation}}</td>
                        <td>{{$project->ring}}</td>
                        <td>{{$project->other}}</td>
                        <td>{{$project->created_at}}</td>

                        <td>
                            <a href="{{ route('wedboards.edit',$project->id)}}" class="btn btn-primary">Mettre à jour</a>
                        </td>
                        <td>
                            <form action="{{ route('wedboards.destroy', $project->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Effacer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
