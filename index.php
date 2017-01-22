<html>
 <head>
    <title>Tip Calculator</title>
      <style type="text/css">
      body {
        font-family: monospace;
        text-align: center;
        background-color: #00FFFF;
      }
      </style>
  </head>
  <body>
    <h1>Tip Calculator</h1>
    <form method="get" action="tip.php">
      <p> <b>Bill subtotal: </b>
        <input type="text" name="bill">
      </p>
      <p> <b>Tip percentage: </b>
        <select type="select" name="percent">
          <option value="0.10">10%</option>
          <option value="0.15">15%</option>
          <option value="0.20">20%</option>
        </select>
      </p>
      <p> <b>Split: </b>
        <input type="text" name="split">
      </p>
      <input type="submit" name="submit">
    </form>
  </body>
</html>