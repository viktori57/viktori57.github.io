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
      


     
      <table>
     
        
      
      <br>
      <table>
        <thead>
      <th colspan="8">Jeux Olympiques de Rio 2016</th>
      </thead>
      <tbody>
    <tr>
        <th></th>
        <th>Pays</th>
        <th><img src="or.png" alt=""></th>
        <th><img src="argent.png" alt=""></th>
        <th><img src="bronze.png" alt=""></th>
        <th><img src="total.png" alt=""></th>
        
    </tr>   
    <tr>
        <th>1</th>
        <td><img src="usa.png" alt=""><span>USA</span></td>
        <td>46</td>
        <td>37</td>
        <td>38</td>
        <td class="hover">121</td>
    </tr>
    <tr>
        <th>2</th>
        <td><img src="grande_bretagne.png" alt=""><span>Grande-Bretagne</span></td>
        <td>27</td>
        <td>23</td>
        <td>17</td>
        <td class="hover">67</td>
    </tr>
    <tr>
        <th>3</th>
        <td><img src="chine.png" alt=""><span>Chine</span></td>
        <td>26</td>
        <td>18</td>
        <td>26</td>
        <td class="hover">70</td>

    </tr>
    <tr>
        <th>4</th>
        <td><img src="russie.png" alt=""><span>Russie</span></td>
        <td>19</td>
        <td>18</td>
        <td>19</td>
        <td class="hover">56</td>

    </tr>
    <tr>
        <th>5</th>
        <td><img src="allemagne.png" alt=""><span>Allemagne</span></td>
        <td>17</td>
        <td>10</td>
        <td>15</td>
        <td class="hover">42</td>

    </tr>
    <tr>
        <th>6</th>
        <td><img src="japon.png" alt=""><span>Japon</span></td>
        <td>12</td>
        <td>8</td>
        <td>21</td>
        <td class="hover">41</td>

    </tr>
    <tr>
        <th>7</th>
        <td><img src="france.png" alt=""><span>France</span></td>
        <td>10</td>
        <td>18</td>
        <td>14</td>
        <td class="hover">42</td>

    </tr>
    </tbody>
    <tfoot>
    <th colspan="8">Ce classement est limité aux 7 premières nations</th>
    </tfoot>
    
        
        
    </table>

        
         







        </body>
    </head>