<!DOCTYPE html>
<html>
<head>
    <title>Data Costumer</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid rgb(96, 154, 255);
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Data Costumer</h2>
    <table>
        <thead>
            <tr>
                <th>Id_Costumer</th>
                <th>Nama</th>
                <th>No_Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($costumer as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->id_costumer }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->no_transaksi }}</td>
                    {{-- <td>
                        @if ($row->foto)
                            <img src="{{ public_path('storage/costumer/' . $row->costumer) }}" alt="Costumer">
                        @else
                            <p>Tidak ada</p>
                        @endif
                    </td>
                    <td>{{ $row->umur }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                </tr> --}}
            @endforeach
        </tbody>
    </table>
</body>
</html>
