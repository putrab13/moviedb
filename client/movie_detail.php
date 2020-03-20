<?php
  include "../conf/info.php";
  
  $id_movie = $_GET['id'];
    include_once "../api/api_movie_id.php";
    include_once "../api/api_movie_video_id.php";
    include_once "../api/api_movie_similar.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
    include_once "header.php";
?>
<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col">
            <h1>Detail</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="text-center">

                <img src="<?php echo $imgurl_1 ?><?php echo $movie_id->poster_path ?>"
                class="img-thumbnail" width="40%">
                </div>
                
                <div class="card-body" align="center">
                    <h5 class="card-title"><?=$movie_id->title ?></h5>
                    <p class="card-text"><?=$movie_id->tagline ?></p>
                    <p class="card-text">Genres :
                        <?php
                               foreach($movie_id->genres as $g){
                                  echo '<span>' . $g->name . '</span> ';
                                   }
                           ?>
                    </p>
                    <p class="card-text">Overview : <?=$movie_id->overview ?></p>
                    <p class="card-text">Release Date : <?=$movie_id->vote_average ?></p>
                    <p class="card-text">Release Date :
                        <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?></p>

                    <p class="card-text">Production Countries:
                        <?php
                                  foreach($movie_id->production_countries as $pco){
                                    echo $pco->name. "&nbsp;&nbsp;" ;
                                    }
                                ?>
                    </p>
                    <p class="card-text">Budget: $ : <?php echo $movie_id->budget ?></p>
                    <p class="card-text">Vote Average : <?php echo $movie_id->vote_average ?></p>
                    <p class="card-text">Vote Count : <?php echo $movie_id->vote_count ?></p>


                </div>
            </div>
        </div>
    </div>

</div>







<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col">
            <h1>Trailer</h1>
        </div>
    </div>

    <div class="row">
        <?php
      //include_once "api/api_popular.php";
         $count = 9;
         $output=""; 
        $data = $movie_similar_id->results;

        ?>

        <?php foreach ($movie_video_id->results as $dt) : ?>

        <div class="col-md-6">

            <div class="card mb-3" align="center">

                
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src= "https://www.youtube.com/embed/<?=$dt->key?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>


        <?php endforeach; ?>
    </div>

</div>



<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col">
            <h1>Similar Movie</h1>
        </div>
    </div>

    <div class="row">
        <?php
      //include_once "api/api_popular.php";
         $count = 4;
         $output=""; 
        $data = $movie_similar_id->results;

        ?>

        <?php foreach ($data as $dt) : ?>

        <div class="col-md-4">

            <div class="card mb-4" align="center">
                <a href="movie_detail.php?id=<?=$dt->id?>"><img
                        src="http://image.tmdb.org/t/p/w300<?=$dt->poster_path?>" class="card-img-top"></a>
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