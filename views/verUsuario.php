<?php require("views/templates/head.php"); ?>
<table class="table">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuario as $user) { ?>
        <tr>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['name']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>


<?php require("views/templates/footer.php"); ?>