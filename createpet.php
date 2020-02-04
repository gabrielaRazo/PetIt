<?php include "./header.html" ?>

    <div class="container-md">
        <div class="row"><!--renglón del titulo de la pagina-->
            <div class="col colminas"><!--columna del titulo de la pagina-->
                <h1 class="titmascos">CREAR UN PERFIL</h1>
        </div><!-- termina columna del titulo de la pagina-->
        </div><!--termina renglón del titulo de la pagina y boton de imprimir-->
    </div>

    <form action="registerpet.php" method="POST" class="petInfo-form container-lg">
        <div class="form-group row">
            <label for="pet_name" class="col-sm-3 col-form-label">NOMBRE:</label>
            <div class="col-sm-9">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-dog"></i></span>
                    </div>
                <input type="text" name="pet_name" id="pet_name" class="form-control" placeholder="¿Cuál es el nombre de la mascota?" aria-label="pet_name" aria-describedby="basic-addon1" required>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="pet_gender" class="col-sm-3 col-form-label">GENERO:</label>
            <div class="col-sm-9">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>
                    </div>
                    <select class="custom-select form-control" name="pet_gender" id="pet_gender" required>
                    <option value="">Selecciona el sexo de la mascota</option>
                    <option value="macho">Macho</option>
                    <option value="hembra">Hembra</option>
                    </select>
                </div>
            </div>
            <div class="invalid-feedback">prueba</div>
        </div>

        <div class="form-group row">
            <label for="pet_breed" class="col-sm-3 col-form-label">RAZA:</label>
            <div class="col-sm-9">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-dog"></i></span>
                    </div>
                    <select class="pet_breed custom-select form-control" name="pet_breed" id="pet_breed" onchange="changeDoggo(this)" required>
                    <option value="">Selecciona su raza</option>

                    </select>
                </div>
            </div>
            <div class="invalid-feedback">prueba</div>
        </div>

        <div class="form-group row">
            <label for="pet_color" class="col-sm-3 col-form-label">COLOR:</label>
            <div class="col-sm-9">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-palette"></i></span>
                    </div>
                    <select class="custom-select form-control" name="pet_color" id="pet_color" required>
                    <option value="">Seleccione su color</option>
                    <option value="blanco">Blanco</option>
                    <option value="negro">Negro</option>
                    <option value="cafe">Café</option>
                    <option value="crema">Crema</option>
                    <option value="gris">Gris</option>
                    </select>
                </div>
            </div>
            <div class="invalid-feedback">prueba</div>
        </div>

        <div class="form-group row">
            <label for="pet_birthday" class="col-sm-3 col-form-label">CUMPLEAÑOS:</label>
            <div class="col-sm-9">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                <input type="date" class="form-control" name="pet_birthday" id="pet_birthday" placeholder="Fecha de nacimiento" aria-label="pet_birthday" aria-describedby="basic-addon1" required>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="pet_weight" class="col-sm-3 col-form-label">PESO:</label>
            <div class="col-sm-9">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-weight"></i></span>
                    </div>
                    <input type="text" class="form-control" name="pet_weight" id="pet_weight" aria-label="pet_weight">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="pet_blood_type" class="col-sm-3 col-form-label">TIPO DE SANGRE:</label>
            <div class="col-sm-9">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-tint"></i></span>
                    </div>
                    <select class="custom-select form-control" name="pet_blood_type" id="pet_blood_type" required>
                    <option value="">Seleccione el tipo de sangre de la mascota</option>
                    <option value="DEA-1.1 (A1)">DEA-1.1 (A1)</option>
                    <option value="DEA-1.2 (A2)">DEA-1.2 (A2)</option>
                    <option value="DEA-3 (B)">DEA-3 (B)</option>
                    <option value="DEA-4 (C)">DEA-4 (C)</option>
                    <option value="DEA-5 (D)">DEA-5 (D)</option>
                    <option value="DEA-6 (F)">DEA-6 (F)</option>
                    <option value="DEA-7 (Tr)">DEA-7 (Tr)</option>
                    <option value="DEA-8 (He)">DEA-8 (He)</option>
                    </select>
                </div>
            </div>
            <div class="invalid-feedback">prueba</div>
        </div>

        <div class="form-group row">
            <label for="pet_chars" class="col-sm-3 col-form-label">CARACTERÍSTICAS:</label>
            <div class="col-sm-9">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-dog"></i></span>
                    </div>
                    <textarea class="form-control" aria-label="With textarea" name="pet_chars" id="pet_chars" placeholder="Agregue características especiales de la mascota, alguna mancha distintiva por ejemplo."></textarea>
                </div>
            </div>
        </div>

        <div class="form-group row">

            <div class="col-sm-3">
                <label for="inpFile" class="btn btn-primary btn-upload-photo"><i class="fas fa-upload"></i> SUBIR FOTO</label>
                <input type="file" name="inpFile" id="inpFile" style="display:none">
            </div>

            <div class="col-sm-9 ml-auto p-2 image_preview" id="imagePreview">
                <img src="" alt="image preview" class="image-preview__image rounded">
                <span class="image-preview__default-text">Selecciona una imagen JPEG, JPG o PNG de máximo 480 x 480</span>
            </div>

        </div>

        <div class="form-group float-right">
            <input class="btn btn-primary btn-lg new-color" type="submit" value="Guardar" name="create_pet"> 
        </div>




    </form>

    <script src="./js/pet-photo.js"></script>
    <script src="./js/dogBreedAPI.js"></script>

<?php include "./footer.html" ?>
