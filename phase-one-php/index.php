<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- 1. PHP Syntax Quirks & Type System -->
    <!-- <?php

        $num = "5";
        echo "Sum result is: " . $result = $num + 3 . "\n"; // 8 becuase PHP converts "5" to 5

        0 == "hello";  // true - string converts to 0
        0 === "hello";  // false - different types

        $username = $_GET['name'] ?? 'Guest'; // If $_GET['name'] doesn't exist or is null, use 'Guest'
        print("Username: " . $username);

        $user = $_GET['user'] ?? null;
        $city = $user?->getAddress()?->getCity(); // Returns null if $user or getAddress() is null, instead of crashing

        function add(&$num) {
            $num = $num + 100;
        }
        $value = 5;
        add($value);
        echo "\nvalue by reference" . $value; // Outputs 105

        function add_two(&$num) {
            $num += 5;
        }
        $value = 5;
        add_two($value);
        echo "\nnum is " . $num; // Outputs 5
        echo "\nvalue is " . $value; // Outputs 10

        $user = [
        'name' => 'me',
        'email' => 'me@gmail.com',
        'age' => 21
        ];
        
        $not_exist = $user['gender'] ?? 'Not specified';
        echo "\ngender " . $not_exist; // Outputs 'Not specified'
        
        echo "\n";
        foreach ($user as $key => $value) {
            echo "$key: $value\n";
        }

    ?> -->

    <!-- 2. Arrays - Essential Array Functions -->
    <!-- <?php

        // array_map - functions transform each element
        $numbers = [1, 2, 3, 4, 5];
        $doubled = array_map(function($n) {
            return $n * 2;
        }, $numbers);
        print_r($doubled); // [2, 4, 6, 8, 10]

        // array_filter - keep elements that match condition
        $even = array_filter($numbers, function($n) {
            return $n % 2 === 0;
        });
        print_r($even); // [2, 4]

        // array_reduce - combine elements into single value:
        $sum = array_reduce($numbers, function($num1, $num2){
            return $num1 + $num2;
        }, 0);
        echo "Sum: " . $sum; // 15

        // in_array / array_key_exists
        $fruits = ['apple', 'banana', 'cherry'];
        echo in_array('cherry', $fruits) ? 'true' : 'false'; // true

        // Spreading operator (...)
        $arr1 = [8, 12];
        $arr2 = [23, 34];
        $merged = [...$arr1, ...$arr2]; // [1, 2, 3, 4]
        print_r($merged); // [1, 2, 3, 4]

    ?> -->

    <!-- 3. Functions - Modern PHP -->
    <!-- <?php
        // Arrow Function
        $multiplier = 5;
        $multiply = fn($n) => $n * $multiplier;
        echo $multiply(10); // 50

        // Variadic Functions (...) Accept unlimited arguments
        function sum_all(...$numbers) {
            return array_sum($numbers);
        }
        echo "\nTotal Sum: " . sum_all(1, 2, 3, 4, 5); // 15

        // Type Declarations
        // Make your code safer and self-documenting:
        function greet(string $name, string $greets = "hello") : string {
            return "$greets, $name!";
        }
        echo "\n" . greet("me"); // "hello, me!!"
        echo "\n" . greet("Bob", "Hi"); // "Hi, Bob!"

    ?> -->

    <!-- 4. Include/Require & Namespaces -->
    <!-- <?php 
        // Load external PHP files:
        // include - Warning if file missing, script continues
        // require - Fatal error if file missing, script stops
        // include_once / require_once - Load only once (prevents redeclaration)
        
        // Namespaces - Organize code and avoid name collisions
        
        // Aliasing:
        // use App\Models\User as UserModel;
        // $user = new UserModel();

    ?> -->

    <!-- 5. Error Handling -->
    <!-- <?php
        function divide($a, $b) {
            if ($b === 0) {
                throw new Exception("Division by zero");
            }
            return $a / $b;
        }

        try {
            echo divide(10, 2); // 5
            echo "\n";
            echo divide(10, 10); // Throws exception
        } 
        catch (Exception $e) {
            echo "\nError: " . $e->getMessage();
        } 
        finally {
            echo "\nExecution completed.";
        }


        // Multiple Catch Blocks - Handle different exception types:
        try {
            // code
        } catch (PDOException $e) {
            // Database errors
        } catch (InvalidArgumentException $e) {
            // Invalid input
        } catch (Exception $e) {
            // Catch-all for other errors
        }
    ?> -->

</body>
</html>
