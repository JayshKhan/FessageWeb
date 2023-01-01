<?php

function Test_FileSize(){
        // Test case 1
        echo "Test Case 1: ";
    assert(calculate_file_size() == 0);

    // Test case 2
    $handle = fopen("./files/test_file_1.txt", "w");
    fwrite($handle, "This is a test file.");
    fclose($handle);
    assert(calculate_file_size() == strlen("This is a test file."));
    unlink("./files/test_file_1.txt");

    // Test case 3
    $handle = fopen("./files/test_file_1.txt", "w");
    fwrite($handle, "This is a test file.");
    fclose($handle);
    $handle = fopen("./files/test_file_2.txt", "w");
    fwrite($handle, "This is another test file.");
    fclose($handle);
    assert(calculate_file_size() == strlen("This is a test file.") + strlen("This is another test file."));
    unlink("./files/test_file_1.txt");
    unlink("./files/test_file_2.txt");
}