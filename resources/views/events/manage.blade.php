@extends('layouts.app')
@section('content')
    <section class="index_vue_page">
        <aside class="index_vue_panel">
            <div class="button_controller">
                <a href="{{route('profile')}}"><button class="userbutton">Mon profil</button></a>
                <a href="{{route('event_list')}}">
                    <button class="userbutton">Tableau de bord</button>
                </a>
                <a href="{{route('registered')}}"><button class="userbutton">Vos inscriptions</button></a>

                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('event_create')}}"><button class="animbutton">Créez une animation</button></a>

                @endif
                @if (Checker::isAdmin())
                    <a href="{{route('all_user')}}"><button class="adminbutton">Tous les participants</button></a>
                @endif
            </div>
            <div class="calendar"></div>
        </aside>
<section class="events backoffice_borderleft">
    <div class="titlesection">
        <h2>Liste des animations</h2>
    </div>
    <div class="event_list">
        @if($events -> count()== 0)
            <p>Vous n'avez pas encore créé d'animation</p>
        @endif
        @foreach($events as $event)
            <div class="box_event">
                <div class="top_event_section flexrow">
                    <img src="{{ asset('images/event/'. $event->event_picture) }}" alt="#">
                    <div class="rdvsection">
                        <p>{{$event->date->format('d/m/Y')}} </br>
                            {{$event->time}}</p>
                        <p>{{$event->city}}</p>
                        <p>Crée par {{$event->user->first_name}}</p>
                    </div>
                </div>
                <div class="box_event_content">
                    <!-- <div class="topsection">

                    </div> -->
                    <div class="infosection">
                        <h3>{{$event->title}}</h3>
                        <div><textarea class="readonly" readonly>{{ $event->description }}</textarea></div>
                        <p class="end_of_textarea">...</p>
                    </div>
                </div>
                <a href="{{route('event_show', ['event_id' => $event->id])}}">Voir en détails</a>
            </div>
        @endforeach
    </div>
</section>
@endsection
