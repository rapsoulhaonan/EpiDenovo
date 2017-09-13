<?php

$gene_symbol = $_POST['gs_message'];

if(empty($gene_symbol)) {
	echo "
	<script language='javascript'>
	alert('The search input is required !');
	window.location='search.php';
	</script>
	";
	exit();
 }

include('header.php');
include('database.php');
?>

<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear"> 

<!--
        <h1 class="page-title">Search Result</h1>
-->

<?php 

$all_gs = explode("\r\n",$gene_symbol);
#echo var_dump($all_gs).'<br>';

$db_table = 'RNA_eMED_mouse';
$tb_key = 'Symbol';

//$sql_field=array(array("Field"=>"*"));
$sql_field=array(
		array("Field"=>"Symbol"), 
		array("Field"=>"MIIoocyte_FPKM"), 
		array("Field"=>"zygote_FPKM"),
		array("Field"=>"early2cell_FPKM"),
		array("Field"=>"cell2_FPKM"),
		array("Field"=>"cell4_FPKM"),
		array("Field"=>"cell8_FPKM"),
		array("Field"=>"ICM_FPKM"),
		array("Field"=>"mESC_FPKM")
		);

$query = 'SELECT';
foreach($sql_field as $k=>$v){
	if($k == 0){
		$query .= " ".$v['Field']; 
	}else{
		$query .= ", ".$v['Field']; 
	}
}
$query .= " FROM $db_table WHERE";
//$query = "SELECT * FROM $db_table WHERE";

foreach($all_gs as $k=>$v){
	if($k == 0){ 
		$query .= " $tb_key = \"$v\" ";
	}else{
		$query .= " OR $tb_key = \"$v\" ";
	}
}
//echo '<font color="#009100">'.$query.'</font><br><br>';

//table head
$table_html="<h4><b><font color='#e4242e'>$db_table</font></b></h4><br>\n";
$table_html .= "<table class='bordered'>\n <thead> <tr> <th>MORE</th>";

if($sql_field[0]['Field'] == "*"){

	$result = mysqli_query($con, "desc $db_table");
	if (!$result) {
		printf("ERROR mysqli_query(): %s\n", mysqli_error($con));
		exit();
	}

	$table_head_key = 0;
	while($row = mysqli_fetch_array($result)) {
		//	echo "sub_species: ".$row['sub_species'].", gene_symbol: ".$row['gene_symbol']."\n";

		$table_head[$table_head_key]=$row['Field'];
		$table_head_key++;

		if ( $row['Field'] == "website" ){
		//table head NULL

		}else{
		$table_html .= '<th>'.$row['Field'].'</th>';
		}
	}

}else{
	$table_head_key = 0;
	foreach ($sql_field as $row)
	{
		$table_head[$table_head_key]=$row['Field'];
		$table_head_key++;

		if ( $row['Field'] == "website" ){
		//table head NULL

		}else{
		$table_html .= '<th>'.$row['Field'].'</th>';
		}

	}
}
//echo var_dump($table_head).'<br>';

$table_html .= "</tr> </thead>\n";

//table body
//$query = 'SELECT * FROM Addiction WHERE gene_symbol = "Vmn1r217" OR gene_symbol = "Kdm7a" ';

//echo '<font color="#009100">'.$query.'</font><br><br>';

$result = mysqli_query($con, $query); //if failed ,return FALSE
if (!$result) {
	printf("ERROR mysqli_query(): %s\n", mysqli_error($con));
	exit();
}

while($row = mysqli_fetch_array($result)) {
	//	echo var_dump($row).'<br>';
	//	echo "sub_species: ".$row['sub_species'].", gene_symbol: ".$row['gene_symbol']."\n";

	$table_html .= '<tr>';
	//$table_html .= '<td align="center"><a href="http://www.ncbi.nlm.nih.gov/gene/?term='.$row['gene_symbol'].'[sym]" class="button small round">NCBI</a></td>';
	$table_html .= '<td align="center"><a href="#">CHART</a></td>';
	foreach($table_head as $value)
	{

		if ( $value == "website" ){
			//td NULL

		}elseif( $value == "pubmedID" ){
		$table_html .= '<td><a href="'.$row["website"].'">'.$row[$value].'</a></td>';

		}else{
		$table_html .= '<td>'.$row[$value].'</td>';
		}
	}
	$table_html .= "</tr>\n";
}
$table_html .= "</table>\n <br> <br>";

//output
echo $table_html;

?>

    </div>
  </div>
</div>

<?php
//echo var_dump($con).'<br>';
mysqli_close($con);
include('footer.php');
?>

