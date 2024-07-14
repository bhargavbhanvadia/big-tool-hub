<!DOCTYPE html>
<html>
<head>
    <title>Text to Slug</title>
</head>
<body>
    <form action="/text-to-slug" method="POST">
        @csrf
        <input type="text" name="text" placeholder="Enter text" required>
        <button type="submit">Convert</button>
    </form>

    @isset($slug)
        <p>Slug: {{ $slug }}</p>
    @endisset
</body>
</html>
