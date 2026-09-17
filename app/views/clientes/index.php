<h1>Listado De Clientes</h1>

<?php if (!empty($clientes)) { ?>
<table border="1">
    <tr>
        <th>nombre</th>
        <th>documento</th>
        <th>correo</th>
        <th>telefono</th>
    </tr>
    <?php foreach ($clientes as $cliente): ?>
      <tr>
        <td><?= $cliente["nombre"]?> </td>
        <td><?= $cliente["documento"]?> </td>
        <td><?= $cliente["correo"]?> </td>
        <td><?= $cliente["telefono"]?> </td>
      </tr>
    <?php endforeach; ?>
</table>
<?php } else { ?>
    <p>No hay clientes disponibles.</p>
<?php } ?>