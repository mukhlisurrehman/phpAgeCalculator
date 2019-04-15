<?php

function redirect($file)
{
    header("Location:".$file); 
}

  if(isset($_POST['age'])){
      
      // Get User Entered Date
      $userdate=$_POST['date'];
      $date_by_user= new DateTime($userdate);
      
      // Get Current Date
      $currentdate=getdate();
      $day=$currentdate['mday'];
      $month=$currentdate['mon'];
      $year=$currentdate['year'];
      $current_date=$year."-".$month."-".$day;
      
      //Current Date Object
      $date_today=new DateTime($current_date);
      
      //Calculate Difference
      $age= $date_by_user->diff($date_today);
      $UserAge_Age_Years=$age->y;
      $UserAge_Age_Months=$age->m;
      $UserAge_Age_Days=$age->d;
  }
?>
<head>
    <style>
    #form2{
        margin-top: 50px;
    }
    
        h1{
            margin-top: 10px;
            margin-bottom: 50px;
        }
        .withinform {
            margin: 0 auto;
            width: 270px;


        }
        #button {
            margin-top: 15px;
            font-size: 20px;
            padding-right: 37px;
            padding-left: 37px;
            padding-top: 3px;
            padding-bottom: 3px;
        }
        
        h3{
            background: aqua;
            padding: 4px 10px;
        }
        
    </style>
</head>

<div class="mainform">
<form name="form2" align="center" id="form">
    <div class="withinform">
    <h1>Your Complete Age</h1>
    <h3>Years :<?php echo "  " .$UserAge_Age_Years?></h3>
    <h3>Months:<?php echo "  " .$UserAge_Age_Months?></h3>
    <h3>Days  :<?php echo "  " .$UserAge_Age_Days?></h3>
    <button type="reset" id="button" onclick="location.href='main.php'">
    Go Back
</button>

    </div>
</form>
</div>
