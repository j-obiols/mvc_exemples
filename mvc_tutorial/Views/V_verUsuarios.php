<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <table>
       <thead>
        <tr>
            <td>Usuari</td>
            <td>Contrassenya</td>
            <td>Nom real</td>
        </tr>
       </thead>
       <tbody>
         <?php
            foreach($users as $user){
                echo '<tr>';
                echo '<td>'.$user['username'].'</td>';
                echo '<td>'.$user['password'].'</td>';
                echo '<td>'.$user['name'].'</td>';
                echo '</tr>';
            }
         ?>
       </tbody>


    </table>
</body>
</html>