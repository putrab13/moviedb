<?php
  include "conf/info.php";
  $title="Now Playing Movies";
  include_once "header.php";
?>

    <h1>~ Now Playing Movies ~</h1>
    <?php
      include_once "api/api_now.php";
      $min = date('d F Y', strtotime($nowplaying->dates->minimum));
      $max = date('d F Y', strtotime($nowplaying->dates->maximum));
      echo "<h5><sub>from</sub> <span>". $min . "</span> , <sub>until</sub> <span>" . $max . "</span></h5>";
    ?>
    <hr>
    <?php
      //include_once "api/api_toprated.php";
        $arr = $nowplaying->results;
        $chunks = array_chunk($arr, 3);
        echo '<table>';
       // foreach($toprated->results as $p){
        foreach ($chunks as $chunk) {
            echo '<tr>';
            //foreach($toprated->results as $p){
            foreach ($chunk as $p) {
                //printf('<td>%s</td>', $val);
               
                echo '<td><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5></a></td>";
            }
            echo '</tr>';
        }
        echo '</table>';
      ?>
  

<?php
  include_once "footer.php";
?>