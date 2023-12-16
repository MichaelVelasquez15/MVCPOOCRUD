<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/table.css">
    <title>Tabla</title>
</head>
<body class="bod" > -->

<style>
    .table {
        width: 900px;
        margin-top: 20px;
        padding: 0;
    }

    .nav {
        background-color: #007bff;
        border: 1px solid gray;
        height: 40px;
        text-align: left;

    }

    .id {
        border: 1px solid gray;
        text-align: center;

    }

    .name {
        border: 1px solid gray;
        padding-left: 10px;
        width: 125px;

    }

    .email {
        border: 1px solid gray;
        padding-left: 10px;
        width: 235.42px;

    }

    .pp {
        border: 1px solid gray;
        padding-left: 10px;
        width: 146.06px;

    }

    .actions {
        border: 1px solid gray;
        padding-left: 10px;

    }

    .celda {
        height: 100px;
    }

    .edit {
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        color: white;
        height: 25px;
        width: 44.98px;

    }

    .delete {
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        color: white;
        height: 25px;
        margin-left: 5px;
        width: 60.55px;
    }
</style>
<a href="../index.php?controller=AuthController&action=create"><button class="edit">Nuevo Usuario</button></a>
<table class="table">
    <thead class="nav">
        <tr class="nav">
            <th class="id">ID</th>
            <th class="name">Name</th>
            <th class="email">Email</th>
            <th class="name">Role</th>
            <th class="pp">Profile Picture</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($data as  $usuario) : ?>

            <tr class="celda">
                <td class="id"><?= $usuario['id'] ?></td>
                <td class="name"></td>
                <td class="email"><?= $usuario['correo'] ?></td>
                <td class="name"><?= $usuario['rol_id'] ?></td>
                <td class="pp"></td>
                <td class="actions">
                    <a href="../index.php?controller=UserController&action=updateView&id=<?= $usuario['id'] ?>"><button class="edit">Edit</button></a>
                    <a href="../index.php?controller=UserController&action=destroy&id=<?= $usuario['id'] ?>"><button class="delete">Delete</button></a>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<!-- </body>
</html> -->