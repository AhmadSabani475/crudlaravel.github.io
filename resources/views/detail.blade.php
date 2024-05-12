<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container px-4 py-4">
        <div class="card">
            <div class="card-header">
                Detail Mahasiwa
            </div>
            <div class="card-body">
                <label for="nim" class="form-label">NIM</label>
                <input class="form-control" type="text" value="{{ $data->nim }}" aria-label="readonly input example"
                    readonly>
            </div>
            <div class="card-body">
                <label for="nama" class="form-label">nama</label>
                <input class="form-control" type="text" value="{{ $data->nama }}" aria-label="readonly input example"
                    readonly>
            </div>
            <div class="card-body">
                <label for="kelas" class="form-label">kelas</label>
                <input class="form-control" type="text" value="{{ $data->kelas }}" aria-label="readonly input example"
                    readonly>
            </div>
            <div class="card-body">
                <label for="jenis_kelamin" class="form-label">jenis kelamin</label>
                <input class="form-control" type="text" value="{{ $data->jenis_kelamin }}"
                    aria-label="readonly input example" readonly>
            </div>
        </div>
        <a href="{{ route('ahmad_rizki_sabani.index') }}" class="btn btn-md btn-info mt-2">KEMBALI</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>