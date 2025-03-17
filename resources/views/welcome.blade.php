<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="row w-100">
                <div class="col-md-6 mx-auto text-center">
                    <h1 class="mb-4">Cek Cuaca</h1>
                    <form method="action" action="/">
                        <div class="input-group mb-3">
                            <input type="text" name="city" value="{{ $city ?? 'Jakarta' }}">
                            <button type="submit" class="btn btn-primary">Cek Cuaca</button>
                        </div>
                    </form>

                    <div id="result">
                        @if(isset($error))
                            <p style="color:red;">{{ $error }}</p>
                        @elseif(isset($weatherData))
                            <h3>Cuaca di {{ $weatherData['city'] }}</h3>
                            <p>Suhu: {{ $weatherData['temperature'] }}°C</p>
                            <p>Keterangan: {{ $weatherData['description'] }}</p>
                            <p>Kelembaban: {{ $weatherData['humidity'] }}%</p>
                            <p>Kecepatan Angin: {{ $weatherData['wind_speed'] }} km/h</p>
                            <p>Terasa Seperti: {{ $weatherData['feels_like'] }}°C</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
