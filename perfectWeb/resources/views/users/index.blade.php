@extends('layouts.layoutAdmin')

@section('contenu')
<body class="background">
<div>
    <div>
        <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">Nouvel utilisateur</a>
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
            <h1 class="display-3">Utilisateurs</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Admin</td>
                            <td>Nom</td>
                            <td>Email</td>
                            <td>Active</td>
                            <td>Date création</td>
                            <td>Date de désactivation</td>
                            <td>Mettre à jour</td>
                            <td>Supprimer</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr  @if($user->deleted_at) class="has-background-grey-lighter" @endif>
                            <td>{{$user->id}}</td>
                            <td>{{$user->admin}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->active}}</td>
                            <td>{{$user->created_at}}</td>
                            <td> @if($user->deleted_at)
                                    {{$user->deleted_at}} </td>
                            @else
                                @endif
                            <td>
                                @if($user->deleted_at)
                                @else
                                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Mettre à jour</a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route($user->deleted_at? 'users.force.destroy' : 'users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Effacer</button>
                                </form>
                            </td>
                            @if($user->deleted_at)
                                {{$user->deleted_at}}
                                <td>
                                    <form action="{{ route('users.restore', $user->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                    <button class="button btn btn-secondary btn-sm" type="submit">Restaurer</button>
                                </form>
                            @else
                            @endif
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</body>
@endsection

<style>
.background {
    background-color: floralwhite;
}
</style>
