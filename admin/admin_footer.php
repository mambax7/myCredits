<?php

/**
 * XOOPS - PHP Content Management System
 * Copyright (c) 2004 <https://xoops.org>
 *
 * Module: myCredits 1.0
 * Licence : GPL
 * Authors :
 *           - solo (www.wolfpackclan.com/wolfactory)
 *            - DuGris (www.dugris.info)
 */
$pathIcon32 = Xmf\Module\Admin::iconUrl('', 32);

echo "<div class='adminfooter'>\n"
     . "  <div style='text-align: center;'>\n"
     . "    <a href='https://xoops.org' rel='external'><img src='{$pathIcon32}/xoopsmicrobutton.gif' alt='XOOPS' title='XOOPS'></a>\n"
     . "  </div>\n"
     . '  ' . _AM_MODULEADMIN_ADMIN_FOOTER . "\n"
     . '</div>';

xoops_cp_footer();

