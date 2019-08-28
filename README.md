
# Magento 2 - Crear y obtener valores de configuración

Ejemplo de cómo crear y obtener valores de configuración en nuestro propio módulo de Magento 2.

[Tutorial](https://jlnarvaez.es/magento2/2019/08/28/crear-valores-configuracion-magento2.html) 

Para probar el módulo, la ruta del controlador es la siguiente:

http://milocal.com/config_get/config

Esto devolverá TODOS los valores de configuración.
Le podemos pasar un parámetro a la URL que sea `path` para indicar qué valor queremos que nos devuelva.
Ej: http://milocal.com/config_get/config?path=jlnarvaez_sample/params/custom_text

