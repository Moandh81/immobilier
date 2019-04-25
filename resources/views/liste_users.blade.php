@extends('master')

@section('title', 'Liste Des  Utilisateurs')

@section('content')


    <div class="container">


        <div class="row">


            <h1 class="mx-auto my-5"> Liste des Utilisateurs</h1>

            </div>


    </div>


    <div class="container">

    <div class="row">


        <form action="{{route('postUsers')}}" method="post" class="w-100">

            @csrf

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
            </thead>
            <tbody>


            @foreach($users as $user)

            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>



                    <select class="form-control" id="exampleFormControlSelect1" name={{$user->id}}>
                        <option value="admin" {{  $user->role == "admin" ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{  $user->role == "user" ? 'selected' : '' }}>User</option>
                        <option value="agent" {{  $user->role == "agent" ? 'selected' : '' }}>Agent</option>

                    </select>

                </td>
            </tr>

             @endforeach



            </tbody>
        </table>


            <button type="submit" class="btn btn-primary mb-2 float-right">Valider les changements</button>


        </form>



    </div>

    </div>




    @endsection
