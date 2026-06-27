<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel'; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background: #333;
            color: white;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .header h1 {
            margin: 0;
            font-size: 1.5em;
        }
        .nav {
            margin-top: 10px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        .nav a:hover {
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            font-size: 0.9em;
        }
        .btn-danger {
            background: #dc3545;
        }
        .btn-large {
            padding: 10px 20px;
            font-size: 1em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        table th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Admin Panel - Manajemen Artikel</h1>
            <div class="nav">
                <a href="<?= base_url('/admin/artikel'); ?>">Daftar Artikel</a>
                <a href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a>
                <a href="<?= base_url('/artikel'); ?>">Lihat Website</a>
            </div>
        </div>