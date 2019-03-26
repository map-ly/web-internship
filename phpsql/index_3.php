
<?php
    require 'header.php';
    $index = htmlspecialchars($_SERVER["PHP_SELF"]);
    $start = 0;
    $limit = 5;
    $page = 1;
    if (isset($_GET['page']) && !empty($_GET['page'])) {
        $page = $_GET['page'];
    }
    if($page){ 
        $start = ($page - 1) * $limit; 			//first item to display on this page
    }else{
        $start = 0;								//if no page var is given, set start to 0
    }
    $prev = $page - 1;							//previous page is page - 1
    $next = $page + 1;							//next page is page + 1
?>
<table style="width: 100%;border:1px solid #eee;">
<thead>
    <tr>
        <th>ID</th>
        <th>FN</th>
        <th>LN</th>
        <th>EMAIL</th>
        <th>Image</th>
        <th>
        Action
        </th>
    </tr>
</thead>
    <tbody>
        <a href="insert.php">INSERT</a>
        <?php
            $sql = 'select * from myguests ORDER BY id DESC LIMIT '.$limit.' OFFSET '.$start;
            $result = $conn->query($sql);
            if ($result->num_rows > 0):
                while($r = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $r['id'];?> </td>
                <td><?php echo $r['firstname'];?></td>
                <td><?php echo $r['lastname'];?></td>
                <td><?php echo $r['email'];?></td>
                <td><img src="<?php echo $r['profile'];?>" alt="" style="width:50px;height:50px;"></td>
                <td>
                    <a href="delete.php?id=<?php echo $r['id'];?>">DELETE</a>
                    <a href="edit.php?id=<?php echo $r['id'];?>">EDIT</a>
                </td>
            </tr>
        <?php
                }
            endif;
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4">
                <a href="<?php echo $index;?>?page=<?php echo $prev; ?>">Previous</a>
                <?php
                    $countSql = 'select * from myguests';
                    $countResult = $conn->query($countSql);
                    
                    $totalPage = $countResult->num_rows;
                    $lastPage = ceil($totalPage/$limit);
                    $pageNo = 1;
                    for($i=0; $i < $lastPage; $i++) {
                        $incPage = $pageNo++;
                ?>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?page=<?php echo $incPage; ?>"><?php echo $incPage; ?></a>
                <?php
                    }
                ?>
                <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?page=<?php echo $next; ?>">Next</a>
            </td>
        </tr>
    </tfoot>
</table>
<?php require 'footer.php'; ?>