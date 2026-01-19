<!DOCTYPE html>
<html>
<head>
    <title>Nilai Siswa</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Nilai Siswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $index => $nilai)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $nilai->siswa->nama ?? '-' }}</td>
                <td>{{ $nilai->mapel->nama ?? '-' }}</td>
                <td>{{ $nilai->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
