<div class="card">
    <div class="card-header">
        Agregar Curriculum
    </div>
    <div class="card-body">
   
    
    <form acction = "" method ="post">

        <div class="mb-3">
          <label for="id" class="form-label">CUI*:</label>
          <input required  type="number"
            class="form-control" value="<?php echo $curriculum->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="Ingresar CUI A modificar:">
        </div>


        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre*:</label>
          <input required  type="text"
            class="form-control" value="<?php echo $curriculum->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre:">
        </div>

        <div class="mb-3">
          <label for="apellido" class="form-label">Apellido*:</label>
          <input required  type="text"
            class="form-control" value="<?php echo $curriculum->apellido; ?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido:">
        </div>

        <div class="mb-3">
          <label for="fechnac" class="fechnac">Fecha de nacimiento:</label>
          <input type="date"
            class="form-control" value="<?php echo $curriculum->fechnac; ?>" name="fechnac" id="fechnac" aria-describedby="helpId" placeholder="Fecha de nacimiento">
        </div>

        <div class="mb-3">
          <label for="correo" class="correo">Correo electronico*:</label>
          <input required  type="email" class="form-control" value="<?php echo $curriculum->correo; ?>" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo electronico:">
        </div>

        <div class="mb-3">
          <label for="direccion" class="direccion">Direccion*:</label>
          <input type="text"
            class="form-control" value="<?php echo $curriculum->direccion; ?>" name="direccion" id="direccion" aria-describedby="helpId" placeholder="Direccion:">
        </div>

        <div class="mb-3">
          <label for="nacionalidad" class="nacionalidad">Nacionalidad*:</label>
          <input type="text"
            class="form-control" value="<?php echo $curriculum->nacionalidad; ?>" name="nacionalidad" id="nacionalidad" aria-describedby="helpId" placeholder="Nacionalidad">
        </div>

        <div class="mb-3">
          <label for="deptonac" class="deptonac">Departamento de nacimiento*:</label>
          <input required  type="text"
            class="form-control" value="<?php echo $curriculum->deptonac; ?>" name="deptonac" id="deptonac" aria-describedby="helpId" placeholder="Departamento de nacimiento">
        </div>

        <div class="mb-3">
          <label for="cel" class="cel">Telefono*:</label>
          <input required  type="text"
            class="form-control" value="<?php echo $curriculum->cel; ?>" name="cel" id="cel" aria-describedby="helpId" placeholder="Numero de telefono">
        </div>

        <div class="mb-3">
          <label for="profesion" class="profesion">Profesion universitaria*:</label>
          <input required  type="text"
            class="form-control" value="<?php echo $curriculum->profesion; ?>" name="profesion" id="profesion" aria-describedby="helpId" placeholder="Profesion universitaria">
        </div>

        <div class="mb-3">
          <label for="pretsalario" class="pretsalario">Pretencion salarial*:</label>
          <input required  type="number"
            class="form-control" value="<?php echo $curriculum->pretsalario; ?>" name="pretsalario" id="pretsalario" aria-describedby="helpId" placeholder="Pretencion salarial">
        </div>
 
 <input name="" id="" class="btn btn-primary" type="submit" value="EDITAR CURRICULUM">
 <a href="?controlador=curriculum&accion=inicio" class="btn btn-danger">Cancela</a>

    </form>

    </div> 
</div>