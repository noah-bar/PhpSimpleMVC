<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1>Todos</h1>
    <table style="border: 1px solid black">
        <thead>
            <tr>
                <th>N°</th>
                <th>Titre</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todos as $todo): ?>
                <tr>
                    <td style="text-align: center"><?= $todo->getId() ?></td>
                    <td style="text-align: center"><?= $todo->getTitle() ?></td>
                    <td style="text-align: center"><?= $todo->getCompleted() ? '✅' : '' ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>