<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Management</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #efdecd;">
  <div class="container mt-5">
    <div class="card p-4">
      <h1 class="text-center mb-4">Create Playlist</h1>
    <div class="mb-4">
        <form action="<?= site_url('music/add_playlist') ?>" method="post">
            <div class="mb-3">
                <label for="playlist_name" class="form-label">Playlist Name:</label>
                <input type="text" name="playlist_name" class="form-control" required>
            </div>
            <div class="container mt-2">
                  <div class="mb-1">
            <button type="submit" class="btn btn-success" style="background-color: #319177">Add Playlist</button>
              <span><a class="btn btn-primary" href="/music" style="background-color: #0892d0">Go back</a></span>
          </div>
        </div>
        </form>
    </div>

    <!-- Playlists -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Playlist</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($playlist as $playlist): ?>
                <tr>
                    <td>
                        <?= $playlist['playlist_name'] ?>
                    </td>
                    <td>
                        <a href="<?= site_url('music/delete_playlist/' . $playlist['id']) ?>"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
