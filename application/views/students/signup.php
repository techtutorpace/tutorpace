<div id="main_contain">
<h2>Buy Now</h2>
<table border="0" cellpadding="2" cellspacing="4">
<tr>
    <td><input type="radio" name="package"></td>
    <td>3 Months Validity - 5 Session - $69</td>
</tr> 
<tr>
    <td><input type="radio" name="package"></td>
    <td>3 Months Validity - 10 Session - $69</td>
</tr>    
<tr>
    <td><input type="radio" name="package"></td>
    <td>3 Months Validity - 5 Session - $69</td>
</tr>    
   
</table>
<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('index.php/news/create') ?>

	<label for="title">Title</label> 
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<textarea name="text"></textarea><br />
	
	<input type="submit" name="submit" value="Create news item" /> 

</form>
<br>
</div>