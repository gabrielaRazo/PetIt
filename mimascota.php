<?php include "./header.html" ?><!--Se manda llamara la pagina de header mediante php-->

<section><!--Toda la parte que contien lo relacionado a la catilla digital-->
  <div class="container-md border"><!--es el contenedor de la cartilla digital-->
    <div class="row"><!--renglón del titulo de la pagina y boton de imprimir-->
      <div class="col"><!--columna del titulo de la pagina-->
        <h1 class="titmascos">MI MASCOTA</h1>
      </div><!-- termina columna del titulo de la pagina-->
      <div class="col"><!--columna botón de imprimir-->
        <button type="button" class="btn btn-danger btn-lg float-right"> <i class="fas fa-print"></i>  Imprimir</button>
      </div><!-- termina columna botón de imprimir-->
    </div><!--termina renglón del titulo de la pagina y boton de imprimir-->
    <div class="row border"><!--renglón cartilla digital-->
      <div class="col"><!--columna logo y titulo para la cartilla digital-->
          <img class="tamanochico" src="./assets/SVG/logo-petit.svg" alt="icono">
          <h1 class="float-center" id= "cartdig">CARTILLA DIGITAL</h1>
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
      <table class="table"><!-- tabla-->
        <thead id ="titletable"><!--área donde estan los nombres de las columnas de la tabla-->
          <tr><!--fila donde estan los nombres de las columnas de la tabla-->
            <th>S/N</th>
            <th>TIPO DE VACUNA</th>
            <th>FECHA</th>
            <th>DESCRIPCIÓN</th>
          </tr><!-- termina fila donde estan los nombres de las columnas de la tabla-->
        </thead><!--termina área donde estan los nombres de las columnas de la tabla-->
        <tbody id="bodytable"><!--cuerpo de la tabla-->
          <tr><!--fila donde estan las columnas con los datos de la primera vacuna-->
            <td>S</td>
            <td>PARVOVIROSIS</td>
            <td>15/01/2018</td>
            <td>PARVOVIROSIS CANINA</td>
          </tr><!--termina fila donde estan las columnas con los datos de la primera vacuna-->
          <tr><!--fila donde estan las columnas con los datos de la segunda vacuna-->
            <td>S</td>
            <td>QUÍNTUPLE 1RA</td>
            <td>15/01/2018</td>
            <td>PARVOVIROSIS/MOQUILLO/HEPATITIS/PARAINFLUENZA</td>
          </tr><!--termina fila donde estan las columnas con los datos de la segunda vacuna-->
          <tr><!--fila donde estan las columnas con los datos de la tercera vacuna-->
            <td>N</td>
            <td>QUÍNTUPLE 2RA</td>
            <td>08/05/2018</td>
            <td>PARVOVIROSIS/MOQUILLO/HEPATITIS/PARAINFLUENZA</td>
          </tr><!-- tremina fila donde estan las columnas con los datos de la tercera vacuna-->
          <tr><!--fila donde estan las columnas con los datos de la cuarta vacuna-->
            <td>S</td>
            <td>SEXTUPLE</td>
            <td>11/11/2018</td>
            <td>LEPTOSPIROSIS CANINA</td>
          </tr><!--termina fila donde estan las columnas con los datos de la cuarta vacuna-->
          <tr><!--fila donde estan las columnas con los datos de la quinta vacuna-->
            <td>S</td>
            <td>TOS DE LAS PERRERAS</td>
            <td>2/02/2019</td>
            <td>RABIA CANINA</td>
          </tr><!--termina fila donde estan las columnas con los datos de la quinta vacuna-->
        </tbody><!--tremina cuerpo de la tabla-->
      </table><!--termina tabla-->
    </div><!--termina el área donde esta la tabla-->
  </div><!--termian el contenedor de la cartilla digital-->
</section><!--Termina toda la seccion de la cartilla digital-->
<?php include "./footer.html" ?><!--Se manda llamara la pagina de footer mediante php-->
