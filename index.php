<!--Embedding Php and HTML together -->

<?php /* if(true){   ?>
<p>Some HTML text</p>
<?php } */?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
 
    <p>This is a paragraph</p>
    <?php echo "this is also a paragraph";
    $fullName="Papai the sailor man";
    echo $fullName;
    
    //Scalar Types(Conatins one value)
    $string="Daniel";
    $int=1235; //default is 0
    $float=12.45; //default is 0
    $bool=true; // true/false/ 1/0   default of $bool is false

    //Array Types
    $name=array("samrit","sovan","lionel","kestoda");
    // $name=["samrit","sovan","lionel","kestoda"] defaults to $arr=[]

    // default of $obj=null

    ?>

    <br>
    <?php $name="Papai"; $test=$name; ?>
    <p> My Name is <?php echo $test; ?> and i am learning php.</p>


    <!-- Predefined variables(Super Globals) it can be used anywehre in the code. -->
     
     <?php 
     echo $_SERVER["DOCUMENT_ROOT"];
     echo $_SERVER["PHP_SELF"];
     echo "<br>";
     echo $_SERVER["SERVER_NAME"];
     echo "<br>";
     echo $_SERVER["REQUEST_METHOD"];
      ?>

      <br>
      <?php
      echo $_GET["name"];
      echo $_GET["eyecolor"];
      echo "<br>";
      echo $_REQUEST["name"];//REQUEST Method looks for GET,POST,Cookies inside a website.
      //echo $_FILES[""]; // It will give us the information about the file we uploaded like size,type
      //echo $_COOKIE[""];
      //echo $_SESSION[""];
      //echo $_ENV[""];
       ?>


</body>
</html>