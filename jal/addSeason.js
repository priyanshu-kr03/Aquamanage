var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.addEventListener("click", function () {
  modal.style.display = "block";
  console.log("btn1");
});

span.onclick = function () {
  modal.style.display = "none";
};

function function1() {
  console.log("fun1");

  var ul = document.getElementById("list");
  var li = document.createElement("li");
  li.setAttribute("class", "div1");

  li.innerText = " ";
  ul.append(li);

  var a = document.createElement("a");

  var link = document.createTextNode("Seasion");

  a.appendChild(link);

  a.title = "Seasion";
  a.class = "aClass";
  a.style.fontSize = "30px";

  a.href = "season1.html";

  // Append the anchor element to the body.
  ul.appendChild(a);

  document.getElementById("div1").style.color = "red";
  return false;
}

function my() {
  console.log("click");
  modal.style.display = "none";

  return function1();
}

