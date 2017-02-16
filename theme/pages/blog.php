<h1>Posts</h1>

<?php
if(have_posts()){
  echo the_post()->title.'<br />';
  echo the_title().'<br />';
  echo the_date().'<br />';
}else{
  echo '<center>
          <img src="theme/img/drafting-woman.png" class="drafting-woman"/>
        </center>';
}

?>
