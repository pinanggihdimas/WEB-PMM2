@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $barista)
        Nama : {{ $barista->nama }} <br>
        Keterangan: {{ $barista->keterangan }} <br>
        <a href="{{ route('ubah_barista', ['id' => $barista->id]) }}">Ubah</a>
        <a href="{{ route('tampil_barista', ['id' => $barista->id]) }}">Tampil</a>

        <form action="{{ route('hapus_barista', ['id' => $barista->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection