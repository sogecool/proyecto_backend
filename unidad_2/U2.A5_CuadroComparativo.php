<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadro Comparativo: Listas, Pilas y Colas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Cuadro Comparativo: Listas, Pilas y Colas</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Ventajas</th>
            <th>Desventajas</th>
            <th>Usos/Aplicaciones</th>
            <th>Ejemplos</th>
        </tr>
        <tr>
            <td>Lista</td>
            <td>Una estructura de datos que almacena elementos de manera secuencial. Puede ser implementada como una lista enlazada, doblemente enlazada o como un array dinámico.</td>
            <td>
                <ul>
                    <li>Acceso rápido a elementos por índice (en arrays dinámicos).</li>
                    <li>Fácil inserción y eliminación de elementos (en listas enlazadas).</li>
                    <li>Flexible en tamaño.</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Coste de memoria adicional (en listas enlazadas).</li>
                    <li>Acceso más lento a elementos por índice (en listas enlazadas).</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Almacenamiento de colecciones de datos.</li>
                    <li>Implementación de otras estructuras de datos.</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>ArrayList en Java</li>
                    <li>LinkedList en Java</li>
                    <li>List en Python</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Pila (Stack)</td>
            <td>Una estructura de datos que sigue el principio LIFO (Last In, First Out), donde el último elemento en entrar es el primero en salir.</td>
            <td>
                <ul>
                    <li>Fácil de implementar.</li>
                    <li>Útil para problemas que requieren retroceso (backtracking).</li>
                    <li>Operaciones de inserción y eliminación rápidas.</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Acceso a elementos no es directo.</li>
                    <li>Tamaño limitado si se usa un array fijo.</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Gestión de llamadas a funciones (pila de llamadas).</li>
                    <li>Deshacer operaciones en editores.</li>
                    <li>Evaluación de expresiones.</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Stack en Java</li>
                    <li>Stack en C++</li>
                    <li>deque en Python (usado como pila)</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Cola (Queue)</td>
            <td>Una estructura de datos que sigue el principio FIFO (First In, First Out), donde el primer elemento en entrar es el primero en salir.</td>
            <td>
                <ul>
                    <li>Útil para gestionar procesos en orden.</li>
                    <li>Operaciones de inserción y eliminación rápidas en extremos opuestos.</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Acceso a elementos no es directo.</li>
                    <li>Tamaño limitado si se usa un array fijo.</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Gestión de tareas en sistemas operativos.</li>
                    <li>Implementación de colas de impresión.</li>
                    <li>Simulación de colas en sistemas.</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Queue en Java</li>
                    <li>queue en Python</li>
                    <li>std::queue en C++</li>
                </ul>
            </td>
        </tr>
    </table>
</body>
</html>
