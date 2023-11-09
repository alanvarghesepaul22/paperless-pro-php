<?php
if (isset($_POST['sem_select'])) {
    $sem = $_POST['sem_select'];
    echo $sem;
}
?>

<html>
<form action="" method="post" >
    <select name="sem_select" onchange="this.form.submit()">
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        <option value="S4">S4</option>
        <option value="S5" selected>S5</option>
        <option value="S6">S6</option>
        <option value="S7">S7</option>
        <option value="S8">S8</option>
    </select>
</form>

</html>