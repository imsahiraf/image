<?php if(isset($_FILES['image']) && $_FILES['image']['name'] !="") {
        $target_dir="qrcode/";
        $target_file=$target_dir . basename($_FILES["image"]["name"]);
        $uploadOk=1;
        $imageFileType=pathinfo($target_file, PATHINFO_EXTENSION);

        $filename=$_FILES['image']['name'];
        $filepath=$target_dir.$filename;

        if ($uploadOk !=0) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $filepath)) {
                $update_str="image='$filename'";
                echo $filename;
            }

            else {
                $uploadOk=0;
                $msg="Sorry, your file was not uploaded.";
            }
        }
    }else{
        echo "Failed to upload!";
    }
    ?>