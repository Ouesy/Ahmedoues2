<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
</head>
<body>
    <?php
        $to = "weslatibeyrem@gmail.com";
        $from = $_POST["email"];
        $Name = $_POST["name"];
        $inputsArr = $_POST["inp"];
        $message = "";
        $arrlen = count($inputsArr);
        for($i=0;$i<$arrlen;$i++){
            $message .= $inputsArr[$i].",";
        }
        $message = substr($message,0,strlen($message)-1);
        $message .= ". Name: ". $Name;
        $header = "From:" . $from;
        if(mail($to,"Hiring request",$message,$header)){
            echo "Email has been sent successfully";
        }else{
            echo "Email sending failed";
        }
    ?>
</body>
</html>