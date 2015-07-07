<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado de Peliculas</title>
    </head>
    <body background = "cine.jpg">
    <from method="post" accion="lista.php">
        <div style="border: 1px solid blue; text-align: center; font-size: 40px; background: white">
        Lista de Peliculas 
        </div>
        
        <div style="border: 1px solid blue; background: white">
        <select name="lista">
        <option>Los vengadores 2 La era de Ultron</option>
        <option>Los Juegos Del Hambre: Sinsajo Parte II</option>
        <option>Jurassic World</option>
        <option>Minions</option>
        <option>Fast and Furious 7</option>
        </select>       
        <input type="submit" value="seleccion">
        </div>    
    </from>
    </body>
</html>
