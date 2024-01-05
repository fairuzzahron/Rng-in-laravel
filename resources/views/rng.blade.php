<!DOCTYPE html>
<html>
<head>
    <title>Random Number Generator</title>
</head>
<body>
    <h1>Random Number Generator</h1>

    <form action="/generate-random-number" method="get">
        <label for="limit">Enter Limit:</label>
        <input type="number" id="limit" name="limit" min="1" required>
        <button type="submit">Generate Random Number</button>
    </form>

    @if(isset($randomNumber))
        <p>Random Number: {{ $randomNumber }}</p>
        <p>Limit: {{ $limit }}</p>
    @endif
</body>
</html>
