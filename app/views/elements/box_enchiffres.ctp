<?php
$years = date('Y') - 2003;
?>

  <div class="lescigales_rightbox even">
    <h2>En chiffres</h2>
	<ul>
      <li>20 millions de hits par mois</li>
      <li><?php echo file_get_contents('http://admin.lescigales.org/websites/count.rest'); ?> sites hébergés</li>
      <li><?php echo $years; ?> ans d'existence</li>
    </ul>
  </div>


<!--   <iframe src="http://ghbtns.com/github-btn.html?user=mdo&type=follow" -->
<!--   allowtransparency="true" frameborder="0" scrolling="0" width="132" height="20"></iframe> -->
  
  <!--
  
  
  <iframe src="http://ghbtns.com/github-btn.html?user=mdo&repo=github-buttons&type=watch&count=true&size=large"
  allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
  
  -->