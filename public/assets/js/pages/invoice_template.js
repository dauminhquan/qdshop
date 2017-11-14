/* ------------------------------------------------------------------------------
*
*  # Invoice template
*
*  Specific JS code additions for invoice_template.html page
*
*  Version: 1.0
*  Latest update: Aug 1, 2015
*
* ---------------------------------------------------------------------------- */

$(function() {

    // Setup CKEditor
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.dtd.$removeEmpty['i'] = false;
    CKEDITOR.config.startupShowBorders = false;
    CKEDITOR.config.extraAllowedContent = 'table(*)';


    // Initialize inline editor
    var editor = CKEDITOR.inline('invoice-editable');
    

    CKEDITOR.on('instanceReady', function (ev) {

        // Show this "on" button.
        document.getElementById('readOnlyOn').style.display = '';

        // Event fired when the readOnly property changes.
        editor.on('readOnly', function() {
        	document.getElementById('readOnlyOn').style.display = this.readOnly ? 'none' : '';
        	document.getElementById('readOnlyOff').style.display = this.readOnly ? '' : 'none';
        });
    });


    // Toggle state
    function toggleReadOnly(isReadOnly) {
    	editor.setReadOnly(isReadOnly);
    }
    document.getElementById('readOnlyOn').onclick=function(){ toggleReadOnly() }
    document.getElementById('readOnlyOff').onclick=function(){ toggleReadOnly(false) }
});
