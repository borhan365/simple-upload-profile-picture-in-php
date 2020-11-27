
<?php 

    $Pro = $_FILES['profile'];

    $Name = $Pro['name'];
    $Type = $Pro['type'];
    $TmpName = $Pro['tmp_name'];

    if( !empty($Pro) ){
        $FileDir = "upload/";

        if( move_uploaded_file($TmpName, $FileDir.$Name ) ) {

            $Path = $FileDir.$Name;
            echo "<img src='$Path'>";
            
        } else {
            echo "Failed man!";
        }

    } else {
        echo "This file already exist!";
    }
 
?>
