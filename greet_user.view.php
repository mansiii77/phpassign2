<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pico.min.css">
    <title>Greeting App</title>
</head>
<body>
    <h1>Greeting Form</h1>
    <form method="POST" action="../greet_user.php"> 
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label>Favorite Food:</label><br>
        <input type="radio" id="pulao" name="food" value="Pulao" required>
        <label for="pulao">Pulao</label><br>
        <input type="radio" id="paneer" name="food" value="Paneer">
        <label for="paneer">Paneer</label><br>
        <input type="radio" id="pizza" name="food" value="Pizza">
        <label for="pizza">Pizza</label><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php if (isset($greeting) && isset($name) && isset($food)): ?>
        <h2><?= $greeting ?> <?= $name ?>. Your favorite food is <?= $food ?>.</h2>
    <?php endif; ?>
</body>
</html>