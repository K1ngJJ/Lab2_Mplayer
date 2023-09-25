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
  </div>
    <table class="table table-striped">
      <table class="table table-striped">
        <div class="container mt-5">
          <div class="card p-4" style="background-color: #c4bdaf">
            <div class="mb-4">
              <?php if (isset($music_to_play)): ?>
                  <div class="mb-3">
                      <a><strong>Title: </strong>
                          <?= $music_to_play['title'] ?>
                      </a>
                      <br /><br/>
                      <a><strong>Playlist: </strong>
                              <?= $music_to_play['playlist'] ?>
                          </a><br><br />

                      <audio controls >
                          <source src="<?= base_url('uploads/' . $music_to_play['file_name']) ?>" type="audio/mpeg">
                      </audio>
                  </div>
                  <a href="javascript:history.back()" class="btn btn-primary" style="background-color: #0892d0">Back</a>
              <?php endif; ?>
        </div>
        </div>
        </div>
      </table>
    </table>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
