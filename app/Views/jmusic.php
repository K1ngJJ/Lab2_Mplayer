<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPlayer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #efdecd;">
  <div class="container mt-5">
    <div class="card p-4">
      <h1 class="text-center mb-4">Media Player</h1>
    <div class="mb-4">
      <input type="text" id="searchInput" class="form-control" placeholder="Search Music">
      <br>
  </div>
  <div class="container mt-2">
        <div class="mb-1">
    <span><a class="btn btn-success" href="/upload" style="background-color: #008080">Upload Music</a></span>
    <span><a class="btn btn-success" href="music/add_playlist" style="background-color: #319177">Create Playlist</a></span>
</div>
    </div>
    <table class="table table-striped">
      <thead>
          <tr>
              <th>Music</th>
              <th>Playlist</th>
              <th></th>
          </tr>
      </thead>
          <?php if (isset($music) && count($music) > 0): ?>
              <?php foreach ($music as $song): ?>
                  <tr>
                      <td>
                          <?= $song['title'] ?>
                      </td>
                      <td>
                          <?= $song['playlist'] ?>
                      </td>
                      <td>
                          <a href="<?= site_url('music/play/' . $song['id']) ?>"
                              class="btn btn-primary btn-sm" style="background-color: #0892d0">Play</a>
                          <a href="<?= site_url('music/delete/' . $song['id']) ?>"
                              class="btn btn-danger btn-sm" style="background-color: #ff355e">Delete</a>
                      </td>
                  </tr>
              <?php endforeach; ?>
            <?php else: ?>
                        <tr>
                             <td colspan="3" class="text-center">invalid music!</td>
                         </tr>
          <?php endif; ?>
    </table>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
