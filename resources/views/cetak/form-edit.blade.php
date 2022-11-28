@extends("blank")

@section("konten")

    <form action="{{ route("update_cetak", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama : <br><input type="text" name="nama"> <br><br>
        Keterangan: <br> <textarea name="keterangan" id="" cols="30" rows="10"></textarea> <br>
        <br>
        <button type="submit">Simpan</button>
    </form>


@endsection