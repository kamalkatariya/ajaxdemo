 <?php
$id=$_GET['id'];
        $conn1=mysqli_connect('localhost','root','','user') or die('not connected');
        $sel="select * from user where id=".$id;
        $qr=mysqli_query($conn1, $sel) or die ("sel not fired".mysqli_error($conn1));
        while($row=mysqli_fetch_array($qr))
        {
            $jsonArray=new StdClass;
            $jsonArray->id=$row[0];
            $jsonArray->name=$row[1];
            $jsonArray->fname=$row[2];
            $jsonArray->gen=$row[3];
            $jsonArray->salary=$row[4];
            $myJSON = json_encode($jsonArray);
            echo $myJSON;


        
        }
?>