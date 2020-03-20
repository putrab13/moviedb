<?php
  include "conf/info.php";
  $title="TV Series";
  include_once "header.php";
?>

    <?php
      include_once "api/api_tv.php";
    ?>
        <h3>On Air TV Show</h3>
        <hr>

        
          <?php

        $arr = $tv_onair->results;
        $chunks = array_chunk($arr, 3);
        echo '<table>';
        foreach ($chunks as $chunk) {
            echo '<tr>';
            foreach ($chunk as $tp) {
              $dd = date('d F Y', strtotime($tp->first_air_date));
              
              echo '<td><a href="tvshow.php?id=' . $tp->id . '"><img src="'.$imgurl_1.''. $tp->poster_path . '"><h4>' . $tp->original_name . "</h4><h5><em>First Air Date : ".$dd."<br />Popularity : " . round($tp->popularity) . "</em></h5></a></td>";

              

                
            }
            echo '</tr>';
        }
        echo '</table>';

          ?>

        <h3>Top Rated TV Show</h3>
        <hr>

        <?php
    // include_once "api/api_tv.php";
        $arr = $tv_top->results;
        $chunks = array_chunk($arr, 3);
        echo '<table>';
        foreach ($chunks as $chunk) {
            echo '<tr>';
            foreach ($chunk as $tt) {
              $de = date('d F Y', strtotime($tt->first_air_date));
              
              echo '<td><a href="tvshow.php?id=' . $tt->id . '"><img src="'.$imgurl_1.''. $tt->poster_path . '"><h4>' . $tt->original_name . "</h4><h5><em>First Air Date : ".$tt->first_air_date."<br />Popularity : " . round($tt->popularity) . "</em></h5></a></td>";

                
            }
            echo '</tr>';
        }
        echo '</table>';
      ?>
    
      </div>
    </div>
    

<?php
  include_once "footer.php";
?>