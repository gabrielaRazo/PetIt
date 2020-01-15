<?php include "./header.html" ?><!--Se manda llamara la pagina de header mediante php-->


<section><!--Toda la parte que contien lo relacionado a la catilla digital-->
  <div class="container-md border contenedor1"><!--es el contenedor de la cartilla digital-->
    <div class="row"><!--renglón del titulo de la pagina y boton de imprimir-->
      <div class="col"><!--columna del titulo de la pagina-->
        <h1 class="titmascos">MI MASCOTA</h1>
      </div><!-- termina columna del titulo de la pagina-->

    </div><!--termina renglón del titulo de la pagina y boton de imprimir-->
    <div class="row border"><!--renglón cartilla digital-->
      <div class="col"><!--columna logo y titulo para la cartilla digital-->

          <h1 class="float-center" id= "cartdig">   <img id = "cartillalogo" class="" src="./assets/SVG/logo-petit.svg" width="100px" alt="icono">   CARTILLA DIGITAL</h1>

      </div><!--termina columna logo para la cartilla digital-->
    </div><!-- termina renglón cartilla digital-->
    <div class="row border"><!--renglón cartilla digital donde estan datos e imagen de mascota-->
          <div class="col"><!--columna cartilla digital donde esta imagen de mascota-->
            <img class="img-rounded rounded petpic" src="https://via.placeholder.com/250x250" >
          </div><!--termina columna cartilla digital donde esta imagen de mascota-->
        <div class="col"><!--columna cartilla digital donde estan datos1 de mascota-->
          <label id= "nombre8" class="col-12 ">Nombre:</label>
          <label id="llamada1" class="col-12">Siri</label>
          <label id= "nombre7" class="col-12">Sexo:</label>
          <label id="llamada2" class="col-12">Hembra</label>
          <label id= "nombre6" class="col-12">Dueño:</label>
          <label id="llamada3" class="col-12">Parásito Domésticado</label>
          <label id= "nombre5" class="col-12">Veterinaria:</label>
          <label id="llamada4" class="col-12">Clínica Guau Vet</label>
        </div><!-- termina columna cartilla digital donde estan datos1 de mascota-->
        <div class="col"><!--columna cartilla digital donde estan datos1 de mascota-->
          <label id= "nombre1" class="col-12">Fecha de Nacimiento:</label>
          <label id="llamada5" class="col-12">01 de diciembre del 2017</label>
          <label id= "nombre2" class="col-12">Raza:</label>
          <label id="llamada6" class="col-12">Golden Retriever</label>
          <label id= "nombre3" class="col-12">ID-PETIT:</label>
          <label id="llamada7" class="col-12">986214554</label>
          <label id= "nombre4" class="col-12">Dirección:</label>
          <label id="llamada8" class="col-12">Av. Argómedo #6241,Villa altos del nilo,Guadalajara</label>
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
