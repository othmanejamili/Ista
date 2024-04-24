<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Upload Image</h2>
        <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Choose Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Image Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Image Description">
            </div>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre">
            </div>
            <div class="mb-3">
                <label for="activity" class="form-label">Activity</label>
                <input type="text" class="form-control" id="activity" name="activity" placeholder="Activity">
            </div>
            <div class="mb-3">
                <label for="titre_activity" class="form-label">Titre Activity</label>
                <input type="text" class="form-control" id="titre_activity" name="titre_activity" placeholder="Titre Activity">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
            <a href="{{ route('activity.gallery') }}" class="btn btn-secondary">Cancel</a>

        </form>
    </div>
</body>
</html>
