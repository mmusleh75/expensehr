<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentallela Alela! | </title>

    <style>
table {
  border-collapse: collapse;
  border: 1px solid #666;
  font: 12px verdana;
}

th {
  background: #def;
}

td, th {
  border-right: 1px solid #ddd;
  border-bottom: 1px solid #bbb;
  padding: 0.3em;
}

input {
  width: 4em;
  text-align: right;
  background: lightyellow;
}

tr td:last-child {
  background: yellow;
  text-align: right;
}

.totalRow {
  text-align: right;
  background: yellow;
}


    </style>
</head>


<body class="nav-md">
<table id="activity_table">
  <tr>
    <th>Activity
    <th>Option 1
    <th>Option 2
    <th>Option 3
    <th>Option 4
    <th>Option 5
    <th>Total
  <tr>
    <td>Activity 1
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
  <tr>
    <td>Activity 2
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
  <tr>
    <td>Pachet de raportări        
    <td>-
    <td>-
    <td>-
    <td>-
    <td>-
    <td>-
  <tr>
    <td>Activity 3
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
  <tr>
    <td>Activity 4
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
  <tr>
    <td>Activity 5
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
  <tr>
    <td>Activity 6
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
  <tr class="totalRow">
    <td>Total
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
    <td><input type="text">
</table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    console.clear();
function randomize() {
  $('input').each(function() {
    $(this).val(Math.round(Math.random()*100));
  });
} //randomize

function updateTotals() {
  $('td:not(:first-child):not(:last-child)',
    '#activity_table tr:eq(1)').each(function() {
    var ci= this.cellIndex;
    var total = 0;
    $('td', 
      '#activity_table tr:gt(0)')
      .filter(function() {
        return this.cellIndex === ci;
      })
      .each(function() {
        var inp= $('input', this);
        if(inp.length) {
          if(!$(this).closest('tr').is(':last-child')) {
            total+= $('input', this).val()*1;
          }
          else {
            $('input', this).val(total);
          }
        }
      });
  });

  $('#activity_table tr:gt(0)').each(function() {
    var total = 0;
    $('td:not(:first-child):not(:last-child)',
      this).each(function() {
      total+= $('input', this).val()*1;
    });
    $('input', this).last().val(total);
  });
};

randomize();
updateTotals();

$('#activity_table input').on('keyup change', updateTotals);
    
</script>
</body>
</html>