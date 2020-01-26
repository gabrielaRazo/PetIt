var data =[
  {
    "petPic": "assets/PNG/perrito.png",
    "petName":"siri"
  },{
    "petPic": "assets/PNG/perrito.png",
    "petName":"pablo"
  },{
    "petPic": "assets/PNG/perrito.png",
    "petName":"siri"
  }
]

function petButtonVaccines(){
  var btnVaccines = '<button type="button" onclick="window.location.href =\'/index.html\';" class="btn btn-outline-primary btnVaccines">VER  <i class="fas fa-eye eyeBtn"></i> </button>'
  return btnVaccines;
}

function petCalendarButton(){
  var calendarBtn = '<button type="button" onclick="window.location.href =\'/index.html\';" class="btn btn-outline-primary calendarBtn">VER   <i class="fas fa-eye eyeBtn"></i></button>'
  return calendarBtn;
}

function petThreeBtns(){
  var cartillaBtn = '<button type="button" onclick="window.location.href =\'/mimascota.php\';" class="btn btn-outline-success cartillaBtn"><i class="fas fa-eye"></i></button>'
  var updateBtn = '<button type="button" onclick="window.location.href =\'/newpet.php\';" class="btn btn-outline-primary updateBtn"><i class="fas fa-edit"></i></button>'
  var deleteBtn = '<button type="button" onclick="window.location.href =\'/index.html\';" class="btn btn-outline-danger deleteBtn"><i class="fas fa-trash-alt"></i></button>'
  return cartillaBtn + updateBtn + deleteBtn;
}


function pic(){
  $("#petPic").attr("src",data.petPic);
}

$(document).ready(function() {
  llenarTabla();
});

function llenarTabla() {
  $('#pets').bootstrapTable({data:data})
}
