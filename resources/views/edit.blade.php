<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('proses_update',$editm -> nim) }}" method="post">
        @csrf
        @method('put')
         <div class="mb-3">
                    <label class="form-label">nim</label>
                    <input type="text" class="form-control" name="nim" placeholder="masukan nim"
                        value="{{ $editm -> nim }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukan nama"
                        value="{{ $editm -> nama_M }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">jurusan</label>
                    <input type="text" class="form-control" name="jurusan" placeholder="masukan jurusan"
                        value="{{ $editm -> jurusan }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">kelas</label>
                    <input type="text" class="form-control" name="prodi" placeholder="masukan prodi"
                        value="{{ $editm -> prodi }}">
                </div>
                <div class="mb-3">
                    <input type="submit" value="simpan" class="btn_btn_primary">
                </div>

    </form>
</body>
</html>