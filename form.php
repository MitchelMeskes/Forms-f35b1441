<!DOCTYPE html>
<html>
<h1>E-mail Checker</h1>
<body>
<?php
echo "Vul hier een geldig E-mail in!".PHP_EOL;
?>
    <form>
        <input type="email" id="email" name="email" required
       minlength="0" maxlength="30" size="10">
        <input type="submit" value="Submit" size="5">
    </form>
</body>

</html>