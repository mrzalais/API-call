<?php

declare(strict_types=1);

require_once './Person.php';
require_once './PersonStorage.php';

$personStorage = new PersonStorage();

$name = $_POST['name'] ?? 'Igors';

$person = $personStorage->getByName($name);
echo '<table>
        <tr><td>Name:</td><td><b>' . $person->getName() . '</b></td></tr>
        <tr><td>Age:</td><td><b>' . $person->getAge() . '</b></td></tr>
        <tr><td>Count:</td><td><b>' . $person->getCount() . '</b></td></tr>
      </table><br><hr><br>';

?>

<html>
<body>
<form action="/" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name"/>
    <button type="Submit">
        Submit
    </button>
</form>
</body>
</html>
