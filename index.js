function disableTxt() {
   var x=document.getElementsByClassName("pond");
   for(var i=0;i<x.length;i++)
    x[i].disabled=true;
  }
  function undisableTxt() {
    var x=document.getElementsByClassName("pond");
   for(var i=0;i<x.length;i++)
    x[i].disabled=false;
  }
  function enab(){
      document.getElementById("pondY").disabled=false;
  }
  function dis(){
    document.getElementById("pondY").disabled=true;
}
undisableTxt();
enab();
disableTxt();
dis();