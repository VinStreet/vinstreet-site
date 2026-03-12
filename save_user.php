<?php
// 1. Kapcsolódás szimulálása (Ide jön majd a MySQL kapcsolat)
// include 'db.php'; 

// 2. Adatok átvétele a HTML formból
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $box = $_POST['fav_box'];
    
    // A jelszót sosem simán, hanem titkosítva (hash) kezeljük
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // 3. Logika (Mit csináljon az adattal?)
    // Később itt lesz az: INSERT INTO users ... SQL parancs.
    
    echo "<h1>VinStreet Rendszer üzenet:</h1>";
    echo "Szia $name! <br>";
    echo "Az adataidat megkaptuk ($email). <br>";
    echo "A választott kategóriád: $box <br>";
    echo "<hr>";
    echo "<strong>Státusz:</strong> A PHP kód sikeresen lefutott, vár az adatbázisra.";
} else {
    echo "Hiba: Az űrlapot nem küldték el!";
}
?>