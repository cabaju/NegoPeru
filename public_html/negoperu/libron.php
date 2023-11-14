<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Negociaciones Peruanita SAC</title>
<link href="css/negoperu.css"  rel="stylesheet" type="text/css" />
<link href="css/helper.css"  rel="stylesheet" type="text/css" />
<link href="css/dropdown.vertical.css" rel="stylesheet" type="text/css" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://negoperu.com/negoperu/imagenes/nego.ico" />
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- Su Correo es Incorrecto:'+nm+'.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- Ingrese un número de:'+nm+'.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '-Ingrese su: '+nm+'.\n'; }
  } if (errors) alert(' Todo los campos son obligatorios:\n'+errors);
  document.MM_returnValue = (errors == '');
}

//-->
</script>
<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
</head>

<body>
<header>
		<div class="contenmenunego">
            <nav>
                <div class="logogroup">
                    <img src="imagenes/logogroup.png" />
                </div>
                <ul>
                    <li><a href="../index.html">Inicio</a></li>
                    <li><a href="index.php"  >Negoperu</a></li>
                    <li><a href="menestras.html" >Productos</a></li>
                    <li><a href="servicios.html" >Servicios</a></li>
                    <li><a href="certificaciones.html" >Certificaciones</a></li>
                    <li><a href="clientes.html" >Clientes</a></li>
                    <li><a href="contacto.html" >Contacto</a></li>
                    <li><a href="libron.php" class="elegido" >L. Reclamo</a></li>
                  
                </ul>
            </nav>
        </div>
</header>
<div id="contenedorlogoytitulo">
	  <div class="logoytitulo">
      		<div class="logo"> 
      		<img src="imagenes/logonego.jpg" />
            </div>
            <div class="titulo">
            	<h1>LIBRO DE RECLAMACION</h1>                
            </div>
      </div>
</div>
<div id="contenedorcontacto">
		<div class="libro">
        		
          			<div class="reclamo">
                    <p>Si tiene algún reclamo o queja, por favor regístrelo aquí, llene el formulario respectivo.</p>
                    		                 		<form action="enviandon.php" method="post" name="form" onsubmit="MM_validateForm('Nombre','','R','Telefono','','R','Direccion','','R','Ciudad','','R','Correo','','RisEmail','Producto','','R','Lugardecompra','','R','Descripciondelbien','','R','Descripciondelreclamo','','R');return document.MM_returnValue">
                        <h2>1. Datos del cliente</h2>
                        <fieldset class="fondo">
                        <input name="Nombre" type="text" size="42" maxlength="120" placeholder=" Nombre Completo"  />
                        &nbsp;&nbsp;
						<input name="Telefono" type="text" size="14" maxlength="15" placeholder=" Teléfono" /><br />
                        
                        <select name="tipoD" id="tipo"  >
                        <option value=" " >Tipo de documento</option>
                        <option value="DNI"  >DNI</option>
                        <option value="Pasaporte"  >Pasaporte</option>
                        <option value="Carnet de extranjeria"  >Carnet de extranjería</option>
                        </select>
                        <input name="Numerom" type="text" size="30" maxlength="20" placeholder=" Número de documento" />
                        <input name="Direccion" type="text" size="64" maxlength="200" placeholder=" Dirección" /><br />
                        <input name="Ciudad" type="text" size="24" maxlength="90" placeholder=" Ciudad" />&nbsp;&nbsp;
                        <input name="Correo" type="text" size="38" maxlength="130" placeholder=" Correo electronico" /><br />
                        </fieldset>
                        
                        <h2>2. Información del reclamo</h2>
                        <fieldset class="fondo">
                       <input name="Producto" type="text" size="64" maxlength="150" placeholder=" Nombre del producto"  />
                       <input name="Lugardecompra" type="text" size="64" maxlength="150" placeholder=" Lugar de compra"  />
                       <input name="Lote" type="text" size="14" maxlength="60" placeholder=" Lote"  />
                       <input name="Fp" type="text" size="19" maxlength="60" placeholder=" Fp"  />
                       <input name="Fv" type="text" size="19" maxlength="60" placeholder=" Fv"  />                    
 
                        </fieldset>
                        
                         <h2>3. Motivo y detalle del reclamo</h2>
                         <fieldset class="fondo">
                         <input type="radio" name="treclamo" value="Reclamo" /> Reclamo:<span class="peque"> Disconformidad relacionada a los productos o servicios.</span><br />
                         <input type="radio" name="treclamo" value="Queja" /> Queja:<span class="peque"> Malestar o descontento respecto a la atención al público.</span><br />
                         <textarea name="Descripciondelreclamo" cols="60" rows="6" placeholder=" Descripción del reclamo o queja"></textarea>
                         </fieldset>   
                        	 <input id="enviarf" type="submit" value="Enviar" />	
                        </form>
                        
                        <p>El periodo de atención a su reclamo / queja será de 30 días próximos a la fecha.
*Periodo de atención establecido por Indecopi.</p>
                    
                    </div>
	   
		</div>
</div>          

<div id="cuerpopie">
		<div class="pie">
    <p>INTELIGENCIA DE NEGOCIOS<br  />UNIVERSIDAD AUTÓNOMA DEL PERÚ <br />Villa el Salvador - Perú <br />2023</p>
                                  
                        <div class='social-icons' id='social-iconos'>
                                <ul>
                                 <li class='social_icon'><a href='https://es-la.facebook.com/Negoperu-691796247548376/' target="_blank" ><img border='0' src="imagenes/nfa.png"/></a></li>
                                 <li class='social_icon'><a href='https://twitter.com/NegoPeruSAC' target="_blank" ><img border='0' src="imagenes/new.png"/></a></li>
                                 <li class='social_icon'><a href='https://www.instagram.com/negoperu/' target="_blank" ><img border='0' src="imagenes/ninstg.png"/></a></li>
                                </ul>
                        </div>                 
           
            
        </div>
</div>
</body>
</html>
