<?php
if(isset($_POST['moveFile']))
{
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];
    
    if(isset($fileName))
    {
        if(!empty($fileName))
        {
            $location = "uploads";
            if(move_uploaded_file($tempName, $location.$fileName))
            {
                echo 'File Uploaded';
            }
        }
    }
}
?>