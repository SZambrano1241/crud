<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Empleado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
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
    <h2>Detalles del Empleado</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
            <th>Puesto</th>
            <th>Contacto</th>
        </tr>
        <tr>
            <td><?php echo rand(101, 200); ?></td>
            <td><?php
                $nombres = ['Alejandro', 'Elena', 'Gabriel', 'Laura'];
                $apellidos = ['Martínez', 'Gómez', 'Hernández', 'Pérez'];
                echo $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)];
            ?></td>
            <td><?php echo rand(22, 60); ?></td>
            <td><?php
                $ciudades = ['Quito', 'Guayaquil', 'Cuenca', 'Ambato'];
                echo $ciudades[array_rand($ciudades)];
            ?></td>
            <td><?php
                $puestos = ['Analista', 'Gerente', 'Asistente', 'Especialista'];
                echo $puestos[array_rand($puestos)];
            ?></td>
            <td>
                <strong>Email:</strong> <?php
                    $email = strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@company.com');
                    echo $email;
                ?><br>
                <strong>Teléfono:</strong> <?php echo rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999); ?>
            </td>
        </tr>
    </table>
</body>
</html>
