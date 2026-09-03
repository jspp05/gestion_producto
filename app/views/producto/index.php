<h1>Listado De Producto</h1>

<table>
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th>categoria</th>
    </tr>
    <?php foreach ($producto as $producto); ?>
      <tr>
        <td><?= $producto=["nombre"] ?></td>
        <td><?= $producto=["precio"] ?></td>
        <td><?= $producto=["categoria"] ?></td>
      </tr>
    <?php endforeach; ?>
</table>