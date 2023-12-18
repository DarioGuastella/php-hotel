<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricerca</title>
</head>
<body>
    <form action="alberghi.php">
        <label for="vote">Cerca per valutazione:</label>
        <input type="number" id="vote" name="vote" min="1" max="5" />
   
        <!-- <label for="parking">Cerca per disponibilità di parcheggio:</label>
        <select name="parking" id="parking">
        <option value="true">Si</option>
        <option value="false">No</option>
        </select> -->
        <button type="submit">Cerca</button>
    </form>
</body>
</html>