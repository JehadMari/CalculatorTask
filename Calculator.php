<html>
<head>
</head>

<?php
$calc="";
$FirstNum = $_POST['FirstNumber'];
$SecondNum = $_POST['SecondNumber'];
if (is_numeric($FirstNum) && is_numeric($SecondNum))
{
  switch ($_POST['submit']) {
        case 'Add':
            $calc = $FirstNum + $SecondNum;
            break;

        case 'Subtract':
            $calc = $FirstNum - $SecondNum;
            break;

case 'Multiply':
            $calc = $FirstNum * $SecondNum;
            break;

case 'Divide':
            $calc = $FirstNum / $SecondNum;
            break;
    }

}

?>
<body>
<h2>PHP - Simple Calculator Program</h2>
<form action="" method="POST">
<input type="number" id="FirstNumber" name="FirstNumber" value="<?php echo $FirstNum; ?>"/> 
<label>First Number</label>
</br/><br/>
<input type="number" id="SecondNumber" name="SecondNumber" value="<?php echo $SecondNum; ?>"/> 
<label>Second Number</label>
<br/><br/>
<input type="text" id="Result" name="Result" value="<?php echo $calc; ?>"/> 
<label>Result</label>
<br/><br/>
<input type="submit" name="submit" value="Add"/>
<input type="submit" name="submit" value="Subtract"/>
<input type="submit" name="submit" value="Multiply"/>
<input type="submit" name="submit" value="Divide"/>
</from>

</body>
