function updateTotals() {
  $('td:not(:first-child):not(:last-child)',
    '#activity_table tr:eq(3)').each(function() {
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


updateTotals();

$('#activity_table input').on('keyup change', updateTotals);

function updateTotals1() {
  $('td:not(:first-child):not(:last-child)',
    '#activity_table1 tr:eq(3)').each(function() {
    var ci= this.cellIndex;
    var total = 0;
    $('td', 
      '#activity_table1 tr:gt(0)')
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

  $('#activity_table1 tr:gt(0)').each(function() {
    var total = 0;
    $('td:not(:first-child):not(:last-child)',
      this).each(function() {
      total+= $('input', this).val()*1;
    });
    $('input', this).last().val(total);
  });
};


updateTotals1();

$('#activity_table1 input').on('keyup change', updateTotals1);

