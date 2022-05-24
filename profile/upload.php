<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    
    include_once 'connection.php';
    // echo '<pre>';
    // print_r($_FILES['my_image']);
    // echo '</pre>';

    $img_name = $_FILES['my_image']['name'];
    $img_type = $_FILES['my_image']['type'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 2000000) {
            $em = "Sorry, your file is too large.";
            header("Location: edit_acc.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
 
            $allowed_exs = array("jpeg", "jpg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                // $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $new_img_name = $StudentID.'.'.$img_ex_lc;
                $img_upload_path = 'assets\img\uploads\\'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = 'UPDATE ABOUT SET AboutMe = '. $new_img_name. 'WHERE StudentID = '. $StudentID;
                mysqli_query($conn, $sql);

                header("Location: http://localhost/data/Project%20-%20Job%20Vacancy%20Management%20System/edit_acc.php");

            } else {
                $em = "You can't upload files of this type";
                header("Location: edit_acc.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occured!";
        header("Location: edit_acc.php?error=$em");
    }

} else {
    header("Location: edit_acc.php");
}

?>