<!DOCTYPE html>
<html lang="hu">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/villany.css">
    <link rel="icon" type="image/png" href="../images/ikon.png" sizes="32x32">

    <title>VT | Ohm</title>



    <style>
        table { border: 1px #ccc solid; border-collapse:collapse; padding: 5px; color:#fff; margin-left:auto; margin-right:auto;}
        table th, table td { border: 1px #ccc solid; border-collapse:collapse; padding: 20px; font-weight:normal; text-align: center; color:#fff;}
        table th { kepszoveg-align:center; font-weight: bold; color:#fff;}
        
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
              <li><a href="amper.php">Amper (A)</a></li>
                <li class="active"><a href="ohm.php">Ohm (Ω)</a></li>
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
<h1>Ohm (Ω)</h1>
<p>Az ohm az elektromos ellenállás alapmértékegysége az SI-rendszerben</p>
<p>&nbsp;</p>
<p>Jele: Ω, a görög abc nagy ómega betűje.</p>
<p>&nbsp;</p>
<p>Nevét Georg Simon Ohm német fizikusról kapta.</p>

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
        <td>" . $row["nev"]. "ohm</td>
        <td>" . $row["jel"]. "Ω </td> 
        <td> 1 " . $row["jel"]. "Ω = " . $row["atvaltas"]. " Ω </td>
        </tr>";
    }
    echo "</table>";
} 

$conn->close();
?>


</div>


      <!-- lap tetejére gomb -->

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