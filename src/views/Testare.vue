<template>
  <div class="pl-12 purple-gradient color-blue-600">
  <blockquote>
  <br>
  <p><b>Evaluare</b></p>

  <form action="autoevaluare.php" method="post">

  NUME: <input type="text" name="Nume"> <br>
  Prenume: <input type="text" name="Prenume"> <br>
  Clasa: <input type="text" name="Clasa"> <br><br><br>
  1 .Osificarea desmala este caracteristica urmatoarelor oase:<br>

  <input type="radio" name="q1" value="1"> A.Oaselor boltii craniene <br>

  <input type="radio" name="q1" value="2"> B.Oaselor scurte <br>

  <input type="radio" name="q1" value="3"> C.Oaselor membrelor superioare <br>

  <input type="radio" name="q1" value="4"> D.Oaselor membrelor inferioare <br>

  <input type="radio" name="q1" value="5"> E.Oaselor bazei craniului <br><br>

  2 .Este un os scurt:<br>

  <input type="radio" name="q2" value="1"> A.Sternul <br>

  <input type="radio" name="q2" value="2"> B.Clavicula <br>

  <input type="radio" name="q2" value="3"> C.Rotula <br>

  <input type="radio" name="q2" value="4"> D.Carpienele <br>

  <input type="radio" name="q2" value="5"> E.Coaste <br><br>

  3 .Vertebra tip nu prezinta:<br>

  <input type="radio" name="q3" value="1"> A.Corp vertebral in partea anterioara <br>

  <input type="radio" name="q3" value="2"> B.Arc vertebral posterior <br>

  <input type="radio" name="q3" value="3"> C.Pendiculi care unesc corpul cu arcul vertebral <br>

  <input type="radio" name="q3" value="4"> D.Canal vertebral ce adaposteste maduva spinarii<br>

  <input type="radio" name="q3" value="5"> E.Canal vertebral format prin suprapunerea pediculilor <br><br>

  4 .Scheletul gambei este alcatuit din:<br>

  <input type="radio" name="q4" value="1"> A.Tibie si fibula <br>

  <input type="radio" name="q4" value="2"> B.Tibie si femur <br>

  <input type="radio" name="q4" value="3"> C.Fibula si femur <br>

  <input type="radio" name="q4" value="4"> D.Tibie <br>

  <input type="radio" name="q4" value="5"> E.Tibie,fibula si rotula <br><br>


  5 .Suturile craniene sunt:<br>

  <input type="radio" name="q6" value="1"> A.Sindesmoze <br>

  <input type="radio" name="q6" value="2"> B.Sincondroze <br>

  <input type="radio" name="q6" value="3"> C.Artrodii <br>

  <input type="radio" name="q6" value="4"> D.Amfiartroze <br>

  <input type="radio" name="q6" value="5"> E.Ainartroze cu tesut cartilaginos intre suprafetele articulare <br><br>

  6 .Nu reprezinta un rol al osului:<br>

  <input type="radio" name="q7" value="1"> A.Protectia organelor vitale <br>

  <input type="radio" name="q7" value="2"> B.Antitoxic <br>

  <input type="radio" name="q7" value="3"> C.Sediul principal al organelor hematopoietice <br>

  <input type="radio" name="q7" value="4"> D.Parghii ale aparatului locomotor<br>

  <input type="radio" name="q7" value="5"> E.Rol in metabolismul Hg,Pb,F <br><br>

  7 .Matricea organica a osului este alcatuita din:<br>

  <input type="radio" name="q8" value="1"> A.20% apa <br>

  <input type="radio" name="q8" value="2"> B.80% reziduu uscat <br>

  <input type="radio" name="q8" value="3"> C.20% fosfat de Ca <br>

  <input type="radio" name="q8" value="4"> D.20% hidroxiapatita <br>

  <input type="radio" name="q8" value="5"> E.90-95% fibre de colagen <br><br>

  8 .Cresterea in grosime a osului se realizeaza:<br>

  <input type="radio" name="q9" value="1"> A.Prin osificarea encondrala <br>

  <input type="radio" name="q9" value="2"> B.Prin osificare la nivelul cartilajului diafizo-hipofizar <br>

  <input type="radio" name="q9" value="3"> C.Prin osificare encondrala la nivelul periostului <br>

  <input type="radio" name="q9" value="4"> D.Pe seama periostului prin osificare desmala <br>

  <input type="radio" name="q9" value="5"> E.Prin dezvoltarea zonei externe,osteogene,a periostului <br><br>


  9 .Este adevarat despre coaste, cu exceptia:<br>

  <input type="radio" name="q10" value="1"> A.Sunt format dintr.un arc osos si un cartilaj <br>

  <input type="radio" name="q10" value="2"> B.Sunt in numar de 7 perechi <br>

  <input type="radio" name="q10" value="3"> C.Ultimele doua coaste nu au cartilaj <br>

  <input type="radio" name="q10" value="4"> D.Ultimele doua coaste se numesc coaste flotante <br>

  <input type="radio" name="q10" value="5"> E.Se articuleaza posterior cu vertebrele toracale <br><br>


  <input type="submit" name="Trimite" value="Trimite">

  <input type="reset" name="Reseteaza" value="Reseteaza">

  </form>
  </blockquote>
</div>
</template>
<style>
body {
  color:white;
    background-repeat: no-repeat;
    background-position: left top;
	  background-attachment: fixed;
	}
h1 { color: #ffffff;
	font-family: Monotype Corsiva;
	font-style: italic;
	font-size: 20px;
	}
h2 {
color: #1E90FF;
font-family: Monotype Corsiva;
font-size: 40px;
font-style: italic;
font-weight: 1000;
text-align: center;
}
p {
font-family: Monotype Corsiva;
font-size: 35px;
font-style: italic;
font-weight: 1000;
text-align: center;
}
h3 {
font-family: Monotype Corsiva;
font-size: 35px;
font-style: italic;
font-weight: 1000;
text-align: center;
color:#1E90FF;
}
h4 {
color: #1E90FF;
font-family: Monotype Corsiva;
font-size: 130px;
font-style: bold;
font-style: italic;
font-weight: 1000;
text-align: center;
}
h5 {
font-family: Times New Roman;
font-size: 16px;
color: 	 black;
}
h6 { color: #1E90FF;
font-family: Times New Roman;
font-size: 14px;
font-style: bold;
text-align: center;}
</style>

<script>
    export default {
        name: "Testare"
    }
</script>
