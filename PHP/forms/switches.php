8.00-12.00<input type="radio" name="time" value="1">
12.00-16.00<input type="radio" name="time" value="2" checked="checked">
<label> 16.00-20.00<input type="radio" name="time" value="3"></label>
<input type="hidden" name="submitted"  value="yes">
            <input type="submit" value="IO">
            

<?php 
if (isset($_POST['submitted']))
{echo 'Vi';}
?>