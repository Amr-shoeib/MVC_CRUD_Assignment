<div id="content" class="row">
	<ul>
		<?php
		for($i = 0; $i < $rows; $i++) { 
			echo '<a class="col-12 med-col-6" href="index.php?id='.$users[$i]->id.'"><li>'.$user[$i]->Last_Name.' '.$euser[$i]->First_Name.'</li></a>';
		}
		?>
	</ul>
</div>
<div id="content" class="row"><a href="http://localhost:8888/mid_term_assignment/index.php?task=create"> create new user</a></div>