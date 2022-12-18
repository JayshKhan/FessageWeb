<?php
    $usedSpace = 0;
    $users=array();
    $sql = "SELECT * FROM `users`";
    if (isset($conn)) {
        $result = $conn->query($sql);
        $userCount=$result->num_rows;

    $_SESSION["userCount"]=$userCount;


        $_SESSION["users"]=$userCount;

       $_SESSION["userCount"]=$userCount;

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                if($row["accounttype"]==0) {
                    $row["Converted"] = UnitConverter($row["usedSpace"]);
                    $users[] = $row;
                    $usedSpace = $usedSpace + $row["usedSpace"];
                }
            }
            $_SESSION["users"] = $users;
            $_SESSION['Size']=UnitConverter($usedSpace);
            $_SESSION['usedSpace']=UnitConverter($usedSpace);

        }
    }
    function UnitConverter($unit)
    {
        $converted=0 . " bytes";
        $percentage = 0;
        $usedSpaceinGB = $unit;
        $usedSpaceinKB = $unit;
        $usedSpaceinMB = $unit;
        $hopNext = true;
        if($unit>1000)
        {
            $usedSpaceinKB=number_format($unit / 1024, 1);
            $usedSpaceinGB =$usedSpaceinKB;
            $usedSpaceinMB = $usedSpaceinKB;
        }
        else{
            $converted = $unit . " bytes";
            $percentage = 0;
            $hopNext=false;
        }

        if($usedSpaceinKB>1000 )
        {
            $usedSpaceinMB=number_format($unit / 1048576, 1);
            $usedSpaceinGB =$usedSpaceinMB;
        }
        else if($hopNext==true){
            $converted = $usedSpaceinKB . " KB";
            $percentage = 0;
            $hopNext=false;
        }

        if($usedSpaceinMB>1000)
        {
            $usedSpaceinGB=number_format($unit / 1073741824, 1);
            $converted= $usedSpaceinGB . " GB";
            $percentage = ($usedSpaceinGB/5)*100;
        }
        else if ($hopNext==true){
            $converted = $usedSpaceinMB . "MB";
            $percentage = ($usedSpaceinMB/5000)*100;

        }
        $_SESSION['space%']=$percentage;
        return $converted;
    }