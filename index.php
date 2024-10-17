<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Convert</title>
</head>
<body>
<!-- action is post for not showiing in the url action is where the data is will going -->
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