#################################################################################################
Se crea ruta para llamar la API a desarrollar, es decir
en la carpeta: routes\api.php

Esa ruta va a llamar al controlador que va a realizar el calculo
PrimeNumberController con el metodo index

app\Http\Controllers\PrimeNumberController.php

Para probar la api: 
 http://127.0.0.1:8000/api/primenumber/13

#pruebas unitarias
tests\Feature\PrimeNumberTest.php
Se realizan pruebas unitarias, ademas se agrega un helper que en este caso es muy util este archivo para realizar funciones
que puedo llamar en cualquier parte de mi aplicacion
####################################################################################################
