<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
<!--
    
-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <?php include "./header.php" ?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
        </div>
        <div class="row tm-mb-90 tm-gallery">
            <?php
                if(isset($_GET['page'])) 
                    $page = $_GET['page'];
                else
                    $page = 1;
                $db            = new mysqli("localhost", "root", NULL, "Gallery");
                $sql           = "SELECT * FROM `Gallery`";
                $res           = $db->query($sql); 
                $total_records = $res->num_rows;
                $total_pages = ceil($total_records/4);     

                $start         = 4 * ($page - 1);
                $db            = new mysqli("localhost", "root", NULL, "Gallery");
                $sql           = "SELECT * FROM `Gallery` ORDER BY `id` LIMIT $start,4 ";
                $res           = $db->query($sql); 
                while($row = $res->fetch_array()){
                    $path = $row['path'];
                    print '
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                            <figure class="effect-ming tm-video-item">
                                <img src="'.$path.'" alt="Image" class="img-fluid">
                                <figcaption class="d-flex align-items-center justify-content-center">
                                    <h2>'.$row['des'].'</h2>
                                    <a href="detail.php?gid='.$row['id'].'">View more</a>
                                </figcaption>                    
                            </figure>
                            <div class="d-flex justify-content-between tm-text-gray">
                                <span class="tm-text-gray-light">'.$row['des'].'</span>
                            </div>
                        </div>
                    ';
                }
            ?>  
        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <?php
                    $prev = $page-1;
                    if($prev>0)
                        print '<A HREF = "index.php?page='.$prev.'" class="btn btn-primary tm-btn-prev mb-2">Previous</A>';
                    else
                        print '<div class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</div>';
                ?>


               <div class="tm-paging d-flex">
                    <?php
                        for($i=1; $i<=$total_pages; $i++){
                            if($page==$i)
                                print '<A HREF = "index.php?page='.$i.'" class="active tm-paging-link">'.$i.'</A>';
                            else
                                print '<A HREF = "index.php?page='.$i.'" class="tm-paging-link">'.$i.'</A>';
                        }
        
                    ?>

                </div>
                    
                <?php
                    $next = $page+1;
                    if($page<$total_pages)
                         print '<A HREF = "index.php?page='.$next.'" class="btn btn-primary tm-btn-next">Next Page</A>';
                    else
                         print '<div class="btn btn-primary tm-btn-prev mb-2 disabled">Next Page</div>';
                ?>
                

            </div>            
        </div>        
    </div> <!-- container-fluid, tm-container-content -->
    <?php include "./footer.php"; ?>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>