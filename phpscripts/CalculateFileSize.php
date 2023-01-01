<?php

function calculate_file_size() {
    $directory = "files";
    $total_size = 0;
    foreach (scandir($directory) as $file) {
      if ($file == "." || $file == "..") {
        continue;
      }
      $total_size += $directory . "/" . $file;
    }
    return $total_size;
}