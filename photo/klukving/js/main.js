$(document).ready(function() {
    
    function uploadSuccess(file, serverData) {
        $('#images').append($(serverData));
    }
    
    function uploadComplete(file) {
        $('#status').append($(''));
    }
    
    function uploadStart(file) {
        $('#status').append($(''));
        return true;
    }
    
    function uploadProgress(file, bytesLoaded, bytesTotal) {
        $('#status').append($(''));
    }

    function fileDialogComplete(numFilesSelected, numFilesQueued) {
        $('#status').html($(''));
        this.startUpload(); 
    }

    var swfu = new SWFUpload(
        {
            upload_url : "upload-file-mass.php",
            flash_url : "swfupload.swf",
            button_placeholder_id : "uploadButton",
            
            file_size_limit : "2 MB",
            file_types : "*.jpg; *.png; *.jpeg; *.gif",
            file_types_description : "Images",
            file_upload_limit : "0",
            debug: false,

            button_image_url: "button.png",
            button_width : 200,
            button_height : 30,
            button_text_left_padding: 15,
            button_text_top_padding: 2, 
            button_text : "<span class=\"uploadBtn\">Zапхнуть кучу фоток</span>",
            button_text_style : ".uploadBtn { font-size: 18px; font-family: Arial; background-color: #FF0000; }",
            
            file_dialog_complete_handler : fileDialogComplete,

            upload_success_handler : uploadSuccess,
            upload_complete_handler : uploadComplete,
            upload_start_handler : uploadStart,
            upload_progress_handler : uploadProgress
        }
    ); 
});
