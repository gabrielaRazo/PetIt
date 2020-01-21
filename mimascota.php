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
            <img id= "petPic" class="img-rounded rounded petpic" src="" >
          </div><!--termina columna cartilla digital donde esta imagen de mascota-->
        <div class="col"><!--columna cartilla digital donde estan datos1 de mascota-->
          <label class="col-12 titulospet">Nombre:</label>
          <label id="petName" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Sexo:</label>
          <label id="petGender" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Color:</label>
          <label id="petColor" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Dueño:</label>
          <label id="petOwner" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Dirección:</label>
          <label id="petAddress" class="col-12 datospet"></label>

        </div><!-- termina columna cartilla digital donde estan datos1 de mascota-->
        <div class="col"><!--columna cartilla digital donde estan datos1 de mascota-->
          <label class="col-12 titulospet">Fecha de Nacimiento:</label>
          <label id="petBirthDate" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Raza:</label>
          <label id="petBreed" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Teléfono:</label>
          <label id="petPhone" class="col-12 datospet"></label>
          <label class="col-12 titulospet">ID-PETIT:</label>
          <label id="petId" class="col-12 datospet"></label>
          <label class="col-12 titulospet">Veterinaria:</label>
          <label id="petVetName" class="col-12 datospet"></label>

        </div><!-- termina columna cartilla digital donde estan datos1 de mascota-->
    </div><!--termian renglón cartilla digital donde estan datos e imagen de mascota-->
    <div class="row"><!--renglón cartilla digital donde estan el titulo de la tabla-->
      <div class="col"><!--columna cartilla digital donde estan el titulo de la tabla-->
        <nav id= "vacunas">Vacunas Recibidas</nav>
      </div><!--termina columna cartilla digital donde estan el titulo de la tabla-->
    </div><!--termina renglón cartilla digital donde estan el titulo de la tabla-->
    <div class="table border"><!--área donde esta la tabla-->
      <table id ="table_vacunas" class="table"><!-- tabla-->
        <thead class ="titletable"><!--área donde estan los nombres de las columnas de la tabla-->
          <tr><!--fila donde estan los nombres de las columnas de la tabla-->
            <th data-field="sn">S/N</th>
            <th data-field="vaccineType">TIPO DE VACUNA</th>
            <th data-field="vaccineDate">FECHA</th>
            <th data-field="vaccineDescription">DESCRIPCIÓN</th>
          </tr><!-- termina fila donde estan los nombres de las columnas de la tabla-->
        </thead><!--termina área donde estan los nombres de las columnas de la tabla-->

      </table><!--termina tabla-->
    </div><!--termina el área donde esta la tabla-->
  </div><!--termian el contenedor de la cartilla digital-->
</section><!--Termina toda la seccion de la cartilla digital-->
<?php include "./footer.html" ?><!--Se manda llamara la pagina de footer mediante php-->
