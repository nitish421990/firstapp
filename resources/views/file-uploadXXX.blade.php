
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Image CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h2 class="mb-4">Laravel Image CRUD</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close"
                    data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Upload Errors --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Upload Form --}}
    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white">
            Upload New Image
        </div>

        <div class="card-body">
            <form action="{{ route('store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image" class="form-label">
                        Select Image
                    </label>

                    <input type="file"
                           name="image"
                           id="image"
                           class="form-control @error('image') is-invalid @enderror"
                           accept=".jpg,.jpeg,.png,.webp"
                           required>

                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <small class="text-muted">
                        JPG, PNG or WEBP — maximum 2 MB.
                    </small>
                </div>

                <img id="preview"
                     src=""
                     alt="Image preview"
                     class="img-thumbnail d-none mb-3"
                     style="max-height:180px">

                <div>
                    <button type="submit" class="btn btn-primary">
                        Upload Image
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Display Images --}}
    <h4 class="mb-3">Uploaded Images</h4>

    <div class="row g-4">

        @forelse($userFile as $image)
            <div class="col-12 col-sm-6 col-lg-4" key="{{ $image->id }}">
                <div class="card h-100 shadow-sm">

                    <img src="{{ asset('storage/' . $image->file_path) }}"
                         class="card-img-top"
                         alt="Uploaded image"
                         style="height:220px; object-fit:cover">

                    <div class="card-body">
                        <p class="text-muted small">
                            Image ID: {{ $image->id }}
                        </p>

                        <a href="{{ route('edit', $image->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit / Update
                        </a>

                        <form action="{{ route('destroy', $image->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Are you sure you want to delete this image?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    No images uploaded yet.
                </div>
            </div>
        @endforelse

    </div>

</div>

<script>
    const input = document.getElementById('image');
    const preview = document.getElementById('preview');

    input.addEventListener('change', function () {
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
