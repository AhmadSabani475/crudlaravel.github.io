<x-layout>
    <a href="{{ route('ahmad_rizki_sabani.create') }}" class="btn btn-md btn-success mb-3"><i
            class="fa-solid fa-plus"></i> Tambah Data</a>
    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">KELAS</th>
                <th scope="col">JENIS KELAMIN</th>
                <th scope="col" style="width: 20%">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dataArray as $data)
                <tr>

                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->kelas }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('ahmad_rizki_sabani.destroy', $data->id) }}" method="POST">
                            <a href="{{ route('ahmad_rizki_sabani.show', $data->id) }}"
                                class="btn btn-sm btn-dark">DETAIL</a>
                            <a href="{{ route('ahmad_rizki_sabani.edit', $data->id) }}"
                                class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger">
                    Data belum Tersedia.
                </div>
            @endforelse
        </tbody>

    </table>

</x-layout>