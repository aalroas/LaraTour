<?php

// This file is for GeneralSiteSettings also i added it in
//    "autoload": {
//         "files": ["app/Helpers/Helper.php"]
//     },

use App\Model\admin\Setting;

function GeneralSiteSettings($var)
{
        $Setting = Setting::find(1);
        return $Setting->$var;
}
