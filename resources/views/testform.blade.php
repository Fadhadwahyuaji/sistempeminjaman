<form action="{{ route('input.get') }}">
    <input type="text" name="name" placeholder="masukkan nama">
    <br>
    <input type="text" name="type" placeholder="masukan type">
    <br>
    <input type="text" name="condition" placeholder="masukkan kondisi">
    <br>
    <input type="text" name="quantity" placeholder="masukan quantity">
    <br>
    <button type="submit">SIMPAN</button>
</form>
<br>
<br>
<br>
<table border="1">
    <h1>DATA SEMENTARA</h1>
    <thead>
        <tr>
            <td>Nama</td>
            <td>Jenis</td>
            <td>kondisi</td>
            <td>Kuantitas</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->condition }}</td>
            <td>{{ $item->quantity }}</td>
        </tr>
        @endforeach
    </tbody>
</table>