@extends("blank")

@section("konten")

    <form action="{{ route("simpan_cetak") }}" method="post">
        @csrf

        Nama :<br> <input type="text" name="nama"> <br><br>
        Keterangan:<br> <textarea name="keterangan" id="" cols="30" rows="10"></textarea> <br>
        <br>
        <button type="submit">Simpan</button>
    </form>


@endsection