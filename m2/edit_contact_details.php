<?php
  // open the text file
  $myFile = fopen("mydata.txt", "r") or exit("Can't open file.");

  // pull the contact information from the text file, saving each line into
  // a variable
  $lastname = fgets($myFile);
  $firstname = fgets($myFile);
  $address01 = fgets($myFile);
  $address02 = fgets($myFile);
  $town = fgets($myFile);
  $postcode = fgets($myFile);
  $telephone = fgets($myFile);
  $email = fgets($myFile);

  // close the file
  fclose($myFile);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Create contact</title>
  </head>
  <body>
    <h1>My Contact Details</h1>
    <p>The contact details you have submitted before are shown below. Edit the data and save your changes to the file.</p>

    <form action="save_contact_details.php" method="post">
      <table>
        <tr>
          <td align="right">Last name: </td>
          <td><input type="text" size="20" maxlength="15" name="<?=$lastname?>"></td>
        </tr>
        <tr>
          <td align="right">First name: </td>
          <td><input type="text" side="20" maxlength="15" name="<?=$firstname?>"></td>
        </tr>
        <tr>
          <td align="right">Address line 1: </td>
          <td><input type="text" size="60" maxlength="50" name="<?=$address01?>"></td>
        </tr>
        <tr>
          <td align="right">Address line 2: </td>
          <td><input type="text" size="60" maxlength="50" name="<?=$address02?>"></td>
        </tr>
        <tr>
          <td align="right">Town / city: </td>
          <td><input type="text" size="25" maxlength="20" name="<?=$town?>"></td>
        </tr>
        <tr>
          <td align="right">Post code: </td>
          <td><input type="text" size="12" maxlength="10" name="<?=$postcode?>"></td>
        </tr>
        <tr>
          <td align="right">Telephone: </td>
          <td><input type="text" size="20" maxlength="15" name="<?=$telephone?>"></td>
        </tr>
        <tr>
          <td align="right">E-mail: </td>
          <td><input type="text" size="60" maxlength="50" name="<?=$email?>"></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="2" align="left"><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
