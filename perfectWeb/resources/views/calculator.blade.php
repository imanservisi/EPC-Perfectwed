<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<h1>Calculator</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="calculation" method="POST">
                    @csrf
                    <div class="card" style="background-color: coral">
                        <div class="card-body m-auto">
                                <h1 class="text-center text-light">Calcul</h1>

                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <input type="number" name="firstnumber" placeholder="firstnumber" class="form-control" required="">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <input type="number" name="secondnumber" placeholder="secondnumber" class="form-control" required="">

                                    </div>
                                </div>
                        </div>
                        <input type="submit" name="btn" class="btn btn-warning btn-lg" value="Enter">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            @if(session('message'))
                <div class="alert alert-warning">
                    {{ session('message') }}
                    @endif
                </div>
        </div>

    </div>
</body>
</html>
