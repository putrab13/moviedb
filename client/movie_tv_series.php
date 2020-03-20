<?php
  include "../conf/info.php";

  include_once "header.php";
 include_once "../api/api_tv.php";
    $data = $tv_onair->results;
?>



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
                <a href="movie_tv_show.php?id=<?=$dt->id?>"><img src="http://image.tmdb.org/t/p/w300<?=$dt->poster_path?>" class="card-img-top"></a>  
                    <div class="card-body">
                        <h5 class="card-title"><?=$dt->name ?></h5>
                        <p class="card-text"><?=$dt->overview ?></p>
                        <p class="card-text">vote : <?=$dt->vote_count ?></p>
                        <p class="card-text">Rate : <?=$dt->vote_average ?></p>
                        <p class="card-text">Release Date : <?=$dt->first_air_date ?></p>
                        <a href="movie_tv_show.php?id=<?=$dt->id?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

<?php
  include_once "footer.php";
?>