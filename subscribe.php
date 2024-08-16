 <?php
    // Get the form data
    $name = $_GET['name'];
    $email = $_GET['email'];
    
    // Validate the form data
    if (empty($name) || empty($email)) {
      echo "Missing required fields";
      exit;
 }
?>
 
