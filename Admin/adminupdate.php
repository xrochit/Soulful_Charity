<?php 
    session_start();
    if(!$_SESSION['username']){
        header('Location: ../Login/adminlogin.php');
    }
    echo $_SESSION['username'];
?>

<?php
    include("../config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../Dashboard/Images/logo.png" alt="">
            </div>

            <span class="logo_name">Soulful Charity</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../Dashboard/index.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="../Admin/adminadd.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Add NGO</span>
                </a></li>
                <li><a href="../Admin/adminupdate.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Update NGO</span>
                </a></li>
                <li><a href="../Admin/delete.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Delete NGO</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Donation History</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Expenditure</span>
                </a></li> -->
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name" >Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!-- <img src="images/profile.jpg" alt=""> -->
        </div>
        
        <div class="dash-content">
    
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Update NGO</span>
                </div>
                <table class="table table-bordered table-striped table-hover border-dark">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                    $sql = "SELECT * FROM `ngo`";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        foreach($result as $row){
                            ?>
                            <tr>
                                <td><?= $row['Id']; ?></td>
                                <td><?= $row['Username']; ?></td>
                                <td><?= $row['Email']; ?></td>
                                <td><?= $row['Password']; ?></td>
                                <td><button type='button' class='btn btn-primary'><a href='update.php?Id=<?=$row['Id'];?>' class='text-light'>Update</a></button></td>
                        </tr>
                        <?php
                        }
                    
                    }
                    ?>
                    </tbody>
                  </table>
                <!-- <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Donation</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total User</span>
                        <span class="number">347</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total NGO</span>
                        <span class="number">12</span>
                    </div>
                </div> -->
            </div>

            <!-- <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                
                
                </div>
            </div> -->
            
        </div>
    </section>      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>

</body>
</html>
