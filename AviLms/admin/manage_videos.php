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

    <title>Manage Video</title>

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
            <div class="sidebar-heading">Management</div>
            <div class="list-group list-group-flush">
                <a href="index.php" class="list-group-item list-group-item-action"><span></span>Dashboard</a>
                <a href="manage_videos.php" class="list-group-item list-group-item-action sidebar-active"><span></span> Manage Videos</a>
            </div>
            <div class="sidebar-heading">Settings </div>
            <div class="list-group list-group-flush">

                <a href="../logout.php" class="list-group-item list-group-item-action "><span></span>Logout</a>  
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <?php include('message.php')?>
                    <div class="card">
                        <div class="card-header">
                        <table>
                                <tr>
                                   <td><h4>Available Videos</h4></td> 
                                   <a href="addvideo.php" class="btn btn-primary btn-lg float-right">Add Videos</a>  
                                </tr>
                            
                            </table>
                            
                        </div>
                        
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Videos</th>
                                        <th>Description</th>
                                        <th>Video Link</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM add_videos ";
                                            $query_run=mysqli_query($conn,$sql);

                                            // $displayquery = "select * from add_videos";
                                            // $querydisplay= mysqli_query($conn,$displayquery);

                                            if(mysqli_num_rows($query_run) > 0)
                                            {
                                                $c=1;
                                                foreach($query_run as $items)
                                                {

                                                    
                                                    ?>
                                                        <tr>
                                                            <td><?= $c++ ?></td>                                                            
                                                            <td><?=$items['video_name']; ?></td>
                                                            <td><?=$items['video_des']; ?></td>
                                                            <td><?=$items['video_link']; ?></td>
                                                            <td><button class="btn btn-danger"><a href="code.php?video_id=<?=$items['video_id']; ?>" class="text-light">DELETE</a></button></td>       
                                                        </tr>
                                                        
                                                    <?php
                                                }
                                                
                                            }
                                            else
                                            {
                                                ?>
                                                <tr>
                                                    <td colspan="6">No records Found</td>
                                                </tr>
                                                <?php

                                            }
                                        ?>
                                        
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

</body>

</html>