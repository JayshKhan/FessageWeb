<?php
$fromid=$_SESSION['id'];
//$fileTOSendID=$_POST['ii'];
include("db.php");
$sql = "Select id,username from users";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
    {
        $id = $row['id'];
        $name = $row['username'];
        $formtosend = '<form action="./phpscripts/sendFile.php" method="post">
  <input type="hidden" name="fileid" value="'.$fileTOSendID.'">
  <input type="hidden" name="fileName" value="'.$fileTOSendName.'">
  <input type="hidden" name="fromName" value="'.$Name.'">
  <input type="hidden" name="toID" value="'.$id.'">
  <input type="hidden" name="fromID" value="'.$fromid.'">
  <input id="userdashbutton" type="submit" value="Send">
</form>';
        if($id!=1) {
            echo "<tr>";
            echo " <td>" . $id . "</td>";
            echo "<td>" . $name . "</td>";
            echo "<td>" . $formtosend . "</td>";


            echo " </tr>";
        }
    }
}
