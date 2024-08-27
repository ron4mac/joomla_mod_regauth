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
	function mod_regauth_C2Cemb (elm) {
		let lnk = elm.previousElementSibling.href;
		navigator.clipboard.writeText(lnk);
		elm.innerHTML = '<i class="fas fa-clipboard" style="color:orange"></i>';
	}
</script>
<span><?php echo $lineone; ?> <a href="javascript:void(0)" onclick="mod_regauth_C2Cemb(this)"><i class="far fa-clipboard"></i></a></span>
