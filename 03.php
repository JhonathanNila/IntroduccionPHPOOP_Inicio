<?php 
    declare(strict_types = 1);

use Producto as GlobalProducto;

include 'includes/header.php';

// Métodos estáticos

    // Definir una clase
    class Producto {
        // Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)
        // Protected - Se puede acceder / modificar únicamente en la clase
        // Private - Solo miembros de la misma clase pueden acceder a el

        public $imagen;

        public static $imagenPlaceholder = "Imagen.jpg";

        public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
        {
            if($imagen) {
                self::$imagenPlaceholder = $imagen;
            }
        }

        public static function obtenerProducto() {
            return self::$imagen;
        }

        public function mostrarProducto() : void {
            echo "El Producto es: " . $this->nombre . " y su precio es de : " . $this->precio;
        }

        public function getNombre() : string {
            return $this->nombre;
        }

        public function setNombre(string $nombre) {
            $this->nombre = $nombre;
        }
    }

    echo  Producto::obtenerProducto();
    $producto = new Producto('Tablet', 200, true, '');
    // $producto -> mostrarProducto();

    echo $producto->getNombre();
    $producto -> setNombre('Nuevo Nombre');


    $producto2 = new Producto('Monitor Curvo', 300, true, 'monitorCurvo.jpg');
    // $producto2 -> mostrarProducto();

    echo $producto2->getNombre();

include 'includes/footer.php';