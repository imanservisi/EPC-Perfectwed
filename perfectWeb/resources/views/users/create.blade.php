@extends('layouts.layoutAdmin')

@section('contenu')
<body class="background">
<div>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Ajouter un utilisateur</h1>
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
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="admin">Admin:</label>
                        <input type="text" class="form-control" name="admin"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe:</label>
                        <input type="password" class="form-control" name="password"/>
                    </div>
                    <div class="form-group">
                        <label for="active">Active:</label>
                        <input type="text" class="form-control" name="active"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Créer</button>
                </form>
            </div>
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
