<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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
                    <a class="nav-item nav-link active" href="movie.php">Home </a>
                    <a class="nav-item nav-link" href="movie_toprated.php">Top Rated <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="movie_play_now.php">Play Now</a>
                    <a class="nav-item nav-link" href="movie_upcoming.php">Up Coming</a>
                    <a class="nav-item nav-link" href="movie_tv_series.php">TV Series</a>


                </div>
                <!-- <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
      </form> -->

                <form class="form-inline my-2 my-lg-0 ml-auto" action="movie_search.php" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Type Title Here" name="search"
                        required>

                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="channel" required>
                            <option value="movie">Movie</option>
                            <option value="tv">TV Show</option>
                        </select>
                    </div>
            </div>

            <button class="btn btn-outline-success my-2 my-sm-0 ml-3" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>