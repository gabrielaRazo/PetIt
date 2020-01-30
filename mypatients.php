<?php include "./header.html" ?><!--Se manda llamara la pagina de header mediante php-->

<script src="./js/mypets.js"> </script>
<link rel="stylesheet" href="/css/mypets.css">

<section><!--Toda la parte que contien lo relacionado a mis pacientes-->
  <div class="container-md">
    <div class="row"><!--renglón del titulo de la pagina-->
      <div class="col colminas"><!--columna del titulo de la pagina-->
        <h1 class="titmascos">MIS PACIENTES</h1>
      </div><!-- termina columna del titulo de la pagina-->
    </div><!--termina renglón del titulo de la pagina y boton de imprimir-->
  </div>
  <div class="container -md">
    <div class="mypetsback">
      <button onclick="window.location.href ='/createpet.php'"type="button" class="plus btn btn-primary" name="newpet" id= "newpet"><i class="fas fa-plus plus"></i> NUEVO PACIENTE</button>
    </div>
    <div class="table border">
      <table id="pets" class="table">
        <thead class ="titletable"><!--área donde estan los nombres de las columnas de la tabla-->
          <tr><!--fila donde estan los nombres de las columnas de la tabla-->
            <th data-field="petPic" data-formatter="petPic">FOTO</th>
            <th data-field="petName">NOMBRE</th>
            <th data-field="petId" data-formatter="petButtonVaccines">VACUNAS</th>
            <th data-field="petId" data-formatter="petCalendarButton">CALENDARIO</th>
            <th data-field="petId" data-formatter="petThreeBtns">OPCIONES</th>
          </tr><!-- termina fila donde estan los nombres de las columnas de la tabla-->

        </thead><!--termina área donde estan los nombres de las columnas de la tabla-->

      </table>
    </div>
  </div>



  </div><!--termian el contenedor de la cartilla digital-->
</section><!--Termina toda la seccion de la cartilla digital-->
<?php include "./footer.html" ?><!--Se manda llamara la pagina de footer mediante php-->
