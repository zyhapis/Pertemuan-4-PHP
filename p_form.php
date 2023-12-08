<!DOCTYPE html>
<html>

<head>
    <title>Data Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-primary {
            transition: all 0.3s ease-in-out;
            background-image: linear-gradient(to right, #6c63ff 0%, #4facf1 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 14px 28px;
            cursor: pointer;
            outline: none;
            text-transform: uppercase;
            font-weight: bold;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container">
        <h2 class="text-center mb-4">Data Registrasi</h2>
        <table class="mb-4">
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Gender</th>
                <th>Pendidikan</th>
                <th>Hobi</th>
            </tr>
            <?php
            $nama = $_POST['nama'] ?? '';
            $umur = $_POST['umur'] ?? '';
            $gender = $_POST['gender'] ?? '';
            $pendidikan = $_POST['pendidikan'] ?? '';
            $hobi = $_POST['hobi'] ?? [];
            $hobi_lainnya = $_POST['hobi_lainnya'] ?? '';

            $gender_label = ($gender === 'male') ? 'Laki-laki' : 'Perempuan';

            echo "<tr>";
            echo "<td>" . htmlspecialchars($nama) . "</td>";
            echo "<td>" . htmlspecialchars($umur) . "</td>";
            echo "<td>" . htmlspecialchars($gender_label) . "</td>";
            echo "<td>" . htmlspecialchars($pendidikan) . "</td>";
            echo "<td>";
            if (!empty($hobi)) {
                echo implode(', ', array_map('htmlspecialchars', $hobi));
            }
            if (!empty($hobi_lainnya)) {
                if (!empty($hobi)) {
                    echo ', ';
                }
                echo htmlspecialchars($hobi_lainnya);
            }
            if (empty($hobi) && empty($hobi_lainnya)) {
                echo "Tidak ada hobi yang dipilih.";
            }
            echo "</td>";
            echo "</tr>";
            ?>
        </table>
        <a href="form.php" class="btn btn-primary">Kembali</a>
    </div>
</body>

</html>