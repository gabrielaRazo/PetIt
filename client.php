<?php include "./header.html" ?><!--Se manda llamara la pagina de header mediante php-->

<script src="./js/client.js"> </script>
<link rel="stylesheet" href="/css/mypets.css">

<section><!--Toda la parte que contien lo relacionado a clientes-->
  <div class="container-md">
    <div class="row"><!--renglón del titulo de la pagina-->
      <div class="col colminas"><!--columna del titulo de la pagina-->
        <h1 class="titmascos">MIS CLIENTES</h1>
      </div><!-- termina columna del titulo de la pagina-->
    </div><!--termina renglón del titulo de la pagina-->
  </div>
  <div class="container -md">
    <div class="myclients">
      <button onclick=""type="button" class="plus btn btn-primary" name="newClient" id= "newClient"><i class="fas fa-plus plus"></i> NUEVO CLIENTE</button>
    </div>
    <div class="table border">
      <table id="clients" class="table">
        <thead class ="titletable"><!--área donde estan los nombres de las columnas de la tabla-->
          <tr><!--fila donde estan los nombres de las columnas de la tabla-->
            <th data-field="clientId">ID</th>
            <th data-field="clientName">NOMBRE</th>
            <th data-field="clientDate">ALTA</th>
            <!--<th data-field="petId" data-formatter="petButtonVaccines">VACUNAS</th>
            <th data-field="petId" data-formatter="petCalendarButton">CALENDARIO</th>-->
            <th data-field="clientId" data-formatter="clientThreeBtns">OPCIONES</th>
          </tr><!-- termina fila donde estan los nombres de las columnas de la tabla-->

        </thead><!--termina área donde estan los nombres de las columnas de la tabla-->

      </table>
    </div>
  </div>



  </div><!--termian el contenedor de la cartilla digital-->
</section><!--Termina toda la seccion de la cartilla digital-->
<?php include "./footer.html" ?><!--Se manda llamara la pagina de footer mediante php-->
