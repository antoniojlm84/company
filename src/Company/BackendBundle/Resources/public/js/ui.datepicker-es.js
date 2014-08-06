/* Inicialización en español para la extensión 'UI date picker' para jQuery. */
jQuery(function($){
        $.datepicker.regional['es'] = {
                clearText: 'Limpiar', clearStatus: '',
                closeText: 'Cerrar', closeStatus: '',
                prevText: 'Anterior', prevStatus: '',
                nextText: 'Siguiente', nextStatus: '',
                currentText: 'Hoy', currentStatus: '',
                monthNames: ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'],
                monthNamesShort: ['ene','feb','mar','abr','may','jun','jul','ago','sep','oct','nov','dic'],
                monthStatus: '', yearStatus: '',
                weekHeader: 'Sm', weekStatus: '',
                dayNames: ['domingo','lunes','martes','mi&eacute;rcoles','jueves','viernes','s&aacute;dabo'],
                dayNamesShort: ['dom','lun','mar','mi&eacute;','juv','vie','s&aacute;b'],
                dayNamesMin: ['do','lu','ma','mi','ju','vi','s&aacute;'],
                dayStatus: 'DD', dateStatus: 'D, M d',
                dateFormat: 'dd/mm/yy', firstDay: 1, 
                initStatus: '', isRTL: false
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
});
