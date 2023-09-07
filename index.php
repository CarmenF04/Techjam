<!DOCTYPE html>
<html>

<head>
    <style>
        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    // Loop van 33 tot en met 543
    for ($i = 33; $i <= 543; $i++) {
        $output = '';

        // Controleer of het getal even is, voeg een openende span-tag met de klasse "bold" toe
        if ($i % 2 == 0) {
            $output .= '<span class="bold">'; // Variabele om de uiteindelijke output op te slaan
        }
        // Controleer of het getal deelbaar is door 5 en 9
        if ($i % 5 == 0 && $i % 9 == 0) {
            $output .= 'Web';
            // Controleer of het getal deelbaar is door 5
        } elseif ($i % 5 == 0) {
            $output .= 'Software';
            // Controleer of het getal deelbaar is door 9
        } elseif ($i % 9 == 0) {
            $output .= 'Developer';
            // Als geen van de bovenstaande voorwaarden waar is, voeg het getal toe aan de output
        } else {
            $output .= $i;
        }
        // Controleer opnieuw of het getal even is en voeg een sluitende span-tag toe als dat het geval is
    
        if ($i % 2 == 0) {
            $output .= '</span>';
        }
        // Geef de uiteindelijke output weer met een nieuwe regel :)
    
        echo $output . '<br>';
    }
    ?>
</body>

</html>