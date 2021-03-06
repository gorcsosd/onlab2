<!DOCTYPE html>
<html lang="hu">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/villany.css">
    <link rel="icon" type="image/png" href="../images/ikon.png" sizes="32x32">

    <title>VT | Amper</title>


    <style>
        table { border: 1px #ccc solid; border-collapse:collapse; padding: 5px; color:#fff; margin-left:auto; margin-right:auto;}
        table th, table td { border: 1px #ccc solid; border-collapse:collapse; padding: 20px; font-weight:normal; text-align: center; color:#fff;}
        table th { text-align:center; font-weight: bold; color:#fff;}
        
        </style> 
    

    <body>
        <nav>

            <p>Villanyszerelők tudástára</p>
            <ul>
            <li><a href="index.html">Kezdőlap</a></li>  
            <li><a href="#">Fogalmak</a>
              <ul>
                <li><a href="feszultseg.php">Feszültség</a></li>
                <li><a href="aram.php">Áram</a></li>
                <li><a href="ellenallas.html">Ellenállás</a></li>
                <li><a href="teljesitmeny.html">Teljesítmény</a></li>
              </ul>
            </li>  
            <li><a href="#">Mértékegységek</a>
            <ul>
              <li class="active"><a href="amper.php">Amper (A)</a></li>
                <li><a href="ohm.php">Ohm (Ω)</a></li>
                <li><a href="volt.php">Volt (V)</a></li>
                <li><a href="watt.php">Watt (W)</a></li>
            </ul>
            
            
            </li>  
            <li><a href="rajzjelek.html">Rajzjelek</a></li>  
            <li><a href="kepletek.php">Képletek és összefüggések</a></li>  
            <li><a href="#">Törvények</a>
            <ul>
              <li><a href="ohmtorveny.html">Ohm törvénye</a></li>
              <li><a href="kirchhofftorveny.html">Kirchhoff törvénye</a></li>
            </ul>
            </li>
            <li><a href="#">Kalkulátorok</a>
            <ul>
              <li><a href="szamologep.html">Áramfogyasztás</a></li>
              <li><a href="villanyszamla.html">Villanyszámla</a></li>
            </ul>
            <li><a href="mertekegysegvalto.html">Mértékegység átváltó</a></li>  
            </li> 
            
            </ul>
            
            </nav>

        <div id="szoveg">
<h1>Amper (A)</h1>

<p>Az amper az elektromos áram erősségének mértékegysége a SI mértékegységrendszerben. </p>
<p>&nbsp;</p>
<p>Jele: A.</p>
<p>&nbsp;</p>
<p>A mértékegység a nevét André-Marie Ampère francia fizikusról kapta.</p>

<h2>Táblázat az előtagokról</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "villszertudastar";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nev,jel,atvaltas FROM mertekegyseg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Név</th>
    <th>Jele</th>
    <th>Átváltás</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["nev"]. "amper</td>
        <td>" . $row["jel"]. "A </td> 
        <td> 1 " . $row["jel"]. "A = " . $row["atvaltas"]. " A </td>
        </tr>";
    }
    echo "</table>";
} 

$conn->close();
?>

        </div>





      <!-- lap tetejére gomb-->

      <button onclick="topFunction()" id="myBtn">Lap tetejére</button>
      
        <script>
        
            var mybutton = document.getElementById("myBtn");
            
            // Ha lejjebb tekerünk az oldalon akkor jelenik meg a gomb
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
            
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }
</script>


        </body>
</html>