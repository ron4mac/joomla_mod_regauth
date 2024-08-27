<?php
/**
* @package		mod_regauth
* @copyright	Copyright (C) 2024 RJCreations. All rights reserved.
* @license		GNU General Public License version 3 or later; see LICENSE.txt
* @since		1.0.0
*/
\defined('_JEXEC') or die;

?>
<script>
	function mod_regauth_C2C (elm) {
		let lnk = elm.previousElementSibling.href;
		navigator.clipboard.writeText(lnk);
		elm.innerHTML = '<i class="fa fa-check" style="color:lightgreen"></i>';
	}
</script>
<div class="rjc-mod-regauth">
    <div class="footer1"><?php echo $lineone; ?> <a href="javascript:void(0)" onclick="mod_regauth_C2C(this)"><i class="far fa-clipboard"></i></a></div>
</div>
