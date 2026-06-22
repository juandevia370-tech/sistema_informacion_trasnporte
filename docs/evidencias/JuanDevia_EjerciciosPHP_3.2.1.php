<?php

/* ==========================================
PARTE 1 — ANÁLISIS DE SITUACIONES PROBLEMA
========================================== */

echo "<h1>PARTE 1 — ANÁLISIS DE SITUACIONES PROBLEMA</h1>";

/* ==========================================
EJERCICIO 1
Calcular promedio de calificaciones
========================================== */

echo "<b>EJERCICIO 1</b><br>";

$nota1 = 3.8;
$nota2 = 4.2;
$nota3 = 4.9;

$total = $nota1 + $nota2 + $nota3;

$promedio = $total / 3;

echo "El promedio obtenido es: " . number_format($promedio, 1);

echo "<br><br>";

/* ==========================================
EJERCICIO 2
Validar cupo en gimnasio
========================================== */

echo "<b>EJERCICIO 2</b><br>";

$cliente = "Andres";
$clasesTomadas = 2;
$limiteClases = 4;

if ($clasesTomadas < $limiteClases) {
    echo "El cliente $cliente puede reservar otra clase.";
} else {
    echo "El cliente $cliente no puede reservar más clases.";
}

echo "<br><br>";

/* ==========================================
EJERCICIO 3
Disponibilidad de celulares
========================================== */

echo "<b>EJERCICIO 3</b><br>";

$producto = "iPhone 15";
$stock = 7;

if ($stock > 0) {
    echo "Producto disponible";
} else {
    echo "Producto agotado";
}

echo "<br><br>";

/* ==========================================
EJERCICIO 4
Consumo en cafetería
========================================== */

echo "<b>EJERCICIO 4</b><br>";

$mesa = 8;
$cafe = 12000;
$torta = 15000;
$jugo = 9000;

$total = $cafe + $torta + $jugo;

echo "Mesa " . $mesa . " realizó el siguiente pedido:";
echo "<br>Café: $" . $cafe;
echo "<br>Torta: $" . $torta;
echo "<br>Jugo: $" . $jugo;
echo "<br>Total consumo: $" . $total;

echo "<hr>";

/* ==========================================
PARTE 2 — ORGANIZACIÓN DE SECUENCIAS
========================================== */

echo "<h1>PARTE 2 — ORGANIZACIÓN DE SECUENCIAS</h1>";

echo "<b>EJERCICIO 5</b><br>";
echo "Realizado en el cuaderno<br><br>";

echo "<b>EJERCICIO 6</b><br>";
echo "Realizado en el cuaderno<br><br>";

echo "<b>EJERCICIO 7</b><br>";
echo "Realizado en el cuaderno<br><br>";

echo "<b>EJERCICIO 8</b><br>";
echo "Realizado en el cuaderno<br><br>";

echo "<hr>";

/* ==========================================
PARTE 3 — PRIMEROS EJERCICIOS EN PHP
========================================== */

echo "<h1>PARTE 3 — PRIMEROS EJERCICIOS EN PHP</h1>";

/* ==========================================
EJERCICIO 9 — PRESENTACIÓN PERSONAL
========================================== */

echo "<b>EJERCICIO 9 — PRESENTACIÓN PERSONAL</b>";

$nombre = "Camilo";
$edad = 19;
$ciudad = "Medellín";

echo "<br>Mi nombre es $nombre";
echo "<br>Tengo $edad años";
echo "<br>Vivo en $ciudad";

/* ==========================================
EJERCICIO 10 — DATOS ACADÉMICOS
========================================== */

echo "<br><br><b>EJERCICIO 10 — DATOS ACADÉMICOS</b>";

$aprendiz = "Laura";
$programa = "Diseño Web";
$ficha = 458721;

echo "<br>Aprendiz: $aprendiz";
echo "<br>Programa: $programa";
echo "<br>Ficha: $ficha";

/* ==========================================
EJERCICIO 11 — VIDEOJUEGO
========================================== */

echo "<br><br><b>EJERCICIO 11 — VIDEOJUEGO</b>";

$personaje = "Shadow";
$nivel = 18;
$vidas = 3;

echo "<br>Personaje: $personaje";
echo "<br>Nivel: $nivel";
echo "<br>Vidas: $vidas";

/* ==========================================
EJERCICIO 12 — PLANETA
========================================== */

echo "<br><br><b>EJERCICIO 12 — PLANETA</b>";

$planeta = "Marte";
$lunas = 2;
$temperatura = "-60°C";

echo "<br>Planeta: $planeta";
echo "<br>Lunas: $lunas";
echo "<br>Temperatura promedio: $temperatura";

/* ==========================================
EJERCICIO 13 — PRODUCTO
========================================== */

echo "<br><br><b>EJERCICIO 13 — PRODUCTO</b>";

$producto = "PlayStation 5";
$precio = 3200000;
$cantidad = 4;

echo "<br>Producto: $producto";
echo "<br>Precio: $" . $precio;
echo "<br>Disponibles: $cantidad";

/* ==========================================
EJERCICIO 14 — MASCOTA
========================================== */

echo "<br><br><b>EJERCICIO 14 — MASCOTA</b>";

$mascota = "Luna";
$especie = "Felino";
$edadMascota = 2;

echo "<br>Nombre: $mascota";
echo "<br>Especie: $especie";
echo "<br>Edad: $edadMascota años";

/* ==========================================
EJERCICIO 15 — VEHÍCULO
========================================== */

echo "<br><br><b>EJERCICIO 15 — VEHÍCULO</b>";

$vehiculo = "Mazda CX5";
$modelo = 2024;
$velocidad = "210 KM/H";

echo "<br>Vehículo: $vehiculo";
echo "<br>Modelo: $modelo";
echo "<br>Velocidad máxima: $velocidad";

/* ==========================================
EJERCICIO 16 — PELÍCULA
========================================== */

echo "<br><br><b>EJERCICIO 16 — PELÍCULA</b>";

$pelicula = "Avatar";
$genero = "Ciencia ficción";
$estreno = 2022;

echo "<br>Película: $pelicula";
echo "<br>Género: $genero";
echo "<br>Año de estreno: $estreno";

/* ==========================================
EJERCICIO 17 — RED SOCIAL
========================================== */

echo "<br><br><b>EJERCICIO 17 — RED SOCIAL</b>";

$influencer = "MrBeast";
$seguidores = 200;
$pais = "Estados Unidos";

echo "<br>Influencer: $influencer";
echo "<br>Seguidores: $seguidores millones";
echo "<br>País: $pais";

/* ==========================================
EJERCICIO 18 — RETO LIBRE
========================================== */

echo "<br><br><b>EJERCICIO 18 — RETO LIBRE</b>";

$marca = "Lenovo";
$procesador = "Intel i7";
$ram = "16GB";
$disco = "1TB SSD";

echo "<br>Marca: $marca";
echo "<br>Procesador: $procesador";
echo "<br>RAM: $ram";
echo "<br>Disco: $disco";

echo "<hr>";

/* ==========================================
PARTE 4 — OPERACIONES BÁSICAS
========================================== */

echo "<h1>PARTE 4 — OPERACIONES BÁSICAS</h1>";

/* ==========================================
EJERCICIO 19 — SUMA
========================================== */

echo "<b>EJERCICIO 19 — SUMA</b><br>";

$num1 = 15;
$num2 = 25;

$suma = $num1 + $num2;

echo "Resultado: " . $suma;

echo "<br><br>";

/* ==========================================
EJERCICIO 20 — PROMEDIO
========================================== */

echo "<b>EJERCICIO 20 — PROMEDIO</b><br>";

$n1 = 3.5;
$n2 = 4.0;
$n3 = 5.0;

$promedio = ($n1 + $n2 + $n3) / 3;

echo "Promedio final: " . number_format($promedio,1);

echo "<br><br>";

/* ==========================================
EJERCICIO 21 — IVA
========================================== */

echo "<b>EJERCICIO 21 — IVA</b><br>";

$subtotal = 80000;
$iva = $subtotal * 0.19;
$total = $subtotal + $iva;

echo "Subtotal: $" . $subtotal;
echo "<br>IVA: $" . $iva;
echo "<br>Total: $" . $total;

echo "<br><br>";

/* ==========================================
EJERCICIO 22 — DESCUENTO
========================================== */

echo "<b>EJERCICIO 22 — DESCUENTO</b><br>";

$valor = 120000;
$descuento = 15;

$valorDescuento = ($valor * $descuento) / 100;

$total = $valor - $valorDescuento;

echo "Precio original: $" . $valor;
echo "<br>Descuento: " . $descuento . "%";
echo "<br>Total final: $" . $total;

echo "<br><br>";

/* ==========================================
EJERCICIO 23 — VALIDAR NOTA
========================================== */

echo "<b>EJERCICIO 23 — VALIDAR NOTA</b><br>";

$nota = 4.1;

if ($nota >= 3.0) {
    echo "El estudiante aprobó";
} else {
    echo "El estudiante reprobó";
}

echo "<br><br>";

/* ==========================================
EJERCICIO 24 — MAYOR DE EDAD
========================================== */

echo "<b>EJERCICIO 24 — MAYOR DE EDAD</b><br>";

$edad = 17;

if ($edad >= 18) {
    echo "Es mayor de edad";
} else {
    echo "Es menor de edad";
}

echo "<br><br>";

/* ==========================================
EJERCICIO 25 — DESCUENTO EN COMPRA
========================================== */

echo "<b>EJERCICIO 25 — DESCUENTO EN COMPRA</b><br>";

$compra = 250000;

if ($compra >= 200000) {

    $descuento = $compra * 0.20;

    $total = $compra - $descuento;

    echo "Compra con descuento: $" . $total;

} else {

    echo "La compra no aplica para descuento";
}

echo "<br><br>";

/* ==========================================
EJERCICIO 26 — DISPONIBILIDAD
========================================== */

echo "<b>EJERCICIO 26 — DISPONIBILIDAD</b><br>";

$producto = "Audifonos";
$cantidad = 0;

if ($cantidad > 0) {
    echo "Producto disponible";
} else {
    echo "Producto agotado";
}

echo "<br><br>";

/* ==========================================
RETO EXTRA — var_dump()
========================================== */

echo "<b>RETO EXTRA — var_dump()</b><br>";

$numero = 20;

var_dump($numero == "20");

echo "<br>";

var_dump($numero === "20");

?>
```