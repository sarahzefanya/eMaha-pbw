<div>
    <strong>Tabel Data Task</strong>
    <table border="1" style="width:100%">
        <tr  style="text-align: center">
            <th>Nama</th>
            <th>Judul</th>
            <th style="width=60%">Deskripsi</th>
        </tr>
        @foreach ($task as $baris)
            <tr>
                <td>{{ $baris->nama }}</td>
                <td>{{ $baris->judul_task }}</td>
                <td>{{ $baris->deskripsi_task }}</td>
            </tr>
        @endforeach
    </table>
</div>
