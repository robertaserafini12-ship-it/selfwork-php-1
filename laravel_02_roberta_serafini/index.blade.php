<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tutti gli Articoli</title>
</head>
<body>
    @include('components.navbar')
    <h1>Tutti gli Articoli</h1>

    <div style="display: flex; gap: 20px;">
        @foreach($articles as $article)
            <div style="border: 1px solid #ccc; padding: 15px; width: 250px;">
                <h3>{{ $article['title'] }}</h3>
                <p><strong>Categoria:</strong> {{ $article['category'] }}</p>
                <p>{{ $article['description'] }}</p>
                <!-- Generazione dinamica del link parametrico tramite la named route -->
                <a href="{{ route('articles.show', ['id' => $article['id']]) }}">Leggi di più</a>
            </div>
        @endforeach
    </div>
</body>
</html>