<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('images/icon.png')); ?>">
    <title>Laporan Pertandingan Bulanan</title>
    <style>
        /* Basic Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #141414;
            color: white;
            margin: 0;
            padding: 0;
            position: relative; /* Untuk posisi footer */
        }

        /* Header */
        .header {
            text-align: center;
            padding: 20px;
            background-color: #1c1c1c;
            border-bottom: 2px solid #3498db;
        }

        .header img {
            width: 120px;
            margin-bottom: 10px;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            color: #3498db;
        }

        /* Date */
        .date {
            text-align: right;
            margin: 20px 20px 0;
            font-size: 14px;
            color: #ecf0f1;
        }

        /* Table Styling */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #2c3e50;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ecf0f1; /* Menambahkan garis */
            color: #ecf0f1;
        }

        th {
            background-color: #34495e;
        }

        tbody tr:hover {
            background-color: #1f2a35;
        }

        /* Footer Styling */
        .footer {
            position: absolute;
            bottom: 150px;
            right: 40px;
            font-size: 12px;
            color: #ecf0f1;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="data:image/png;base64,<?php echo e(base64_encode(file_get_contents(public_path('images/logo.png')))); ?>" alt="Logo Blue Lock" style="width: 170px; margin-bottom: 5px;">
        <h2>Laporan Pertandingan Bulanan</h2>
    </div>
    <div class="date">
        Tanggal: <?php echo e(now()->setTimezone('Asia/Jakarta')->format('d-m-Y H:i')); ?>

    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tim 1</th>
                <th>Tim 2</th>
                <th>Gol Tim 1</th>
                <th>Gol Tim 2</th>
                <th>Pencetak Gol Tim 1</th>
                <th>Pencetak Gol Tim 2</th>
                <th>Tanggal Pertandingan</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pertandingans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pertandingan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($pertandingan->tim_1); ?></td>
                <td><?php echo e($pertandingan->tim_2); ?></td>
                <td><?php echo e($pertandingan->gol_tim_1); ?></td>
                <td><?php echo e($pertandingan->gol_tim_2); ?></td>
                <td><?php echo e($pertandingan->pencetak_gol_tim_1); ?></td>
                <td><?php echo e($pertandingan->pencetak_gol_tim_2); ?></td>
                <td><?php echo e($pertandingan->tanggal_pertandingan); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


</body>
</html>
<?php /**PATH C:\Users\ella3\Documents\UNIVERSITAS MERCU BUANA\SEMESTER 5\PWE\blue_lock\bluelock11\resources\views/report.blade.php ENDPATH**/ ?>