<!-- resources/views/barang/partials/_table.blade.php -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->harga_barang }}</td>
                <td>{{ $item->stok_barang }}</td>
                <td>{{ $item->id_supplier }}</td>
            </tr>
        @endforeach
    </tbody>
</table>