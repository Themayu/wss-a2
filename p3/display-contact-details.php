<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact details</title>
  </head>
  <body>
    <h1>Contact details</h1>

    <table>
      <tr>
        <td align="right">Last name: </td>
        <td><?=$_POST["lastname"]?></td>
      </tr>
      <tr>
        <td align="right">First name: </td>
        <td><?=$_POST["firstname"]?></td>
      </tr>
      <tr>
        <td align="right">Address line 1: </td>
        <td><?=$_POST["address01"]?></td>
      </tr>
      <tr>
        <td align="right">Address line 2: </td>
        <td><?=$_POST["address02"]?></td>
      </tr>
      <tr>
        <td align="right">Town / City: </td>
        <td><?=$_POST["town"]?></td>
      </tr>
      <tr>
        <td align="right">Post code: </td>
        <td><?=$_POST["postcode"]?></td>
      </tr>
      <tr>
        <td align="right">Telephone: </td>
        <td><?=$_POST["telephone"]?></td>
      </tr>
      <tr>
        <td align="right">E-mail: </td>
        <td><?=$_POST["email"]?></td>
      </tr>
    </table>
  </body>
</html>
