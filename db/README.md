# DB

Para cada uno de los ejercicios siguientes, obtener el esquema lógico relacional correspondiente a la
especificación de requisitos


### EJERCICIO 1

Se quiere diseñar una base de datos relacional para almacenar información sobre los asuntos que lleva
un gabinete de abogados. Cada asunto tiene un número de expediente que lo identifica, y corresponde a un
solo cliente. Del asunto se debe almacenar el período (fecha de inicio y fecha de archivo o finalización), su
estado (en trámite, archivado, etc.), así como los datos personales del cliente al que pertenece (DNI, nombre,
dirección, etc.). Algunos asuntos son llevados por uno o varios procuradores, de los que nos interesa también
los datos personales.

### EJERCICIO 2

Se quiere diseñar una base de datos relacional que almacene información relativa a los zoos existentes
en el mundo, así como las especies animales que éstos albergan. De cada zoo se conoce el nombre, ciudad
y país donde se encuentra, tamaño (en m2) y presupuesto anual. De cada especie animal se almacena el
nombre vulgar y nombre científico, familia a la que pertenece y si se encuentra en peligro de extinción.
Además, se debe guardar información sobre cada animal que los zoos poseen, como su número de
identificación, especie, sexo, año de nacimiento, país de origen y continente.

### EJERCICIO 3

Se quiere diseñar una base de datos relacional para gestionar los datos de los socios de un club náutico.
De cada socio se guardan los datos personales y los datos del barco o barcos que posee: número de
matrícula, nombre, número del amarre y cuota que paga por el mismo. Además, se quiere mantener
información sobre las salidas realizadas por cada barco, como la fecha y hora de salida, el destino y los datos
personales del patrón, que no tiene porque ser el propietario del barco, ni es necesario que sea socio del
club.

## Contesta las siguientes preguntas

### Escriba un query que regrese todos los departamentos en la table (sin duplicados).

````sql
SALARIES (
Professor_Name (TEXT),
Department (TEXT),
Salary (INT)
)
````

### Escriba una query que regrese el nombre y salario de el profesor con el salario mas alto.

### Escriba un query que regrese todos los nombres de profesores que inicien con la letra "C".

### Escriba una query que regrese el departamento con el salario promedio más alto junto con ese salario promedio.
