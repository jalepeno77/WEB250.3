<?php 
  require_once('../private/initialize.php');
  $page_title = 'Sightings';
  include(SHARED_PATH . '/public_header.php');
?>

<h2>Bird inventory</h2>
<p>This is a short list -- start your birding!</p>

/** 
  Create a table. The header should reflect the headings in the wnc-birds.csv class.
  Use a table border of 1 to make the display easier to read.
*/
    <table border="1">
      <tr>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Nest Placement</th>
        <th>Conservation</th>
        <th>Backyard Tips</th>
      </tr>
<?php

  $parser = new ParseCSV(PRIVATE_PATH . '/wnc-birds.csv');
  $bird_array = $parser->parse();

  foreach($bird_array as $args) {
    $bird = new Bird($args);
    echo "<tr>";
    echo "<td>" . $bird->common_name . "</td>";
    echo "<td>" . $bird->habitat . "</td>";
    echo "<td>" . $bird->food . "</td>";
    echo "<td>" . $bird->nest_placement . "</td>";
    echo "<td>" . $bird->conservation() . "</td>";
    echo "<td>" . $bird->backyard_tips . "</td>";
    echo "</tr>";
  }
?>

    </table>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
