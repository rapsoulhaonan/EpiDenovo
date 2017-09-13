<?php
include('header.php');

?>
      <div class="columns large-12 content ">
        <h1 class="page-title">Search</h1>

	  <!--
        <div>
          <h2 class="sub-title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident </h2>

        </div>
	  -->

        <div class="row contact-form ">
          <div class="form_center">
	  <div class="search_logo">
      	  <img src="images/search_logo.png" alt="">
	  </div>

	  <div class="search_txt">
	  <p>The input formats example: <a onclick="javascript: document.getElementById('gene_symbol').value='Vmn1r217\nKdm7a'" >Gene Symbol</a></p>
	  </div>

            <form id="contact-form" method="post" enctype="multipart/form-data" accept-charset="utf-8" action="search_result.php">

	    <!--
              <input type="text" name="name" placeholder="Name:">
              <input type="text" name="email" placeholder="Email:">
              <input type="text" name="subject" placeholder="Subject:">
	      -->

              <textarea  name="gs_message" id="gene_symbol" placeholder="Gene Symbol:"></textarea>

	      <div class="btn_center">
              <input type="submit" class="button" name="submit" value="Send">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="reset" class="button" name="reset" value="Clear">
	      </div>
            </form>
          </div>
        </div>

      </div>

      <div class="row collapse">
        <div class="columns large-12"> </div>
      </div>

<?php
include('footer.php');
?>
