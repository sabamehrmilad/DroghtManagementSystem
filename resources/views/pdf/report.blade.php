<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Slider PDF</title>
</head>
<body>
    <h1>Urunlerin Aylik raporu </h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Urun</th>
                <th>il</th>
                <th>ilce</th>
                <th>CikisDurumu</th>
                <th>EkimAlani</th>
                <th>GelismeVeBakim</th>
                <th>Ay</th>
                <th>GozlemDurumu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->Urun }}</td>
                    <td>{{ $row->il }}</td>
                    <td>{{ $row->ilce }}</td>
                    <td>{{ $row->CikisDurumu }}</td>
                    <td>{{ $row->EkimAlani }}</td>
                    <td>{{ $row->GelismeVeBakim }}</td>
                    <td>{{ $row->Ay }}</td>
                    <td>{{ $row->GozlemDurumu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
