<script src='jquery-2.2.3.min.js'></script>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' rel='stylesheet' />
<script src="https://use.fontawesome.com/759b0dfb0d.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
<style>


a {
  cursor: pointer;
}

#editor {
  box-shadow: 0 0 2px #CCC;
  min-height: 150px;
  overflow: auto;
  padding: 1em;
  margin-top: 20px;
  resize: vertical;
  outline: none;
}

.toolbar {
  text-align: center;
}

.toolbar a,
.fore-wrapper,
.back-wrapper {
  border: 1px solid #AAA;
  background: #FFF;
  font-family: 'Candal';
  border-radius: 1px;
  color: black;
  padding: 5px;
  width: 1.5em;
  margin: -2px;
  margin-top: 10px;
  display: inline-block;
  text-decoration: none;
  box-shadow: 0px 1px 0px #CCC;
}

.toolbar a:hover,
.fore-wrapper:hover,
.back-wrapper:hover {
  background: #f2f2f2;
  border-color: #8c8c8c;
}

a[data-command='redo'],
a[data-command='strikeThrough'],
a[data-command='justifyFull'],
a[data-command='insertOrderedList'],
a[data-command='outdent'],
a[data-command='p'],
a[data-command='superscript'] {
  margin-right: 5px;
  border-radius: 0 3px 3px 0;
}

a[data-command='undo'],
.fore-wrapper,
a[data-command='justifyLeft'],
a[data-command='insertUnorderedList'],
a[data-command='indent'],
a[data-command='h1'],
a[data-command='subscript'] {
  border-radius: 3px 0 0 3px;
}

a.palette-item {
  height: 1em;
  border-radius: 3px;
  margin: 2px;
  width: 1em;
  border: 1px solid #CCC;
}

a.palette-item:hover {
  border: 1px solid #CCC;
  box-shadow: 0 0 3px #333;
}

.fore-palette,
.back-palette {
  display: none;
}

.fore-wrapper,
.back-wrapper {
  display: inline-block;
  cursor: pointer;
}

.fore-wrapper:hover .fore-palette,
.back-wrapper:hover .back-palette {
  display: block;
  float: left;
  position: absolute;
  padding: 3px;
  width: 160px;
  background: #FFF;
  border: 1px solid #DDD;
  box-shadow: 0 0 5px #CCC;
  height: 70px;
}

.fore-palette a,
.back-palette a {
  background: #FFF;
  margin-bottom: 2px;
}
</style>
<?php


if(isset($_POST["addon_link"]))

{
$ext=$_POST["addon_link"];

$extfile=fopen("extensions.txt",'a');
fwrite($extfile,"<script src='".$ext."'></script>");
fclose($extfile);
}


if(isset($_POST["html"])&&isset($_POST["css"])&&isset($_POST["js"]))
{
$extread=fopen("extensions.txt","r");
$extrainfo=fread($extread,filesize("extensions.txt"));

$htfile= fopen("user.html",'w');
$csfile=fopen("user.css",'w');
$jsfile=fopen("user.js",'w');

$htinfo=$_POST['html'];
$csinfo=$_POST['css'];
$jsinfo=$_POST['js'];

fwrite($htfile,$extrainfo.$htinfo);
fwrite($csfile,$csinfo);
fwrite($jsfile,$jsinfo);
fclose($htfile);
fclose($csfile);
fclose($jsfile);
fclose($extread);
}

?>
  <ul  class="nav nav-tabs">
    <li class="active"><a  data-toggle="tab" href="#text_editor" id='texteditor'>Text Editor</a></li>
    <li><a data-toggle="tab" href="#code_editor"id='codeeditor'>Code Editor</a></li>
   
  </ul>
<div class="tab-content" >


<div id ='text_editor' class="tab-pane fade in active  ">
  <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
			
<!--<div class="toolbar">
  <a href="#" data-command='undo'><i class='fa fa-undo'></i></a>
  <a href="#" data-command='redo'><i class='fa fa-repeat'></i></a>
  <div class="fore-wrapper"><i class='fa fa-font' style='color:#C96;'></i>
    <div class="fore-palette">
    </div>
  </div>
  <div class="back-wrapper"><i class='fa fa-font' style='background:#C96;'></i>
    <div class="back-palette">
    </div>
  </div>
  <a href="#" data-command='bold'><i class='fa fa-bold'></i></a>
  <a href="#" data-command='italic'><i class='fa fa-italic'></i></a>
  <a href="#" data-command='underline'><i class='fa fa-underline'></i></a>
  <a href="#" data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
  <a href="#" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
  <a href="#" data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
  <a href="#" data-command='justifyRight'><i class='fa fa-align-right'></i></a>
  <a href="#" data-command='justifyFull'><i class='fa fa-align-justify'></i></a>
  <a href="#" data-command='indent'><i class='fa fa-indent'></i></a>
  <a href="#" data-command='outdent'><i class='fa fa-outdent'></i></a>
  <a href="#" data-command='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
  <a href="#" data-command='insertOrderedList'><i class='fa fa-list-ol'></i></a>
  <a href="#" data-command='h1'>H1</a>
  <a href="#" data-command='h2'>H2</a>
  <a href="#" data-command='createlink'><i class='fa fa-link'></i></a>
  <a href="#" data-command='unlink'><i class='fa fa-unlink'></i></a>
  <a href="#" data-command='insertimage'><i class='fa fa-image'></i></a>
  <a href="#" data-command='p'>P</a>
  <a href="#" data-command='subscript'><i class='fa fa-subscript'></i></a>
  <a href="#" data-command='superscript'><i class='fa fa-superscript'></i></a>
</div>
<div id='editor' contenteditable>
  <h1>A WYSIWYG Editor.</h1>
  <p>Try making some changes here. Add your own text or maybe an image.</p>
</div>-->
</div>
<div  id ='code_editor'  class="tab-pane fade ">
<form id="form" class='well' method="POST">
<div class='well row' style='background-color:black;'>
<div class='col-lg-4'><textarea name="html" id="html" rows="10" placeholder='HTML' cols="60" ><?php  if(isset($_POST["html"])){ echo $htinfo;} ?></textarea></div>

<div class='col-lg-4'><textarea name="css" id="css" rows="10"  placeholder='CSS' cols="60" ><?php if(isset($_POST["html"])){ echo $csinfo; } ?></textarea></div>

<div class='col-lg-4'><textarea name="js" id="js" rows="10"  placeholder='JS' cols="60" ><?php if(isset($_POST["html"])){ echo $jsinfo; } ?></textarea></div>
</div>
<!--<center><input type='submit' id="btn" class='btn btn-success' name="submit"></input></center>-->
</form>
<center><iframe src="user.html" style='width:98%;height:100%;' class='well' name='iframeit' id="shshnk"></iframe></center>
<a href="user.html">Go to website</a>
</br>

<input type="button" class='btn btn-success' name="settings" id="settings" value="Add-ons"></input>

<form id="addon_popup" action="hf.php" method="POST">
	<textarea id="addon_link" name="addon_link"></textarea> 
	<input type="submit" id="submit" value="Add this!"></input>
</form>

<script src="hf.js"></script>
</div>
</div>

<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
				 
				 $('#codeeditor').click(function(){
					 var data = CKEDITOR.instances.editor1.getData();
					 $( '#html' ).text( data );
					 
				 });
				 
				 
				 
				 
				 
setInterval(function (){
//alert($("#html").val());
var html =$("#html").val();
var css =$("#css").val();
var js =$("#js").val();
$.ajax({
  method: "POST",
  url: "hf2.php",
  data: { html: html, css: css, js: js }
})
  .done(function( msg ) {
    iframe.contentWindow.location.reload();
  });





},1000);

            </script>
			<script type="text/javascript">
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
    xmlhttp1.open("GET","http://localhost/Reddy/user.html",true); 
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
		  
		 
	setInterval(function(){
		  var data2 = CKEDITOR.instances.editor1.getData();
$.ajax({
  method: "POST",
  url: "hf2.php",
  data: { 'da': data2},
  dataType: 'Text'
})
  .done(function( msg ) {
    
	});},1000);
		  
</script> 