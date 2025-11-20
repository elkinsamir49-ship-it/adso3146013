<form action="" method="post">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" name="correo" placeholder="Correo">
    <input type="text" name="rol" placeholder="Rol">
    <input type="text" name="telefono" placeholder="Telefono">

    <button type="submit">guardar</button>
    <input type=" submit">guardar>
</form>

<table>
    <thead>
        <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Correo</td>
        <td>Telefono</td>
        <td>Rol</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario->getId(); ?></td>
            <td><?php echo $usuario->getNombre(); ?></td>
            <td><?php echo $usuario->getCorreo(); ?></td>
            <td><?php echo $usuario->getTelefono(); ?></td>
            <td><?php echo $usuario->getRol(); ?></td>
        </tr>
        <?php endforeach; ?>
</table>