<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>I Nostri Servizi</title>
</head>
<body>
    @include('components.navbar')
    <h1>I Nostri Servizi</h1>
    <ul>
        @foreach($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
</body>
</html>