<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPlayer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #efdecd;">
    <div class="container mt-5">
      <div class="card p-4">
        <h1 class="text-center mb-4">Delete Music</h1>
        <div class="mb-4">
          <?php if (isset($music_to_delete)): ?>
              <div class="mb-4">
                  <p>Are you sure you want to delete this music?</p>
                  <p><strong>Title:</strong>
                      <?= $music_to_delete['title'] ?>
                  </p>
                  <a href="<?= site_url('music/delete_confirm/' . $music_to_delete['id']) ?>" class="btn btn-danger" style="background-color: #ff355e">Yes, Delete</a>
                  <a href="<?= site_url('music') ?>" class="btn btn-secondary">No, Cancel</a>
              </div>
          <?php endif; ?>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#searchInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
</html>
