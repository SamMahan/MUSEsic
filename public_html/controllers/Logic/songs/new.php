<?PHP

require_once "../../../../private_html/config.inc.php";

$successArray=array();
$populateArray=array();
$modal = "";
if ($_POST == null){

}

if (isset($_POST)){
    foreach($_POST as $key=>$value){
       // echo $value."</br>";
        if($value===""){
            array_push($successArray, "has-warning");
            array_push($populateArray, "placeholder='**Information Required**'");
        }

        elseif($value != ""){
            array_push($successArray, "has-success");
            array_push($populateArray, "value='$value'");
            echo "value=$value";

        }
    }
    if($_POST["title"]!=null || $_POST["artist_name"] !=null || $_POST["genre"] !=null){
        $modal = "data-modalpost = 'active'";
        /*$albumfk = "";
        //create select statement, selecting Album_ID from album where Album_Name = $_POST[Album_Name]
        $q = "INSERT INTO songs (Title, Artist_FK, ) Values (:t, :alfk,)";

        $statement = $pdo->prepare($q);
        $statement->prepare(":t", $_POST["title"]);
        $statement->prepare(":alfk", $albumfk );



        //echo $statement->execute();*/

    }

}

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);
$smarty->assign('modal', $modal);
$smarty->display("songs/new.tpl");
?>