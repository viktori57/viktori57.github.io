<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>time</title>
    <head>
        <body>
          <p id="minuteur">00:00:00</p>
          <form action="" method="post">

            <label for="heure">Heure(s) :</label>
            <input type="number" name="heure" id="heure" value=0 min=0 lenght=2>

            <label for="minute">Minute(s) :</label>
            <input type="number" name="minute" id="minute" value=0 min=0 max=25 lenght=2>

            <label for="seconde">Seconde(s):</label>
            <input type="number" name="seconde" id="seconde" value=0 min=0 max=24 lenght=2>

            <input type="submit" value="Régler">

            <button type="button" id="pause" onclick="PauseTimer()">Pause</button>
            <button type="button" id="play">Play</button>
            <button type="button" id="reset" onclick="ResetTimer()">Reset</button>
            
          </form>

        

      <?php
        $miliseconde =0;
        echo '<script>
        var heure = ' . (!empty($_POST["heure"]) ? $_POST["heure"] : '0') .'
        var minute = ' . (!empty($_POST["minute"]) ? $_POST["minute"] : '0') .'
        var seconde = ' . (!empty($_POST["seconde"]) ? $_POST["seconde"] : '0') .'
        function affichage() {
          document.getElementById("minuteur").innerHTML=
          `${(heure < 10 ? "0" : "") + heure}: 
          ${(minute < 10 ? "0" : "") + minute}:
          ${(seconde < 10 ? "0" : "") + seconde}`}
        function timer() {
          affichage()  
          
          if (seconde <= 0 && minute <= 0 && heure <= 0) return
          
          if (seconde == 0) {
            if (minute > 0) {
              seconde = 60 
              minute--
            } else {
              if (heure > 0) {
                heure--
                minute = 59
                seconde = 60
              }
            }
          
          }
          seconde--
   
          
        }
        var interval = setInterval(timer, 1000);

        function PauseTimer() {
          clearInterval(interval)
          interval = null
          document.getElementById("minuteur").style.color = "red"
        }
        document.getElementById("play").addEventListener("click", function() {
          if (interval == null) {
          interval = setInterval(timer, 1000)
          document.getElementById("minuteur").style.color = "black"
          }
          
            

        })
        function ResetTimer() {
          clearInterval(interval)
          heure = 0
          minute = 0
          seconde = 0
          affichage()
          document.getElementById("minuteur").textContent = "00:00:00"

        }

      </script> ';

        
      ?> 
      <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>classement JO 2016</title>

     
      <table>
      <thead>
        <th colspan="6">Jeux Olympiques de Rio 2016</th>
      </thead>
    <tr>
        <th colspan="6">Pays</th>
        <br>
        <td>USA</td>
        <td>46</td>
        <td>37</td>
        <td>38</td>
        <td>121</td>
    </tr>   
    <tr>
        <th><Grande-Bretagne></th>
        <td>27</td>
        <td>23</td>
        <td>17</td>
        <td>67</td>
    </tr>
        
        
      

        
         







        </body>
    </head>