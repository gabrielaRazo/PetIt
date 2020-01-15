var data = [
  {
    "sn":"S",
    "tipovacuna":"PARVOVIROSIS",
    "fecha":"15/01/2018",
    "descripcion":"PARVOVIROSIS CANINA"

  },{
    "sn":"S",
    "tipovacuna":"QUÍNTUPLE 1RA",
    "fecha":"15/01/2018",
    "descripcion":"PARVOVIROSIS/MOQUILLO/HEPATITIS/PARAINFLUENZA"
  },{
    "sn":"N",
    "tipovacuna":"QUÍNTUPLE 2RA",
    "fecha":"08/05/2018",
    "descripcion":"PARVOVIROSIS/MOQUILLO/HEPATITIS/PARAINFLUENZA"
  },{
    "sn":"S",
    "tipovacuna":"SEXTUPLE",
    "fecha":"11/11/2018",
    "descripcion":"LEPTOSPIROSIS CANINA"
  },{
    "sn":"S",
    "tipovacuna":"TOS DE LAS PERRERAS",
    "fecha":"2/02/2019",
    "descripcion":"RABIA CANINA"
  }
];


var datoscartilla = {
  "name":"siri",
  "gender":"Hembra",
  "owner":"Parásito Domésticado",
  "vetname":"Clínica Guau Vet",
  "birth":"01 de diciembre del 2017",
  "breed":"Golden Retriever",
  "petid":"986214554",
  "address":"Av. Argómedo #6241,Villa altos del nilo,Guadalajara",
  "petpic":"assets/JPG/perrito.png"
};

$(document).ready(function() {
  llenarInfo()
  llenarTabla();
});

function llenarInfo() {
  setLabelText('#name', datoscartilla.name)
  setLabelText('#gender', datoscartilla.gender)
  setLabelText('#owner', datoscartilla.owner)
  setLabelText('#vetname', datoscartilla.vetname)
  setLabelText('#birth', datoscartilla.birth)
  setLabelText('#breed', datoscartilla.breed)
  setLabelText('#petid', datoscartilla.petid)
  setLabelText('#address', datoscartilla.address)
  $("#petpic").attr("src",datoscartilla.petpic);
}

function setLabelText(labelId, labelText){
  $(labelId).empty()
  $(labelId).append(labelText)
}

function llenarTabla() {
  $('#table_vacunas').bootstrapTable({data:data})
}
