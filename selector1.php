<?php
$conn=mysqli_connect("localhost","root","","user") or die("not connected");
        $sel="select * from user";
        $qr=mysqli_query($conn, $sel) or die ("sel not fired");
        echo "<table class='table table-striped table-hover table-bordered table-condensed'>";
        echo "<tr><th class='info'>ID</th><th class='info'>Name</th><th class='info'>Father</th><th class='info'>Gender</th><th class='info'>Salary</th><th class='info'>Delete</th><th class='info'>Edit</th></tr>";
        while($row=mysqli_fetch_array($qr))
        {
            echo "<tr>";
            echo "<td class='danger'>".$row[0]."</td>";
            echo "<td  class='success'>".$row[1]."</td>";
            echo "<td class='success'>".$row[2]."</td>";
            echo "<td class='success'>".$row[3]."</td>";
            echo "<td class='success'>".$row[4]."</td>";

            echo "<td class='success'><button onClick='del(".$row[0].")'>Delete</button></td>";
            echo "<td class='success'><button name='editbtn' onClick='edit(".$row[0].")'>Edit</button></td>";
            
            echo "</tr>";
        }
        echo "</table>";

?>