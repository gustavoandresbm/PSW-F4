function calcularventa() {
  var a = parseFloat(document.getElementById('vc').value);
  var b = parseFloat(document.getElementById('put').value);
  var c = parseFloat(document.getElementById('iva').value);

  vv = a + a * (b / 100) + a * (c / 100);
  uv = a * (b / 100);

  document.getElementById('vvf').value = vv;

  document.getElementById('un').value = uv;
}

function calculardatos() {
  var a = document.cg.vc.value;
  var b = document.cg.opc1.value;
  var c = document.cg.opc2.value;
  var r = document.cg.conv.value;
  r = (parseFloat(a) * parseFloat(c)) / parseFloat(b);
  document.cg.conv.value = r;
}
