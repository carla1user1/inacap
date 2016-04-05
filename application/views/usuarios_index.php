
<h1>Listado de Usuarios</h1><br>
<a href="usuarios/nuevo">Nuevo Uusario</a>
<table border="1">
    
        <head>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Acciones</th>
    </head>
    <tbody>
        <?php foreach ($usuario as $data){?>
                
        <tr>
            <td><?php echo $data->nombre; ?></td>
            <td><?php echo $data->apepat; ?></td>
            <td><a href="<?php echo 'usuarios/delete/'.$data->usuario_id; ?>">Eliminar</a></td>
            <td><a href="<?php echo 'usuarios/deatil/'.$data->usuario_id; ?>">Ver detalle</a></td>


        </tr>
        <?php } ?> 
    </tbody>
     
</table>

  
