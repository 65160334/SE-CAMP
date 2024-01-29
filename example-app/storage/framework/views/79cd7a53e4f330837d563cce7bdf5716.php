<html>

<head>


<style>

    h1 {

    margin-bottom: 20px;
    font-family: sans-serif;
    font-size: 6rem;
    background: linear-gradient(to left, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da, #43a047, #eeff41, #f9a825, #ff5722);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
  }


p {text-align: center;}
div {text-align: center;

    background: linear-gradient(to right, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da, #43a047, #eeff41, #f9a825, #ff5722);
    text-shadow: 0 0 3px #26c6da, 0 0 5px #0000FF;
    font-size: 2rem;
    overflow-x: hidden;
    overflow-y: scroll;
    border: 1px solid black;
    width: 200px;
    height: 400px;
    margin: 0 auto;
    margin-top:220px ;
    padding: 10px;
    border: 1px solid #888;
    animation: textclip 2s linear infinite;
    background-image: linear-gradient(-225deg,
                    #231557 0%,
                    #44107a 29%,
                    #ff1361 67%,
                    #fff800 100%);




}



</style>

    <meta charset="utf-8">
</head>
<body>
<body style="background-image: linear-gradient(-225deg,
                    #231557 0%,
                    #44107a 50%,
                    #ff1361 50%,
                    #fff800 100%);">
    <?php $multi_x = $myinput;
    echo "<h1>ตารางสูตรคูณแม่ $multi_x <?php echo $multi_x ?></h1>"?>

    <div>

        <?php

        $i=1;
        while ($i <= 24 ){
            echo "$multi_x X $i =";
            echo $i*$multi_x;
            echo "<br>";
            $i++;

        }
    ?>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\SE-CAMP\example-app\resources\views/myrount.blade.php ENDPATH**/ ?>