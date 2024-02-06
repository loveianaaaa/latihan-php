<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if Statement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h2>if Statement</h2>
        <?php
            $nilai = 98;

            if ($nilai > 90) {
                $grade = "A+";
            } elseif($nilai > 80){
                $grade = "A";
            } elseif($nilai > 70){
                $grade = "B+";
            } elseif($nilai > 60){
                $grade = "B";
            } elseif($nilai > 50){
                $grade = "C+";
            } elseif($nilai > 40){
                $grade = "C";
            } elseif($nilai > 30){
                $grade = "D";
            } elseif($nilai > 20){
                $grade = "E";
            } else {
                $grade = "F";
            }

            echo "Nilai anda: $nilai<br>";
            echo "Grade: $grade";
        ?>
    </div>
</body>
</html>