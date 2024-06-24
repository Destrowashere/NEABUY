<?php
$producto_id = $_POST['producto_id'];
$cantidad_deseada = $_POST['cantidad'];

// Consultar la cantidad actual en stock
$query = "SELECT cantidad FROM productos WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $producto_id);
$stmt->execute();
$result = $stmt->get_result();
$producto = $result->fetch_assoc();

if ($producto['cantidad'] >= $cantidad_deseada) {
    // Suficiente stock, proceder con la compra
    $nueva_cantidad = $producto['cantidad'] - $cantidad_deseada;
    $update_query = "UPDATE productos SET cantidad = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("ii", $nueva_cantidad, $producto_id);
    $update_stmt->execute();

    echo "Compra realizada con éxito. Quedan " . $nueva_cantidad . " unidades.";
} else {
    // No hay suficiente stock, mostrar mensaje de alerta
    echo "No hay suficiente stock disponible. Quedan " . $producto['cantidad'] . " unidades.";
}
?>
