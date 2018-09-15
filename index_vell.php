<?php
 $db = mysqli_connect('localhost','root','12345','esperxats') or die('Error connecting to MySQL server.');
?>

<html>
	<head>
	</head>
	<body>
		<?php
		$query = "SELECT ID_colla, nom FROM colles WHERE ID_COLLA != 0;";
		mysqli_query($db, $query) or die('Error querying database.');
		$result = mysqli_query($db, $query);
		?>
		<form action="" method="get">
			Data: <input type="date" name="data" step="1" min="2012-01-01" max="<?php echo date('Y-m-d'); ?>" value="aaaa-mm-dd">
			<select name="id_colla">
				<option value="0"> --- </option>
				<?php
				while ($row = mysqli_fetch_array($result)) {
					echo '<option value="' . $row['ID_colla'] . '">' . $row['nom'] . '</option>';
				}
				?>
  		</select>
  		<br><br>
  		<input type="submit">
		</form>

		<?php
		if(isset($_GET['id_colla'])){
			if ($_GET['id_colla'] == 0){
				$query = "SELECT * FROM diades";
				mysqli_query($db, $query) or die('Error querying database.');
				$result = mysqli_query($db, $query);
				while ($row = mysqli_fetch_array($result)) {
		 			echo $row['data'] . ' ' . $row['diada'] . ': ' . $row['colles'] . ' ' . $row['resultats'] .'<br />';
				}
			}
			else{
				$num = $_GET['id_colla'];
				$regex =  "'(^" . $num . "$)|(^" . $num . ";)|(;" . $num . "$)|(;" . $num . ";)'";
				$query = "SELECT * FROM diades WHERE colles REGEXP " . $regex;
				mysqli_query($db, $query) or die('Error querying database.');
				$result = mysqli_query($db, $query);
				while ($row = mysqli_fetch_array($result)) {
          var_dump($row);
		 			//echo $row['data'] . ' ' . $row['diada'] . ': ' . $row['colles'] . ' ' . $row['Castell_1'] . ' '  .'<br />';
				}
			}
		}
		?>

    <table>
      <tr>
        <th> Castell </th>
        <th> Carregat </th>
        <th> Descarregat </th>
        <th> Intent </th>
        <th> Intent Desmuntat </th>
      </tr>
      <tr>
        <th> 3d7 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 4d7 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> Pd5 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 2d6 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 3d6ps </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 5d6 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 7d6 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 4d6a </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 3d6a </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 3d6 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> 4d6 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> pd4ps </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> pd4cam </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> pd4bal </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> pd4 </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> total </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
      <tr>
        <th> % </th>
        <th> </th>
        <th> </th>
        <th> </th>
        <th> </th>
      </tr>
    </table>

	</body>
</html>

//QUERIES:
//Per buscar castells carregats (o descarregats, o intents, o intents desmuntats):
SELECT * FROM esperxats.diades WHERE 	CONCAT_WS(';',Resultat_1,Resultat_2,Resultat_3,Resultat_4,Resultat_5,Resultat_6,Resultat_7,Resultat_8) LIKE 'c;%' OR
																			CONCAT_WS(';',Resultat_1,Resultat_2,Resultat_3,Resultat_4,Resultat_5,Resultat_6,Resultat_7,Resultat_8) LIKE '%;c' OR
																			CONCAT_WS(';',Resultat_1,Resultat_2,Resultat_3,Resultat_4,Resultat_5,Resultat_6,Resultat_7,Resultat_8) LIKE '%;c;%';
