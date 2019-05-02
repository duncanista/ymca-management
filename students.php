<?php include "header/head.php"; ?>
<?php include "header/navbar.php"; ?>
<?php require_once 'classes/Database.php'; ?>
<?php require_once 'classes/Student.php'; ?>
<?php
    // Check page action in order to deploy page needed
    $action = "show";
    if(isset($_GET["action"])){
        $action = $_GET["action"];
    }

    // Sidebar
    $sidebar_students = true;

?>


<div class="container-fluid">
    <div class="row">
        <?php include "./header/sidebar.php"; ?>

        <?php
            switch($action){
                case "show":
                    include "views/students/show.php";
                break;

                case "add":
                    include "views/students/add.php";
                break;

                default:
                    include "views/students/show.php";
                break;
            }
        ?>

    </div>
</div>

<?php include "footer/foot.php"; ?>
