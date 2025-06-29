    <?php
function getCurrentPage() {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $pageName = basename($scriptName, ".php");
    return $pageName == 'index' ? 'home' : $pageName;
}

$currentPage = getCurrentPage();
?>