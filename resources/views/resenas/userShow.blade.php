@extends('layouts.show')

@section('content')
    @include('layouts.navbar')

    <!-- Body -->
    <div id="body-container">
        <div id="review-container">
            <div class="info">
                <h1 style="display:inline;">{{$resena->titulo}}</h1><br>
                <h2 style="display:inline;">{{$resena->nombre}}</h2>
                <h3 style="display:inline;">{{$resena->fecha_creacion}}</h3>
            </div><br>
            <div class="tags">
                <h1 style="display:inline;">Etiquetas:</h1>
                <h2 style="display:inline;">{{$resena->categoria}}</h2>

            </div>
            <div class="review-holder">
                <div class="text">
                    <p>
                        {{$resena->texto}}

                    </p>
                </div>

            </div>
            <!--<div class="reactions">
                <h1 style="display:inline;">{{$resena->likes}}<h1>
                <h1 style="display:inline;">#likes</h1>
                <h1 style="display:inline;">#comentarios</h1>
                <h1 style="display:inline;">#compartir</h1>
            </div>-->

            <div class="reactions">
                <h1 style="display:inline;" class="like counter" >
                    {{$resena->likes}}
                    <img src="../imgs/likes.png" class="icon-act">
                    <span class="tooltiptext">Like counter</span>
                </h1>
                <h1 style="display:inline;" class="comments">
                    {{$resena->comments}}
                    <a href="#comments-section"><img src="../imgs/comment.png" class="icon-act"></a>
                    <span class="tooltiptext">Make a comment!</span>
                </h1>
            </div>
        </div>
    </div>

    <!--Comment section-->
    <div id="body-container">
        <div id="comments-section">
        @if (Auth::check())
            <form action="{{ route('comentarios.store' , ['resena' => $resena])}}" method="POST">
                @csrf
                <div class="user-comment-np">
                    <h1>¡Escribe un comentario!</h1>
                    <textarea name ="texto" required></textarea>

                    <div class="buttons">
                        <a class="nav-link" href="#" style="display:inline;">
                            <input type="submit" value="Comentar">
                        </a>
                    </div>
                </div>
            </form>
        @else
            <div class="user-comment">
                <h1>¡Escribe un comentario!</h1>

                <div class="buttons">
                    <a class="nav-link" href="{{ route('auth.login')}} " style="display:inline;">
                    <button type="button" class="btn btn-primary btn-log-in">
                        Log in

                    </button>
                    </a>
                    <a class="nav-link" href="{{ route('auth.register')}} " style="display:inline;">
                        <button type="button" class="btn btn-primary btn-log-in">
                            Sign up
                        </button>
                    </a>
                </div>
            </div>
        @endif


        @foreach($resena->comentario as $comentario)
            <div class="generic-comment">
                <div class="comment-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                    </svg>
                    <div>
                        <h1 style="display:inline;">{{$comentario->nombre}}</h1>
                        <h1 style="display:inline;">{{$comentario->likes}}</h1>
                        <h1 style="display:inline;">{{$comentario->fecha}}</h1>
                    </div>
                </div>

                <div class="comment-text">
                    <div class="text-container">
                        <p>
                            {{$comentario->texto}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
