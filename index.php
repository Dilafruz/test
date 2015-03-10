<html>
<head>
    <title>Learning Github</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container bg-success">
    <h1 class="text-center text-success">Welcome to my first Git Project!</h1>
    <div class='row'>

        <h1 class='text-center'>Navoiy viloyati</h1>
        <hr>
    </div>
    <div class='row'>
        <div class="col-lg-10 col-lg-offset-1">
            <?php
            require ("mysqli_connect.php");

                $q="select * from tuman order by t_id";


            ?>


            <?php


            $r = @mysqli_query ($dbc, $q);
            $bg = '#ffffff';
            $roww = mysqli_fetch_array($r, MYSQLI_ASSOC);
            if(empty($roww))
            {
                echo "<h2 class='text-danger text-center'>Bunday tuman mavjud emas!</h2>";
            }
            else {
            ?>
            <table class='table table-bordered'>
                <tr>
                    <th>Tuman nomi</th>
                    <th>Aholisi</th>
                    <th>Maydoni</th>

                </tr>
                <?php
                while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
                {
                    $bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
                    echo "<tr bgcolor='" . $bg . "'>
         <td><a href='tuman.php?t_id=".$row['t_id']."'>".$row['t_nomi']."</a></td>
         <td>".$row['aholisi']."</td>
         <td>".$row['maydoni']."</td>

         </tr>";

                }
                }

                $query1 = "SELECT avg(aholisi) from tuman";

                ?>

            </table>
        </div>
    </div>
</div>
</body>
</html>