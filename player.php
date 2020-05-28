<head>
  <link rel="stylesheet" type="text/css" href="../ytbclient/css/nistype.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="../ytbclient/js/nistype.js"></script>
   </head>
  <style>
     .draggable { width: 90px; height: 90px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
  #draggable, #draggable2 { margin-bottom:20px; }
  #draggable { cursor: n-resize; }
  #draggable2 { cursor: e-resize; }
  </style>
<script>
  function SubmitFormData() {
    var video = $("#video").val();
    $.post("/ytbclient/post/lied.php", { video: video },
    function(data) {
	 $('#results').html(data);
	 $('#myForm')[0].reset();
    });
}
</script>
<div style="width: 300px; height: 55px; " id="draggable2">
<form id="myForm" method='POST'>
<div id="box" > 
<input placeholder="Lien Youtube.." id='video' name='video'/>
<input  type="button" style="color: #808080;"value="Lancer!"  id="submitFormData" onclick="SubmitFormData();"/>
 <div id="results">
 </div>
 </div>
 </div>
</form>
</body>


