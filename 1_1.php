<script>
function copylink(elem) { 
 var copyText = elem; 
 console.log(elem);
 /* Select the text field */ 
  copyText.select(); 
  copyText.setSelectionRange(0, 99999); /* For mobile devices */ 
 
  /* Copy the text inside the text field */ 
  document.execCommand("copy"); 
 
  /* Alert the copied text */ 
  alert("Copied the text: " + copyText.value); 
} 
</script>


<input id='input_' type='texst' value='texto de prueba'>
<div onclick='copylink(document.getElementById("input_"));'>Copy link </div>




