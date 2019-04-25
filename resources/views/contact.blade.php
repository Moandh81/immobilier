@extends('master')

@section('title', 'Contactez-nous')

@section('content')


    <div class="container">



        <div class="row">


            <h1 class="mx-auto my-3"> Restez En Contact Avec Nous</h1>
        </div>



        <div class="row">





            <form class="w-50 mx-auto" method="post" action="{{route('postContactForm')}}">

                @csrf
                <div class="form-group">
                    <label for="nom">Votre Nom</label>
                    <input type="text" class="form-control"   name="nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Votre adresse Email</label>
                    <input type="email" class="form-control"  name="email" required>
                </div>

                <div class="form-group">
                    <label class="form-check-label" for="message">Votre Message</label>
                    <textarea class="form-control w-100" name="message" rows="5"></textarea>

                </div>

                <button type="submit" class="btn btn-primary my-5">Envoyer</button>
            </form>



        </div>
    </div>



@endsection
