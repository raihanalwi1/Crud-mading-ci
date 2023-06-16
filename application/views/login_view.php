<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 150px;
        }

        h1 {
            color: #333;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if(isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <?php echo validation_errors(); ?>

    <?php echo form_open('index.php/auth/process_login'); ?>
        <div>
            <input type="hidden" name="is_active" id="is_active" value="1">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <input type="submit" value="Login">
        </div>
    <?php echo form_close(); ?>
</body>
</html>
