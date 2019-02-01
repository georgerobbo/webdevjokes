<?php foreach($jokes as $joke) { ?>
<blockquote>
<p>
	<?=$joke['joketext']?> 
	<a href="editjoke.php?id=<?=$joke['id']?>">edit</a>

</p>
</blockquote>
<?php } ?>
