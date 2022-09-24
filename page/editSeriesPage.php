<?php
include '../component/sidebar.php';
$id = $_GET['id']; // get id through query string

$qry = mysqli_query($con,"select * from Series where id='$id'"); // select query
$data = mysqli_fetch_assoc($qry); // fetch data
$nameSeries = $data["name"];
$_SESSION['genreSeries'] =$data["genre"];
$realeseSeries = $data["realease"];
$episodeSeries = $data["episode"];
$seasonSeries = $data["season"];
$synopsisSeries = $data["synopsis"];
?>

<div class="container p-3 m-4 h-100"
  style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <h4>Update Series</h4>
  <hr>
  <form action="../process/editSeriesProcess.php?id=<?php echo $id; ?>" method="post">
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Name</label>
      <input class="form-control" id="name" name="name" value="<?php echo (isset($nameSeries)) ? $nameSeries: ''?>"
        aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputGenre" class="form-label">Genre</label>
      <select class="form-select" aria-label="multiple select example" name="genre[]" id="genre" multiple value=
        <?php
          $array = array("Thriller", "Comedy", "Fantasy");
          session_start();
          $genreSeries = $_SESSION['genreSeries'];
          foreach($array as $value=>$name)
          {
              if($name == $genreSeries)
              {
                    echo "<option selected value='".$name."'>".$name."</option>";
              }
              else
              {
                    echo "<option value='".$name."'>".$name."</option>";
              }
          }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label for="exampleInputRealese" class="form-label">Realease</label>
      <input class="form-control" id="realease" name="realease"
        value="<?php echo (isset($realeseSeries)) ? $realeseSeries: ''?>" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEpisode" class="form-label">Episode</label>
      <input class="form-control" id="episode" name="episode"
        value="<?php echo (isset($episodeSeries)) ? $episodeSeries: ''?>" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputSeason" class="form-label">Season</label>
      <input class="form-control" id="season" name="season"
        value=" <?php echo (isset($seasonSeries)) ? $seasonSeries: ''?>" aria-describedby="emailHelp">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputSynopsis" class="form-label">Synopsis</label>
      <input class="form-control" id="synopsis" name="synopsis"
        value=" <?php echo (isset($synopsisSeries)) ? $synopsisSeries: ''?>" aria-describedby="emailHelp">
    </div>

    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-primary" name="editSeries">Edit Series</button>
    </div>
  </form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>