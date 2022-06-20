{{--directory layouts, archive app.blade.php--}}
@extends('layouts.app')

@section('content')
    <div>
        <h2>FAÇA SEU LOGIN</h2>
    </div>
    <section class="bg-dark w-100 h-50 p-5">

        <form class="col-3 g-3 top-50 start-50 bg-dark h-50 p-1 rounded border border-warning">
            <div class="col-auto mt-3">
                <label for="staticEmail2" class="visually-hidden">Email</label>
                <input type="text"  class="form-control" id="staticEmail2" placeholder="example@email.com">
            </div>
            <div class="col-auto mt-3">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
            </div>
            <div class="col-auto text-center mt-3">
                <button type="submit" class="btn btn-primary mb-3 w-50 ">Entrar</button>
            </div>
        </form>
    </section>
@endsection




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
