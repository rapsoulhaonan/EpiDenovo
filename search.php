<?php
include('header.php');

?>
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear"> 
      <!-- header ####################################################################################################### -->

          <div class="form_center">
	  <div class="search_logo">
      	  <img src="layout/images/search_logo.png" alt="">
	  </div>

	  <div class="search_txt">
	  <p>The input formats example: <a onclick="javascript: document.getElementById('gene_symbol').value='Sox2\nPou5f1\nNanog\nMyc\nTrp53\nKras\n'" >Gene Symbol</a></p>
	  </div>

            <form method="post" enctype="multipart/form-data" accept-charset="utf-8" action="search_result.php">

	    <!--
            <form id="contact-form" method="post" enctype="multipart/form-data" accept-charset="utf-8" action="search_result.php">
              <input type="text" name="name" placeholder="Name:">
              <input type="text" name="email" placeholder="Email:">
              <input type="text" name="subject" placeholder="Subject:">
	      -->

              <textarea  name="gs_message" id="gene_symbol" placeholder="Gene Symbol:"></textarea>

	      <div class="btn_center">
		<br>
              <input type="submit" class="button" name="submit" value="Send">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="reset" class="button" name="reset" value="Clear">

	      </div>

            </form>
          </div>

      <!-- footer ####################################################################################################### --> 
    </div>
  </div>
</div>
<?php
include('footer.php');
?>
