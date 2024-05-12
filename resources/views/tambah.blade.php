<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container px-4 py-4">
        <div class="card">
            <div class="card-header">
                Tambah Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="{{ route('ahmad_rizki_sabani.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nim</label>
                        <input type="number" class="form-control @error('nim') is-invalid @enderror"
                            placeholder="Masukkan Nim Mahasiswa" name="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ old('nama') }}" placeholder="Masukkan Nama">

                        <!-- error message untuk nama -->
                        @error('nama')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas"
                            value="{{ old('kelas') }}" placeholder="Masukkan kelas">

                        <!-- error message untuk kelas -->
                        @error('kelas')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenis kelamin" class="form-label">jenis kelamin</label>
                        <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                            name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                            placeholder="Masukkan jenis_kelamin">

                        <!-- error message untuk jenis_kelamin -->
                        @error('jenis_kelamin')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-primary me-3">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning me-3">RESET</button>
                    <a href="{{ route('ahmad_rizki_sabani.index') }}" class="btn btn-md btn-info">KEMBALI</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        //message with sweetalert
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>