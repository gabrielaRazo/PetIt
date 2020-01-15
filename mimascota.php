<?php include "./header.html" ?><!--Se manda llamara la pagina de header mediante php-->
<script src="./js/mimascota.js"> </script>

<section><!--Toda la parte que contien lo relacionado a la catilla digital-->
  <div class="container-md">
    <div class="row"><!--renglón del titulo de la pagina-->
      <div class="col colminas"><!--columna del titulo de la pagina-->
        <h1 class="titmascos">MI MASCOTA</h1>
      </div><!-- termina columna del titulo de la pagina-->
    </div><!--termina renglón del titulo de la pagina y boton de imprimir-->
  </div>
  <div class="container-md  contenedor1"><!--es el contenedor de la cartilla digital-->
    <div id= "borderrow" class="row borderrow"><!--renglón cartilla digital-->
      <div class="col titlecol"><!--columna logo y titulo para la cartilla digital-->
          <h1 class="float-center" id= "cartdig">   <img id = "cartillalogo" class="" src="./assets/SVG/logo-petit.svg" width="100px" alt="icono">   CARTILLA DIGITAL</h1>
      </div><!--termina columna logo para la cartilla digital-->
    </div><!-- termina renglón cartilla digital-->
    <div class="row borderrow"><!--renglón cartilla digital donde estan datos e imagen de mascota-->
          <div class="col"><!--columna cartilla digital donde esta imagen de mascota-->
            <img id= "petpic" class="img-rounded rounded petpic" src="" >
          </div><!--termina columna cartilla digital donde esta imagen de mascota-->
        <div class="col"><!--columna cartilla digital donde estan datos1 de mascota-->
          <label class="col-12 titulospet">Nombre:</label>
          <label id="name" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Sexo:</label>
          <label id="gender" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Dueño:</label>
          <label id="owner" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Veterinaria:</label>
          <label id="vetname" class="col-12 datospet"></label>
        </div><!-- termina columna cartilla digital donde estan datos1 de mascota-->
        <div class="col"><!--columna cartilla digital donde estan datos1 de mascota-->
          <label class="col-12 titulospet">Fecha de Nacimiento:</label>
          <label id="birth" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Raza:</label>
          <label id="breed" class="col-12 datospet"></label>
          <label class="col-12 titulospet">ID-PETIT:</label>
          <label id="petid" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Dirección:</label>
          <label id="address" class="col-12 datospet"></label>
        </div><!-- termina columna cartilla digital donde estan datos1 de mascota-->
    </div><!--termian renglón cartilla digital donde estan datos e imagen de mascota-->
    <div class="row"><!--renglón cartilla digital donde estan el titulo de la tabla-->
      <div class="col"><!--columna cartilla digital donde estan el titulo de la tabla-->
        <nav id= "vacunas">Vacunas Recibidas</nav>
      </div><!--termina columna cartilla digital donde estan el titulo de la tabla-->
    </div><!--termina renglón cartilla digital donde estan el titulo de la tabla-->
    <div class="table border6"><!--área donde esta la tabla-->
      <table id ="table_vacunas" class="table"><!-- tabla-->
        <thead id ="titletable"><!--área donde estan los nombres de las columnas de la tabla-->
          <tr><!--fila donde estan los nombres de las columnas de la tabla-->
            <th data-field="sn">S/N</th>
            <th data-field="tipovacuna">TIPO DE VACUNA</th>
            <th data-field="fecha">FECHA</th>
            <th data-field="descripcion">DESCRIPCIÓN</th>
          </tr><!-- termina fila donde estan los nombres de las columnas de la tabla-->
        </thead><!--termina área donde estan los nombres de las columnas de la tabla-->

      </table><!--termina tabla-->
    </div><!--termina el área donde esta la tabla-->
  </div><!--termian el contenedor de la cartilla digital-->
</section><!--Termina toda la seccion de la cartilla digital-->
<?php include "./footer.html" ?><!--Se manda llamara la pagina de footer mediante php-->
