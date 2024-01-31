<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI4crud</title>
</head>
<body>
    <h1>Edit Form</h1>
    <form action="<?= base_url('update'); ?>" method="POST">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label for="username">User Name</label>
        <input type="text" name="username" id="username" value="<?= $user['name'] ?>">
        <br>
        <label for="city">User City</label>
        <input type="text" name="mycity" id="mycity" value="<?= $user['city'] ?>">
        <br>
        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>
