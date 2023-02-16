# MVC_ejemplo
En este ejemplo, la clase User representa el Modelo, que contiene los datos y la lógica comercial. 
El archivo vista.php representa la Vista, que es responsable de mostrar los datos. El controlador es un script que conecta el modelo y la vista, y es responsable de manejar la entrada del usuario, actualizar el modelo y representar la vista.

En este ejemplo simple, el controlador crea un nuevo objeto de usuario, establece su nombre en "Joel Rodríguez" y luego incluye el archivo vista.php, que muestra el nombre del usuario. Este ejemplo de MVC es uno muy sencillo pero cumple con las funciones de separar los datos de la aplicacion, la interfaz del usuario y el control de datos.

En este ejemplo el modelo se encarga de almacenar la clase que se encarga de obtner las variables depositadas en el controlador, aqui se usa una funcion diferente por cada variable que se manda, siendo en este caso el nombre, la edad y el correo electronico.

En el controlador simplemente se manda a llamar la clase que se encuentra en el modelo para asi poder depositar las variables, el controlador tambien se trae toda la vista por medio de un include.

La vista simplemente se encarga de mostrar todos los datos, esta no necesita llamar otro archivo porque en el mismo controlador esta incluyendo todo lo que hay en vista.php.
