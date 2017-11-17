<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="master.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #f0f4e6" align="center">
  <h1 style="text-align: center; color: #f2913c; margin-top: -25px;">Calculator</h1>
  <br>
  <div class="well" align="center" id="bot" style="width: 500px; height: 650px; color: #5995f7; background-color: #f8fcd9; border-color: black; box-shadow: 2px 10px 10px;">
    <?php
    $result = "";
    class cal{
      var $x;
      var $y;

function which_operation_is_it($operation){
    switch($operation){
        case "+":
          return $this->x + $this->y;
          break;
        case "-":
          return $this->x - $this->y;
          break;
        case "x":
          return $this->x * $this->y;
          break;
        case "/":
          return $this->x / $this->y;
        default:
        return "Whoops! Please try again!";
      }
    }

function result_of_calculation($x, $y, $z){
      $this->x = $x;
      $this->y = $y;
      return $this->which_operation_is_it($z);
      }
    }

$calculation = new cal();

  if(isset($_POST['result'])){
   $result = $calculation->result_of_calculation($_POST['x'],$_POST['y'],$_POST['z']);
  }


    ?>
    <form method="post" action="calculator.php">
       <div style="height: 80px; width: 300px; margin: 20px; font-size: 20px; border: 2px solid black; background-color: white;">
         <td><h1><?php print $result; ?></h1></td>
       </div>
       <?php
         if($result % "2" == "0" and $result != "0" && floor($result) == $result){
           print "<h1>Result is even</h1>";
         }elseif($result % "2" != "0" and $result != "0" && floor($result) == $result){
           print "<h1>Result is odd</h1>";
         }else{

         }
         /* Checks if result has a decimal in it*/
         if(is_numeric($result) == "True" && floor($result) != $result){
           print "<h1>Result contains a decimal</h1>";
         }

         if($result == "2017"){
           print "Hey! That's this year!";
         }
         ?>
        <br>
        <td><h3>What is your first number?</h3></td>
        <td><input type="text" name="x" style="text-align: center;"></td>
      <br>
      <br>
      <td><h3>What is your second number?</h3></td>
      <td><input type="text" name="y" style="text-align: center;"></td>
        <br>
        <br>
        <td><h3>Do you want to add, subtract,
          <br>multiply, or divide?</h3></td>
        <td><select name="z">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select></td>
        <br>
        <br>
        <br>
        <td><input type="submit" name="result" value="=" style="width: 50px; height: 50px;"></td>
  </form>
  <br>
  <br>
  <br>
  <h6 style="float: right;">Powered by Blake Keeler</h6>
  </div>

    </body>
</html>
