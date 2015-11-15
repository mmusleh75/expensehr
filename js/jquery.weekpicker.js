/*
 * Requires jquery ui
 */

     $(function(){

        $('.week-picker').weekpicker();
    });
 
(function($){
	var $calroot;

    function selectCurrentWeek() {
        window.setTimeout(function () {
            var t = $calroot.find('.ui-datepicker-current-day a');//.addClass('ui-state-active');
			t= t.closest('tr');
			t.find('td>a').addClass('ui-state-active');//.parent().addClass('ui-state-active');
        }, 1);
		
    }
	function onSelect(dateText, inst) { 
        var date = $(this).datepicker('getDate');
        startDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay());
        mon = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() +1);
        tus = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() +2);
        wen = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() +3);
        the = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() +4);
        fri = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() +5);
         endDate = new Date(date.getFullYear(), date.getMonth(), date.getDate() - date.getDay() + 6);

        var dateFormat = inst.settings.dateFormat || $.datepicker._defaults.dateFormat;
            $('#sun').val($.datepicker.formatDate( dateFormat, startDate, inst.settings ));
            $('#mon').val($.datepicker.formatDate( dateFormat, mon, inst.settings ));
            $('#tus').val($.datepicker.formatDate( dateFormat, tus, inst.settings ));
            $('#wen').val($.datepicker.formatDate( dateFormat, wen, inst.settings ));
            $('#the').val($.datepicker.formatDate( dateFormat, the, inst.settings ));
            $('#fri').val($.datepicker.formatDate( dateFormat, fri, inst.settings ));
            $('#sat').val($.datepicker.formatDate( dateFormat, endDate, inst.settings ));
            for(i=1;i<6;i++){
               
                $('#sunday' + i).text($.datepicker.formatDate( dateFormat, startDate, inst.settings ));
                $('#monday' + i).text($.datepicker.formatDate( dateFormat, mon, inst.settings ));
                $('#tusday' + i).text($.datepicker.formatDate( dateFormat, tus, inst.settings ));
                $('#wendnesday' + i).text($.datepicker.formatDate( dateFormat, wen, inst.settings ));
                $('#thursday' + i).text($.datepicker.formatDate( dateFormat, the, inst.settings ));
                $('#friday' + i).text($.datepicker.formatDate( dateFormat, fri, inst.settings ));
                $('#satarday' + i).text($.datepicker.formatDate( dateFormat, endDate, inst.settings ));
            }

		$calroot.trigger('weekselected',{
			start:startDate,
			end:endDate,
			weekOf:startDate
		});
        selectCurrentWeek();
    }
	var reqOpt = {
		onSelect:onSelect,
		showOtherMonths: true,
        selectOtherMonths: true
	};
    $.fn.weekpicker = function(options){
		var $this = this;
		$calroot = $this;
		
		$this.datepicker(reqOpt);
		//events
		$dprow = $this.find('.ui-datepicker');
		
		$dprow.on('mousemove','tr', function() { 
			$(this).find('td a').addClass('ui-state-hover'); 
		});
		$dprow.on('mouseleave','tr', function() { 
			$(this).find('td a').removeClass('ui-state-hover'); 
		});
	};
})(jQuery);