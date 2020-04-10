<?php
if(isset($_POST['submit'])){
    include "conn.php";
    $location = $_POST['location'];
    $type = $_POST['flat-type'];

    $sql = "select * from apartment where A_LOCATION='" . $location . "' and A_TYPE='" . $type . "' limit 10";
    $result = mysqli_query($conn, $sql);
        if($result->num_rows < 0){
            echo "empty !";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        body{
        display: flex;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    h2{
        color: #555555;
        font-weight: 500;
        text-decoration: underline teal;
    }
    th,td{
        padding: 8px 16px;
    }
    a:link,
    a:visited{
        text-decoration: none;
        outline: none;
        border: unset;
        border-radius: 10px;
        background-color: tomato;
        margin: 20px 0;
        padding: 12px 24px;
        align-self: center;
        font-size: 20px;
        color: #eeeeee;
        box-shadow: 0 5px 10px rgba(0,0,0,0.4);
        transition: all 0.15s;
    }
    a:active{
        cursor: pointer;
        transform: translateY(3px);
        box-shadow: 0 3px 8px rgba(0,0,0,0.5);
    }
    </style>
</head>
<body>
<div class="results">
        <table>
            <tr>
                <th colspan="6"><h2 class="t-head">All the available apartments</h2></th>
            </tr>
            <tr>
                <th>Apartment Name</th>
                <th>Owner Name</th>
                <th>Location</th>
                <th>Cost</th>
                <th>Type</th>
                <th>Contact</th>
            </tr>
        <?php 
            while($row = $result->fetch_assoc()) {
        ?>
            <tr class="rows">
                <td><?php echo $row['APARTMENT_NAME'];?></td>
                <td><?php echo $row['A_OWNER'];?></td>
                <td><?php echo $row['A_LOCATION'];?></td>
                <td><?php echo $row['COST'];?></td>
                <td><?php echo $row['A_TYPE'];?></td>
                <td><?php echo $row['MOBILE'];?></td>
            </tr>
        <?php
            }
        ?>
        </table>
    </div>
    <a style="margin-top:35px" href="/projectos/">search more</a>
</body>
</html>