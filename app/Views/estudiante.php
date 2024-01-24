<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Detalles del Estudiante</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
            <th>Ocupación</th>
            <th>Hobbies</th>
            <th>Contacto</th>
        </tr>
        <tr>
            <td><?php echo rand(1, 100); ?></td>
            <td><?php
                $nombres = ['Juan', 'María', 'Carlos', 'Ana'];
                $apellidos = ['López', 'Gómez', 'Rodríguez', 'Fernández'];
                echo $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)];
            ?></td>
            <td><?php echo rand(18, 60); ?></td>
            <td><?php
                $ciudades = ['Quito', 'Guayaquil', 'Cuenca', 'Ambato'];
                echo $ciudades[array_rand($ciudades)];
            ?></td>
            <td><?php
                $ocupaciones = ['Estudiante', 'Profesional', 'Artista', 'Empresario'];
                echo $ocupaciones[array_rand($ocupaciones)];
            ?></td>
            <td><?php
                $hobbies = ['Bailar', 'Pintar', 'Deportes', 'Viajar'];
                echo implode(', ', array_rand(array_flip($hobbies), rand(1, 3)));
            ?></td>
            <td>
                <strong>Email:</strong> <?php
                    $email = strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@example.com');
                    echo $email;
                ?><br>
                <strong>Teléfono:</strong> <?php echo rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999); ?>
            </td>
        </tr>
    </table>
</body>
</html>
