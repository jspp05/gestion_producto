<h1>Listado De Producto</h1>

<table border="1">
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

<h1>Producto Consultado</h1>
<table border="1"> 
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>precio</th>
        
    </tr>
    <tr>
        <td><?= $productoConsultado["id"]?> </td>
        <td><?= $productoConsultado["nombre"]?> </td>
        <td><?= $productoConsultado["precio"]?> </td>
      </tr>

</table>

