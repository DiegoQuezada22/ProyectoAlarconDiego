<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>

imput[type="button"]]{
background-color: lightblue;
color: lightblue;
size: 80px;
text-align: center;
font-size: 18px;
margin: 30px auto;
padding: 50px;
}

body {
  font-family: cursive;
  margin: 0;
  padding: 0;
  background-color: #F7F8FC;
}

.imagen-saltando {
align: center;
animation: saltar 2s infinite;
width: 200px;
height: 200px;
}

@keyframes saltar {
0% {
 transform: translateY(0);
}
50% {
 transform: translateY(-20px);
}
100% {
  transform: translateY(0);
}
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 20px auto;
  background-color: #BEC8DD;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.navegacion {
  max-width: 1200px;
  margin: 0 auto;
}

.menu {
  list-style: none;
  padding: 0;
  display: flex;
  justify-content: space-between;
}

.menu li {
  position: relative;
  margin: 0 15px;
}

.menu li a {
  color: black;
  text-decoration: none;
  padding: 10px 15px;
  border-radius: 5px;
}

.submenu {
  display: none;
  position: absolute;
  background-color: #91D4C5;
  list-style: ;
  padding: 10px 0;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  z-index: 1;
}

.menu li:hover .submenu {
  display: block;
}

.inicio-container {
  background-color: black;
  padding: 5px;
  border-radius: 8px;
  display: inline-block;
}

.container {
  font-family: sans-serif;
  font-size: 15px;
  padding: 20px;
  border-radius: 20px;
  display: inline-block;
  margin-left: 145px;
  width: 628px;
}

.imagenes-producto {
  display: flex;
  justify-content: space-around;
  margin-top: 80px;
  margin-left: 30px;
}

.imagenes-producto img {
  width: 30px;
  height: 30px;
  border-radius: 10px;
  transition: transform 0.3s ease;
} 

.imagenes-producto img:hover {
  transform: scale(2.9);
}

</style>
</head>
<body>
<ul class="imagen-saltando">

  <div class="container">
  <div class="header">
  <h1>La Animación en México y sus Oportunidades</h1>
  </div>
  <div class="navegacion">
    <ul class="menu">
      <li><a href="/DiegoAlarcon/inicio_a.php">Inicio</a></li>
      <li><a href="/DiegoAlarcon/acercade.php">¿De qué trata?...</a></li>
      <li><a href="/DiegoAlarcon/areas.php">Estudios de animación en México</a></li>
      <li><a href="/DiegoAlarcon/bibliografia.php">Bibliografía</a>
      <li><a href="/DiegoAlarcon/anim.php">¿Como se hacen?</a>
      <li><a href="#">Ejemplos de Animación</a>
        <ul class="submenu">
          <li><a href="">2D</a>
            <div class="imagenes-producto">
              <img src="/DiegoAlarcon/imagenes/2d.jpg" alt="#">
            </div>
          </li>
          <li><a href="#">3D</a>
            <div class="imagenes-producto">
              <img src="/DiegoAlarcon/imagenes/3d.png" alt="#">
            </div>
          </li>
          <li><a href="#">Tradicional</a>
            <div class="imagenes-producto">
              <img src="/DiegoAlarcon/imagenes/trad.jpg" alt="#">
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="contenido">
 <a href="/DiegoAlarcon/Formulario_Contactos.php">
 <button type="button">Contacto...</button>
</div>
</div>
    </a>
</body>
</body>
</html>