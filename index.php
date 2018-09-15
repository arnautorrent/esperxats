<?php
$servername = "lhcp1025.webapps.net";
$username = "d71md972_nauix26";
$password = "nau=dory!";
$dbname = "d71md972_wpblog";
?>

<html>
	<head>
	</head>
	<body>

    <?php

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare("CALL consultaResultatCastellDates('2017-01-01','2017-12-31')");
    $stmt->execute();

    $result = $stmt->fetchAll();
    foreach ($result as $row)
    {

    }

    $conn = null;

    $castells = array
      (
        '3d7' => array(0,0,0,0),
        '4d7' => array(0,0,0,0),
        'Pd5' => array(0,0,0,0),
        '2d6' => array(0,0,0,0),
        '3d6ps' => array(0,0,0,0),
        '5d6' => array(0,0,0,0),
        '7d6' => array(0,0,0,0),
        '4d6a' => array(0,0,0,0),
        '3d6a' => array(0,0,0,0),
        '3d6' => array(0,0,0,0),
        '4d6' => array(0,0,0,0),
        'Pd4ps' => array(0,0,0,0),
        'Pd4cam' => array(0,0,0,0),
        'Pd4bal' => array(0,0,0,0),
        'Pd4' => array(0,0,0,0)
      );
    ?>
    <table>
      <tr>
        <th> Castell </th>
        <th> Descarregat </th>
        <th> Carregat </th>
        <th> Intent </th>
        <th> Intent Desmuntat </th>
      </tr>
      <tr>
        <th> 3d7 </th>
        <th> <?php echo $castells['3d7'][0]; ?> </th>
        <th> <?php echo $castells['3d7'][1]; ?> </th>
        <th> <?php echo $castells['3d7'][2]; ?> </th>
        <th> <?php echo $castells['3d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> 4d7 </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> Pd5 </th>
        <th> <?php echo $castells['Pd5'][0]; ?> </th>
        <th> <?php echo $castells['Pd5'][1]; ?> </th>
        <th> <?php echo $castells['Pd5'][2]; ?> </th>
        <th> <?php echo $castells['Pd5'][3]; ?> </th>
      </tr>
      <tr>
        <th> 2d6 </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> 3d6ps </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> 5d6 </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> 7d6 </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> 4d6a </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> 3d6a </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> 3d6 </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> 4d6 </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> pd4ps </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> pd4cam </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> pd4bal </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
      </tr>
      <tr>
        <th> pd4 </th>
        <th> <?php echo $castells['4d7'][0]; ?> </th>
        <th> <?php echo $castells['4d7'][1]; ?> </th>
        <th> <?php echo $castells['4d7'][2]; ?> </th>
        <th> <?php echo $castells['4d7'][3]; ?> </th>
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
<!--
//QUERIES:
//Per buscar castells carregats (o descarregats, o intents, o intents desmuntats):
SELECT * FROM esperxats.diades WHERE 	CONCAT_WS(';',Resultat_1,Resultat_2,Resultat_3,Resultat_4,Resultat_5,Resultat_6,Resultat_7,Resultat_8) LIKE 'c;%' OR
																			CONCAT_WS(';',Resultat_1,Resultat_2,Resultat_3,Resultat_4,Resultat_5,Resultat_6,Resultat_7,Resultat_8) LIKE '%;c' OR
																			CONCAT_WS(';',Resultat_1,Resultat_2,Resultat_3,Resultat_4,Resultat_5,Resultat_6,Resultat_7,Resultat_8) LIKE '%;c;%';
-->
