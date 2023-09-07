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
for ($i = 33; $i <= 543; $i++) {
    $output = '';

    if ($i % 2 == 0) {
        $output .= '<span class="bold">';
    }

    if ($i % 5 == 0 && $i % 9 == 0) {
        $output .= 'Web';
    } elseif ($i % 5 == 0) {
        $output .= 'Software';
    } elseif ($i % 9 == 0) {
        $output .= 'Developer';
    } else {
        $output .= $i;
    }

    if ($i % 2 == 0) {
        $output .= '</span>';
    }

    echo $output . '<br>';
}
?>
</body>
</html>
