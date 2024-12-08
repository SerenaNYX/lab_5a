<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a Q3</title>
    <style>
            table, tr, th, td {
                border: 1px solid black;
            }
            th {
                text-align: left;
            }
        </style>
</head>
<body>
    <?php
    function multiplication($multiplier) {
        $answer = [];
        for ($i = 1; $i <= 12; $i++) {
            $answer[] = $multiplier * $i;
        }
        return $answer;
    }

    $multiplier = 2; // change value for different multiplier
    $answer = multiplication($multiplier);
    ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 12; $i++) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $multiplier; ?></td>
                    <td><?php echo $answer[$i - 1]; ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>
