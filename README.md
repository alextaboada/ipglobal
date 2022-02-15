#Práctica IPGLOBAL

##Requisitos obligatorios

- PHP 7.4 ó 8.0
- Composer y estructura PSR-4 en el proyecto
- La última versión estable de Symfony/Laravel
- Testing unitario
- La API debe devolver y consumir los datos en formato JSON

Todos los requisitos obligatorios han sido implementados con éxito. El tema de los test unitarios se explicará en el apartado de "Opinión personal"

##Requisitos opcionales

- Uso de herramientas de análisis estático (por ejemplo PHPStan en modo máximo) y de estilo de código (por ejemplo PHP CS Fixer en modo @Symfony)
- Uso de SCSS y Webpack, ya sea usando Webpack directamente o mediante Symfony Encore / Laravel Mix o similar
- Ofrecer un Swagger/OpenAPI para la API

De este apartado conseguí implementar el php-cs-fixer que ha funcionado correctamente, phpstan aunque no he conseguido corregir los errores por falta de tiempo, y el uso de Laravel Mix para incluir tailwind dentro de la instalación de Laravel. Swagger/OpenApi no conseguí implementarlo. Como antes, se explicará en profundidad en el apartado "Opinión personal"

##Opinión personal

Uno de los principales problemas que me he encontrado a la hora de realizar la práctica, ha sido la falta de práctica, ya que como os comenté, hace bastante tiempo que no tocaba nada de Laravel.  

Así como las cosas básicas sí que las tenía más o menos controladas(creación de rutas, controladores básicos, vistas...) hubo otros temas como por ejemplo hacer la API o usar phpstan si me han costado mucho más.  

Otra de las dificultades que me encontré y que creo que no he sabido realizar correctamente han sido los commits de git. En un principio intenté hacer un número amplio de commits, para poder retornar a ellos en caso necesario, pero ahora veo que igual hubiera sido mejor hacerlo por funcionalidades completas. También valoré usar el método de git-flow, para separar todo un poco más, pero siendo yo solo el que hacía commits, me pareció complicar sin sentido el repositorio.  

En el caso de phpstan, investigué lo que pude sobre él y conseguí implementarlo en la instalación de laravel, pero cometí el error, al igual que con php-cs-fixer, de no ejecutarlo cada poco tiempo, por lo que me vi al final con un enorme número de errores, que no me dio tiempo a solucionar. Este es un error que no me volverá a ocurrir.  

También investigué lo que pude sobre la documentación de la API con Swagger. Comencé a hacer la explicación de la API, pero al no tener práctica haciendo la explicación, y faltándome tiempo para la práctica en si, preferí centrarme en lo segundo.  

En lo referente al método para desarrollar la práctica, lo que hice fue lo siguiente. Empecé por realizar los test de integración y hacer que pasaran, desarrollando las vistas y los controladores. Una vez terminados, me di cuenta de que tal y como estaba diseñada la aplicación, con toda la lógica en los controladores, era muy complicado realizar los test unitarios. Para solucionar esto, saqué la lógica a un servicio, en los cuales si que podía realizar los test unitarios.  

Con respecto a los test, me faltó tiempo y práctica para realizar más test. Al no haberlos realizado nunca, me resultó complicado desarrollar todos los supuestos para cada caso.  

Esto ha sido el resumen de la práctica. Me hubiera gustado disponer de mas tiempo efectivo para poder realizarla y de mas destreza y práctica para hacerla mejor, pero me ha dado pie y ganas para seguir formándome. Aunque ha sido complicado por momentos, he disfrutado volviendo a programar con Laravel.  

