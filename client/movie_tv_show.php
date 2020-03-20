<?php
  include "../conf/info.php";
  
  $id_tv = $_GET['id'];
    include_once "../api/api_tv_id.php";

    //$data = $tv_id->results;
    //$title = "Detail Movie (".$tv_id->original_title.")";

   
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

                <img src="<?php echo $imgurl_1 ?><?php echo $tv_id->poster_path ?>"
                class="img-thumbnail" width="40%">
                </div>
                
                <div class="card-body" align="center">
                    <h5 class="card-title"><?=$tv_id->name ?></h5>
                    <p class="card-text"><?=$tv_id->status ?></p>
                    <p class="card-text">genres :
                        <?php
                               foreach($tv_id->genres as $g){
                                  echo '<span>' . $g->name . '</span> ';
                                   }
                           ?>
                    </p>
                    <p class="card-text">Overview : <?=$tv_id->overview ?></p>
                    <p class="card-text">Release Date : <?=$tv_id->vote_average ?></p>
                    <p class="card-text">First Air Date :
                        <?php $rel = date('d F Y', strtotime($tv_id->first_air_date)); echo $rel ?></p>

                    <p class="card-text">Production Countries:
                        <?php
                                  foreach($tv_id->production_companies as $pco){
                                    echo $pco->name. "&nbsp;&nbsp;" ;
                                    }
                                ?>
                    </p>
                    <p class="card-text">Original Country :  <?php
                foreach($tv_id->origin_country as $pco){
                  echo $pco. "&nbsp;&nbsp;" ;
                }
              ?></p>
                    <p class="card-text">Vote Average : <?php echo $tv_id->vote_average ?></p>
                    <p class="card-text">Vote Count : <?php echo $tv_id->vote_count ?></p>
                    <p>Created by : 
              <?php
                foreach($tv_id->created_by as $pco){
                  echo $pco->name. "&nbsp;&nbsp;" ;
                }
              ?>
    </p>


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
        //$data = $tv_id_video->results;

        ?>

        <?php foreach ($tv_id_video->results as $dt) : ?>

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
        //$data = $tv_similar_id->results;

        ?>

        <?php foreach ($tv_id_similar->results as $dt) : ?>

        <div class="col-md-4">

            <div class="card mb-4" align="center">
                <a href="movie_tv_show.php?id=<?=$dt->id?>">
                <img src="http://image.tmdb.org/t/p/w300<?=$dt->poster_path?>" class="card-img-top"></a>              
                
                <div class="card-body">
                <h5 class="card-title"><?=$dt->name ?></h5>
                    
                    <p class="card-text">Overview : <?=$dt->overview ?></p>
                    <p class="card-text">Vote : <?=$dt->vote_average ?></p>
                    <p class="card-text">First Air Date :
                        <?php $rel = date('d F Y', strtotime($dt->first_air_date)); echo $rel ?></p>

                    
                    <p class="card-text">Original Country :  <?php
                foreach($dt->origin_country as $pco){
                  echo $pco. "&nbsp;&nbsp;" ;
                }
              ?></p>
                  
                    <p class="card-text">Vote Count : <?php echo $dt->vote_count ?></p>
                    
    </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<?php
  include_once "footer.php";
?>