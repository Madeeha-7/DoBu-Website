<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_plan'])) {
        $newPlan = $_POST['new_plan'];
        $_SESSION['plan'] = $newPlan;

        // Redirect back with success message
        header("Location: dashboard.php?updated=true");
        exit();
    }
}
?>


