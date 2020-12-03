@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 row">
            <div class="cardHome" onclick="alert(`la operación 'PCR' no está disponible aún.`)">
                <div class="image">
                    <a href ="#">
                        <img src="{{ asset('img/cards/pcr.png') }}" alt="react" />
                    </a>
                </div>
                <div class="title">PCR</div>
                <div class="contant">
                    <p>Prueba para detectar la presencia de SARS-CoV-2 mediante una toma de muestra en la nasofaringe.</p>
                </div>
                <div class="bottom-area">
                    <a href="javascript:void(0)" class="button-read">Entrar</a>
                </div>
            </div>
            <div class="cardHome" onclick="alert(`la operación 'Análisis bioquímico' no está disponible aún.`)">
                <div class="image">
                    <a href ="#">
                        <img src="{{ asset('img/cards/ab.png') }}" alt="react" />
                    </a>
                </div>
                <div class="title">Análisis bioquímico</div>
                <div class="contant">
                    <p>Determinación de parámetros metabólicos en suero o plasma sanguíneo.</p>
                </div>
                <div class="bottom-area">
                    <a href="javascript:void(0)" class="button-read">Entrar</a>
                </div>
            </div>
            <div class="cardHome" onclick="alert(`la operación 'Test de paternidad' no está disponible aún.`)">
                <div class="image">
                    <a href ="#">
                        <img src="{{ asset('img/cards/paternidad.png') }}" alt="react" />
                    </a>
                </div>
                <div class="title">Test de paternidad</div>
                <div class="contant">
                    <p>Estudio de ADN para conocer la relación biológica entre dos personas mediante saliba o sangre.</p>
                </div>
                <div class="bottom-area">
                    <a href="javascript:void(0)" class="button-read">Entrar</a>
                </div>
            </div>
            <div class="cardHome" onclick="alert(`la operación 'Test genealógico de ADN' no está disponible aún.`)">
                <div class="image">
                    <a href ="#">
                        <img src="{{ asset('img/cards/adn.png') }}" alt="react" />
                    </a>
                </div>
                <div class="title">Test genealógico de ADN</div>
                <div class="contant">
                    <p>Examen del genoma de un individuo mediante un frotis de la mucosa bucal. Aporta información acerca de la genealogía o linaje personal.</p>
                </div>
                <div class="bottom-area">
                    <a href="javascript:void(0)" class="button-read">Entrar</a>
                </div>
            </div>
            <div class="cardHome" onclick="alert(`la operación 'Test hereditario de cáncer' no está disponible aún.`)">
                <div class="image">
                    <a href ="#">
                        <img src="{{ asset('img/cards/cancer.png') }}" alt="react" />
                    </a>
                </div>
                <div class="title">Test hereditario de cáncer</div>
                <div class="contant">
                    <p>Valoración del risgo genético de padecer cáncer hereditario realizando un test rápido sanguíneo.</p>
                </div>
                <div class="bottom-area">
                    <a href="javascript:void(0)" class="button-read">Entrar</a>
                </div>
            </div>
            <div class="cardHome" onclick="alert(`la operación 'Otros' no está disponible aún.`)">
                <div class="image">
                    <a href ="#">
                        <img src="{{ asset('img/cards/others.png') }}" alt="react" />
                    </a>
                </div>
                <div class="title">Otros</div>
                <div class="contant">
                    <p>Solicitud de diversas operaciones en relación a centros médicos que no se encuentren en las anteriores opciones.</p>
                </div>
                <div class="bottom-area">
                    <a href="javascript:void(0)" class="button-read">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
