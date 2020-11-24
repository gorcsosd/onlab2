<!DOCTYPE html>
<html lang="hu">
<head>  
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/villany.css">
    <link rel="icon" type="image/png" href="../images/ikon.png" sizes="32x32">

<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script> 

    <title>VT | Áram</title>
    <style>
        table { border: 1px #ccc solid; border-collapse:collapse; padding: 5px; color:#fff; margin-left:auto; margin-right:auto;}
        table th, table td { border: 1px #ccc solid; border-collapse:collapse; padding: 20px; font-weight:normal; text-align: center; color:#fff;}
        table th { text-align:center; font-weight: bold; color:#fff;}
        
        </style> 
    
</head>
    <body>
      <nav>

        <p>Villanyszerelők tudástára</p>
        <ul>
        <li ><a href="index.html">Kezdőlap</a></li>  
        <li><a href="#">Fogalmak</a>
          <ul>
            <li><a href="feszultseg.php">Feszültség</a></li>
            <li class="active"><a href="aram.php">Áram</a></li>
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
<h1>Elektromos áram</h1>

<p>Az elektromos áram az elektromos töltéssel rendelkező részecskék (töltéshordozók) sokaságának elektromos mező hatására kialakuló rendezett mozgása. 
    Az áram irányát a pozitív töltéshordozók mozgásának az irányával definiáljuk.</p>
    <p>&nbsp;</p>
    <p>Az áramlás irányának váltakozása alapján beszélhetünk váltakozó, vagy áramlás irányának állandósága esetén egyenáramról.</p>
    <p>&nbsp;</p>
    <p>Ha elektromos töltések egy nyugalomban lévő vezető anyag belsejében az ott fennálló elektromos erőtér hatására mozognak, 
        akkor a létrejött áramot vezetési (vagy konduktív) áramnak nevezik. Ilyen jön létre a fémekben a szabad elektronok mozgása révén.</p>
        <p>&nbsp;</p>
        <p>Abban az esetben, ha a töltések mozgása azért következik be, mert a töltéseket hordozó test vagy közeg mozog, 
            és vele együtt mozognak a töltések is, a létrejött elektromos áramot konvektív áramnak nevezik. 
            A folyadékokban, gázokban az ionok, mint szabad töltéshordozók mozgása konvektív áramot hoz létre.</p>

<h2>Elektromos áramerősség</h2>
<p>Az elektromos áram mint folyamat mennyiségi jellemzésére az elektromos áramerősséget használjuk fizikai mennyiségként. 
    Az áram erősségét (<b>I</b>) az áramvezető teljes keresztmetszetén adott idő alatt áthaladó összes töltésmennyiség (<b>Q</b>) és az idő (<b>t</b>) hányadosával jellemezzük.</p>
    <p>&nbsp;</p>


<p>
\[I = {Q \over t}\]
</p>

    <p>&nbsp;</p>
    <p>SI-mértékegysége az amper, amelynek jele A.</p>

    <h2>Időben állandó és váltakozó áram</h2>

    <p>Az áram irányát a pozitív töltéshordozók mozgásának az irányával definiáljuk.</p>

    <p>&nbsp;</p>

<p>Ha az áram iránya és erőssége időben állandó, akkor stacionárius vagy egyenáramról beszélünk. Egyenáram jön létre egy olyan áramkörben, 
    ahol az áramforrásnak pozitív és negatív pólusa van, így az áram megszakítás nélkül folyik a vezetékben. 
    Az áramot létrehozó feszültségkülönbség és az áramerősség között az Ohm-törvény teremt kapcsolatot.</p>

    <p>&nbsp;</p>

    <p>A váltakozó áram esetén az áramot létrehozó váltakozó feszültség ismétlődően (periodikusan) ellentétes értéket vesz fel (vagyis a pólusok váltakoznak). 
        A periodicitás jellemzője a frekvencia. Az iparban és a háztartásokban jellemzően váltakozó áramot használnak hálózati energiaforrásként.</p>

        <h2>Áramerősség-határok a Nemzetközi Elektrotechnikai Bizottság alapján</h2>
        <p>&nbsp;</p>

        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "villszertudastar";



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT valtakozoaram,egyenaram,hatas,megjegyzes FROM aramhatas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Váltakozó áram 50-60 Hz</th>
    <th>Egyenáram</th>
    <th>Hatás az emberre</th>
    <th>Megjegyzés</th>
    </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["valtakozoaram"]. "</td>
        <td>" . $row["egyenaram"]. " </td> 
        <td>" . $row["hatas"]. "</td>
        <td>" . $row["megjegyzes"]. "</td>
        </tr>";
    }
    echo "</table>";
} 

$conn->close();
?>

        <p>&nbsp;</p>
        </div>

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