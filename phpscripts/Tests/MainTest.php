<?php

function signup($name, $email, $password) {
    // validate input
    if (empty($name) && empty($email) && empty($password)) {
      return "All fields are required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return "Invalid email address";
    }
    if (strlen($password) < 8) {
      return "Password must be at least 8 characters long";
    }
  
    //connect to database
    $conn = new mysqli('localhost','root','','fss');
    // create user in database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    $stmt->execute();
    $stmt->close();
  
    return "Account created successfully";
}

// function Test() {
    //create a name array and store name inputs in it
    $nameArray = [
        'Jaysh',
        'Jaysh',
        '',
        '',
        'Jaysh',
        'Jaysh',
        'Jaysh',
    ];
    //create a email array and store email inputs in it
    $emailArray = [
        'jayshkhan0@gmail.com',
        'jayshkhan1@gmail.com',
        '',
        'jayshkhan2@gmail.com',
        '',
        'jayshkhan3@gmail.com',
        'jayshkhan3@gmail',
        'jayshkhan3@gmail.com',
    ];
    //create a password array and store password inputs in it
    $passwordArray = [
        '123456789',
        '123456789',
        '',
        '123456789',
        '123456789',
        '',
        '123456789',
        '1234567',
    ];

    // create a table with incrementing test case id, inputs, expected output and actual output
    $table = '<table border="1" style="width:100%">'
        . '<tr>'
        . '<th>Test Case ID</th>'
        . '<th>Input</th>'
        . '<th>Expected Output</th>'
        . '<th>Actual Output</th>'
        . '</tr>';

    // loop through the arrays and call the function with each input
    for ($i = 0; $i < count($nameArray); $i++) {
        $name = $nameArray[$i];
        $email = $emailArray[$i];
        $password = $passwordArray[$i];
        $expectedOutput = 'Account created successfully';
        $actualOutput = signup($name, $email, $password);

        // compare the expected output with the actual output
        if ($expectedOutput == $actualOutput) {
            $result = 'Pass';
        } else {
            $result = 'Fail';
        }

        // add a row to the table with the test case id, inputs, expected output and actual output
        $table .= '<tr>'
            . '<td>' . ($i + 1) . '</td>'
            . '<td>' . $name . ', ' . $email . ', ' . $password . '</td>'
            . '<td>' . $expectedOutput . '</td>'
            . '<td>' . $actualOutput . '</td>'
            . '</tr>';
    }
    echo $table;




// echo Test();