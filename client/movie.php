<?php 
 include "../conf/info.php";
 include_once "../api/api_popular.php";
 include_once "header.php";
    $data = $popular->results;
    //$data2 = $response2;
    //$data3 = json_decode($data2, true);
    //var_dump($data3);
    //var_dump($data3["results"][0]["original_title"]);
//$data3 = $data3["results"];
//echo $data3[0]["original_title"];
    
?>
<!-- 
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Movie</title>
</head>

<body>




    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../image/icon (3).png" width="150"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home </a>
                    <a class="nav-item nav-link" href="#">Features <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
 -->


    <div class="container">
        <div class="row mt-5 mb-3">
            <div class="col">
                <h1>All Movie</h1>
            </div>
        </div>

        <div class="row">

<?php foreach ($data as $dt) : ?>

            <div class="col-md-4">

                <div class="card mb-4" align="center">
                <a href="movie_detail.php?id=<?=$dt->id?>"><img src="http://image.tmdb.org/t/p/w300<?=$dt->poster_path?>" class="card-img-top"></a>  
                    <div class="card-body">
                        <h5 class="card-title"><?=$dt->title ?></h5>
                        <p class="card-text"><?=$dt->overview ?></p>
                        <p class="card-text">vote : <?=$dt->vote_count ?></p>
                        <p class="card-text">Rate : <?=$dt->vote_average ?></p>
                        <p class="card-text">Release Date : <?=$dt->release_date ?></p>
                        <a href="movie_detail.php?id=<?=$dt->id?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

    <?php
  include_once "footer.php";
?>

<!--    
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html> -->