<?php
if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
    echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    // Xoá biến session sau khi hiển thị thông báo
    unset($_SESSION['success_message']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/styleAdmin.css">
    <!-- Bao gồm Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      
    <link rel="icon" type="image/x-icon" href="images_giao_dien/admin.png">
    <title>Admin</title>
    <style>
    .custom-column {
      background-color: #3498db;
      color: #ffffff;
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 30px;
    }
    .custom-column {
    margin-right: 15px;
    margin-left: 15px;
  }
     .chart {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
   .chart span {
    margin-bottom: 5px; /* Khoảng cách giữa các thẻ span */
  }
  .chart-container {
        width: 300px;  /* Đặt chiều rộng theo ý muốn */
        height: 300px;  /* Đặt chiều cao theo ý muốn */
    }  /* Đặt chiều cao theo ý muốn */
  </style>
</head>
<body>