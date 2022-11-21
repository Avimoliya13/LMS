<?php
include("db_conn.php");
include('session.php');

if (isset($_POST['add_video'])) {

    $name = $_POST['videoname'];
    $description = $_POST['videodes'];
    $link=$_POST['videolink'];

    $query = "INSERT INTO `add_videos`(`video_name`, `video_des`,`video_link`) VALUES ('$name', '$description', '$link')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Video Added Successfully";
        header('Location: manage_videos.php');
        exit(0);
    }
}