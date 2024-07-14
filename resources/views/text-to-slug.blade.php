<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text to Slug Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Text to Slug Tool</h1>
        <form method="POST" action="{{ route('text-to-slug.generate') }}">
            @csrf
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <input type="text" class="form-control" id="text" name="text" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Slug</button>
        </form>

        @isset($slug)
            <div class="mt-3">
                <h2>Generated Slug</h2>
                <p>{{ $slug }}</p>
            </div>
        @endisset
    </div>
</body>
</html>
