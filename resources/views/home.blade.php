<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Trains</title>
</head>
<body>
    <main>
        <div class="main-container">

            <h1></h1>

            <div class="tickets-container">

                @foreach($trains as $train)
                    <div class="ticket-wrapper">
                        <div class="dettagli-treno">
                            <div class="azienda">
                                <span class="tipo-info">Compagnia:</span>
                                {{$train->azienda}}
                            </div>
                            <div class="codice-treno">
                                <span class="tipo-info">Codice treno:</span>
                                {{$train->codice_treno}}
                            </div>
                            <div class="numero-carrozze">
                                <span class="tipo-info">Numero carrozze:</span>
                                {{$train->numero_carrozze}}
                            </div>
                        </div>

                        <div class="itinerario-treno">
                            <div class="partenza">
                                <div class="stazione-partenza itinerario-info">
                                    <span class="tipo-info">Stazione di partenza: </span>
                                    {{$train->stazione_di_partenza}}
                                </div>
                                <div class="data-partenza itinerario-info">
                                    <span class="tipo-info">Data di partenza: </span>
                                    {{$train->data_di_partenza}}
                                </div>
                                <div class="orario-partenza itinerario-info">
                                    <span class="tipo-info">Orario di partenza: </span>
                                    {{$train->orario_di_partenza}}
                                </div>
                            </div>
                            
                            <div class="arrivo">
                                <div class="stazione-arrivo itinerario-info">
                                    <span class="tipo-info">Stazione di arrivo: </span>
                                    {{$train->stazione_di_arrivo}}
                                </div>
                                <div class="data-arrivo itinerario-info">
                                    <span class="tipo-info">Data di arrivo: </span>
                                    {{$train->data_di_arrivo}}
                                </div>
                                <div class="orario-arrivo itinerario-info">
                                    <span class="tipo-info">Orario di arrivo: </span>
                                    {{$train->orario_di_arrivo}}
                                </div>
                            </div>
                        </div>

                        <div class="prezzo-biglietto">
                            <span class="tipo-info">Prezzo: </span>
                            $ {{$train->prezzo_biglietto}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
</body>
</html>