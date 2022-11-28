@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $minuman)
        Nama : {{ $minuman->nama }} <br>
        Keterangan: {{ $minuman->keterangan }} <br>
        <a href="{{ route('ubah_minuman', ['id' => $minuman->id]) }}">Ubah</a>
        <a href="{{ route('tampil_minuman', ['id' => $minuman->id]) }}">Tampil</a>

        <form action="{{ route('hapus_minuman', ['id' => $minuman->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection