var data =[
  {
    "petPic": "hola",
    "petName":"siri"
  },{
    "petPic": "hola",
    "petName":"siri"
  },{
    "petPic": "hola",
    "petName":"siri"
  }
]

function petButtonVaccines(){
  var btnVaccines = '<button type="button" onclick="window.location.href =\'/index.html\';" class="btn btn-outline-primary"><i class="fas fa-eye"></i>VER</button>'
  return btnVaccines;
}

function petCalendarButton(){
  var calendarBtn = '<button type="button" onclick="window.location.href =\'/index.html\';" class="btn btn-outline-primary"><i class="fas fa-eye"></i>VER</button>'
  return calendarBtn;
}

function petThreeBtns(){
  var cartillaBtn = '<button type="button" onclick="window.location.href =\'/mimascota.php\';" class="btn btn-outline-primary"><i class="fas fa-eye"></i></button>'
  var updateBtn = '<button type="button" onclick="window.location.href =\'/newpet.php\';" class="btn btn-outline-primary"><i class="fas fa-edit"></i></button>'
  var deleteBtn = '<button type="button" onclick="window.location.href =\'/index.html\';" class="btn btn-outline-primary"><i class="fas fa-trash-alt"></i></button>'
  return cartillaBtn + updateBtn + deleteBtn;
}
$(document).ready(function() {
  llenarTabla();
});

function llenarTabla() {
  $('#pets').bootstrapTable({data:data})
}
