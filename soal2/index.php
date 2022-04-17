<?php

$provinsi = [
    'Jatim' => [
        'Surabaya' => [
            'Jambangan', 'Wonokromo'
        ],
        'Sidoarjo' => [
            'Taman', 'Waru'
        ]
    ],
    'Jateng' => [
        'Semarang' => [
            'gunung pati', 'mijen'
        ],
        'Solo' => [
            'banjarsari', 'serengan'
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Tabel Kecamatan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>provinsi</th>
                    <th>kabupaten</th>
                    <th>Kecamatan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($provinsi as $key => $val) { ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php
                            foreach ($val as $kab => $kec) {
                                echo $kab . "</br>";
                                // $arr = (explode(". ", $kab, 2));
                                // echo implode("</br>", $arr);
                                // var_dump($arr);
                                // print_r($kab . " ");
                            }
                            ?>
                        </td>
                        <td>
                            <?php foreach ($val as $kab => $kec) {
                                $arr = implode(" ", $kec);
                                echo $arr . "</br>";
                            } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>