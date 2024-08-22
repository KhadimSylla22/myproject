function f() {
  alert("Désolé cet article n'est plus disponible");
}
function piece(pieces) {
  var inpiece = parseInt(document.pieces.inpiece.value);
  var prix = 20.99;
  var inprixvar = inpiece * prix;

  if(0<inpiece && inpiece<5)
      inprixvar = inpiece * prix;
  if (4<inpiece && inpiece<10)
      inprixvar = inpiece * (prix-2);
  if (9<inpiece && inpiece<15)
      inprixvar = inpiece * (prix-4);
  if (14<inpiece && inpiece<20)
      inprixvar = inpiece * (prix-6);
  if (19<inpiece)
      inprixvar = inpiece * (prix-8);
  document.pieces.inprix.value = inprixvar;
}

