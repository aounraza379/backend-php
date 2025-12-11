<?php
    // Multi-dimensional Array Filtering
    // $data = [
    //     'users' => [
    //         ['id' => 1, 'name' => 'user-one', 'active' => true, 'role' => 'admin'],
    //         ['id' => 2, 'name' => 'user-two', 'active' => false, 'role' => 'user'],
    //         ['id' => 3, 'name' => 'user-three', 'active' => true, 'role' => 'user'],
    //     ]
    // ];
    // foreach ($data['users'] as $user) {
    //     if ($user['active'] && $user['role'] === 'admin') {
    //         echo $user['name'] . " is an active admin.\n";
    //     } elseif ($user['active']) {
    //         echo $user['name'] . " is an active user.\n";
    //     } else {
    //         echo $user['name'] . " is not active.\n";
    //     }
    // }
?>

<?php
    // Predict the output
    // var_dump(5 == "5");
    // var_dump(5 === "5");
    // var_dump(0 == "hello");
    // var_dump(null == false);
    // var_dump(null === false);

    // $products = [
    //     ['name' => 'Laptop', 'price' => 1200, 'stock' => 5],
    //     ['name' => 'Mouse', 'price' => 25, 'stock' => 0],
    //     ['name' => 'Keyboard', 'price' => 75, 'stock' => 10],
    // ];
    // echo array_map( $products['name'] );
?>

<?php 
    // Create a function that validates email format and throws custom exception if invalid
    function email_val($email) {
        try {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("Email is not valid.");
            }
            echo "Email is valid.";
        } catch (Exception $e) {
            echo "Invalid email format: " . $e->getMessage();
        }
    }
    // $input = readline("Enter your email: ");
    // email_val($input);
?>

<?php
    // Build an array function that groups products by category
    $products = [
        ['name' => 'Laptop', 'category' => 'Electronics'],
        ['name' => 'Shirt', 'category' => 'Clothing'],
        ['name' => 'Smartphone', 'category' => 'Electronics'],
        ['name' => 'Pants', 'category' => 'Clothing'],
    ];
    function group_by_category($products) {
        $grouped = [];
        foreach ($products as $product) {
            $category = $product['category'];
            if (!isset($grouped[$category])) {
                $grouped[$category] = [];
            }
            $grouped[$category][] = $product;
        }
        return $grouped;
    }
    $grouped_products = group_by_category($products);
    print_r($grouped_products);

?> 