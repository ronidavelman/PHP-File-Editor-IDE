<!doctype html>
<html>
<head>
<title>PHP FIle Editor</title>
<meta charset="utf-8"/>

<!-- Dependencies -->
<link rel=stylesheet href="lib/codemirror.css">
<link rel=stylesheet href="doc/docs.css">
<script src="lib/codemirror.js"></script>
<script src="mode/xml/xml.js"></script>
<script src="mode/javascript/javascript.js"></script>
<script src="mode/css/css.js"></script>
<script src="mode/htmlmixed/htmlmixed.js"></script>
<script src="addon/edit/matchbrackets.js"></script>
<script src="doc/activebookmark.js"></script>
</head>

<body>
<!--PHP-->
<?php
    $file = "file.php";
    if(isset($_POST))
    {
        $postedHTML = $_POST['html']; 
		if (empty($postedHTML) != true){
		
			file_put_contents($file, $postedHTML);
		}
	}
	
	$content = file_get_contents($file);
	
?>


<!--STYLES-->
<style>
.mainWrapper {
width:100%;
}

.editor {
width:45%; 
height:100em; 
float:left;
}

.view {
width:45%; 
float:right;
}

.viewIframe {
width:100%; 
float:right;
 height:100em; 
 border:none;
}

.textAreaEditor {
width:100%; 
float:left; 
font-size: 1em; 
height:100em;
}
</style>



<!--Main Wrapper-->
<div class="mainWrapper">
	<form action="" method="post">
	
	<!--TextView Editor-->
	<div class="editor">
		<?php  echo "<textarea id='demotext' class='textAreaEditor' name='html'>" . htmlspecialchars($content) . "</textarea>"; ?>
		 <br />
		 <input type="submit" value="Save Changes" />
	</div>
	<!--END Editor-->
	
	

	<!--Post Changes-->
   
	
</form>

<!--Javascript for syntax highlighting-->
	<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("demotext"), {
      lineNumbers: true,
      mode: "text/html",
      matchBrackets: true
    });
	</script>
  
  
	<!--Preview changes section-->
	<div class="view">
		<iframe class="viewIframe"  src="PUT_URL_HERE" />
	</div>


</div> <!-- End of Main Wrapper -->


</body>
</html>
