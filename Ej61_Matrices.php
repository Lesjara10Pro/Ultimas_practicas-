<?php
     $MatrizA= array();
     $valor1= 100;
     for ($f=0; $f<3; $f++){
	        for ($c=0; $c<3; $c++){
	           $MatrizA[$f][$c]=$valor1;
	           $valor1+=10;

	        }
	    }
     echo "<br>";
     echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
     echo "<tr><th colspan='3'>MatrizA</th></tr>";
     for ($f=0; $f<3; $f++){
           echo "<tr>";
           for ($c=0; $c<3; $c++){
            echo "<td>" . $MatrizA[$f][$c] . "</td>";} 
            echo "</tr>";       
        }
        echo "</table><br>";
     $MatrizB= array();
     $valor2= 500;
     for ($f=0; $f<3; $f++){
	        for ($c=0; $c<3; $c++){
	           $MatrizB[$f][$c]=$valor2;
	           $valor2+=20;
	        }
	    }
	 echo "<br>";
     echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
     echo "<tr><th colspan='3'>MatrizA</th></tr>";
     for ($f=0; $f<3; $f++){
     	   echo "<tr>";
           for ($c=0; $c<3; $c++){
            echo "<td>" . $MatrizB[$f][$c] . "</td>";}
            echo "</tr>";
        }
        echo "</table><br>";
     $MatrizC= array();
     $valor3=0;
     for ($f=0; $f<3; $f++){
	        for ($c=0; $c<3; $c++){
	           $MatrizC[$f][$c]=$MatrizA[$f][$c]+$MatrizB[$f][$c];
	          
	        }
	    }
	 echo "<br>";
     echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
     echo "<tr><th colspan='3'>MatrizA</th></tr>";
     for ($f=0; $f<3; $f++){
     	   echo "<tr>";
           for ($c=0; $c<3; $c++){
            echo "<td>" . $MatrizC[$f][$c] . "</td> ";}
            echo "</tr>";
        }
        echo "</table><br>";
?>
</body>
</html


       