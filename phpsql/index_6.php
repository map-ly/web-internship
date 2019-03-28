<?php
    require 'header.php';
    
?>

<table style="width: 100%; border:1px solid #eee;">
<thead>
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>IMAGE</th>

        <th>
        Action
        </th>
    
    </tr>
</thead>
<tbody>
    <a href="insert.php">INSERT</a>
    <?php
        $sql ='select * from myguests ORDER BY id DESC LIMIT ' .$limit. 'OFFSET ' .$start;
        $result = $conn->query($sql);
        if ($result->num_rows > 0):
            while($r = $result->fetch_assoc()){

    ?>
    <tr>
                <td><?php echo $r['id'];?></td>
                <td><?php echo $r['firstname'];?></td>
                <td><?php echo $r['idlastname'];?></td>
                <td><?php echo $r['email'];?></td>
                <td><?php echo $r['id'];?></td>
                <td></td>
    
    </tr>
    }

</tbody>

</table>