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

    <?php if(isset($randomNumber)): ?>
        <p>Random Number: <?php echo e($randomNumber); ?></p>
        <p>Limit: <?php echo e($limit); ?></p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\bu ratih\rng\resources\views/rng.blade.php ENDPATH**/ ?>