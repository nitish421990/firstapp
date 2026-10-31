<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Image</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm">
                    <div class="card-header bg-warning">
                        <h4 class="mb-0">Update Image</h4>
                    </div>

                    <div class="card-body">

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Current Image --}}
                        <div class="mb-3">
                            <label class="form-label">Current Image</label>
                            <div>
                                <img src=" {{ asset('storage/' . $image->file_path) }} " alt="Current image"
                                    class="img-thumbnail" style="max-height:250px">
                            </div>
                        </div>

                        {{-- Update Form --}}
                        <form action="{{ route("uploads.update", $image->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="image" class="form-label">
                                    Choose Replacement Image
                                </label>

                                <input type="file" name="image" id="image"
                                    class="form-control @error('image') is-invalid @enderror"
                                    accept=".jpg,.jpeg,.png,.webp" required>

                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <small class="text-muted">
                                    JPG, PNG or WEBP — maximum 2 MB.
                                </small>
                            </div>

                            <div class="mb-3">
                                <img id="preview" src="" alt="New image preview" class="img-thumbnail d-none"
                                    style="max-height:200px">
                            </div>

                            <button type="submit" class="btn btn-warning">
                                Update Image
                            </button>

                            <a href="{{ route('uploads.index') }}" class="btn btn-secondary">
                                Cancel
                            </a>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const input = document.getElementById('image');
        const preview = document.getElementById('preview');

        input.addEventListener('change', function() {
            const file = this.files[0];

            if (!file) {
                preview.src = '';
                preview.classList.add('d-none');
                return;
            }

            if (!file.type.startsWith('image/')) {
                preview.src = '';
                preview.classList.add('d-none');
                return;
            }

            preview.src = URL.createObjectURL(file);
            preview.classList.remove('d-none');
        });
    </script>

</body>

</html>
