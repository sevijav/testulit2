<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastName = $_POST['kmy_last_name'];
    $firstName = $_POST['kmy_first_name'];
    $email = $_POST['kmy_email'];
    $gender = $_POST['kmy_gender'];
    $address = $_POST['kmy_address'];

    $sql = "INSERT INTO kmy_users (kmy_last_name, kmy_first_name, kmy_email, kmy_gender, kmy_address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$lastName, $firstName, $email, $gender, $address]);

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Add New User</h1>
        <form method="POST" class="form-group">
            <div class="form-group">
                <label for="kmy_last_name">Last Name</label>
                <input type="text" name="kmy_last_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kmy_first_name">First Name</label>
                <input type="text" name="kmy_first_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kmy_email">Email</label>
                <input type="email" name="kmy_email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kmy_gender">Gender</label>
                <select name="kmy_gender" class="form-control" required>
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kmy_address">Address</label>
                <input type="text" name="kmy_address" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Back to User List</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <p1>tao ka ba</p1>
</body>
</html>
