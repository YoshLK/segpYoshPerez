<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=curriculum&accion=crear" role="button">Agregar Curriculum  </a>

    </div>
    <div class="card-body">
    
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>CUI*</th>
            <th>Nombre*</th>
            <th>Apellido*</th>
            <th>Fecha_Nac</th>
            <th>Correo*</th>
            <th>Direccion</th>
            <th>Nacionalidad</th>
            <th>Departamento_Nac*</th>
            <th>Telefono*</th>
            <th>Profesion*</th>
            <th>PretencionSalarial*</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php
    foreach($curriculums as $curriculum){ ?>
        <tr>
            <td> <?php echo $curriculum->id; ?></td>
            <td> <?php echo $curriculum->nombre?> </td>
            <td> <?php echo $curriculum->apellido?> </td>
            <td> <?php echo $curriculum->fechanac?></td>
            <td> <?php echo $curriculum->correo?></td>
            <td> <?php echo $curriculum->direccion?></td>
            <td> <?php echo $curriculum->nacionalidad?></td>
            <td> <?php echo $curriculum->deptonac?></td>
            <td> <?php echo $curriculum->cel?></td>
            <td> <?php echo $curriculum->profesion?></td>
            <td> <?php echo $curriculum->pretsalario?></td>
            <td>
            <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=curriculum&accion=editar&id=<?php echo $curriculum->id; ?>" class="btn btn-info">Editar </a>
                <a href="?controlador=curriculum&accion=eliminar&id= <?php echo $curriculum->id; ?>" class="btn btn-danger">Eliminar</a>    
            </div>
            </td>

        </tr>
      <?php }?>  
    </tbody>
</table>


    </div>
    
</div>



