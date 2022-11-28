@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $cetak)
        Nama : {{ $cetak->nama }} <br>
        Keterangan: {{ $cetak->keterangan }} <br>
        <a href="{{ route('ubah_cetak', ['id' => $cetak->id]) }}">Ubah</a>
        <a href="{{ route('tampil_cetak', ['id' => $cetak->id]) }}">Tampil</a>

        <form action="{{ route('hapus_cetak', ['id' => $cetak->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection