<?php 
/**
 * Override this template
 * 
 * <script type="text/javascript" src="<?php echo erLhcoreClassDesign::designJS('js/extension.lhc.js');?>"></script>
 * */
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script type="text/javascript">    
    $(document).ready(function() {
        $('.summernote').summernote({
			dialogsInBody: true,
		});
    });
</script>