<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incription</title>
</head>
<body>
    <form action="signup.php" method="post">
        <input type="text" placeholder="firstname" name="firstname" required>
        <input type="text" placeholder="lastname" name="lastename" required>
        <input type="text" placeholder="pseudo" name="pseudo" required>
        <input type="text" placeholder="email" name="email" required>
        <input type="password" placeholder="password" name="password" required>
        <select name="sexe" id="sexe" required>
            <option>sexe</option>
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>