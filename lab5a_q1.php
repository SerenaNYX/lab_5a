<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
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
        $name = "Serena Ng Yen Xin";
        $matricno = "AI220061";
        $course = "BIP";
        $year = 3;
        $address = "Taman Mutiara Perdana, Sri Gading"
    ?>

    <table style="border:1px solid black">
        <tr>
            <th>Name</th>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <th>Matric Number</th>
            <td><?php echo "$matricno"; ?></td>
        </tr>
        <tr>
            <th>Course</th>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <th>Year of Study</th>
            <td><?php echo "$year"; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo "$address"; ?></td>

        </tr>
    </table>
</body>
</html>