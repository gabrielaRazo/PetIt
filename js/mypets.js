

var data = [
  {
    "petPic": "assets/JPEG/siri.jpg",
    "petName":"Siri",
    "petId":"3",
    "clientId":"3",
    "vetId":"5"
  },{
    "petPic": "assets/JPEG/jacinto.jpg",
    "petName":"Jacinto",
    "petId":"2",
    "clientId":"3",
    "vetId":"5"
  },{
    "petPic": "assets/JPEG/julia.jpg",
    "petName":"Julia",
    "petId":"1",
    "clientId":"3",
    "vetId":"5"
    }
]



function petButtonVaccines(value){
  var btnVaccines = '<button type="button" onclick="window.location.href =\'/index.html?petId=' + value + '\';" class="btn btn-outline-primary btnVaccines">VER  <i class="fas fa-eye eyeBtn"></i> </button>'
  return btnVaccines;
}

function petCalendarButton(value){
  var calendarBtn = '<button type="button" onclick="window.location.href =\'/calendario.html?petId=' + value + '\';" class="btn btn-outline-primary calendarBtn">VER   <i class="fas fa-eye eyeBtn"></i></button>'
  return calendarBtn;
}

function petTwoBtns(value){
  var cartillaBtn = '<button type="button" onclick="window.location.href =\'/mimascota.php?petId=' + value + '\';" class="btn btn-outline-success cartillaBtn"><i class="fas fa-eye"></i></button>'
  var deleteBtn = '<button type="button" onclick="window.location.href =\'/index.html?petId=' + value + '\';" class="btn btn-outline-danger deleteBtn"><i class="fas fa-trash-alt"></i></button>'
  return cartillaBtn + deleteBtn;
}

function petThreeBtns(value){
  var cartillaBtn = '<button type="button" onclick="window.location.href =\'/mimascota.php?petId=' + value + '\';" class="btn btn-outline-success cartillaBtn"><i class="fas fa-eye"></i></button>'
  var updateBtn = '<button type="button" onclick="window.location.href =\'/updatepet.php?petId=' + value + '\';" class="btn btn-outline-primary updateBtn"><i class="fas fa-edit"></i></button>'
  var deleteBtn = '<button type="button" onclick="window.location.href =\'/index.htm?petId=' + value + '\';" class="btn btn-outline-danger deleteBtn"><i class="fas fa-trash-alt"></i></button>'
  return cartillaBtn + updateBtn + deleteBtn;
}

function petPic(value){
  return '<img  class="img-rounded rounded petpic2" style="width:50px;height:50px;" src="' + value + '" >'
}

$(document).ready(function() {
  llenarTabla();
});

function llenarTabla() {
  $('#pets').bootstrapTable({data:data})
}
