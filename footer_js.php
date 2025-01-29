
        <!-- Bootstrap Atualizado -->
        <script src="<?php echo URLROOT ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- jquery -->
        <script src="<?php echo URLROOT ?>/vendor/jquery/jquery.min.js"></script>
        <!-- input dos formularios -->
        <script src="<?php echo URLROOT ?>/sistema/js/input.js"></script>
        <!-- QUILL -->
        <script src="<?php echo URLROOT ?>/vendor/quilljs/quill.min.js"></script>
        <!-- JQUERY MASK -->
        <script src="<?php echo URLROOT ?>/vendor/jquery/jquery.mask.min.js"></script>

        <!-- teste -->
        <script src="<?php echo URLROOT ?>/sistema/js/funcoes.js"></script>
        <script src="<?php echo URLROOT ?>/sistema/js/Table.js"></script> 
        

        <script>

//Desativa F12 e Clique direito

$(document).keydown(function (event)
    {
        if (event.keyCode == 123)
        { // Prevent F12
            return false;
        }
        else if (event.ctrlKey && event.shiftKey && event.keyCode == 73)
        { // Prevent Ctrl+Shift+I
            return false;
        }
    });

 $(document).on("contextmenu", function (e)
    {
        e.preventDefault();
    });
    
/** TO DISABLE SCREEN CAPTURE **/
document.addEventListener('keyup', (e) => {
    if (e.key == 'PrintScreen') {
        navigator.clipboard.writeText('');
        alert('Screenshots disabled!');
    }
});

/** TO DISABLE PRINTS WHIT CTRL+P **/
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key == 'p') {
        alert('This section is not allowed to print or export to PDF');
        e.cancelBubble = true;
        e.preventDefault();
        e.stopImmediatePropagation();
    }
});
        </script>
      

        


        