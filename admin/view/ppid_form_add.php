
	
<script language="JavaScript" type="text/javascript" src="js/cbrte/html2xhtml.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/cbrte/richtext_compressed.js"></script>
<form name="RTEDemo" method="post" enctype="multipart/form-data" action="admin/controller/ppid.php?req=add" class="form" onsubmit="return submitForm();">
 <table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr>
      <td width="20%">Nama Menu</td>
      <td><input name="name" type="text" class="field" id="name" value="" />
     </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
	  
    </td>
    </tr>
  
  </table>
  
<script language="JavaScript" type="text/javascript">
<!--
function submitForm() {
	//make sure hidden and iframe values are in sync for all rtes before submitting form
	updateRTEs();
	
	return true;
}

//Usage: initRTE(imagesPath, includesPath, cssFile, genXHTML, encHTML)
initRTE("js/cbrte/images/", "js/cbrte/", "", true);
//-->
</script>
<noscript><p><b>Javascript must be enabled to use this form.</b></p></noscript>

<script language="JavaScript" type="text/javascript">
<!--
//build new richTextEditor
var rte1 = new richTextEditor('rte1');
<?php
//format content for preloading
if (!(isset($_POST["rte1"]))) {
	$content = '';
	$content = rteSafe($content);
} else {
	//retrieve posted value
	$content = rteSafe($_POST["rte1"]);
}
?>
rte1.html = '<?=$content;?>';
//rte1.toggleSrc = false;
rte1.build();
//-->
</script>
<br />

<table width="100%">
   
    <tr>
     <td colspan="2" align="left">
       <table width="100%" border="0" cellspacing="0" cellpadding="4">
         <tr>
           <td width="69%"><input type="submit" name="button" id="button" value="  Save  " class="button_new" ></td>
           
           <td width="31%"></td>
          </tr>
        </table>
    </tr>
    
</table>

</form>

<?php
function rteSafe($strText) {
	//returns safe code for preloading in the RTE
	$tmpString = $strText;
	
	//convert all types of single quotes
	$tmpString = str_replace(chr(145), chr(39), $tmpString);
	$tmpString = str_replace(chr(146), chr(39), $tmpString);
	$tmpString = str_replace("'", "&#39;", $tmpString);
	
	//convert all types of double quotes
	$tmpString = str_replace(chr(147), chr(34), $tmpString);
	$tmpString = str_replace(chr(148), chr(34), $tmpString);
//	$tmpString = str_replace("\"", "\"", $tmpString);
	
	//replace carriage returns & line feeds
	$tmpString = str_replace(chr(10), " ", $tmpString);
	$tmpString = str_replace(chr(13), " ", $tmpString);
	
	return $tmpString;
}
?>
