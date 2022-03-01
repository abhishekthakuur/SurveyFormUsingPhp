<?php
   if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_Connect($server,$username,$password);

    $name = $_POST['name'];
    $course = $_POST['course'];
    $department = $_POST['department'];
    $suggestions = $_POST['suggestions'];
    $strongest_point  = $_POST['strongest_point'];
    $rank = $_POST['rank'];

    $Sql = "INSERT INTO `abhishek`.`survey_form` (`name`, `course`, `department`, `suggestions`, `strongest_point`, `rank`) VALUES ('$name', '$course', '$department', '$suggestions', '$strongest_point ', '$rank ');";
    
    if($con -> query($Sql) == true){
        header('location: success.html');
    }    
    
    else{
        echo "Error in connection: $Sql <br> $con -> error ";
    }

    $con -> close();


   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Survey form</title>
</head>
<body>
    <div class="continer">
        <div id="survey_image" class="survey">
            <img src="survey_img.jpg" alt="">
        </div>

        <div id="survey_info" class="survey">
            <p> This survey is conducted to know your opinions on the topic of our college teaching skills you can answer the following question whithout any hesitation and we must improve our teaching skills so please help us in konwing your opinions</p>
            <span>closing timming :- 11:00 am</span>
        </div>

        <form action="main.php" id="form" method="post">
            <div>
                <label for="">Name</label><br>
                <input type="text" name="name" class="input" id="name" placeholder="Enter your name">
            </div>

            <div>
                <label for="">Course</label><br>
                <input type="text" name="course" class="input" id="Course" placeholder="Ex. b.tech/BCA/MBA">
            </div>
            
            <div>
                <label for="">Department name </label><br>
                <input type="text" name="department" class="input" id="name" placeholder="Ex.SEST(School Of Engineering Sciences & Technology)">
            </div>
            
            <div>
                <label for="">What you want to suggest for our better Teaching skills</label><br>
                <input type="text" name="suggestions" class="input" id="Suggestions" placeholder="Ex. Teachers come late in classes not taking classes properly">
            </div>
             
            <div>
                <label for="">Write something about our Strongest point</label><br>
                <input type="text" name="strongest_point"  class="input" id="name" placeholder="Ex. Disciplane is very proper in our college">
            </div>
            
            <div>
                <label for="">How much you rank our Teaching skills </label><br>
                <input type="radio" name="rank"  id="name" value="Poor" required> Poor <br>
                <input type="radio" name="rank"  id="name" value="Average"> Average <br>
                <input type="radio" name="rank"  id="name" value="Excellent"> Excellent <br>
            </div>
             
            <button type="submit" id="btn">Submit</button>
        </form>

    </div>
    
</body>
</html>