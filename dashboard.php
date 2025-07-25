<?php
// Start session and check login
session_start();

// Dummy placeholder data (you'll replace this with actual DB values)
$userName = isset($_SESSION['username']) ? $_SESSION['username'] : "John Doe";
$currentPlan = isset($_SESSION['plan']) ? $_SESSION['plan'] : "Intermediate";

// Confirmation message
$successMessage = "";
if (isset($_GET['updated']) && $_GET['updated'] == "true") {
    $successMessage = "Plan updated successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard | DoBu Martial Arts</title>
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>

  <header class="main-header">
    <div class="logo">DOBU MARTIAL ARTS</div>
    <nav class="nav-menu">
      <a href="index.html">Home</a>
      <a href="dashboard.php" class="active">Dashboard</a>
      <a href="logout.php">Logout</a>
    </nav>
  </header>

  <main class="dashboard-section">
    <h1>Welcome, <?php echo htmlspecialchars($userName); ?>!</h1>

    <?php if ($successMessage): ?>
      <div class="success-message">
        <?php echo $successMessage; ?>
      </div>
    <?php endif; ?>

    <div class="dashboard-box">
      <p><strong>Current Membership Plan:</strong> <?php echo htmlspecialchars($currentPlan); ?></p>

      <form action="update_plan.php" method="POST">
        <label for="new_plan">Change Plan:</label>
        <select name="new_plan" id="new_plan" required>
          <option value="">-- Select Plan --</option>
          <option value="Basic">Basic</option>
          <option value="Intermediate">Intermediate</option>
          <option value="Advanced">Advanced</option>
          <option value="Elite">Elite</option>
          <option value="Junior">Junior</option>
        </select>
        <button type="submit" class="cta-btn">Update Plan</button>
      </form>
    </div>
  </main>

  <footer>
    &copy; 2025 DoBu Martial Arts | All rights reserved
  </footer>

</body>
</html>
