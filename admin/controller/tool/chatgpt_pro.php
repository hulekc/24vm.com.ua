<?php
if (defined('CHATGPT_DEV')) {
    $name = 'dev_pro';
} else {
    $name = 'chatgpt_pro' . (int)phpversion();
}
// legacy fix - file not exist anymore
@unlink(DIR_APPLICATION . 'controller/extension/module/chatgpt_pro.php');

include_once(DIR_SYSTEM . "library/chatgpt/$name.php");
