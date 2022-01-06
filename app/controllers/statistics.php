<?php 


function postCount()
{
    require '../modules/connect.php';

    $result = mysqli_query($con, "SELECT COUNT(id) FROM posts where deleted=\"no\"");
	while ($row = $result->fetch_assoc()) {
        return $row['COUNT(id)'];
    }		

    mysqli_close($con);
}

function previousBtnQuery($_tableName, $_id)
{
    require '../modules/connect.php';

    $previous= mysqli_query($con, "SELECT * FROM $_tableName WHERE id<$_id order by id DESC");

    return $previous;
}

function nextBtnQuery($_tableName, $_id)
{
    require '../modules/connect.php';

    $next= mysqli_query($con, "SELECT * FROM seasonticket WHERE id>$_id order by id ASC");

    return $next;
}
 
?>