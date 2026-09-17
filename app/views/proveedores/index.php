<h1>Listado De Proveedores</h1>
<?php if (!empty($proveedores)) { ?>
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
<?php } else { ?>
    <p>No hay proveedores disponibles.</p>
<?php } ?>
