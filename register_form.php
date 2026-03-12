<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>VinStreet - Regisztráció</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; padding: 20px; }
        .box { background: white; padding: 20px; border-radius: 8px; max-width: 400px; margin: auto; }
        input, select, button { width: 100%; margin-bottom: 10px; padding: 10px; }
        button { background: black; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Fiók létrehozása</h2>
        <form action="save_user.php" method="POST">
            <input type="text" name="full_name" placeholder="Teljes név" required>
            <input type="email" name="email" placeholder="E-mail cím" required>
            <input type="password" name="password" placeholder="Jelszó" required>
            
            <label>Kedvenc Box típusod:</label>
            <select name="fav_box">
                <option value="sneaky">Sneaky Box</option>
                <option value="tshirt">T-Shirt Box</option>
                <option value="quarterzip">Quarter Zip Box</option>
            </select>

            <button type="submit">Regisztráció</button>
        </form>
    </div>
</body>
</html>