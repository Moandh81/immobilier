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
                    <input type="text" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
                     name="nom"
                     value={{old('nom')}} >
                </div>

                @if($errors->has('nom'))

                <div class="alert alert-danger alert-dismissable">
                  Vous devez indiquer votre nom

                </div>

                @endif

                <div class="form-group">
                    <label for="email">Votre adresse Email</label>

                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                     name="email" value={{old('email')}} >
                </div>


                @if($errors->has('email'))

                <div class="alert alert-danger alert-dismissable">
                  Vous devez indiquer votre adresse email

                </div>

                @endif


                <div class="form-group ">
                    <label class="form-check-label" for="message">Votre Message</label>

                    <textarea class="form-control w-100
                    {{ $errors->has('message') ? 'is-invalid' : '' }}
                    "



                      name="message" rows="5">{{old('message')}}</textarea>

                </div>

                @if($errors->has('message'))

                <div class="alert alert-danger alert-dismissable">
                  Vous devez indiquer votre message

                </div>


                @endif


                <button type="submit" class="btn btn-primary my-5">Envoyer</button>
            </form>



        </div>
    </div>



@endsection
