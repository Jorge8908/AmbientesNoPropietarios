<!DOCTYPE html>
<?php
function generar_tabla()
{
	echo '<table>';

	$i=0;
		
		while ( $i< 100) 
		{
			echo '<tr>';
			for($j=0; $j<10;$j++)
			{
				echo '<td>';

				/*if(es_primo($i));
				echo '<td>';
				echo  $i++;				
				echo '<h2 style="color:red">'. $i++ .'</h2>';*/
				if(es_primo($i))
				 	echo '<a style="color:red">'. $i++ .'</a>';
    			else
        			echo $i++;
				
				echo '</td>';

				
			}
			echo'</tr>';

		}
	
	echo '</table>';
}

function es_primo($primo)
{
	     
    $num=1;
    
    for($i=2;$i<=$primo;$i++)
    {
        if($primo%$i==0)
        {
            
            if($num++>1)
                return false;
        }
    }
    return true;
}



?>
<html>
<head>
	<title></title>
</head>
<body>
	
		<?php generar_tabla();?>
		
		
	

</body>
</html>