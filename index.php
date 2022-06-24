 <?php
require_once __DIR__ . '/database.php';

foreach($database as $album){
   foreach($album as $data){
      echo '<br>';
      echo $data;
      echo'<br>';
   }
};
?>


