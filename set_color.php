<?php


if (isset($_POST['color'])) {
    // Set the cookie to remember the selected color for 7 days
    setcookie('bgColor', $_POST['color'], time() + (7 * 24 * 60 * 60), '/');
    $bgColor = $_POST['color'];  // Set background color based on the form submission
} else {
    // Check if the cookie exists and use it for background color
    $bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : 'white';  // Default color is white
    
}

echo "<a href='index.php'>Back</a>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            margin: 0;
            color:black;
        }
    </style>
</head>
<body>
    <h1>Select a Background Color</h1>

    <!-- Display default and selected color -->
    <p>Default Background Color: white</p>
    <p>The Selected Background Color: <?php echo $bgColor; ?></p>

    <form method="post" >
        <label for="colorPicker">Choose Color: </label>
        <select id="colorPicker" name="color">
            <option value="white" <?php if ($bgColor == 'white') echo 'selected'; ?>>White</option>
            <option value="lightblue" <?php if ($bgColor == 'lightblue') echo 'selected'; ?>>Light Blue</option>
            <option value="lightgreen" <?php if ($bgColor == 'lightgreen') echo 'selected'; ?>>Light Green</option>
            <option value="lightyellow" <?php if ($bgColor == 'lightyellow') echo 'selected'; ?>>Light Yellow</option>
            <option value="lightpink" <?php if ($bgColor == 'lightpink') echo 'selected'; ?>>Light Pink</option>
            <option value="lightcoral" <?php if ($bgColor == 'lightcoral') echo 'selected'; ?>>Light Coral</option>
        </select>
        <button type="submit" name="submit">Change Color</button>
    </form>
</body>
</html>




