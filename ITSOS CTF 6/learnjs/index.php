<!DOCTYPE html>
<html>
<head>
    <title>Visualizzatore di immagini</title>
    <style>
        html{
            background: #121212;
            color: #f0f0f0;
        }
        .red{
            color: red;
        }
    </style>
    
</head>
<body>
    <h1>La flag è divisa nei caratteri <span class="red">ROSSI</span></h1>

    <?php 
        $lorem = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor asperiores veritatis fugit rerum non reprehenderit cumque quisquam inventore. Minima harum laboriosam ut at possimus. Tempora repellat porro voluptatum culpa blanditiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro amet laboriosam esse fugiat. Incidunt perspiciatis excepturi molestiae repudiandae soluta et, id nobis fugit itaque quis. Ex eius beatae numquam tenetur.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor asperiores veritatis fugit rerum non reprehenderit cumque quisquam inventore. Minima harum laboriosam ut at possimus. Tempora repellat porro voluptatum culpa blanditiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro amet laboriosam esse fugiat. Incidunt perspiciatis excepturi molestiae repudiandae soluta et, id nobis fugit itaque quis. Ex eius beatae numquam tenetur.Incidunt perspiciatis excepturi molestiae repudiandae soluta et, id nobis fugit itaque quis. Ex eius beatae numquam tenetur.Incidunt perspiciatis excepturi molestiae repudiandae soluta et, id nobis fugit itaque quis. Ex eius beatae numquam tenetur.";
        $finalLorem = "";
        for ($i=0; $i < 120; $i++) { 
            $finalLorem .= $lorem;
        }
        $flag = "flag{l3tS_l34rn_JAva_ScriPT_t0gh3Th3r_1ts_r34lly_co0l}";

        $loremLength = strlen($finalLorem);
        $randIndexArr = [];
        for($i=0; $i < strlen($flag); $i++){
            $randomIndex = rand(0, $loremLength - 1);
            $randIndexArr[$i] = $randomIndex;
        }
        sort($randIndexArr);

        $finalLoremArray = str_split($finalLorem);
        for($i=0; $i < strlen($flag); $i++){
            $randomIndex = $randIndexArr[$i];
            $finalLoremArray[$randomIndex] = '<span class="red">' . $flag[$i] . '</span>';
        }
        $finalLorem = implode("", $finalLoremArray);  
    ?>
    
    <p>
    <?php echo $finalLorem; ?>
    </p>

    <script>
        setTimeout(function() {
            location.reload();
        }, 5000);
    </script>
</body>
</html>