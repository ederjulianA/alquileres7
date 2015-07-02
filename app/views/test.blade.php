<?php
if ($conn_access  = odbc_connect("Driver={SQL Server Native Client 10.0};Server=(local);Database=REDEMOTOS;", 'sa', 'Somic321')){ 
   	echo "Conectado correctamente"; 
   	
        $ssql = "select * from Ciudad where CiuCod>=1 order by CiuNom asc"; 
   	if($rs_access = odbc_exec ($conn_access, $ssql)){ 
   		
   		while ($info = odbc_fetch_array($rs_access)) {
 		   //$content[] = $info;
   			//$ciudades = new Ciudad;
   			$ciudades = $info;
			}
			//dd($ciudades);
      	 
echo "<br>La sentencia se ejecutó correctamente"; 
		//$fila = odbc_fetch_object($rs_access);
      	 //dd($fila);
/*while ($fila = odbc_fetch_object($rs_access)){ 
         	 echo "<br>" . $fila->CiuNom; 
      	 } 
   	}else{ */
      	 //echo "Error al ejecutar la sentencia SQL"; 
   	} 
} else{ 
   	echo "Error en la conexión con la base de datos"; 
} //die( print_r( sqlsrv_errors(), true));
?>

@foreach($ciudades as $c)
	{{$c->CiuNom}}
@endforeach

