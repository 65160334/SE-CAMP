<!DOCTYPE html>
<html>
    <head>
        <title>Javascript 101</title>
    </head>
    <body>
        <h1>Before</h1>
        <h1 id="myh1"><h1>Prepend</h1></h1>JavaScript<h1>Append</h1></h1>
        <h1>After</h1>
        <button onclick="alert('olo')">Click me</button>
        <input type="number" id="my_number">
        <button onclick="myFunction()">Submit number</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script>
            $(document).ready(function(){
                console.log("Hello World - document.ready")
                console.log($('#myh1').text())
                console.log($('#my_number').val())
                $('#myh1').text("javascript 101")
                $('my_number').val(100)
                setInterval(() => {
                    $('#myh1').after(`<h1 class='my_gen_number'>${i}</h1>`)
                }, 2000);
                });

            function myFunction(){
                let my_number =parseInt($('my_number').val())
                for(let i = 0;1< my_number;i++){
                    $('#myh1').after(`<h1 class='my_gen_number'>${i}</h1>`)
                }
                consloe.log(document.getElementById('my_number').value)
                console.log('Click submit number')
                setTimeout(() => {
                    $('.my_gen_number').each(function(index,val){
                    $(val).remove();
                })


                }, 2000);

            }
            console.log("Hello")
            let maval;
            maval = '10'
            maval2= '2'
            console.log(maval,maval2);
            maval3=maval/maval2
            console.log(maval3)


        </script>
         <script>
            let myval4 = [1,2,3,4];
            myval4[5] = 5;
            myval4[6]= [6,5,4,5]
            console.log(myval4)

            for(let i = 0;i<myval4.length;i++){
                console.log(myval4[i])
            }
            myval4.forEach(function (value,index){
                console.log("in foreach0",value)
            });
            console.log(document.getElementById('myh1').innerHTML)
        </script>
    </body>
</html>
