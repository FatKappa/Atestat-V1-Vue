<template>
  <div class="pl-12 purple-gradient color-blue-600">
    <link rel="stylesheet" type="text/css" href="./test/susstyle.css">
  <blockquote>
  <br>
  <p><b>Evaluare</b></p>

  <form action="./test/autoevaluare.php" method="post">

  <div class="mt-12 mb-5">Nume: <input class="bg-transparent border-black ml-6" type="text" name="Nume" placeholder="   Scrieti numele aici"> <br>
  Prenume: <input class="bg-transparent border-black" type="text" name="Prenume" placeholder="    Scrieti prenumele aici"> <br>
  Clasa: <input class="bg-transparent border-black ml-6" type="text" name="Clasa" placeholder="    Scrieti clasa aici">
</div>
  1. In ce an s-a fondat compania AMD?<br>

  <input type="radio" name="q1" value="1"> A. 1969 <br>

  <input type="radio" name="q1" value="2"> B. 1930 <br>

  <input type="radio" name="q1" value="3"> C. 1945 <br>

  <input type="radio" name="q1" value="4"> D. 1950 <br><br>

  2. Care este primul procesor facut original de AMD?<br>

  <input type="radio" name="q2" value="1"> A. Ryzen 7 <br>

  <input type="radio" name="q2" value="2"> B. Fx 4100<br>

  <input type="radio" name="q2" value="3"> C. Athlon II X2 270<br>

  <input type="radio" name="q2" value="4"> D. K5 <br><br>

  3. Cand a aparut primul procesor Opteron?<br>

  <input type="radio" name="q3" value="1"> A. 21 ianuarie 2005 <br>

  <input type="radio" name="q3" value="2"> B. 21 aprilie 2005 <br>

  <input type="radio" name="q3" value="3"> C. 21 iulie 2005 <br>

  <input type="radio" name="q3" value="4"> D. 21 martie 2005<br><br>

  4. Ce TDP are procesorul Athlon 64 x2 7750?<br>

  <input type="radio" name="q4" value="1"> A. 95W <br>

  <input type="radio" name="q4" value="2"> B. 15W <br>

  <input type="radio" name="q4" value="3"> C. 60W <br>

  <input type="radio" name="q4" value="4"> D. 120W <br><br>

  5. Care sunt numele modelelor ce vor fi lansate in anul 2009?<br>

  <input type="radio" name="q6" value="1"> A. Bulldozer si Bobcat <br>

  <input type="radio" name="q6" value="2"> B. Bulldozer si Ryzen <br>

  <input type="radio" name="q6" value="3"> C. Ryzen si Bobcat <br>

  <input type="radio" name="q6" value="4"> D. Ryzen si FX <br><br>
<div class="border-solid border-black border-2 w-2/12 text-center">
  <input class="bg-transparent border-black mr-6 text-xl" type="submit" name="Trimite" value="Trimite raspunsul">
</div>
  </form>
  <br><br>
  </blockquote>
</div>
</template>

<script>
    export default {
        name: "Testare"
    }
</script>
