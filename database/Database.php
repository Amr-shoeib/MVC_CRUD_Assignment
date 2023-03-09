<?
// PDO database connection
try {
  $db = new PDO('mysql:host='.'localhost'.';dbname='.'mid_term_assignment', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    error_log($e->getMessage());
		  exit('unable to connect');
}

        $stmt = $connection->prepare("SELECT * FROM tbl_employees");
		$stmt->execute();

        $arr = $stmt->All(PDO::FETCH_OBJ);
		if(!$arr) exit('No results returned.');
		print_r($arr);
		$stmt = null;