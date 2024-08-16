<form action="myform.php" method="post" autocomplete="on">
    <input type="text" name="username">
    <input type="password" name="password" autocomplete="off">
</form>

<br>
Autofocus
<input type="text" name="query" autofocus="autofocus">
<br>

Placeholder
<input type="text" name="name" size="50" Placeholder="Name and surname">
<br>

Required
<input type="text" name="creditcard" Required="required">
<br>

Formaction
<form action="url1.php" method="post">
    <input type="text" name="field">
    <input type="submit" formaction="url2.php">
</form>

Min/Max
<br>
<form action="url1.php" method="post">
    <input type="time" name="alarm" value="07:00" min="05:00" max="09:00">
    <input type="submit">
</form>

Step
<br>
<input type="time" name="meeting" value="12:00"
min="09:00" max="16:00" step="3600">

<br>
Form
<form action="myscript.php" method="post" id="form1"></form>
<input type="text" name="username" form="form1">

<br>
list<br>
Choose the required site:
<input type="url" name="site" list="links">
<datalist id="links">
    <option label="Google" value="http://google.com"></option>
    <option label="Yahoo!" value="http://yahoo.com"></option>
    <option label="Bing" value="http://bing.com"></option>
    <option label="Ask" value="http://ask.com"></option>
</datalist>

<br>
Choose a color <input type="color" name="color">
<br>
Number/range<br>
<input type="number" name="age">
<input type="range" name="num" min="0" max="100" value="50" step="1">

<br>
Time<br>
<input type="time" name="time" value="12:34">