<?php
if (isset($_FILES['file']['name'])) {
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    
    $unique_file_name = uniqid() . '-' . basename($file_name);
    
    $target_dir = '../uploads/';
    $target_file = $target_dir . $unique_file_name;

    if (move_uploaded_file($file_tmp, $target_file)) {
        $response = [
            'link' => $target_file
        ];
        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Failed to upload image']);
    }
}
?>
