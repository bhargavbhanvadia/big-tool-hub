<!-- resources/views/tools/lorem-ipsum.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Lorem Ipsum Generator</h1>
        <form method="POST" action="{{ route('lorem-ipsum.generate') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Generate</button>
        </form>

        @isset($text)
            <div class="mt-3">
                <h2>Generated Text</h2>
                <p>{{ $text }}</p>
            </div>
        @endisset
    </div>
</body>
</html>
