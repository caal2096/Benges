<?php
  if(isset($_GET['datos'])){
    
    switch ($_GET['datos']) {
       case 'existe':
            echo "<script>alert('Este catalogo ya esta registrado!');</script>";
            echo "<br>";
            break;


    }
  }
?>


<h1 class="page-header"> Registro de Catalogo</h1>

<div class="alert alert-info" role="alert">
    <strong><i class="fa fa-info-circle"></i></strong> Aquí podras registrar el catalogo en el sistema.
  </div>
  <div class="alert alert-danger" role="alert">
   <i class="fa fa-info-circle"></i> Los campos con color amarillo son de caracter obligatorio. 
    <br>
   <i class="fa fa-info-circle"></i> A lado de los nombres de los campos aparece el simbolo:<strong> "?"</strong>, donde aparecera una breve ayuda. 
</div>

<!-- <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script> -->
<script src="../js/select.js"></script>

<form role="form" id="formulario" class="form"  action="../controlador/control_bien.php" method="POST"  name="form_bienes">
  <input type="hidden" value="registrar_bien" name="operacion" required />
  <input type="hidden"  name="idtbien" id="cam_idtbien" required />

  <div class="row">  
    <div class="col-sm-1"></div>  
    <div class="col-sm-4">      
      <div class="form-group has-warning">        
        <label for="cam_idtmarca">Tipo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Tipo del bien." required></i></strong></label>
        
        <select type="text" name="idttipo" class="form-control" id="cam_idttipo" required>
          <option value="">Seleccione</option>
        </select>       
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group has-warning">
          <label for="cam_idtmarca">Clasificacion<strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Categoria del bien." required></i></strong></label>
        
          <select type="text" name="idtcategoria" class="form-control" id="cam_idtcategoria" required>
            <option value="">Seleccione</option>
          </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-4">
      <div class="form-group has-warning">
        
        <label for="cam_idtmarca ">Marca <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Marca de los bienes." required></i></strong></label>
        
        <select type="text" name="idtmarca" class="form-control" id="cam_idtmarca" required>
          <option value="">Seleccione</option>
        </select>
        
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group has-warning">
        
        <label for="cam_idtmarca ">Modelo <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Modelo de los bienes." required></i></strong></label>
        
        <select type="text" name="idtmodelo"  class="form-control" id="cam_idtmodelo" required>
          <option value="" >Seleccione</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <div class="form-group has-warning">
          <label for="cam_colorcat">Color <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Color del bien." required></i></strong></label>
           
          <input type="color" name="colorcat" class="form-control">
      </div>      
    </div>
    <div class="col-sm-4">
      <div class="form-group has-warning">
          <label for="cam_descripcioncat">Descripcion <strong><i class="text-help fa fa-question-circle" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Descripcion del catalogo." required></i></strong></label>
           
           <input type="text" name="descripcioncat" class="form-control" required>    
      </div>      
    </div>
  </div> 

  <div class="row">
    <div class="col-md-4">
      <button type="button" class="btn  center-block" name="btn_regresar" id="btn_regresar" onclick="window.location.href='?vista=bien/bien';"><i class="fa fa-chevron-left"></i> Regresar</button>
    </div>

    <div class="col-md-1">
      <button type="reset" class="btn btn-danger center-block" type="button" name=""><i class="fa fa-remove"></i> Cancelar</button>
    </div>
    
    <div class="col-md-5">
      <button type="submit" class="btn btn-success center-block" name="btn_enviar" id="btn_enviar"><i class="fa fa-check"></i>Guardar</button>
    </div>
  </div>


  
</form>

<script>   
    var formulario = document.getElementById('formulario');
    var color = formulario.cam_idttipo;
   
    function Validacion(e){
      if (color.value == "0") {
        alert('nada')
        e.preventDefault()

      }

    
    }
    formulario.addEventListener('submit',Validacion); 


</script>


