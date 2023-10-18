<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- Faire un formulaire en forme de calculatrice ou on poura calculer -->
    <div class="calculator">
        <input type="text" id="display" disabled>
        <br>
        <button onclick="AppendToDisplay('7')">7</button>
        <button onclick="AppendToDisplay('8')">8</button>
        <button onclick="AppendToDisplay('9')">9</button>
        <button onclick="AppendToDisplay('*')">*</button>
        <br>
        <button onclick="AppendToDisplay('4')">4</button>
        <button onclick="AppendToDisplay('5')">5</button>
        <button onclick="AppendToDisplay('6')">6</button>
        <button onclick="AppendToDisplay('-')">-</button>
        <br>
        <button onclick="AppendToDisplay('1')">1</button>
        <button onclick="AppendToDisplay('2')">2</button>
        <button onclick="AppendToDisplay('3')">3</button>
        <button onclick="AppendToDisplay('+')">+</button>
        <br>
        
        <button onclick="AppendToDisplay('0')">0</button>
        <button onclick="CalculteResult()">=</button>
        <button onclick="AppendToDisplay('/')">/</button>
        <button onclick="ClearDisplay()">C</button>


    </div>
    <script>
        function AppendToDisplay(value) {
            document.getElementById("display").value += value;
        }
        function ClearDisplay() {
            document.getElementById("display").value += "";
        }
        function CalculateResult() {
            try {
                document.getElementById("display").value =
                eval(document.§getElementById("display").value);
            } catch (e) {
                document.getElementById("display").value = "Erreur";
            }
        }
    </script>
        
    </form>
</body>
</html>