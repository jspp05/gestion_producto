<h1>Listado De Categorías</h1>


<?php if (!empty($categorias)) { ?>
<table border="1">
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>descripcion</th>

    </tr>
    <?php foreach ($categorias as $categoria): ?>
      <tr>

        <td><?= $categoria["id"]?> </td>
        <td><?= $categoria["nombre"]?> </td>
        <td><?= $categoria["descripcion"]?> </td>
      </tr>
    <?php endforeach; ?>
</table>
<?php } else { ?>
    <p>No hay categorías disponibles.</p>
<?php } ?>