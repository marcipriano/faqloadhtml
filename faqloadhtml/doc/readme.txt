***** Written by Marcilio Cipriano 
***** Develop for LiveHelperChat
***** Web: http://livehelperchat.com
***** Source: https://github.com/marcipriano/faqloadhtml
---------------------------------------

Use SCEditor to replace textarea input chat for operator and visitor of module lhchat (not implement for chatbox)
Refer : https://summernote.org

	+ load html in module faq to use in livehelperchat
	+ add the Summernote editor to create a knowledge base with more resources

Override : 
	+ Pagelayout for include css and js of summernote
	+ Template faqwidget and form, replace textarea answer to summernote


To activate a module-

Adjust the settings to the following:

'extensions' =>
      array (
        0 => 'faqloadhtml',
),


Note: I used the cdnjs.com site to provide the js and css files. below the https://cdnjs.com/libraries/summernote link. Image upload field has been removed from summernote. so it is possible to use an external link image due to the summer download of the binary image without editor and generate error when saving. 
