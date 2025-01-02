# PHP

PHP es un lenguaje de programacion de alto nivel, interpretado y de proposito general, especialmente utilizado para el desarrollo de aplicaciones web dinamicas. A lo largo de su evolucion, PHP ha sido utilizado principalmente en el lado del servidor para gestionar bases de datos, autenticar usuarios, y generar contenido dinamico, siendo uno de los lenguajes mas utilizados en el desarrollo de paginas web. Es flexible y potente, permitiendo la integracion con varios sistemas de bases de datos, como MySQL y PostgreSQL, y siendo compatible con diferentes servidores web, como Apache y Nginx.

# En que contexto nacio PHP

PHP fue creado en 1993 por Rasmus Lerdorf como un conjunto de herramientas para gestionar paginas web personales. Originalmente, PHP significaba "Personal Home Page", pero luego se renombro a "PHP: Hypertext Preprocessor". En sus primeros dias, PHP solo gestionaba formularios web y permitia mostrar datos en una pagina. Sin embargo, con el tiempo, el lenguaje se fue ampliando, incorporando mas funcionalidades como manejo de bases de datos, manejo de sesiones, y procesamiento de cookies. La version 3, lanzada en 1998, marco un punto de inflexion en la popularidad de PHP, convirtiendose en un lenguaje ampliamente adoptado para el desarrollo web.

# Versiones de PHP

A lo largo de su historia, PHP ha pasado por varias versiones que han mejorado su rendimiento, seguridad y funcionalidad. Las versiones mas relevantes incluyen:

- **PHP 4**: Introdujo la programacion orientada a objetos y una mayor gestion de recursos. Fue una version importante para el crecimiento de PHP en aplicaciones web mas grandes y complejas.
  
- **PHP 5**: Mejoro el soporte para objetos, añadiendo capacidades como el manejo de excepciones y el concepto de clases abstractas e interfaces. Esta version es clave en el desarrollo moderno con PHP y sigue siendo ampliamente utilizada.

- **PHP 7**: Introdujo mejoras de rendimiento significativas, reduciendo el consumo de memoria y acelerando la ejecucion de codigo. Ademas, PHP 7 trajo mejoras en el manejo de errores y la introduccion de tipado estricto.

- **PHP 8**: PHP 8 trajo nuevas funcionalidades como atributos, el compilador JIT (Just In Time), y mejoras en el manejo de errores. Estas actualizaciones han llevado el rendimiento del lenguaje a nuevos niveles, manteniendo su posicion como uno de los lenguajes de servidor mas populares.

## Caracteristicas Principales

### Nivel de lenguaje

PHP es un lenguaje de **alto nivel**, lo que significa que abstrae los detalles complejos del hardware, permitiendo que los programadores se concentren en resolver problemas y desarrollar soluciones sin tener que preocuparse por detalles de bajo nivel como la gestion de memoria o las operaciones a nivel de hardware. Esta caracteristica hace que PHP sea accesible para principiantes y potente para programadores avanzados, ya que permite escribir codigo mas limpio y comprensible.

### Uso de punteros

En contraste con lenguajes como C o C++, PHP no hace uso directo de **punteros**. En lugar de eso, maneja variables por referencia de manera automatica. Esto significa que puedes trabajar con referencias a objetos o arrays sin tener que preocuparte por la gestion manual de memoria o las direcciones de memoria, lo que reduce la complejidad del codigo y previene errores comunes relacionados con punteros.

### Paradigma y explicacion de los paradigmas

PHP es un lenguaje **multiparadigma**, ya que permite trabajar con distintos estilos de programacion, como:

- **Programacion imperativa**: Enfocada en describir como debe hacerse un proceso, utilizando declaraciones secuenciales.
- **Programacion orientada a objetos (OOP)**: Permite la definicion de clases y objetos, lo que facilita la organizacion del codigo en componentes reutilizables y modularizados.

PHP es especialmente fuerte en la programacion orientada a objetos, lo que permite la creacion de aplicaciones web complejas de manera estructurada y eficiente. En versiones recientes, PHP ha mejorado enormemente su soporte para OOP, con la inclusion de traits, interfaces, y clases abstractas.

### Tipo de tipado

PHP utiliza un **tipado dinamico**, lo que significa que las variables no necesitan ser declaradas con un tipo fijo. Esto ofrece gran flexibilidad, ya que las variables pueden contener diferentes tipos de datos en diferentes momentos de la ejecucion. Sin embargo, esto tambien puede generar errores en tiempo de ejecucion si no se tiene cuidado con la gestion de tipos.

A partir de PHP 7, se ha mejorado el soporte para el **tipado estricto**. Esto permite especificar tipos de datos para las funciones y obtener errores si el tipo no coincide, lo que ayuda a prevenir ciertos tipos de errores comunes en el desarrollo.

### Compilado o interpretado

PHP es un **lenguaje interpretado**, lo que significa que el codigo PHP es ejecutado directamente por el interprete sin necesidad de un proceso de compilacion previo. Esto permite una rapida iteracion durante el desarrollo, ya que los cambios en el codigo pueden ser probados de inmediato. Sin embargo, este enfoque tambien puede generar un rendimiento menor en comparacion con lenguajes compilados como C o C++.

### Sesiones

Las **sesiones** en PHP permiten almacenar informacion sobre el usuario a lo largo de diferentes peticiones HTTP. Esto es particularmente util para la gestion de autentificacion, ya que permite mantener al usuario logueado entre diferentes paginas sin necesidad de que reingrese sus credenciales en cada solicitud. PHP ofrece una API integrada para el manejo de sesiones, que facilita el inicio, almacenamiento y recuperacion de datos de sesiones.

### Variables superglobales

PHP cuenta con varias **variables superglobales** que permiten acceder a datos importantes sobre el entorno de ejecucion. Algunas de las mas comunes son:

- `$_GET`: Almacena los datos enviados a traves del metodo GET.
- `$_POST`: Almacena los datos enviados a traves del metodo POST.
- `$_SESSION`: Almacena los datos relacionados con la sesion del usuario.
- `$_COOKIE`: Contiene los valores almacenados en las cookies del navegador.
  
Estas variables permiten gestionar las interacciones del usuario con la aplicacion de manera eficiente, sin necesidad de gestion manual de los datos.

### Esta del lado del cliente o del servidor?

PHP es un **lenguaje del lado del servidor**, lo que significa que el codigo PHP se ejecuta en el servidor web y no en el navegador del cliente. PHP genera contenido HTML, que es enviado al navegador del cliente para ser renderizado. Esto lo convierte en una herramienta poderosa para crear aplicaciones web dinamicas que interactuan con bases de datos, autentican usuarios y realizan operaciones complejas sin exponer la logica del servidor al cliente.

### REQUEST_METHOD

`$_SERVER['REQUEST_METHOD']` es una variable superglobal que contiene el metodo HTTP utilizado en la solicitud actual. Los dos metodos mas comunes son:

- **GET**: Usado para recuperar datos del servidor.
- **POST**: Usado para enviar datos al servidor, generalmente a traves de formularios.

Esto permite que el desarrollador controle el flujo de la aplicacion dependiendo del tipo de solicitud recibida, gestionando diferentes tipos de interacciones con el usuario.

### OCI

La extension **OCI** de PHP proporciona soporte para interactuar con bases de datos Oracle. Esto permite a las aplicaciones PHP acceder a bases de datos Oracle, ejecutar consultas SQL y gestionar datos. OCI es una herramienta muy poderosa para aplicaciones que necesitan trabajar con bases de datos Oracle, pero no es tan comun como otras extensiones de bases de datos, como MySQL o PostgreSQL.

### Explicacion de que es una API

Una **API** (Interfaz de Programacion de Aplicaciones) es un conjunto de herramientas y definiciones que permiten a los programas interactuar entre si. Las APIs permiten que una aplicacion acceda a los servicios y datos de otra aplicacion sin necesidad de entender su implementacion interna. En el contexto de PHP, una API puede ser utilizada para interactuar con servicios de terceros, como redes sociales, servicios de pagos, o bases de datos externas.

### Que es consumir una API y su contraparte

**Consumir una API** significa realizar una solicitud HTTP a una API externa para obtener datos o realizar alguna accion. Por ejemplo, una aplicacion PHP podria hacer una solicitud GET a una API de clima para obtener informacion sobre el pronostico del tiempo.

La **contraparte** de consumir una API es **exponer una API**, lo que implica ofrecer una interfaz para que otros programas o aplicaciones puedan interactuar con tu sistema. Esto es comunmente utilizado en aplicaciones que necesitan ser accesibles desde otros servicios o plataformas, permitiendo la integracion con otros sistemas.

# Explicacion de que es Composer

**Composer** es un gestor de dependencias para PHP. Permite a los desarrolladores especificar las librerias y paquetes que necesitan para su proyecto y se encarga de descargarlas y gestionarlas automaticamente. Composer resuelve las dependencias entre paquetes, asegurando que el proyecto tenga todas las librerias necesarias y que estas sean compatibles entre si. Con Composer, los desarrolladores pueden especificar las versiones de las librerias en un archivo `composer.json`, y Composer se encargara de instalar las versiones correctas de los paquetes. Composer tambien facilita la carga automatica de clases, lo que hace que la gestion de dependencias sea mucho mas sencilla y eficiente.
