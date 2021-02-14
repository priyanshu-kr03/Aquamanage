function function1() {
  var ol = document.getElementById("list");
  var li = document.createElement("li");
  li.appendChild(document.createTextNode("Four"));
  ol.appendChild(li);
}
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  modal.style.display = "block";
};
function my() {
  var ul = document.getElementById("list");
  var li = document.createElement("li");
  li.appendChild(document.createTextNode("Four"));
  ul.appendChild(li);
}

span.onclick = function () {
  modal.style.display = "none";
};
