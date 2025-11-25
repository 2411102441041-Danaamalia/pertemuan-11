<?php
$jumlah = 0;

echo "<h2>Pasangan nilai x, y, z yang memenuhi x + y + z = 25</h2>";

for ($x = 1; $x <= 23; $x++) {         // x minimal 1, maksimal 23
    for ($y = 1; $y <= 24 - $x; $y++) { // y minimal 1, maksimal 24-x
        for ($z = 1; $z <= 25 - $x - $y; $z++) { // z minimal 1, maksimal 25-x-y
            if ($x + $y + $z == 25) {
                echo "x = $x, y = $y, z = $z <br />";
                $jumlah++;
            }
        }
    }
}

echo "<h3>Jumlah penyelesaian: $jumlah</h3>";
?>
