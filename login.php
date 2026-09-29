<?php
session_start();

// Redirect if already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin/admin_dashboard.php");
    exit;
}

require_once "config.php"; // Your DB connection file, expected to define $conn

$error = '';
$username = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');

    if (empty($username) || empty($password)) {
        $error = "Please enter username and password.";
    } else {
        $sql = "SELECT id, username, password FROM admin WHERE username = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $param_username);
            $param_username = $username;

            if ($stmt->execute()) {
                $stmt->store_result();

                if ($stmt->num_rows == 1) {
                    $stmt->bind_result($id, $db_username, $db_password);
                    $stmt->fetch();

                    // Plaintext password check (NOT recommended for production):
                    if ($password === $db_password) {
                        $_SESSION["admin_logged_in"] = true;
                        $_SESSION["admin_id"] = $id;
                        $_SESSION["admin_username"] = $db_username;

                        header("Location: admin/admin_dashboard.php");
                        exit;
                    } else {
                        $error = "Invalid username or password.";
                    }
                } else {
                    $error = "Invalid username or password.";
                }
            } else {
                $error = "Oops! Something went wrong. Please try again later.";
            }
            $stmt->close();
        } else {
            $error = "Failed to prepare statement.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Surya Hotel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        /* Full page background with image */
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            background: url('images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Form container */
        .login-form {
            background: rgba(255, 255, 255, 0.9);
            padding: 3rem 3rem 2rem;
            border-radius: 50px; /* 50px curvy */
            box-shadow: 0 8px 30px rgb(0 0 0 / 0.12);
            width: 380px;
            max-width: 90vw;
        }

        /* Headings */
        h2 {
            font-family: 'Merriweather', serif;
            margin-bottom: 1.5rem;
            color: #222;
            font-weight: 700;
            text-align: center;
        }

        p {
            text-align: center;
            margin-bottom: 2rem;
            color: #444;
        }

        /* Inputs and button full round */
        .form-control,
        input[type="submit"] {
            border-radius: 100px !important; /* fully rounded */
            padding: 10px 20px;
            font-size: 1rem;
            box-shadow: none !important;
        }

        input[type="submit"] {
            background-color: #ffba5a;
            border: none;
            color: white;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }
        input[type="submit"]:hover {
            background-color: #d49700;
        }

        /* Error message styling */
        .alert {
            font-size: 0.9rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="login.php" method="post" class="login-form" novalidate>
        <h2>Admin Login</h2>
     <hr>

        <?php if (!empty($error)) echo '<div class="alert alert-danger">' . htmlspecialchars($error) . '</div>'; ?>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo htmlspecialchars($username); ?>" required autofocus />
        </div>    

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required />
        </div>

        <input type="submit" value="Login" />
    </form>
</body>
</html>
