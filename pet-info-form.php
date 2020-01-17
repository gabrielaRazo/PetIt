
    <body>

        <div class="petInfo">
            <form class="petInfo-form" action="TBD">

                <div class="singlePetInfo">
                    <label for="petName">NOMBRE: </label><input type="text" name="petName" id="petName" autofocus><br>
                </div>
                <div class="singlePetInfo">
                    <label for="birthDate">FECHA DE NACIMIENTO: </label><input type="date" name="birthDate" id="birthDate"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="petBreed">RAZA: </label><input type="text" name="petBreed" id="petBreed"><br>
                </div>
                <div class="singlePetInfo">
                    <label for="petColor">COLOR: </label><input type="text" name="petColor" id="petColor"><br>
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

                <div class="singlePetInfo btn ">
                    <button type="submit" value="Actualizar" class="btn submitPetInfoButton float-right">Actualizar</button>
                </div clas>


            </form>

        </div>




<?php include "./footer.html" ?><!--Se manda llamara la pagina de footer mediante php-->
