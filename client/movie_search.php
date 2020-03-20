<?php
$input=$_GET['search'];
$channel=$_GET['channel'];
$search=$input;

$title = 'Result Search | '.$input;
include "../conf/info.php";
include_once "../api/api_search.php";

include_once "header.php";
//echo($input);
//echo($channel);
//var_dump($search->results);
?>

<div class="container">
    <div class="row mt-5 mb-3">
        <div class="col">
            <!-- <h1>All Movie</h1> -->
            <h3>Result Search: <em><?php echo $input?></em></h3>
        </div>
    </div>

    <div class="row">




        <?php 
        if($channel=="movie"){
        foreach ($search->results as $dt) : ?>

        <div class="col-md-4">

            <div class="card mb-4" align="center">

                <?php $backdrop 	= $dt->backdrop_path;
                         $id=$dt->id;
			if (empty($backdrop) && is_null($backdrop)){
               
                echo '<a href="movie_detail.php?id='.$id.'"><img src="../image/no-gambar.jpg" class="card-img-top"></a>';
			} else {

                echo '<a href="movie_detail.php?id='.$id.'"><img src="http://image.tmdb.org/t/p/w300'.$dt->poster_path.'" class="card-img-top"></a>';
				//$backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
            }
            
            ?>

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
        <?php endforeach; 
         ?>
        <?php }
        elseif($channel=="tv"){
        ?>


        <?php 
      
        foreach ($search->results as $dt) : ?>

        <div class="col-md-4">

            <div class="card mb-4" align="center">




<?php $backdrop 	= $dt->poster_path;
                         $id=$dt->id;
			if (empty($backdrop) && is_null($backdrop)){
               
                echo '<a href="movie_detail.php?id='.$id.'"><img src="../image/no-gambar.jpg" class="card-img-top"></a>';
			} else {

                echo '<a href="movie_detail.php?id='.$id.'"><img src="http://image.tmdb.org/t/p/w300'.$dt->poster_path.'" class="card-img-top"></a>';
                //tmdb.org/t/p/w300'.$dt->backdrop_path.'" class="card-img-top"></a>';
				//$backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
            }
            
            ?>



                <div class="card-body">
                    <h5 class="card-title"><?=$dt->original_name ?></h5>
                    <p class="card-text"><?=$dt->overview ?></p>
                    <p class="card-text">vote : <?=$dt->vote_count ?></p>
                    <p class="card-text">Rate : <?=$dt->vote_average ?></p>
                    <p class="card-text">Release Date : <?=$dt->first_air_date ?></p>
                    <a href="movie_detail.php?id=<?=$dt->id?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>


        <?php endforeach; 
        }?>


    </div>

</div>

<?php
  include_once "footer.php";
?>