<?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE || // Identifica IE versão 7 ou abaixo
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE || // Identifica IE versão 8 ou acima
    strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== FALSE) { // Identifica IE Edge
?>
<h3>strpos() must have returned non-false</h3>        
<p>You are using Internet Explorer</p>
<?php
    } else {
?>
<h3>strpos() must have returned false</h3>
<p>You are not using Internet Explorer</p>
<?php
    }
?>