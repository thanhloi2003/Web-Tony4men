<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $product_type = $_POST['product_type'];
    $image;
    $image2;


    if ($_FILES['image']['tmp_name']) {





        $target_dir = "../../../images/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        echo basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image = "images/" . basename($_FILES['image']['name']);
        } else {

            echo "Image upload failed.";
            exit;
        }
    }
    if ($_FILES['image2']['tmp_name']) {

        $target_dir = "../../../images/";
        $target_file = $target_dir . basename($_FILES['image2']['name']);
        echo basename($_FILES['image2']['name']);
        if (move_uploaded_file($_FILES['image2']['tmp_name'], $target_file)) {
            $image2 = "images/" . basename($_FILES['image2']['name']);
        } else {

            echo "Image upload failed.";
            exit;
        }
    }


    try {

        $pdo = new PDO("mysql:host=localhost;dbname=sellshoe", "root", "");


        $stmt = $pdo->prepare("INSERT INTO products SET name=?, price=?, product_type=?, image=?, image2=? ");


        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $price);
        $stmt->bindParam(3, $product_type);
        $stmt->bindParam(4, $image);
        $stmt->bindParam(5, $image2);



        $stmt->execute();


        header("Location: http://localhost/Web%20Tony4men%20-%20Sao%20ch%C3%A9p/admin/AdminLTE-3.2.0/");
        exit;
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
}
