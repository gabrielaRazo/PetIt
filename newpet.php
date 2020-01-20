<?php include "./header.html" ?><!--Se manda llamara la pagina de header mediante php-->

    <body>
      <div class="container-md">
        <div class="row"><!--renglón del titulo de la pagina-->
          <div class="col colminas"><!--columna del titulo de la pagina-->
            <h1 class="titmascos">MI NUEVA MASCOTA</h1>
          </div><!-- termina columna del titulo de la pagina-->
        </div><!--termina renglón del titulo de la pagina y boton de imprimir-->
      </div>

            <form class="petInfo-form" action="TBD">

                <div class="petInfo">

                <div class="singlePetInfo">
                    <label for="petName">NOMBRE: </label><input type="text" name="petName" id="petName" autofocus><br>
                </div>
                <div class="singlePetInfo">
                    <label for="birthDate">FECHA DE NACIMIENTO: </label><input type="date" name="birthDate" id="birthDate"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="petGender">GENERO: </label><input type="text" name="petBreed" id="petBreed"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="petBreed">RAZA: </label><input type="text" name="petBreed" id="petBreed"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="petColor">COLOR: </label><input type="text" name="petColor" id="petColor"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="petAddress">DIRECCIÓN: </label> <input type="text" name="vetName" id="vetName"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="petPhone">TELÉFONO: </label> <input type="text" name="vetName" id="vetName"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="vetName">VETERINARIA: </label> <input type="text" name="vetName" id="vetName"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="vetAddress">DIRECCIÓN VETERINARIA: </label> <input type="text" name="vetAddress" id="vetAddress"><br>
                </div>
                <div class="singlePetInfo">

                    <label for="imageUpload" class="btn btn-primary btn-block "><i class="fas fa-upload"></i> SUBIR FOTO</label>
                    <input type="file" id="imageUpload" accept="image/*" style="display: none">

                    <!-- <i class="fas fas-upload"></i>
                    <input type="file" name="petPhoto">
                    <button type="button"><i class="fas fa-upload"></i>SUBIR FOTO </button> -->
                </div>

                <div class="newPet btn">
                    <button type="submit" value="guardar" class="btn submitPetInfoButton float-right">GUARDAR</button>
                </div clas>


            </form>

        </div>




<?php include "./footer.html" ?><!--Se manda llamara la pagina de footer mediante php-->
