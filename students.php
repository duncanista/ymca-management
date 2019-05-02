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


<?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $name = "'".$_POST['name']."'";
        $lastname = "'".$_POST['lastname']."'";
        $birthdate = "'".$_POST['birthdate']."'";
        $birthplace = "'".$_POST['birthplace']."'";
        $curp = "'".$_POST['curp']."'";
        $table = "student";

        if (isset($_POST['id'])){
            // UPDATE
            $id = $_POST['id'];
            $student = new Student();
            $values = array($name, $lastname, $birthdate, $birthplace, $curp);
            $fields = array("name", "lastname", "birthdate", "birthplace", "curp", "address");
            update($fields, $values, $table, "idStudent", $id);
        }else{
          // INSERT
        }
    }
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
