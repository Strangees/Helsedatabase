<!doctype html>

<html>

<head>

<meta charset="utf-8">
<meta name="Description" CONTENT="Denne nettsiden er ment for å forenkle hvordan man finner frem til riktig leverandør av diverse hjelpemidler">
<title>Dabasen for leverandører innen hjelpemidler</title>
<meta name="Author" CONTENT="Stian Strange, 2017">
<meta name="Source" CONTENT="http://innovatoriet.hbv.no/getfile.php/13416617/innovatoriet.hbv.no/Filer/8.5.17%20Liste%20leverand%C3%B8rer%20Innovatoriet%281%29.pdf">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="filter.css" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$('document').ready(function () {
  $( $.parseHTML( "<h5>ANNONSE</h5>" ) ).appendTo(".AD_TRUE")
});
</script>
<title>Health</title>
</head>

<!--Connect to db php-->
<?php include 'connection.php';
$cat1 = "SELECT catname FROM categories where catno = 1 order by ad asc, catno desc";
$username = USERNAME; //defined in conenction.php
$password = PASSWORD; //defines in connection.php
// Create connection
$conn = new mysqli("localhost", $username, $password, "stianstrange_no");
// Check connection
//test
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>

<body>
<!--Container-->
<section class="container">
<div class="discription">Denne nettsiden er ment for å forenkle hvordan man finner frem til riktig leverandør av diverse hjelpemidler. Nettsiden er under utvikling. <span>Oppdager du noen feil eller manger på nettsiden kan du sende mail til: <b>stianstrange@gmail.com </b> </div>
 <section class="container containerlabel">
 	<label class="lb1 hvr-bounce-to-right">
 	    Spise / drikkehjelpemidler
 	</label>
	<script>
		$( ".lb1" ).click(function() {	$( ".cat2,.cat3,.cat4,.cat5,.cat6,.cat7,.cat8,.cat9,.cat10,.cat11,.cat12,.cat13,.cat14" ).addClass( "nocard" );	$( ".cat1 " ).removeClass("nocard");	$(".lb1").addClass("lblchk");	$( ".lb2,.lb3,.lb4,.lb5,.lb6,.lb7,.lb8,.lb9,.lb10,.lb11,.lb12,.lb13,.lb14").removeClass("lblchk");
		});
	 </script>
		<label class="lb2 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Egenmonitorering</label>
	<script>
		$( ".lb2" ).click(function() {	$( ".cat3,.cat4,.cat5,.cat6,.cat7,.cat8,.cat9,.cat10,.cat11,.cat12,.cat13,.cat14,.cat1 " ).addClass( "nocard" );	$( ".cat2" ).removeClass("nocard");	$(".lb2").addClass("lblchk");	$( ".lb3,.lb4,.lb5,.lb6,.lb7,.lb8,.lb9,.lb10,.lb11,.lb12,.lb13,.lb14,.lb1").removeClass("lblchk");
		});
	 </script>
  	 	<label class="lb3 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Trygghetsalarm / GPS</label>
	<script>
		$( ".lb3" ).click(function() {	$( ".cat4,.cat5,.cat6,.cat7,.cat8,.cat9,.cat10,.cat11,.cat12,.cat13,.cat14,.cat1 ,.cat2" ).addClass( "nocard" );	$( ".cat3" ).removeClass("nocard");	$(".lb3").addClass("lblchk");	$( ".lb4,.lb5,.lb6,.lb7,.lb8,.lb9,.lb10,.lb11,.lb12,.lb13,.lb14,.lb1,.lb2").removeClass("lblchk");
		});
	 </script>
  	 	<label class="lb4 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Alarmer og Sensorer</label>
	<script>
$( ".lb4" ).click(function() {	$( ".cat5,.cat6,.cat7,.cat8,.cat9,.cat10,.cat11,.cat12,.cat13,.cat14,.cat1 ,.cat2,.cat3" ).addClass( "nocard" );	$( ".cat4" ).removeClass("nocard");	$(".lb4").addClass("lblchk");	$( ".lb5,.lb6,.lb7,.lb8,.lb9,.lb10,.lb11,.lb12,.lb13,.lb14,.lb1,.lb2,.lb3").removeClass("lblchk");
		});
	 </script>
  	 	<label class="lb5 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Kommunikasjon, struktur og organisering</label>
	<script>
$( ".lb5" ).click(function() {	$( ".cat6,.cat7,.cat8,.cat9,.cat10,.cat11,.cat12,.cat13,.cat14,.cat1 ,.cat2,.cat3,.cat4" ).addClass( "nocard" );	$( ".cat5" ).removeClass("nocard");	$(".lb5").addClass("lblchk");	$( ".lb6,.lb7,.lb8,.lb9,.lb10,.lb11,.lb12,.lb13,.lb14,.lb1,.lb2,.lb3,.lb4").removeClass("lblchk");
		});
	 </script>
 	 	<label class="lb6 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Bad, toalett og hygiene</label>
	<script>
$( ".lb6" ).click(function() {	$( ".cat7,.cat8,.cat9,.cat10,.cat11,.cat12,.cat13,.cat14,.cat1 ,.cat2,.cat3,.cat4,.cat5" ).addClass( "nocard" );	$( ".cat6" ).removeClass("nocard");	$(".lb6").addClass("lblchk");	$( ".lb7,.lb8,.lb9,.lb10,.lb11,.lb12,.lb13,.lb14,.lb1,.lb2,.lb3,.lb4,.lb5").removeClass("lblchk");
		});
	 </script>
	 	<label class="lb7 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Soverom</label>
	<script>
$( ".lb7" ).click(function() {	$( ".cat8,.cat9,.cat10,.cat11,.cat12,.cat13,.cat14,.cat1 ,.cat2,.cat3,.cat4,.cat5,.cat6" ).addClass( "nocard" );	$( ".cat7" ).removeClass("nocard");	$(".lb7").addClass("lblchk");	$( ".lb8,.lb9,.lb10,.lb11,.lb12,.lb13,.lb14,.lb1,.lb2,.lb3,.lb4,.lb5,.lb6").removeClass("lblchk");
		});
	 </script>
	 	<label class="lb8 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Rehabilitering, trening og stimulering</label>
	<script>
		$( ".lb8" ).click(function() {	$( ".cat9,.cat10,.cat11,.cat12,.cat13,.cat14,.cat1 ,.cat2,.cat3,.cat4,.cat5,.cat6,.cat7" ).addClass( "nocard" );	$( ".cat8" ).removeClass("nocard");	$(".lb8").addClass("lblchk");	$( ".lb9,.lb10,.lb11,.lb12,.lb13,.lb14,.lb1,.lb2,.lb3,.lb4,.lb5,.lb6,.lb7").removeClass("lblchk");
		});
	 </script>
	 	<label class="lb9 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Småhjelpemidler</label>
	<script>
	$( ".lb9" ).click(function() {	$( ".cat10,.cat11,.cat12,.cat13,.cat14,.cat1 ,.cat2,.cat3,.cat4,.cat5,.cat6,.cat7,.cat8" ).addClass( "nocard" );	$( ".cat9" ).removeClass("nocard");	$(".lb9").addClass("lblchk");	$( ".lb10,.lb11,.lb12,.lb13,.lb14,.lb1,.lb2,.lb3,.lb4,.lb5,.lb6,.lb7,.lb8").removeClass("lblchk");
		});
	 </script>
	 	<label class="lb10 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Roboter</label>
	<script>
		$( ".lb10" ).click(function() {	$( ".cat11,.cat12,.cat13,.cat14,.cat1 ,.cat2,.cat3,.cat4,.cat5,.cat6,.cat7,.cat8,.cat9" ).addClass( "nocard" );	$( ".cat10" ).removeClass("nocard");	$(".lb10").addClass("lblchk");	$( ".lb11,.lb12,.lb13,.lb14,.lb1,.lb2,.lb3,.lb4,.lb5,.lb6,.lb7,.lb8,.lb9").removeClass("lblchk");
		});
	 </script>
	 	<label class="lb11 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Møbler</label>
	<script>
	$( ".lb11" ).click(function() {	$( ".cat12,.cat13,.cat14,.cat1 ,.cat2,.cat3,.cat4,.cat5,.cat6,.cat7,.cat8,.cat9,.cat10" ).addClass( "nocard" );	$( ".cat11" ).removeClass("nocard");	$(".lb11").addClass("lblchk");	$( ".lb12,.lb13,.lb14,.lb1,.lb2,.lb3,.lb4,.lb5,.lb6,.lb7,.lb8,.lb9,.lb10").removeClass("lblchk");
		});
	 </script>
		<label class="lb12 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Diverse</label>
	<script>
	$( ".lb12" ).click(function() {	$( ".cat13,.cat14,.cat1 ,.cat2,.cat3,.cat4,.cat5,.cat6,.cat7,.cat8,.cat9,.cat10,.cat11" ).addClass( "nocard" );	$( ".cat12" ).removeClass("nocard");	$(".lb12").addClass("lblchk");	$( ".lb13,.lb14,.lb1,.lb2,.lb3,.lb4,.lb5,.lb6,.lb7,.lb8,.lb9,.lb10,.lb11").removeClass("lblchk");
		});
	 </script>
		<label class="lb13 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Medisindispensere</label>
	<script>
		$( ".lb13" ).click(function() {	$( ".cat14,.cat1 ,.cat2,.cat3,.cat4,.cat5,.cat6,.cat7,.cat8,.cat9,.cat10,.cat11,.cat12" ).addClass( "nocard" );	$( ".cat13" ).removeClass("nocard");	$(".lb13").addClass("lblchk");	$( ".lb14,.lb1,.lb2,.lb3,.lb4,.lb5,.lb6,.lb7,.lb8,.lb9,.lb10,.lb11,.lb12").removeClass("lblchk");
		});
	 </script>
    	<label class="lb14 hvr-bounce-to-right ctrl-standard typ-subhed fx-sliderIn">Kjøkken</label>
	<script>
		$( ".lb14" ).click(function()
		{
		$( ".cat1 ,.cat2,.cat3,.cat4,.cat5,.cat6,.cat7,.cat8,.cat9,.cat10,.cat11,.cat12,.cat13" ).addClass( "nocard" );
		$( ".cat14" ).removeClass("nocard");
		$(".lb14").addClass("lblchk");
		$( ".lb1,.lb2,.lb3,.lb4,.lb5,.lb6,.lb7,.lb8,.lb9,.lb10,.lb11,.lb12,.lb13").removeClass("lblchk");
		});
	 </script>
	<label class="lbr ctrl-standard typ-subhed fx-sliderIn">Nullstill</label>
	<script>
	 $ (".lbr").click(function()
		 {
		$( ".cat1,.cat2,.cat3,.cat4,.cat5,.cat6,.cat7,.cat8,.cat9,.cat10,.cat11,.cat12,.cat13,.cat14"  ).removeClass("nocard");
		$( ".lb1,.lb2,.lb3,.lb4,.lb5,.lb6,.lb7,.lb8,.lb9,.lb10,.lb11,.lb12,.lb13,.lb14").removeClass("lblchk");
		});
	 </script>
</section>
   <?php
    /*variables*/
	  $sql = "SELECT nr,name,telephone,ad,website,catno,ekstra FROM company order by ad desc, catno asc";
      $sqlcat1 = "SELECT nr,name,telephone,website,catno from company where catno = 1";
	  $result = $conn->query($sql);
	  $catno= $row["catno"];
	  $c = "<div class= tile cat1>";
	 /*Output data from DB*/
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
		echo
		"<a href=".$row["website"]." target=_blank><div class= \"tile ".$row["nr"]." ". "cat".$row["catno"]." AD_".$row["ad"]." \">".
		"<h1>".$row["name"]."</h1>".
		"<h4> TLF: ". $row["telephone"]. "</h4>
		<h4> ". $row["website"]."</h4>
		<p>".$row["ekstra"]."</p>
		</div></a>";
    }
}
else {

    echo "Ingen resultater";
}
$conn->close();
	  ?>
<script>
	// Document is ready.
	$.when( $.ready ).then(function()
		   {
		//$( onclick="window.open('newurl.html','mywindow');" style="cursor: pointer;").appendTo (".1");
		$( "<a href=http://www.handsteady.com>").appendTo (".1");
		console.info ("websiden har manuelt lagt til paragrafer i cards");
});
	</script>
  </section>
</div>
</body>
</html>
