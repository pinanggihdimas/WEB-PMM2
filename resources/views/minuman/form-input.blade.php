@extends("blank")

@section("konten")

    <form action="{{ route("simpan_minuman") }}" method="post">
        @csrf

        Minuman :<br> <input type="text" name="minuman"> <br><br>
        Gambar :<br> <input type="file" name="gambar"> <br><br>
        Deskripsi :<br> <textarea name="deskripsi" id="" cols="30" rows="10"></textarea> <br>
        Harga :<br> <input type="text" name="harga"> <br><br>
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>

@endsection