<?php
/*if ($conn_access  = odbc_connect("Driver={SQL Server Native Client 10.0};Server=(local);Database=appmantis;", 'sa', 'Somic321')){ 
   	echo "Conectado correctamente"; 
   	
        $ssql = "select * from Ciudad where CiuCod>=1"; 
   	if($rs_access = odbc_exec ($conn_access, $ssql)){ 
      	 
echo "<br>La sentencia se ejecutó correctamente"; 
      	 
while ($fila = odbc_fetch_object($rs_access)){ 
         	 echo "<br>" . $fila->CiuNom; 
      	 } 
   	}else{ 
      	 echo "Error al ejecutar la sentencia SQL"; 
   	} 
} else{ 
   	echo "Error en la conexión con la base de datos"; 
} *///die( print_r( sqlsrv_errors(), true));
?>

@foreach($fila as $f)
	<p>{{$f->CiuNom}}</p>
@endforeach
@if(Auth::check())
	SESION
@else
	NO SESION
@endif