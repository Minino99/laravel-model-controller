<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css'
        integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q=='
        crossorigin='anonymous' />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row row-cols-3">
            @foreach ($data as $film)
                <div class="col p-3">
                    <div class="card" style="width: 18rem; height: 14rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$film["title"]}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$film["original_title"]}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">{{$film["nationality"]}}</h6>
                            <h5 class="card-subtitle mb-2">IMDb: {{$film["vote"]}}</h5>
                            <h5 class="card-subtitle mb-2">{{$film["date"]}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
