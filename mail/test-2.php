<html>
<?php
  function runMyFunction() {
    echo 'I just ran a php function';
  }

  if (isset($_GET['hello'])) {
    runMyFunction();
  }
?>

Hello there!
<a href='test-2.php?hello=true'>Run PHP Function</a>
</html>