<head>
    <style>
        #form {
            
            vertical-align: middle;
           
        }

        .mainform {
            margin-top: 40px;

        }

        h1 {
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .withinform {
            margin: 0 auto;
            width: 270px;

             background-image: url(https://pastpapersforvu.000webhostapp.com/images/age-png-5.png);

        }
         

        #button {
            margin-top: 15px;
            font-size: 20px;
            padding-right: 37px;
            padding-left: 37px;
            padding-top: 3px;
            padding-bottom: 3px;
        }
        
        #date{
            
            font-size: 20px;
        }

    </style>
</head>
 <body > 
<div class="mainform">
    <form name="form2" method="post" action="calculate.php" id="form" align="center">
        <div class="withinform"><br>
            <h1 align="center">Age Calculator</h1>
            <h3>Enter Your Date Of Birth</h3>
            <input type="date" name="date" align="center" id="date"><br>
            <input type="submit" name="age" value="Calculate Age" id="button">
        </div>
    </form>
</div>
</body>  

