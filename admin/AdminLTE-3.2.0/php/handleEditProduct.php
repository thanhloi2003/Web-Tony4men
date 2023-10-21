<?php


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $product_type = $_POST['product_type'];
    $image_old = $_POST['image_old'];
    $image_old2 = $_POST['image_old2'];

    // Handle image uploads
    $image = $image_old;
    $image2 = $image_old2;



    if ($_FILES['image']['tmp_name']) {
        // Handle image upload logic here
        // Upload the new image, update $image with the new path
        // Make sure to validate and sanitize the uploaded image

        // Example upload logic:
        $target_dir = "../../../images/"; // Your upload directory
        $target_file = $target_dir . basename($_FILES['image']['name']);
        echo basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image = "images/" . basename($_FILES['image']['name']);
        } else {
            // Handle the upload error
            echo "Image upload failed.";
            exit;
        }
    }
    if ($_FILES['image2']['tmp_name']) {
        // Handle image upload logic here
        // Upload the new image, update $image with the new path
        // Make sure to validate and sanitize the uploaded image

        // Example upload logic:
        $target_dir = "../../../images/"; // Your upload directory
        $target_file = $target_dir . basename($_FILES['image2']['name']);
        echo basename($_FILES['image2']['name']);
        if (move_uploaded_file($_FILES['image2']['tmp_name'], $target_file)) {
            $image2 = "images/" . basename($_FILES['image2']['name']);
        } else {
            // Handle the upload error
            echo "Image upload failed.";
            exit;
        }
    }

    // Update the product in the database
    // Replace the following code with your database update logic
    try {
        // Establish a database connection
        $pdo = new PDO("mysql:host=localhost;dbname=sellshoe", "root", "");

        // Prepare the SQL statement
        $stmt = $pdo->prepare("UPDATE products SET name=?, price=?, product_type=?, image=?, image2=? WHERE id=?");

        // Bind parameters
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $price);
        $stmt->bindParam(3, $product_type);
        $stmt->bindParam(4, $image);
        $stmt->bindParam(5, $image2);
        
        $stmt->bindParam(6, $product_id);

        // Execute the statement
        $stmt->execute();

        // Redirect to a success page
        echo '<script type="text/javascript">alert("Sửa sản phẩm thành công!"); location.href="http://localhost/Web%20Tony4men%20-%20Sao%20ch%c3%a9p/admin/AdminLTE-3.2.0/index.php";</script>';

        exit;
    } catch (PDOException $e) {
        // Handle database errors
        echo "Error: " . $e->getMessage();
    }
}
