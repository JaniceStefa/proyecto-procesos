<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../vista/ficha_pedido_estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1", charset="UTF-8">
	<title>Ficha Pedido </title >
</head>
<body>

<div class="formulario">  
 <form action = "../vista/mostrar.php" method = "post" name = "frm">

    <div class="form_heading">Ficha de Pedido</div> 

    <div class="columna"> 
        <div class="item" > <!-- col-25 -->
            <label for="prodTipo"> Productos: </label>
        </div>
        <div class="opciones"><!--datos--> <!-- col-75 -->
            <select name="opcion_producto" style="width: 200px" required>
                <option value="">Elige una opción </option>
                <option value="1">Buzos</option> 
                <option value="2">Casacas</option> 
                <option value="3">Polos</option> 
                <option value="4">Shorts</option> 
                <optgroup label="Conjuntos Deportivos ">
                    <option value="5">Buzos - Casacas</option>
                    <option value="6">Polos - Shorts</option>
                    <option value="7">Todo </option>
                </optgroup>
            </select>
        </div>    
    </div>
    <div class="columna">
        <div class="item" > 
            <label for="selTalla"> Tallas:</label> 
        </div>
        <div class="datos">
            <label class="container">S
            <input type="checkbox" name="tallas" value="S" checked></label>
            <label class="container">M
            <input type="checkbox" name="tallas" value="M"></label>
            <label class="container">L
            <input type="checkbox" name="tallas" value="L"></label>
            <label class="container">XL
            <input type="checkbox" name="tallas" value="XL"></label>
        </div>
    </div>
    <div class="columna">
        <div class="item" >
            <label for="matTipo"> Materiales:</label>
        </div>
        <div class="opciones"><!--datos-->
            <select name="opcion_material" required>
                <option value=""> Elige una opción </option>
                <option value="1">Algodón </option> 
                <option value="2">Sintético</option> 
                <option value="3">Dryfit</option>
                <option value="4">Suplex</option> 
                <option value="5">Polyster</option> 
            </select>
        </div>
    </div>

    <div class="columna">
		<div class="item" >
            <label for="cant"> Cantidad: </label> 
        </div> 
        <div class="datos">
            <input type="number" name="cantidad" size=3 maxlength=3 min="1" max="500" required/>
        </div>
	</div>

    <div class="columna">
        <div class="item" >
            <label for="fecha"> Fecha de entrega (solicitada): </label>
        </div> 
        <div class="datos">
            <input type="date" name="fechaentrega" />
        </div>
    </div>

    <div class="terms">
        <br />
        <a href = "../vista/terminos_condiciones.html" >Leer los terminos y condiciones </a><br /><br />
        <input type="checkbox" name="aceptoterms" required /> Acepto los terminos y condiciones <br /><br />    
    </div>

    <div class="contBotones">
        <button class="boton" type="submit" value="Aceptar">Aceptar</button>
        <button class="boton" type="reset" value="Cancelar">Cancelar</button>
    </div>
    </form>
</div>
</body>
</html>


