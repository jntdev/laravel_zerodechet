@extends('layouts.app')
@section('content')
    @if (Auth::check())
        <a href="{{route('event_list')}}"><button id="tableaudebord">Tableau de bord</button></a>
    @endif
    <section class="success_create_event">
        <div class="success_event_content">
        <p>Vous avez bien modifié votre animation</p>
    <div class="flexrow success_comeback">
            <a href="../tableaudebord"><button>Revenir au tableau de bord</button></a>
             <a href="tableau_anim"><button>Revenir à la gestion des animations</button></a>
        </div>
        </div>
    </section>
@endsection
