<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
</head>
<body>
    @include('components.navbar')
    
    <a href="{{ route('articles.index') }}">&larr; Torna agli articoli</a>
    
    <h1>{{ $article['title'] }}</h1>
    <p><em>Categoria: {{ $article['category'] }}</em></p>
    <hr>
    <div>
        <p>{{ $article['content'] }}</p>
    </div>
</body>
</html>