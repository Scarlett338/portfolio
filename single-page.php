<?php
include_once("./components/header.php");
?>

<?php
if (isset($_GET['page_id'])) {

    $page_id = $_GET['page_id'];

    echo '<div class="cu-page'.$page_id.'">';
    include_once($page_id.".php");
    echo '</div>';
}

?>

<?php
include_once("./components/footer.php");
?>