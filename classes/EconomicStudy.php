<?php
require_once('Database.php');

class EconomicStudy{
	public static $fields = array("idStudy", "idStudent", "lastname", "housingType", "housingTenure", "dimensions", "walls", "roofs", "floors","rooms", "lightbulbs", "condition", "familyCategory", "familyAlimentation", "totalIncome", "totalOutcome", "healthService", "vacations");

	function __construct(){
	}
}
?>
