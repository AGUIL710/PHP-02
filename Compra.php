<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra en linea</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<h1>!Calcula el costo total de tu compra!</h1>
<div class="contenedor">
        <div class="formulario">
            <form method="post" action="">
                <h3>Producto 1</h3>
                <label for="precio1">Precio:</label>
                <input type="number" step="0.01" id="precio1" name="precio1" required><br>
                <label for="cantidad1">Cantidad:</label>
                <input type="number" id="cantidad1" name="cantidad1" required><br>

                <h3>Producto 2</h3>
                <label for="precio2">Precio:</label>
                <input type="number" step="0.01" id="precio2" name="precio2" required><br>
                <label for="cantidad2">Cantidad:</label>
                <input type="number" id="cantidad2" name="cantidad2" required><br>

                <h3>Producto 3</h3>
                <label for="precio3">Precio:</label>
                <input type="number" step="0.01" id="precio3" name="precio3" required><br>
                <label for="cantidad3">Cantidad:</label>
                <input type="number" id="cantidad3" name="cantidad3" required><br>

                <button type="submit">Calcular</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recibe los datos del formulario
            $precio1 = floatval($_POST['precio1']);
            $cantidad1 = intval($_POST['cantidad1']);
            
            $precio2 = floatval($_POST['precio2']);
            $cantidad2 = intval($_POST['cantidad2']);
            
            $precio3 = floatval($_POST['precio3']);
            $cantidad3 = intval($_POST['cantidad3']);

            // Calcular el subtotal
            $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

            // Calcular el impuesto (16%)
            $impuesto = $subtotal * 0.16;

            // Calcular el descuento (10%)
            $descuento = $subtotal * 0.10;

            // Calcular el total
            $total = $subtotal + $impuesto - $descuento;

            // Mostrar los resultados al costado derecho del formulario
            echo "<div class='resultado'>";
            echo "<h2>Resumen de la compra:</h2>";
            echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
            echo "<p>Impuesto (16%): $" . number_format($impuesto, 2) . "</p>";
            echo "<p>Descuento (10%): -$" . number_format($descuento, 2) . "</p>";
            echo "<p><strong>Total Final: $" . number_format($total, 2) . "</strong></p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>