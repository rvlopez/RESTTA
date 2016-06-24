<?php
    require_once("databaseManager.php");

    global $con;

    $projects = array();
    $con = connectToDBIfNotConnectedYet();

    //$sql = "SELECT * FROM projects";
    //$result = $con->query($sql);
    $stmt = $con->query("SELECT * FROM projects");

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $projects[] = $row;
    }


    foreach($projects as $project) {
?>
    
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="text-left">
                <a href="addContract.php?id=<?php echo $project['id']; ?>"><?php echo $project['projectName']; ?></a>
                <a href="modifyProject.php?id=<?php echo $project['id']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="deteleProject.php?id=<?php echo $project['id']; ?>"><i class="fa fa-trash"></i></a> 
            </div>
        </div>
    </div>

<?php
    } // END FOREACH
?>