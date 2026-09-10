<h1>Listado De Producto</h1>

<table>
    <tr>
      <th>id</th>
        <th>nombre</th>
        <th>precio</th>
        <th>categoria</th>
        <th>proveedor</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
      <tr>
        <td><?= $producto["id"]?> </td>
        <td><?= $producto["nombre"]?> </td>
        <td><?= $producto["precio"]?> </td>
        <td><?= $producto["categoria"]?> </td>
        <td><?= $producto["proveedor"]?> </td>
      </tr>
    <?php endforeach; ?>
</table>

