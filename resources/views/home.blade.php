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
                        <div class="train-details">
                            <div class="company">
                                <span class="info-type">Company:</span>
                                {{$train->company}}
                            </div>
                            <div class="train-code">
                                <span class="info-type">Train code:</span>
                                {{$train->train_code}}
                            </div>
                            <div class="carriages-number">
                                <span class="info-type">Carriages number:</span>
                                {{$train->carriages_number}}
                            </div>
                        </div>

                        <div class="train-schedule">
                            <div class="departure">
                                <div class="departure-station schedule-info">
                                    <span class="info-type">Departure station: </span>
                                    {{$train->departure_station}}
                                </div>
                                <div class="departure-date schedule-info">
                                    <span class="info-type">Departure date: </span>
                                    {{$train->departure_date}}
                                </div>
                                <div class="departure-time schedule-info">
                                    <span class="info-type">Departure time: </span>
                                    {{$train->departure_time}}
                                </div>
                            </div>
                            
                            <div class="arrival">
                                <div class="arrical-station schedule-info">
                                    <span class="info-type">Arrival station: </span>
                                    {{$train->arrival_station}}
                                </div>
                                <div class="arrival-date schedule-info">
                                    <span class="info-type">Arrival date: </span>
                                    {{$train->arrival_date}}
                                </div>
                                <div class="arrival-time schedule-info">
                                    <span class="info-type">Arrival time: </span>
                                    {{$train->arrival_time}}
                                </div>
                            </div>
                        </div>

                        <div class="ticket-price">
                            <span class="info-type">Ticket price: </span>
                            $ {{$train->ticket_price}}
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
</body>
</html>