# CodeigniterUtils
Este es un repositorio con varios scripts para CodeIgniter.

<h3>Nucleo Codeigniter</h3>
<b>MY_Router</b> es un extension del modulo de rutas de CodeIgniter que permite usar subcarpetas como controladores por default. Su uso es simple, se debe colocar este Script dentro de application->core y listo, luego podemos usar subcarpetas como controladores por default,por ejemplo: $route['default_controller'] = 'subcarpeta/controlador/funcion';

<h3>Librerias para Codeigniter</h3>

<b>IPGenerator</b> es una libreria que se puede usar en Codeigniter para generar rangos de IPv4, para usarla es necesesario colocar IPGenerator.php en la carpeta application/libraries de Codeigniter.
Luego para llamar la libreria en algun controlador se la carga como otra libreria normal, ejemplo:
<pre>
$this->load->library("IPGenerator");
</pre>
Para generar rangos se hace de la siguiente manera:
<pre>
$rango = $this->ipgenerator->ipRange("1.1.1.1","1.1.1.10");
</pre>
Lo que devolvera un arreglo con las ips dentro del rango dado.
<pre>
Array
(
    [0] => 1.1.1.1
    [1] => 1.1.1.2
    [2] => 1.1.1.3
    [3] => 1.1.1.4
    [4] => 1.1.1.5
    [5] => 1.1.1.6
    [6] => 1.1.1.7
    [7] => 1.1.1.8
    [8] => 1.1.1.9
    [9] => 1.1.1.10
)
</pre>
