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


$(document).ready(function() {
  $('#table_vacunas').bootstrapTable({data:data})
});
