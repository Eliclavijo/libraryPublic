<?php
use PHPUnit\Framework\TestCase;

class LibrosTest extends TestCase
{
    public function testMostrarLibros()
    {
        // Creamos una instancia de la clase que contiene el código a probar
        $libros = new Libros();

        // Obtenemos el resultado de ejecutar el método mostrarLibros()
        $resultado = $libros->mostrarLibros();

        // Definimos el resultado esperado
        $esperado = "<div class=\"cardLibro\"> ... </div>"; 

        // Comprobamos que el resultado obtenido es igual al esperado
        $this->assertSame($resultado, $esperado);
    }
}
