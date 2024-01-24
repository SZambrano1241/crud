<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    
   public function index(): string
    {
        return view('perosnaladmin');
    }

    public function verEstudiante(): ResponseInterface
    {
        $nombres = ['Juan', 'María', 'Carlos', 'Ana'];
        $apellidos = ['López', 'Gómez', 'Rodríguez', 'Fernández'];
        $ciudades = ['Quito', 'Guayaquil', 'Cuenca', 'Ambato'];
        $ocupaciones = ['Estudiante', 'Profesional', 'Artista', 'Empresario'];
        $hobbies = ['Bailar', 'Pintar', 'Deportes', 'Viajar'];

        $persona2 = array(
            'Id' => rand(1, 100),
            'Nombre' => $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)],
            'Edad' => rand(18, 60),
            'Ciudad' => $ciudades[array_rand($ciudades)],
            'Ocupacion' => $ocupaciones[array_rand($ocupaciones)],
            'Hobbies' => array_rand(array_flip($hobbies), rand(1, 3)),
            'Contacto' => array(
                'Email' => strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@example.com'),
                'Telefono' => rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999)
            )
        );

        return $this->response->setJson($persona2);
    }

    public function verEmpleado(): ResponseInterface
    {
        $nombres = ['Alejandro', 'Elena', 'Gabriel', 'Laura'];
        $apellidos = ['Martínez', 'Gómez', 'Hernández', 'Pérez'];
        $ciudades = ['Quito', 'Guayaquil', 'Cuenca', 'Ambato'];
        $puestos = ['Analista', 'Gerente', 'Asistente', 'Especialista'];

        $empleado = array(
            'Id' => rand(101, 200),
            'Nombre' => $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)],
            'Edad' => rand(22, 60),
            'Ciudad' => $ciudades[array_rand($ciudades)],
            'Puesto' => $puestos[array_rand($puestos)],
            'Contacto' => array(
                'Email' => strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@company.com'),
                'Telefono' => rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999)
            )
        );

        return $this->response->setJson($empleado);
    }

    public function verDocente(): ResponseInterface
    {
        $nombres = ['Sandra', 'Luis', 'Carla', 'Javier'];
        $apellidos = ['García', 'Vargas', 'López', 'Ramírez'];
        $materias = ['Matemáticas', 'Literatura', 'Historia', 'Ciencias'];

        $docente = array(
            'Id' => rand(201, 300),
            'Nombre' => $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)],
            'Edad' => rand(25, 65),
            'Materia' => $materias[array_rand($materias)],
            'Contacto' => array(
                'Email' => strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@school.edu'),
                'Telefono' => rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999)
            )
        );

        return $this->response->setJson($docente);
    }

    public function verPersonalAdministrativo(): ResponseInterface
    {
        $nombres = ['Roberto', 'Patricia', 'Alberto', 'Monica'];
        $apellidos = ['Fernández', 'Ruiz', 'Gutiérrez', 'Martínez'];
        $departamentos = ['Recursos Humanos', 'Finanzas', 'Tecnología', 'Administración'];

        $personalAdmin = array(
            'Id' => rand(301, 400),
            'Nombre' => $nombres[array_rand($nombres)] . ' ' . $apellidos[array_rand($apellidos)],
            'Edad' => rand(22, 60),
            'Departamento' => $departamentos[array_rand($departamentos)],
            'Contacto' => array(
                'Email' => strtolower(str_replace(' ', '', $nombres[array_rand($nombres)]) . '@company.com'),
                'Telefono' => rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999)
            )
        );

        return $this->response->setJson($personalAdmin);
    }

}
