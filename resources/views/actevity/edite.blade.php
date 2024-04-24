<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Image Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Image Details</h2>
        <form action="{{ route('activity.update', $image->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $image->description }}">
            </div>
            <div class="mb-3">
                <label for="titre" class="form-label">Titre:</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ $image->titre }}">
            </div>
            <div class="mb-3">
                <label for="activity" class="form-label">Activity:</label>
                <input type="text" class="form-control" id="activity" name="activity" value="{{ $image->activity }}">
            </div>
            <div class="mb-3">
                <label for="titre_activity" class="form-label">Titre Activity:</label>
                <input type="text" class="form-control" id="titre_activity" name="titre_activity" value="{{ $image->titre_activity }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('activity.gallery') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
