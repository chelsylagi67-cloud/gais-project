<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Request Form</title>
    <style>
        body { font-family: DejaVu Sans; font-size: 12px; }
        .header { text-align: center; margin-bottom: 30px; }
        .title { font-size: 18px; font-weight: bold; }
        .section { margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #000; }
        th, td { padding: 8px; }
        .no-border { border: none !important; }
    </style>
</head>
<body>

<div class="header">
    <div class="title">FORM PERMINTAAN BARANG</div>
    <p>BOSOWA GENERAL AFFAIR</p>
</div>

<div class="section">
    <strong>Request ID:</strong> REQ-{{ $request->id }} <br>
    <strong>Tanggal Request:</strong> {{ $request->request_datetime->format('d M Y H:i') }}
</div>

<div class="section">
    <strong>Nama Pemohon:</strong> {{ $request->user->name }} <br>
    <strong>Email:</strong> {{ $request->user->email }}
</div>

<div class="section">
    <table>
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $request->inventory->item_name }}</td>
                <td>{{ $request->inventory->category }}</td>
                <td>{{ $request->quantity }} {{ $request->inventory->unit }}</td>
                <td>{{ strtoupper($request->status) }}</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="section">
    <strong>Alasan / Keperluan:</strong>
    <p>{{ $request->reason ?? '-' }}</p>
</div>

<br><br>

<table class="no-border">
<tr class="no-border">
    <td class="no-border" style="text-align:center;">
        Pemohon,<br><br><br>
        _______________________
    </td>
    <td class="no-border" style="text-align:center;">
        Disetujui Oleh,<br><br><br>
        _______________________
    </td>
</tr>
</table>

</body>
</html>
