<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
    <form action="search.php" method="get">
      <input type="text" name="search" placeholder="Type Title Here" required>
      <select name="channel" required>
        <option value="movie" selected="selected">Movie
        </option>
        <option value="tv">TV Show
        </option>
      </select>
      <button type="submit">CARI
      </button>
    </form>
    <ul>
      <li>
        <a href="index.php">Home</a></li>
      <li>
        <a href="popular.php">Popular Movies
        </a>
      </li>
      <li>
        <a href="now-playing.php">Now Playing Movies
        </a>
      </li>
      <li>
        <a href="upcoming.php">Upcoming Movies
        </a>
      </li>
      <li>
        <a href="tv-series.php">TV SERIES
        </a>
      </li>
    </ul>