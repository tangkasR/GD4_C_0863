<?php 
    include '../component/sidebar.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF;  border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>Add Series</h4>
        <hr>
        <form action="../process/addSeriesProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input class ="form-control" id="name" name = "name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="genre">Genre</label>
                <select name="genre[]" id="genre" class="form-select" multiple aria-label="multiple select example" multiple>
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Romance">Romance</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputRealease" class="form-label">Realease</label>
                <input class ="form-control" id="realease" name = "realease" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEpisode" class="form-label">Episode</label>
                <input class ="form-control" id="episode" name = "episode" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputSeason" class="form-label">Season</label>
                <input class ="form-control" id="season" name = "season" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputSynopsis" class="form-label">Synopsis</label>
                <input class ="form-control" id="synopsis" name = "synopsis" aria-describedby="emailHelp">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="add">Save</button>
            </div>
        </form>
    </div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>