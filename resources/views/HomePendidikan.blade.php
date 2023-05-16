<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('proses') }}" method="post">
        @csrf
        <div>
            <label class="form-label">nim</label>
            <input type="text" class="form-control" name="nim" placeholder="masukan nim ">
        </div>

        <div>
            <label class="form-label">nama</label>
            <input type="text" class="form-control" name="nama" placeholder="masukan nama ">
        </div>

        <div>
            <label class="form-label">jurusan</label>
            <input type="text" class="form-control" name="jurusan" placeholder="masukan jurusan ">
        </div>

        <div>
            <label class="form-label">prodi</label>
            <input type="text" class="form-control" name="prodi" placeholder="masukan prodi ">
        </div>

        <div class=>
            <input type="submit" value="simpan" class="btn_btn_primary">
        </div>
    </form>

    <table>

        <thead>
            <tr>
                <th>nim</th>
                <th>nama</th>
                <th>jurusan</th>
                <th>prodi</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $item)
                <tr>
                    <td>{{ $item -> nim }}</td>
                    <td>{{ $item -> nama_M }}</td>
                    <td>{{ $item -> jurusan }}</td>
                    <td>{{ $item -> prodi }}</td>
                    <td>
                        <a href="/pendidikan/{{ $item -> nim }}/edit">
                            <button>
                                edit
                            </button>
                        </a>
                        <form action="{{ route('hapus',$item -> nim )}}" method="post">
                            @csrf
                            @method('delete')
                             <button>
                                <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
