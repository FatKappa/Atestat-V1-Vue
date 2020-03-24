<template>
  <div class="pl-12 purple-gradient color-blue-600">
    <link rel="stylesheet" type="text/css" href="./test/susstyle.css">
  <blockquote>
  <br>
  <p><b>Evaluare</b></p>

  <form action="autoevaluare.php" method="post">

  <div class="mt-12 mb-5">Nume: <input class="bg-transparent border-black ml-6" type="text" name="Nume" placeholder="   Scrieti numele aici"> <br>
  Prenume: <input class="bg-transparent border-black" type="text" name="Prenume" placeholder="    Scrieti prenumele aici"> <br>
  Clasa: <input class="bg-transparent border-black ml-6" type="text" name="Clasa" placeholder="    Scrieti clasa aici">
</div>
  1 .Osificarea desmala este caracteristica urmatoarelor oase:<br>

  <input type="radio" name="q1" value="1"> A.Oaselor boltii craniene <br>

  <input type="radio" name="q1" value="2"> B.Oaselor scurte <br>

  <input type="radio" name="q1" value="3"> C.Oaselor membrelor superioare <br>

  <input type="radio" name="q1" value="4"> D.Oaselor membrelor inferioare <br><br>

  2 .Este un os scurt:<br>

  <input type="radio" name="q2" value="1"> A.Sternul <br>

  <input type="radio" name="q2" value="2"> B.Clavicula <br>

  <input type="radio" name="q2" value="3"> C.Rotula <br>

  <input type="radio" name="q2" value="4"> D.Carpienele <br><br>

  3 .Vertebra tip nu prezinta:<br>

  <input type="radio" name="q3" value="1"> A.Corp vertebral in partea anterioara <br>

  <input type="radio" name="q3" value="2"> B.Arc vertebral posterior <br>

  <input type="radio" name="q3" value="3"> C.Pendiculi care unesc corpul cu arcul vertebral <br>

  <input type="radio" name="q3" value="4"> D.Canal vertebral ce adaposteste maduva spinarii<br><br>

  4 .Scheletul gambei este alcatuit din:<br>

  <input type="radio" name="q4" value="1"> A.Tibie si fibula <br>

  <input type="radio" name="q4" value="2"> B.Tibie si femur <br>

  <input type="radio" name="q4" value="3"> C.Fibula si femur <br>

  <input type="radio" name="q4" value="4"> D.Tibie <br><br>

  5 .Suturile craniene sunt:<br>

  <input type="radio" name="q6" value="1"> A.Sindesmoze <br>

  <input type="radio" name="q6" value="2"> B.Sincondroze <br>

  <input type="radio" name="q6" value="3"> C.Artrodii <br>

  <input type="radio" name="q6" value="4"> D.Amfiartroze <br><br>
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
