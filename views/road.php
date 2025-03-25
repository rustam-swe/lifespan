<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h2 style="text-align:center; border: 1px dashed red; padding:20px 0;">Road</h2>
    <div style="display:flex; justify-content:space-between; padding: 20px 40px;">
      <div>
        <label for="avgTotal">Average total travel hours :</label>
        <input type="text" id="avgTotal" name="avgTotal" value="<?php echo ' '.$result["avgTotal"].' hours'; ?>" readonly>
      </div>
      <div>
        <label for="Done">You traveled :</label>
        <input type="text" id="Done" name="Done" value="<?php echo ' '.$result["Done"].' hours'; ?>" readonly>
      </div>
      <div>
        <label for="leftWork">You can travel another :</label>
        <input type="text" id="Left" name="Left" 
          value="<?php echo ($result["Left"] < 0) ? 'Expired' : ' ' . $result["Left"] . ' hours'; ?>" 
          readonly>
      </div>
    </div>
    <table>
      <thead>
        <tr>
          <th>avgTotal</th>
          <th>Done</th>
          <th>Left</th>
        </tr> 
      </thead>
      <tbody>
        
        <tr>
          <td><?php echo $result['avgTotal']; ?></td>
          <td><?php echo $result['Done']; ?></td>
          <td><?php echo $result['Left']; ?></td>
        </tr>
      </tbody>
    </table>
</body>
</html>
