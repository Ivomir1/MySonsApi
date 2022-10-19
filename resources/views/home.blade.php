@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('API') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <a href='http://laravel.cinovahora.cz:8000/posts'>http://cinovahora.cz:8000/posts</a> //Seznam všech článků<br>
                    <a href='http://laravel.cinovahora.cz:8000/posts/3'>http://cinovahora.cz:8000/posts/ { id článku }</a> //Detail článku <br>
                    <a href='http://laravel.cinovahora.cz:8000/postsfromuser/2'>http://cinovahora.cz:8000/postsfromuser/{ id autora }</a> //Články jednoho zvoleného autora (nezabezpečené)<br>
                    <a href='http://laravel.cinovahora.cz:8000/postsfromuser/show'>http://cinovahora.cz:8000/postsfromuser/show</a> //Články přihlášeného uživatele(zabezpečené)<br>
                    <a href='http://laravel.cinovahora.cz:8000/posts/store?title=aaaaaaaa&text=bbbbb'>http://laravel.cinovahora.cz:8000/posts/store?title=aaaaaaaa&text=bbbbb</a> //Vytvoření článku, proměnné (zabezpečené)<br>
                    
                </div>

                <div class="card-header">{{ __('UI') }}</div>
                <div class="card-body">


                    Registrace <br>
                    <a href='http://laravel.cinovahora.cz:8000/register'>http://cinovahora.cz:8000/register</a> //registrační formulář<br>
                    Login <br>
                    <a href='http://laravel.cinovahora.cz:8000/login'>http://cinovahora.cz:8000/login</a>  //logovací formulář<br>



                </div>
            </div>
        </div>
        @endsection