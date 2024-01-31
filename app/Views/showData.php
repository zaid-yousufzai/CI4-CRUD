<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>
    <h1>User Data</h1>
    <table border="1px" cellpadding="2px" cellspacing="2px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>City</th>
            <th>Options</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['city'] ?></td>
                    <td>
                        <a href="<?= base_url("delete/{$user['id']}") ?>">Delete</a>
                        <a href="<?= base_url("edit/{$user['id']}") ?>">Update</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button><a href="<?= base_url('') ?>">Add Data</a></button>
</body>
</html>
