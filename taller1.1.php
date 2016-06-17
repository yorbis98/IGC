<!DOCTYPE html>
<html>
<head>
	<title>Examen</title>
</head>
<body style=" background-image: url('http://www.tiffanylaryn.com/wp-content/uploads/2015/03/fitness.jpg')">
<div  style="padding:1% ;width:500px; color:#ffffff; text-shadow: 2px 2px #000000; margin-left: 35%;margin-top:20% ; border:3px solid; border-radius:40px;box-shadow:10px 10px 10px #666; text-align:center; font-size:25px;font-family: verdana;font-family:;background-image: url('http://www.musculaciontotal.com/wp-content/uploads/2015/05/fitness-vs-culturismo.jpg'); );">
<?php 
$Hom=0;
$Edad=$_REQUEST['edad'];
$Altura=$_REQUEST['altura'];
$Cuello=$_REQUEST['cuello'];
$Cintura=$_REQUEST['cintura'];
$Cadera=$_REQUEST['cadera'];
$porcentaje="";

   if ($_REQUEST['radio1']=="masculino") {
   	$Hom=495/(1.0324-0.19077 *log10($Cintura-$Cuello)+ 0.15456 *(log10($Altura)))-450;
   	$Hom=round($Hom,2);
  


   if (($Edad>=19) && ($Edad<=24)) {

   	      
   	      if (($Hom>0) && ($Hom<6)) {
   		  $porcentaje="esencial";
   	   }else
   	      if(($Hom>=7) && ($Hom<9)){
   		  $porcentaje="atleta";
   	    }else
   	      if (($Hom>=10) && ($Hom<15)) {
   		  $porcentaje="excelente";
   	    }else
   	      if (($Hom>=16) && ($Hom<19)) {
   	      $porcentaje="bueno";
   	    }else
   	      if (($Hom>=20) && ($Hom<23)) {
   	      $porcentaje="estandar";
   	    }else
   	    if (($Hom==23)) {
   	    	$porcentaje="sobrepeso";
   	    }else
   	      if ($Hom>23) {
   	       $porcentaje="obesidad";
   	    }
   }


    if (($Edad>=25) && ($Edad<=29)) {

            
            if (($Hom>0) && ($Hom<2)) {
           $porcentaje="esencial";
         }else
            if(($Hom>=3) && ($Hom<6)){
           $porcentaje="atleta";
          }else
            if (($Hom>=7) && ($Hom<9)) {
           $porcentaje="excelente";
          }else
            if (($Hom>=10) && ($Hom<19)) {
            $porcentaje="bueno";
          }else
            if (($Hom>=20) && ($Hom<24)) {
            $porcentaje="estandar";
          }else
          if (($Hom==24)) {
            $porcentaje="sobrepeso";
          }else
            if ($Hom>24) {
             $porcentaje="obesidad";
          }
   }


    if (($Edad>=30) && ($Edad<=34)) {

            
            if (($Hom>0) && ($Hom<2)) {
           $porcentaje="esencial";
         }else
            if(($Hom>=3) && ($Hom<6)){
           $porcentaje="atleta";
          }else
            if (($Hom>=7) && ($Hom<11)) {
           $porcentaje="excelente";
          }else
            if (($Hom>=12) && ($Hom<17)) {
            $porcentaje="bueno";
          }else
            if (($Hom>=19) && ($Hom<19)) {
            $porcentaje="estandar";
          }else
          if (($Hom==25)) {
            $porcentaje="sobrepeso";
          }else
            if ($Hom>25) {
             $porcentaje="obesidad";
          }
   }


   if (($Edad>=35) && ($Edad<=39)) {

            
            if (($Hom>0) && ($Hom<6)) {
           $porcentaje="esencial";
         }else
            if(($Hom>=7) && ($Hom<9)){
           $porcentaje="atleta";
          }else
            if (($Hom>=10) && ($Hom<12)) {
           $porcentaje="excelente";
          }else
            if (($Hom>=13) && ($Hom<18)) {
            $porcentaje="bueno";
          }else
            if (($Hom==19)) {
            $porcentaje="estandar";
          }else
          if (($Hom>=20) && ($Hom<=26)) {
            $porcentaje="sobrepeso";
          }else
            if ($Hom>26) {
             $porcentaje="obesidad";
          }
   }


   if (($Edad>=40) && ($Edad<=44)) {

            
            if (($Hom>0) && ($Hom<6)) {
           $porcentaje="esencial";
         }else
            if(($Hom>=7) && ($Hom<13)){
           $porcentaje="atleta";
          }else
            if (($Hom>=14) && ($Hom<19)) {
           $porcentaje="excelente";
          }else
            if (($Hom==19)) {
            $porcentaje="bueno";
          }else
            if (($Hom>19) && ($Hom<27)) {
            $porcentaje="estandar";
          }else
          if (($Hom==27)) {
            $porcentaje="sobrepeso";
          }else
            if ($Hom>27) {
             $porcentaje="obesidad";
          }
   }


   if (($Edad>=45) && ($Edad<=49)) {

            
            if (($Hom>0) && ($Hom<6)) {
           $porcentaje="esencial";
         }else
            if(($Hom>=7) && ($Hom<15)){
           $porcentaje="atleta";
          }else
            if (($Hom>=16) && ($Hom<21)) {
           $porcentaje="excelente";
          }else
            if (($Hom>=22) && ($Hom<25)) {
            $porcentaje="bueno";
          }else
            if (($Hom>=26) && ($Hom<28)) {
            $porcentaje="estandar";
          }else
          if (($Hom==28)) {
            $porcentaje="sobrepeso";
          }else
            if ($Hom>28) {
             $porcentaje="obesidad";
          }
   }

   if (($Edad>=50) && ($Edad<=54)) {

            
            if (($Hom>0) && ($Hom<6)) {
           $porcentaje="esencial";
         }else
            if(($Hom>=7) && ($Hom<17)){
           $porcentaje="atleta";
          }else
            if (($Hom>=18) && ($Hom<23)) {
           $porcentaje="excelente";
          }else
            if (($Hom>=24) && ($Hom<26)) {
            $porcentaje="bueno";
          }else
            if (($Hom>=27) && ($Hom<29)) {
            $porcentaje="estandar";
          }else
          if (($Hom==29)) {
            $porcentaje="sobrepeso";
          }else
            if ($Hom>29) {
             $porcentaje="obesidad";
          }
   }


    if (($Edad>=55) && ($Edad<=59)) {

            
            if (($Hom>0) && ($Hom<6)) {
           $porcentaje="esencial";
         }else
            if(($Hom>=7) && ($Hom<19)){
           $porcentaje="atleta";
          }else
            if (($Hom>=20) && ($Hom<24)) {
           $porcentaje="excelente";
          }else
            if (($Hom>=25) && ($Hom<28)) {
            $porcentaje="bueno";
          }else
            if (($Hom>=29) && ($Hom<30)) {
            $porcentaje="estandar";
          }else
          if (($Hom==30)) {
            $porcentaje="sobrepeso";
          }else
            if ($Hom>30) {
             $porcentaje="obesidad";
          }
   }



    if (($Edad>=60)) {

            
            if (($Hom>0) && ($Hom<6)) {
           $porcentaje="esencial";
         }else
            if(($Hom>=7) && ($Hom<20)){
           $porcentaje="atleta";
          }else
            if (($Hom>=21) && ($Hom<25)) {
           $porcentaje="excelente";
          }else
            if (($Hom>=26) && ($Hom<29)) {
            $porcentaje="bueno";
          }else
            if (($Hom>=30) && ($Hom<31)) {
            $porcentaje="estandar";
          }else
          if (($Hom==31)) {
            $porcentaje="sobrepeso";
          }else
            if ($Hom>31) {
             $porcentaje="obesidad";
          }
   }


   echo $_REQUEST['nombre']." su indice de grasa corporal es del ".$Hom.'%'." el cual esta situado en el rango ".$porcentaje." para personas de su sexo ".$_REQUEST['radio1'];
}

   if ($_REQUEST['radio1']=="femenino") {
    $aux=1.29579-0.35004*log10($Cintura+$Cadera-$Cuello)+0.221*log10($Altura);
   	$Muj=(495/$aux)-450;
      $Muj=round($Muj,2);

     
     if (($Edad>=19) && ($Edad<=24)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<15)){
           $porcentaje="atleta";
          }else
            if (($Muj>=16) && ($Muj<20)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=21) && ($Muj<25)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=26) && ($Muj<30)) {
            $porcentaje="estandar";
          }else
          if (($Muj==30)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>30) {
             $porcentaje="obesidad";
          }
          
   }

   
    if (($Edad>=25) && ($Edad<=29)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<16)){
           $porcentaje="atleta";
          }else
            if (($Muj>=17) && ($Muj<21)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=22) && ($Muj<26)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=27) && ($Muj<31)) {
            $porcentaje="estandar";
          }else
          if (($Muj==31)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>31) {
             $porcentaje="obesidad";
          }
          
   }


    if (($Edad>=30) && ($Edad<=34)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<17)){
           $porcentaje="atleta";
          }else
            if (($Muj>=18) && ($Muj<22)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=23) && ($Muj<27)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=28) && ($Muj<32)) {
            $porcentaje="estandar";
          }else
          if (($Muj==32)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>32) {
             $porcentaje="obesidad";
          }
          
   }


    if (($Edad>=35) && ($Edad<=39)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<19)){
           $porcentaje="atleta";
          }else
            if (($Muj>=20) && ($Muj<23)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=24) && ($Muj<28)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=29) && ($Muj<33)) {
            $porcentaje="estandar";
          }else
          if (($Muj==33)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>33) {
             $porcentaje="obesidad";
          }
          
   }


    if (($Edad>=40) && ($Edad<=44)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<21)){
           $porcentaje="atleta";
          }else
            if (($Muj>=22) && ($Muj<24)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=25) && ($Muj<29)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=30) && ($Muj<34)) {
            $porcentaje="estandar";
          }else
          if (($Muj==34)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>34) {
             $porcentaje="obesidad";
          }
          
   }


    if (($Edad>=45) && ($Edad<=49)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<23)){
           $porcentaje="atleta";
          }else
            if (($Muj>=24) && ($Muj<26)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=27) && ($Muj<31)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=32) && ($Muj<36)) {
            $porcentaje="estandar";
          }else
          if (($Muj==36)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>36) {
             $porcentaje="obesidad";
          }
          
   }



    if (($Edad>=50) && ($Edad<=54)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<25)){
           $porcentaje="atleta";
          }else
            if (($Muj>=26) && ($Muj<28)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=29) && ($Muj<33)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=34) && ($Muj<37)) {
            $porcentaje="estandar";
          }else
          if (($Muj==37)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>37) {
             $porcentaje="obesidad";
          }
          
   }


    if (($Edad>=55) && ($Edad<=59)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<26)){
           $porcentaje="atleta";
          }else
            if (($Muj>=27) && ($Muj<29)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=30) && ($Muj<34)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=35) && ($Muj<38)) {
            $porcentaje="estandar";
          }else
          if (($Muj==38)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>38) {
             $porcentaje="obesidad";
          }
          
   }


    if (($Edad>=60)) {

            
            if (($Muj>0) && ($Muj<12)) {
           $porcentaje="esencial";
         }else
            if(($Muj>=13) && ($Muj<27)){
           $porcentaje="atleta";
          }else
            if (($Muj>=28) && ($Muj<30)) {
           $porcentaje="excelente";
          }else
            if (($Muj>=31) && ($Muj<35)) {
            $porcentaje="bueno";
          }else
            if (($Muj>=36) && ($Muj<39)) {
            $porcentaje="estandar";
          }else
          if (($Muj==39)) {
            $porcentaje="sobrepeso";
          }else
            if ($Muj>39) {
             $porcentaje="obesidad";
          }
          
   }


   echo $_REQUEST['nombre']." su indice de grasa corporal es del ".$Muj."%"." el cual esta situado en el rango de ". $porcentaje ." para personas de su sexo ".$_REQUEST['radio1'];
  }

?>
</div>
</body>
</html>