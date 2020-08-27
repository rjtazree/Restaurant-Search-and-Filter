<html>
<head>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost","root","","crud") or die("connection failed");
        $sql = "SELECT * FROM school";
        $result = mysqli_query($conn,$sql) or die("query unsuccessful");
    ?>
    
        <div  style="text-align: center;" >
            <h2>Add record</h2>
            <table align="center" border="1 px" width="600px" height="100px">
        
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>

    <?php
        while($row = mysqli_fetch_assoc($result)){  
    ?>
   
            <tr>
            <td align=Center><?php echo $row['sid'];?></td>
            <td align=Center><?php echo $row['sname'];?></td>
            <td align=Center><?php echo $row['sclass'];?></td>
            </tr>
        
       
    <?php
        } //while loop ends here
    ?>
            </table>
    <br>
    <!--add option-->
    <form action="savedata.php" method="POST">
    <input type="text" name="sid">
    <input type="text" name="sname">
    <input type="text" name="sclass">
    <input type="submit" name="submit" value="add">
    
    </form>
    </div>
   
</body>
</html>