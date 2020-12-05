<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Scholarship Calculator</title>
  </head>
  <body>
    <h1>Scholarship Result</h1>
    <div id="result">
    <?php
      require_once "./conn.php";
      if(isset($_POST["uk"])) $uk=25;
      else $uk=0;
      if(isset($_POST["gc"])) $gc=10;
      else $gc=0;
      if(isset($_POST["army"])) $army=10;
      else $army=0;
      if(isset($_POST["sb"])) $sb=10;
      else $sb=0;
      $valid=$_POST["valid"];
      $twelth=$_POST["twelth"];
      $academic=0;
      if($valid=="0"){
        echo "<span id='not_elligible'>Sorry You are not elligible for academic scholarship</span><br>";
      }
      else{
        $academic=$twelth/10;
      }
      $course= $_POST["course"];
      if($course=="btech"){
        $branch= $_POST["branch"];
        if($branch=="cs"){
          try{
            $sem=$_POST["sem"];
            $sql="SELECT * FROM btech_cs";
            $stmt=$pdo->query($sql);
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $data){
              if($sem==$data["Semester"]){
                echo "Actual Fees = ".$data["fees"]."<br>";
                echo "Academic Scholarship (".$academic."%) = ".($data["fees"]/100)*$academic."<br>";
                echo "Uttrakhand Domicile (".$uk."%) = ".($data["fees"]/100)*$uk."<br>";
                echo "girl candidate (".$gc."%) = ".($data["fees"]/100)*$gc."<br>";
                echo "siblings (".$sb."%) = ".($data["fees"]/100)*$sb."<br>";
                echo "Army personal child (".$army."%) = ".($data["fees"]/100)*$army."<br><br>";
                $final=$data["fees"]-(($data["fees"]/100)*($uk+$academic+$gc+$army+$sb));
                echo "<span id='final'>Final Fees = ".$final;

              }
            }
          }
          catch(PDOException $e){
            echo "Some error in fetching info : ".$e;
          }
        }
        else{
          exit("Sorry the database for this is not updated!");
        }
      }
      else{
          exit("Sorry the database for this is not updated!");
        }
      
    ?>
    </div>
  </body>
</html>

