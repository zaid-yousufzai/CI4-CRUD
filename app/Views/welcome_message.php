<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI4crud</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="<?= base_url('insert'); ?>" method="POST">
        <label for="username">User Name</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="city">User City</label>
        <input type="text" name="mycity" id="mycity">
        <br>
        <input type="submit" value="Insert Data" name="submit">
    </form>
</body>
</html>
