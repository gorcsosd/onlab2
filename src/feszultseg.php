<!DOCTYPE html>
<html lang="hu">
  <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/villany.css">
    <link rel="icon" type="image/png" href="../images/ikon.png" sizes="32x32">

    <title>VT | Feszültség</title>

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
    <li class="active"><a href="feszultseg.php">Feszültség</a></li>
    <li><a href="aram.php">Áram</a></li>
    <li><a href="ellenallas.html">Ellenállás</a></li>
    <li><a href="teljesitmeny.html">Teljesítmény</a></li>
  </ul>
</li>  
<li><a href="#">Mértékegységek</a>
<ul>
  <li><a href="amper.php">Amper (A)</a></li>
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
<h1>Elektromos feszültség</h1>

<p>Elektromos mezőben két pont között az elektromos feszültség (villamos feszültség) megadja, 
    hogy mennyi munkát végez a mező egységnyi töltésen, míg a töltés az egyik pontból elmozdul a másikba. 
    Mértékegysége tehát a joule/coulomb, amit <b>volt</b>nak neveznek. Valamely kijelölt viszonyítási ponthoz képest mért elektromos feszültséget elektromos potenciálnak nevezik. 
    Nagyságától függően nevezik törpefeszültségnek, kisfeszültségnek, nagyfeszültségnek vagy különlegesen nagyfeszültségnek.</p>
  

<h2>Leggyakrabban előforduló feszültségszintek</h2>
<h4>Egyenfeszültség</h4>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "villszertudastar";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT feszultseg,leiras FROM egyenfeszultseg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<ul>
        <li>" . $row["feszultseg"]. " - " . $row["leiras"]. " </li>

        </ul>";
    }
} 

$conn->close();
?>



<h4>Váltakozó feszültség</h4>

<?php
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT feszultseg,leiras FROM valtakozofeszultseg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<ul>
        <li>" . $row["feszultseg"]. " - " . $row["leiras"]. " </li>

        </ul>";
    }
} 

$conn->close();
?>



<h2>Elektromos hálózati csatlakozók, feszültségek és frekvenciák listája európai országok lebontásában </h2>
<p>&nbsp;</p>

<?php


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT orszag, csatlakozo, feszultseg, frekvencia FROM feszultseg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Ország</th>
    <th>Csatlakozó és aljzat</th>
    <th>Feszültség</th>
    <th>Frekvencia</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["orszag"]. "</td>
        <td>" . $row["csatlakozo"]. " </td> 
        <td>" . $row["feszultseg"]. "</td>
        <td>" . $row["frekvencia"]. "</td>
        </tr>";
    }
    echo "</table>";
} 

$conn->close();
?>

    <p>&nbsp;</p>

    <h2>Elektromos csatlakozók fajtái képekkel illusztrálva</h2>
    <p>&nbsp;</p>


   <div class="container">
        <img src="../images/ccsatlakozo.jpg" alt="c csatlakozo" class="image">
        <div class="overlay">
          <div class="kepszoveg">C csatlakozó és aljzat</div>
        </div>
        </div>

        <p>&nbsp;</p>

    <div class="container">
        <img src="../images/ecsatlakozo.jpg" alt="e csatlakozo" class="image">
        <div class="overlay">
          <div class="kepszoveg">E csatlakozó és aljzat</div>
        </div>
        </div>
        
        <p>&nbsp;</p>
        <div class="container">
            <img src="../images/fcsatlakozo.jpg" alt="f csatlakozo" class="image">
            <div class="overlay">
              <div class="kepszoveg">F csatlakozó és aljzat</div>
            </div>
            </div>

<p>&nbsp;</p>

<div class="container">
  <img src="../images/gcsatlakozo.jpg" alt="g csatlakozo" class="image">
  <div class="overlay">
    <div class="kepszoveg">G csatlakozó és aljzat</div>
  </div>
  </div>
  <p>&nbsp;</p>

  <div class="container">
    <img src="../images/kcsatlakozo.jpg" alt="k csatlakozo" class="image">
    <div class="overlay">
      <div class="kepszoveg">K csatlakozó és aljzat</div>
    </div>
    </div>


 
 <p>&nbsp;</p>
            <div class="container">
                <img src="../images/lcsatlakozo.jpg" alt="l csatlakozo" class="image">
                <div class="overlay">
                  <div class="kepszoveg">L csatlakozó és aljzat</div>
                </div>
                </div>


              

</div>
              

 <!--      lap tetejére gomb -->

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