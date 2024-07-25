<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investigación de Bases de Datos</title>
</head>
<body>
    <h1>Investigación de Bases de Datos</h1>
    
    <h2>4.3.1 Bases de Datos Tipo Archivos .txt, .csv</h2>
    <h3>Archivos .txt</h3>
    <p>Los archivos de texto (.txt) son archivos simples que contienen datos sin ningún formato especial, solo texto plano. Son útiles para almacenar pequeñas cantidades de datos o datos que no requieren una estructura compleja. Se pueden abrir y editar con cualquier editor de texto.</p>
    <pre>
nombre,edad,ciudad
Juan,30,México
Ana,25,Bogotá
    </pre>

    <h3>Archivos .csv</h3>
    <p>Los archivos de valores separados por comas (.csv) son un tipo de archivo de texto que almacena datos tabulares. Cada línea en el archivo representa una fila en la tabla, y cada valor separado por comas representa una columna. Muy utilizados para importar y exportar datos entre aplicaciones diferentes, como hojas de cálculo y bases de datos.</p>
    <pre>
nombre,edad,ciudad
Juan,30,México
Ana,25,Bogotá
    </pre>

    <h2>4.3.2 Operaciones Básicas</h2>
    <h3>Operaciones básicas con archivos .txt y .csv</h3>
    <p><b>Lectura:</b> Abrir y leer el contenido del archivo.</p>
    <pre><code>with open('archivo.txt', 'r') as file:
    data = file.read()
    print(data)
</code></pre>

    <p><b>Escritura:</b> Abrir y escribir datos en el archivo.</p>
    <pre><code>with open('archivo.txt', 'w') as file:
    file.write("nuevo contenido")
</code></pre>

    <p><b>Agregar datos:</b> Abrir y añadir datos al final del archivo.</p>
    <pre><code>with open('archivo.txt', 'a') as file:
    file.write("\ncontenido adicional")
</code></pre>

    <p><b>Lectura de .csv:</b> Utilizar bibliotecas como <code>csv</code> en Python para leer archivos CSV.</p>
    <pre><code>import csv
with open('archivo.csv', mode='r') as file:
    reader = csv.reader(file)
    for row in reader:
        print(row)
</code></pre>

    <p><b>Escritura de .csv:</b> Utilizar bibliotecas como <code>csv</code> en Python para escribir archivos CSV.</p>
    <pre><code>import csv
with open('archivo.csv', mode='w', newline='') as file:
    writer = csv.writer(file)
    writer.writerow(['nombre', 'edad', 'ciudad'])
    writer.writerow(['Juan', '30', 'México'])
</code></pre>

    <h2>4.3.3 Bases de Datos Relacionales</h2>
    <p>Una base de datos relacional es un tipo de base de datos que almacena y proporciona acceso a puntos de datos que están relacionados entre sí. Se organiza en tablas, que consisten en filas y columnas. Utiliza SQL (Structured Query Language) para gestionar y consultar los datos.</p>

    <h3>Características</h3>
    <ul>
        <li><b>Estructura:</b> Datos organizados en tablas, cada una con filas (registros) y columnas (campos).</li>
        <li><b>Relaciones:</b> Relaciones entre tablas definidas por claves primarias y foráneas.</li>
        <li><b>Integridad:</b> Restricciones para mantener la precisión y consistencia de los datos.</li>
        <li><b>SQL:</b> Lenguaje de consulta estructurado para realizar operaciones sobre la base de datos.</li>
    </ul>

    <h3>Operaciones básicas en bases de datos relacionales</h3>
    <p><b>CREAR una tabla:</b></p>
    <pre><code>CREATE TABLE empleados (
    id INT PRIMARY KEY,
    nombre VARCHAR(50),
    edad INT,
    ciudad VARCHAR(50)
);
</code></pre>

    <p><b>INSERTAR datos en una tabla:</b></p>
    <pre><code>INSERT INTO empleados (id, nombre, edad, ciudad) VALUES (1, 'Juan', 30, 'México');
</code></pre>

    <p><b>LEER datos de una tabla:</b></p>
    <pre><code>SELECT * FROM empleados;
</code></pre>

    <p><b>ACTUALIZAR datos en una tabla:</b></p>
    <pre><code>UPDATE empleados SET edad = 31 WHERE id = 1;
</code></pre>

    <p><b>ELIMINAR datos de una tabla:</b></p>
    <pre><code>DELETE FROM empleados WHERE id = 1;
</code></pre>

    <p><b>CREAR una relación entre tablas:</b></p>
    <pre><code>ALTER TABLE empleados ADD CONSTRAINT fk_departamento FOREIGN KEY (departamento_id) REFERENCES departamentos(id);
</code></pre>
</body>
</html>
