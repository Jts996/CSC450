<?php
    require './includes/header.php';

?>

<h1>
    Primary Characteristics<br>
</h1>

<?php
    echo "<table>";
    echo "<tr><th>Name</th><th>Level</th><th>Vitality</th><th>Wisdom</th><th>Strength</th><th>Intelligence</th>
        <th>Chance</th><th>Agility</th><th>AP</th><th>MP</th><th>Critical Hits</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=dofustats_users', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT name, level, vitality, wisdom, strength, intelligence, chance, agility,
            ap, mp, critical_hits FROM characters NATURAL JOIN primary_characteristics WHERE characters.char_id = 
            primary_characteristics.char_id");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
?>

<h1>
    Secondary Characteristics<br>
</h1>

<?php
    echo "<table>";
    echo "<tr><th>Name</th><th>Level</th><th>AP Reduction</th><th>AP Loss Resist</th><th>MP Reduction</th><th>MP Loss Resist</th>
            <th>Initiative</th><th>Prospecting</th><th>Summons</th><th>Heals</th><th>Lock</th><th>Dodge</th></tr>";

    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=dofustats_users', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT name, level, ap_reduction, ap_loss_res, mp_reduction, mp_loss_res, initiative, 
                prospecting,summons, heals, catch, dodge 
                FROM characters NATURAL JOIN secondary_characteristics WHERE characters.char_id = secondary_characteristics.char_id");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
?>

<h1>
    Damages<br>
</h1>

<?php
    echo "<table>";
    echo "<tr><th>Name</th><th>Level</th><th>Damage</th><th>Power</th><th>Critical Damage</th><th>Neutral Damage</th>
            <th>Earth Damage</th><th>Fire Damage</th><th>Water Damage</th><th>Air Damage</th><th>Reflect</th><th>
            Trap Damage</th><th>Trap Power</th><th>Pushback Damage</th></tr>";

    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=dofustats_users', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT name, level, damage, power, critical_damage, neutral_damage, earth_damage, 
                fire_damage, water_damage, air_damage, reflect, trap_damage, trap_power, pushback_damage 
                FROM characters NATURAL JOIN damages WHERE characters.char_id = damages.char_id");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
?>

<h1>
    Resistances<br>
</h1>

<?php
    echo "<table>";
    echo "<tr><th>Name</th><th>Level</th><th>Neutral Resist Fixed</th><th>Neutral Resist Percent</th><th>Earth Resist Fixed</th>
            <th>Earth Resist Percent</th><th>Fire Resist Fixed</th><th>Fire Resist Percent</th><th>Water Resist Fixed</th>
            <th>Water Resist Percent</th><th>Air Resist Fixed</th><th> Air Resist Percent</th><th>Critical Resist</th><th>Pushback Resist</th></tr>";

    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=dofustats_users', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT name, level, neutral_res_fixed, neutral_res_perc, earth_res_fixed, 
                earth_res_perc, fire_res_fixed, fire_res_perc, water_res_fixed, water_res_perc, air_res_fixed, air_res_perc, 
                critical_res_fixed, pushback_res_fixed 
                FROM characters NATURAL JOIN resistances WHERE characters.char_id = resistances.char_id");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";

    include './includes/footer.php';
?>