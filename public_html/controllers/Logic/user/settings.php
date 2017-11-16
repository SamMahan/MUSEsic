<?PHP
require_once "../../../../private_html/config.inc.php";

$successArray=array();
$populateArray=array();
$modal = "";
$error = false;
$display = false;

if ($_POST == null){
    /*for($i=0; $i<12; $i++){
        array_push($successArray, "");
        array_push($populateArray, "placeholder='enter info'");
    }*/


}

if (isset($_POST["first_name"])) {
    foreach ($_POST as $key => $value) {
        if ($value === "") {
            array_push($successArray, "has-warning");
            array_push($populateArray, "placeholder='**Information Required**'");
        } elseif ($value != "") {
            array_push($successArray, "has-success");
            array_push($populateArray, "value='$value'");

        }
    }
    if ($_POST["first_name"] != null || $_POST["last_name"] != null || $_POST["email"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = true;
    }
    if ($_POST["first_name"] != null && $_POST["last_name"] != null && $_POST["email"] != null) {
        $modal = "data-modalpost = 'active'";
        $error = false;
        $display = true;
        $successArray = new SplFixedArray(10);
        $populateArray = new SplFixedArray(10);


    }
}

else{
    $successArray= new SplFixedArray(10);
    $populateArray=new SplFixedArray(10);

}

$smarty->assign("error", $error);
$smarty->assign("display", $display);

$smarty->assign("successArray", $successArray);
$smarty->assign("populateArray", $populateArray);

$smarty->assign('modal', $modal);

$smarty->display("user/user_settings.tpl");
?>
