<?php
include('db_conn.php');
 include('session.php');


if(isset($_GET['video_id']))
    {
        $videoId=$_GET['video_id'];
                
            $query="DELETE FROM `add_videos` WHERE `video_id`='$videoId'";
        
            $query_run=mysqli_query($conn,$query);
            if($query_run)
            {
                $_SESSION['message'] = "Video Deleted Successfully";
                header('Location: manage_videos.php');
                exit(0);
            }
    }


?>
