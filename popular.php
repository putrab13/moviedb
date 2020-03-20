<?php
  include "conf/info.php";
  $title="Popular Movies";
  include_once "header.php";
?>
    <h1>~ Popular Movies ~</h1>
    <hr>

    <?php
      include_once "api/api_popular.php";
        $arr = $popular->results;
        $chunks = array_chunk($arr, 3);
        echo '<table>';
        foreach ($chunks as $chunk) {
            echo '<tr>';
            foreach ($chunk as $p) {
              
                echo '<td><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5></a></td>";
            }
            echo '</tr>';
        }
        echo '</table>';
      ?>


<?php
  include_once "footer.php";
?>