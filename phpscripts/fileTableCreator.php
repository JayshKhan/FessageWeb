<?php
$id=$_SESSION['id'];
$Uname = $_SESSION['username'];
$servername = "localhost";
$username = "u458723640_fss";
$password = "Jayshkhan@123";
$dbname = "u458723640_fss";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "Select * from files where userid='$id'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fileShareID = $row['id'];
        $location = $row["location"];
        $size = UnitConverter($row["fileSize"]);
        $link = "localhost/public_html/" . $location;
        $fileType = $row["fileType"];
        $html = 'none';
        if (str_contains($fileType, "application")) {
            if (str_contains($fileType, "pdf")) {
                $html = '<iframe id="displayfile" src="' . $location . '" height="200" width="500"></iframe>';
            } else {
                $html = '<div id="displayfile" style="width: 200px;hieght: 200px;inline-size: fit-content;">
<img id="displaynotfoundfile" src="./Images/zipfileUserDash.svg" alt="Cannot Preview" width="100" height="100">
  <h2 style="float: right;margin-top: 40px;"><a href="' . $location . '" target="_blank">' . $row["fileName"] . '</a></h2>
</div>';
            }

        } else if (str_contains($fileType, "video")) {
            if (str_contains($fileType, "video/mp4")) {
                $html = ' <video  width="400" controls="controls" preload="metadata" >
                         <source src="' . $location . '" type="video/mp4">
                          </video>';
            } else {
                $html = '<div id="displayfile" style="width: 200px;hieght: 200px;inline-size: fit-content;">
<img id="displaynotfoundfile" src="./Images/fileIconUserDash.svg" alt="Cannot Preview" width="100" height="100">
  <h2 style="float: right;margin-top: 40px;"><a href="' . $location . '" target="_blank">' . $row["fileName"] . '</a></h2>
</div>';
            }
        } else if (str_contains($fileType, "image")) {
            $html = '<img id="displayfile" src="' . $location . '" alt="Cannot Preview" width="400" height="400">';
        } else if (str_contains($fileType, "text/plain")) {
            $html = '<iframe id="displayfile" src="' . $location . '"></iframe>';
        }

        $formtosend = '<form action="./SendFileDash.php" method="post">
  <input type="hidden" name="fileidtobesent" value="' . $row["id"] . '">
  <input type="hidden" name="fileNametobesent" value="' . $row['fileName'] . '">
  <input id="userdashbutton" type="submit" value="Send">
</form>';
        $formtodelete = '<form action="./phpscripts/deleteFile.php" method="post">
  <input type="hidden" name="fileid" value="' . $row["id"] . '">
  <input type="hidden" name="location" value="' . $location . '">
  <input type="hidden" name="fileSize" value="' . $row['fileSize'] . '">
  <input id="userdashbutton" type="submit" value="Delete">
</form>';
        echo "<tr>";
        echo " <td>" . $html . "</td>";
        echo "<td>" . $row["fileName"] . "</td>";
        echo "<td>Me</td>";
        echo "<td>" . $size . "</td>";
        echo "<td>" . $row["fileType"] . "</td>";
        echo "<td><a href='http://fessage.live/SharedFile.php?fileID=".$fileShareID."'  target='_blank'><button id='userdashbutton'>Share</button></a></td>";
        echo "<td>$formtodelete</td>";
        echo "<td><a href='$location' download><button id='userdashbutton'>Download</button></a></td>";
        echo "<td>$formtosend</td>";
        echo " </tr>";
    }
}


//////////////////////////////////////////////////RECEIEVED FILES/////////////////////////////////////////
///
///
echo '<tr style="height: 70px;">';
echo " <td>Receieved Files</td>";
echo '<td style="border: none;font-size: 20px;">Receieved Files</td>';
echo " </tr>";
echo "<tr>";
echo " <td></td>";
echo "</tr>";
    $sqlSentFile = "Select * from sentfile where toID='$id'";
    $resultsent = $conn->query($sqlSentFile);
    if($resultsent->num_rows > 0) {
        while($row = $resultsent->fetch_assoc())
        {
            $fileShareID = $row['fileID'];
            $rowID = $row['id'];
            $fromName = $row['fromName'];
            $fileID=  $row['fileID'];
            $sqlFile = "select * from files where id=$fileID";
            $resultfile =$conn->query($sqlFile);
            if($resultfile->num_rows > 0)
            {
                while($rowfile = $resultfile->fetch_assoc())
                {
                    $location=$rowfile["location"];
                    $size= UnitConverter($rowfile["fileSize"]);
                    $link = "localhost/public_html/".$location;
                    $fileType = $rowfile["fileType"];
                    $html = 'none';
                    if(str_contains($fileType, "application")) {
                        if(str_contains($fileType, "pdf"))
                        {
                            $html ='<iframe id="displayfile" src="'.$location.'" height="200" width="500"></iframe>';
                        }
                        else{
                            $html ='<div id="displayfile" style="width: 200px;hieght: 200px;inline-size: fit-content;">
                            <img id="displaynotfoundfile" src="./Images/zipfileUserDash.svg" alt="Cannot Preview" width="100" height="100">
                              <h2 style="float: right;margin-top: 40px;"><a href="'.$location.'">'.$rowfile["fileName"].'</a></h2>
                            </div>';
                        }

                    }
                    else if(str_contains($fileType, "video"))
                    {
                        if(str_contains($fileType, "video/mp4"))
                        {
                            $html = ' <video  width="400" controls="controls" preload="metadata" >
                         <source src="' . $location . '" type="video/mp4">
                          </video>';
                        }
                        else{
                            $html ='<div id="displayfile" style="width: 200px;hieght: 200px;inline-size: fit-content;">
<img id="displaynotfoundfile" src="./Images/fileIconUserDash.svg" alt="Cannot Preview" width="100" height="100">
  <h2 style="float: right;margin-top: 40px;"><a href="'.$location.'">'.$rowfile["fileName"].'</a></h2>
</div>';
                        }
                    }
                    else if(str_contains($fileType, "image"))
                    {
                        $html ='<img id="displayfile" src="'.$location.'" alt="Cannot Preview" width="400" height="400">';
                    }
                    else if(str_contains($fileType,"text/plain"))
                    {
                        $html='<iframe id="displayfile" src="'.$location .'"></iframe>';
                    }

                    $formtosend = '<form action="./SendFileDash.php" method="post">
                      <input type="hidden" name="fileidtobesent" value="'.$rowfile["id"].'">
                      <input type="hidden" name="fileNametobesent" value="'.$row['fileName'].'">
                      <input id="userdashbutton" type="submit" value="Send">
                    </form>';
                    $formtodelete = '<form action="./phpscripts/deleteFilefromTable.php" method="post">
                      <input type="hidden" name="rowID" value="'.$rowID.'">
                      <input id="userdashbutton" type="submit" value="Delete">
                    </form>';
                    echo "<tr>";
                    echo " <td>".$html."</td>";
                    echo "<td>".$rowfile["fileName"]."</td>";
                    echo " <td>".$fromName."</td>";
                    echo "<td>".$size."</td>";
                    echo "<td>".$rowfile["fileType"]."</td>";
                    echo "<td><a href='http://fessage.live/SharedFile.php?fileID=".$fileShareID."' target='_blank'><button id='userdashbutton'>Share</button></a></td>";
                    echo "<td>$formtodelete</td>";
                    echo "<td><a href='$location' download><button id='userdashbutton'>Download</button></a></td>";
                    echo "<td>$formtosend</td>";
                    echo " </tr>";
                }
            }

    }

}
