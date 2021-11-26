@extends('layouts.app')
@section('content')
    <section class="index_vue_page">
{{--        <aside class="underindex_vue_pannel"></aside>--}}
        <aside class="index_vue_pannel">
            <div class="button_controller">
                <a href="{{route('profile')}}"><button class="userbutton">Mon profil</button></a>
                <a href="{{route('registered')}}"><button class="userbutton">Vos inscriptions</button></a>
                @if (Checker::isAdmin() || Checker::isAnim())
                    <a href="{{route('event_create')}}"><button class="animbutton">créez une animation</button></a>
                    <a href="{{route('manage')}}"><button class="animbutton">Gerez vos animations</button></a>
                @endif
            </div>
            <div class="calendar"></div>
        </aside>
    <section class="events">
    <div class="titlesection">
        <h2>Liste des animations</h2>
    </div>
    <div class="event_list">
        @foreach($events as $event)
            <div class="box_event">
                <div class="top_event_section flexrow">
                    <img src="{{ asset('images/event/'. $event->event_picture) }}" alt="#">
                    <div class="rdvsection">
                        <p>{{$event->date->format('d/m/Y')}}</p>
                        <p>{{$event->city}}</p>
                        <p>Crée par {{$event->user->first_name}}</p>
                    </div>
                </div>
                <div class="box_event_content">
                    <div class="infosection">
                        <h3>{{$event->title}}</h3>
                       <p>{{$event->description}}</p>
                    </div>
                </div>
                <a href="{{route('event_show', ['event' => $event->id])}}">Voir en détails</a>
            </div>
        @endforeach
    </div>
</section>
    </section>
@endsection
