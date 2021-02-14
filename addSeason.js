var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("btn2");
var btn3 = document.getElementById("btn3");
var listClick = document.getElementById("listStyle");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  modal.style.display = "block";
};
btn2.onclick = function () {
  document.getElementById("addBtn").style.display = "none";
  btn3.style.display = "block";
};
// btn3.onclick = function () {
//   listClick.style.display = "block";
// };
span.onclick = function () {
  modal.style.display = "none";
};

// window.onclick = function (event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// };

// (function () {
//   $("form > input").keyup(function () {
//     var empty = false;
//     $("form > input").each(function () {
//       if ($(this).val() == "") {
//         empty = true;
//       }
//     });

//     if (empty) {
//       $("#register").attr("disabled", "disabled");
//     } else {
//       $("#register").removeAttr("disabled");
//     }
//   });
// })();

// for the list button
{
  /* <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>; */
}
btn2.onClick = function () {
  document.getElementsByTagName("ol").append(`<li>this is new</li>`);
};
$(document).ready(function () {
  $("#btn2").click(function () {
    $("ol").append(
      "<li>list item <a href='javascript:void(0);' class='remove'>&times;</a></li>"
    );
  });
  $(document).on("click", "a.remove", function () {
    $(this).parent().remove();
  });
});
