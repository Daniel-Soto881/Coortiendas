alert("1");
 console.log("1");
 const input_CB_v=document.querySelector("#CB_v");
 console.log(input_CB_v);
 /* -----------2------ */
 var inputs =$('input');
 input_CB_v.addEventListeners()
/*  var asociado = inputs[0] .values; */

 const idi = $("#Continuar").val();
 const idisd = $("#Continuar").value;
 console.log(idi); 
 console.log(idisd); 

 document.getElementById("CB_v").addEventListener("click", alert("esoooo"));

 document.getElementById("#CB_v").addEventListener("load", function() {
  this.style.backgroundColor = "hsl(160, 5%, 22%);";});