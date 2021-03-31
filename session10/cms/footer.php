</div>
		<div id="sidebar">
		<!-- منتهي -->   
			<h4>القائمة الجابنية</h4>
			<ul>
				
				<?php
		$q="select * from rightmenu where active=1 ";
		$reuslt=$db->query($q) or die($db->error);
		
		while($row=$reuslt->fetch_object()){
		echo "<li><a href='index.php ?p={$row->link}' class='selected' title='{$row->title}'> {$row->name} </a>
		</li>";
	}
	?>
				
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer">
	<p>&copy; 2021 Copyrights:<a href="https://www.facebook.com/mohamed.abdo1998/" title="Mohamed website">Developed By Mohamed Ayad</a>		</p>

	</div>
			
</div>
</body>
</html>