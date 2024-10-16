<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Convert</title>
</head>
<body>
    <form method="post" action="Convert.php">
        <label >Amount</label>
        <input type="number" name="amount" id="amount">
        <select id="crypto" name="crypto">
            <option value="BTC">BTC</option>
            <option value="ETH">ETH </option>
        </select>
        <button type="submit">Convert</button>
    </form>
    
</body>
</html>