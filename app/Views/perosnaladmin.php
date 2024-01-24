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
        .delete-button {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Detalles del Empleado</h2>
    <table id="employee-table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
            <th>Puesto</th>
            <th>Contacto</th>
            <th>Acciones</th>
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
            <td>
                <button class="delete-button" onclick="deleteEmployee(this)">Eliminar</button>
            </td>
        </tr>
    </table>

    <form id="addEmployeeForm">
        <h2>Agregar Empleado</h2>
        <!-- Agrega los campos necesarios para agregar un empleado -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <!-- Agrega otros campos según tus necesidades -->

        <button type="button" onclick="addEmployee()">Agregar Empleado</button>
    </form>

    <script>
        function deleteEmployee(button) {
            // Elimina la fila actual al hacer clic en el botón "Eliminar"
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }

        function addEmployee() {
            // Agrega una nueva fila con datos aleatorios al hacer clic en el botón "Agregar Empleado"
            var table = document.getElementById("employee-table");

            var newRow = table.insertRow(-1);
            newRow.innerHTML = `
                <td>${Math.floor(Math.random() * 1000)}</td>
                <td>${getRandomName()}</td>
                <td>${Math.floor(Math.random() * 40) + 20}</td>
                <td>${getRandomCity()}</td>
                <td>${getRandomPosition()}</td>
                <td>
                    <strong>Email:</strong> ${getRandomEmail()}<br>
                    <strong>Teléfono:</strong> ${getRandomPhone()}
                </td>
                <td>
                    <button class="delete-button" onclick="deleteEmployee(this)">Eliminar</button>
                </td>
            `;
        }

        function getRandomName() {
            var names = ['Alejandro', 'Elena', 'Gabriel', 'Laura'];
            var lastNames = ['Martínez', 'Gómez', 'Hernández', 'Pérez'];
            return names[Math.floor(Math.random() * names.length)] + ' ' + lastNames[Math.floor(Math.random() * lastNames.length)];
        }

        function getRandomCity() {
            var cities = ['Quito', 'Guayaquil', 'Cuenca', 'Ambato'];
            return cities[Math.floor(Math.random() * cities.length)];
        }

        function getRandomPosition() {
            var positions = ['Analista', 'Gerente', 'Asistente', 'Especialista'];
            return positions[Math.floor(Math.random() * positions.length)];
        }

        function getRandomEmail() {
            var names = ['Alejandro', 'Elena', 'Gabriel', 'Laura'];
            var email = names[Math.floor(Math.random() * names.length)] + '@company.com';
            return email.toLowerCase().replace(' ', '');
        }

        function getRandomPhone() {
            return Math.floor(Math.random() * 900) + 100 + '-' + Math.floor(Math.random() * 900) + 100 + '-' + Math.floor(Math.random() * 9000) + 1000;
        }
    </script>
</body>
</html>
