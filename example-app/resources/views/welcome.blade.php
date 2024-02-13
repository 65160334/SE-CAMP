<!DOCTYPE html>
<html>
    <head>
        <title>แม่สูตรคูณ </title>

    </head>

    <body style="background-color:powderblue;">

        <h1 id="myh1" style="color:rgb(19, 82, 219);">แม่สูตรคูณ</h1>
        <p style="color:rgb(19, 82, 219);">Input Number</p>

        <input type="text" id="my_number" >

        <button onclick="myFunction()">submit</button>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>

            $(document).ready(function() {
                console.log("Hello World - document.ready")
                console.log($('#myh1').text())
                console.log($('#my_number').val())

            });

            function myFunction(){
                let my_number = parseInt($('#my_number').val())
                for(let i = 0 ; i <= 12;i++){
                    let gen = my_number * i ;
                    $('#myh1').after(`<h1 class="my_number">${my_number} * ${i} = ${gen}</h1>`)
                }
            }

        </script>
    </body>
</html>
