<!-- see courses page almost done -->
<?php
 include("../db_conn.php");
 include("session.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div class="d-flex" id="wrapper">
        <div class="border-right" id="sidebar-wrapper">
            <div class="user">
                <img class="img img-fluid rounded-circle" src="default_profile.png" width="120">
                <h5>
                    <?php echo $username ?>
                </h5>
                <p>
                    <?php echo $useremail ?>
                </p>
            </div>
            <div class="sidebar-heading">Learn Something New</div>
            <div class="list-group list-group-flush">
                <a href="watch_videos.php" class="list-group-item list-group-item-action sidebar-active"><span></span> Watch Videos</a>
            </div>
            <div class="sidebar-heading">Settings </div>
            <div class="list-group list-group-flush">

                <a href="../logout.php" class="list-group-item list-group-item-action "><span></span>Logout</a>
            </div>
        </div>

        <div id="page-content-wrapper">
        <div class="box">
            <div class="container">
                
                <main class="grid">

                    <?php
                    $displayquery = "select * from add_videos";
                    $query_run = mysqli_query($conn, $displayquery);


                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $items) {

                    ?>
                            <article>
                                <div class="text">
                                    <div class="img_book" >
                                    <h3><?= $items['video_name']; ?></h3>
                                    <iframe src="https://www.youtube-nocookie.com/embed/<?=$items['video_link']; ?>" title="YouTube video player" frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p><?= $items['video_des']; ?> </p>
                                    </div>
                                    
                                </div>
                            </article>
                            
                        <?php
                        }
                    } 
                        ?>
                        
                        
                    
                </main>
            </div>
        </div>
        </div>


</body>

</html>