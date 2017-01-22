  <script src='jquery-2.2.3.min.js'></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' rel='stylesheet' />
<script src="https://use.fontawesome.com/759b0dfb0d.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
  
  <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
			
			
			<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
				 
			
<!-- web-element retrival system-->			
function getXMLHttp() {
    var xmlhttp;
    if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } else if (window.XMLHttpRequest) {
       xmlhttp = new XMLHttpRequest();
    } else {
        alert("Your browser does not support XMLHTTP!");
    }
    return xmlhttp;
}
function getTextInfo() {
    xmlhttp1=getXMLHttp();
    xmlhttp1.open("POST","http://localhost/WhiteHats/application/views/user.html",true); 
    xmlhttp1.onreadystatechange = updateInfo;
    xmlhttp1.send(null); 
    return false;
}
function updateInfo() { 
    if(xmlhttp1.readyState == 4) { 
	    document.getElementById("editor1").value = xmlhttp1.responseText;
    }      
}
$(document).ready(function(){
          getTextInfo();
          });
		  
	//meant for live updates through setInteval of javascript 	 
	setInterval(function(){
		  var data2 = CKEDITOR.instances.editor1.getData();
$.ajax({
  method: "POST",
  url: "textajax.php",
  data: { 'da': data2},
  dataType: 'Text'
})
  .done(function( msg ) {
    
	});},1000);
		  
</script> 