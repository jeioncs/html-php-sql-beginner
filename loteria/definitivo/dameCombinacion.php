<style>
body {background-color: powderblue;}
p    {color: red;}

.bola {
 display: block;
 background: black;
 border-radius: 50%;
 height: 50px;
 width: 50px;
 margin-top: 5px;margin-left: 5px;
 background: radial-gradient(circle at 15px 15px, #5cabff, #000);
  font-size: 25px;
  color: #fff;
  line-height: 50px;
  text-align: center;
}

.bolac {
 display: block;
 background: black;
 border-radius: 50%;
 height: 100px;
 width: 100px;
 margin-top: 5px;margin-left: 5px;
 background: radial-gradient(circle at 30px 30px, red, #000);
  font-size: 50px;
  color: #fff;
  line-height: 100px;
  text-align: center;
}

.bolag {
 display: block;
 background: black;
 border-radius: 50%;
 height: 100px;
 width: 100px;
 margin-top: 5px;margin-left: 5px;
 background: radial-gradient(circle at 30px 30px, green, #000);
  font-size: 50px;
  color: #fff;
  line-height: 100px;
  text-align: center;
}

/* Saca bola */
.sb{ 
  display: inline-block;
}

</style>

<style>
ul#aclass > li {
  display: inline-block;
}
ul#aclass > li:first-child {
  display: inline-block;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $(function() {
        var elements = $("ul#aclass  li");
        elements.hide();
        elements.each(function (i) {
            $(this).delay(2000* i++).fadeIn(2000);
        });

    });
</script>

<h1>LOTERIA PRIMITIVA</h1>

<?php
$bolas = range(1, 49); // Metemos 49 bolas en el bombo
shuffle($bolas); // Giramos el bombo
$bolas_extraidas = array_slice($bolas,0,7); // Extraemos siete
$complementario=$bolas_extraidas[6];unset($bolas_extraidas[6]);
echo "<pre>";
print_r($bolas_extraidas);
echo "</pre>";
 
?> 

<div>
<div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[0];?></figure></div>
<div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[1];?></figure></div>
<div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[2];?></figure></div>
<div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[3];?></figure></div>
<div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[4];?></figure></div>
<div style="display: inline-block;"><figure class="bola"><?php echo $bolas_extraidas[5];?></figure></div>
<div style="display: inline-block;"><figure class="bola" style="background: radial-gradient(circle at 15px 15px, red, #000);"><?php echo $complementario;?></figure></div>
</div>

<h2>La combinación ganadora es...</h2>

<?php sort($bolas_extraidas);?>

<div>
<ul id="aclass">
<li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[0];?></figure></div></li>
<li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[1];?></figure></div></li>
<li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[2];?></figure></div></li>
<li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[3];?></figure></div></li>
<li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[4];?></figure></div></li>
<li class="animate"><div class="sb"><figure class="bolag"><?php echo $bolas_extraidas[5];?></figure></div></li>
<li class="animate"><div class="sb"><figure class="bolac"><?php echo $complementario;?></figure></div>
</ul>
</div>

