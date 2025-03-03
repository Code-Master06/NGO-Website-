<?php
include 'db.php';

$sql = "SELECT * FROM donors";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donors List</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #003366; color: white; }
    </style>
</head>
<body>
    <h2>Organ Donors List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Age</th>
            <th>Organ</th>
            <th>Email</th>
            <th>Address</th>
            <th>Payment Screenshot</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['fullname']; ?></td>
            <td><?= $row['age']; ?></td>
            <td><?= $row['organ']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['address']; ?></td>
            <td><img src="<?= $row['payment_screenshot']; ?>" width="100"></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
