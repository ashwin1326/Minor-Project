<?php
$student_id = "12";
$name = "varsha";
$department = "Computer Science";
$guide_name = "XfdgX";
$year = "2";
$gender = "female";
$email = "varsh@gmail.com";
$mobile_no = "7012136781";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 600px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <h1>General Information</h1>

    <div class="container">
        <table>
            
            <tr>
                <td>Student ID</td>
                <td><?php echo $student_id; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <td>Guide Name</td>
                <td><?php echo $guide_name; ?></td>
            </tr>
            <tr>
                <td>Year</td>
                <td><?php echo $year; ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Mobile No.</td>
                <td><?php echo $mobile_no; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>

