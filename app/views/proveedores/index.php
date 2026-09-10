<h1>Listado De Proveedores</h1>

<table border="1">
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>ciudad</th>
        <th>direccion</th>
    </tr>
    <?php foreach ($proveedores as $proveedor): ?>
      <tr>

        <td><?= $proveedor["id"]?> </td>
        <td><?= $proveedor["nombre"]?> </td>
        <td><?= $proveedor["ciudad"]?> </td>
        <td><?= $proveedor["direccion"]?> </td>
      </tr>
    <?php endforeach; ?>
</table>
