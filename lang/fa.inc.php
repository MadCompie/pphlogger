<?php
/* Persian language localization
 *
 * $Id: fa.inc.php 2727 2004-05-24 10:12:05Z cvs_iezzi $
 * credits to: Sohail Salehi <sohail_salehi@hotmail.com>
 */


$strCharset          = "utf-8";
$strDirection        = "rtl";
$strThousandSep      = ",";
$strDate             = "m/d/Y";
$strDate2            = "M d, Y";
$strNumThousandsSep  = ',';
$strNumDecimalSep    = '.';
$strByteUnits        = array('Bytes', 'KB', 'MB', 'GB');

$strOn               = "ÑæÔä";
$strOff              = "ÎÇãæÔ";
$strEnable           = "İÚÇá";
$strEnabled          = "İÚÇá ÔÏå";
$strDisable          = "ÛíÑİÚÇá";
$strDisabled         = "ÛíÑİÚÇá ÔÏå";
$strDellog           = "ÍĞİ ÓæÇÈŞ";
$strTopOfPage        = "ÈÇáÇí ÕİÍå";
$strTotal            = "ÌãÚ";
$strHits             = "ãÑÇÌÚÇÊ";
$strUniqs            = "íßÊÇåÇ";
$strUniq             = "íßÊÇ";
$strPageimpressions  = "ãÑÇÌÚÇÊ ÕİÍå";
$strDomains          = "ÏÇãäå åÇ";
$strConfiguration    = "íßÑÈäÏí";
$strCurrConfig       = "íßÑÈäÏí ÌÇÑí:";
$strUsername         = "äÇã ßÇÑÈÑ";
$strPassword         = "ßáãå ÑãÒ";
$strDelete           = "ÍĞİ";
$strUser             = "ßÇÑÈÑ";
$strUseraccount      = "ÇßÇäÊ ßÇÑÈÑ";
$strUseraccounts     = "ÇßÇäÊ ßÇÑÈÑÇä";
$strFrom             = "ÇÒ";
$strTo               = "Èå";
$strTo2              = "Èå";
$strEdit             = "æíÑÇíÔ";
$strSet              = "ÊäÙíã";
$strMove             = "ÇäÊŞÇá";
$strDefault          = "íÔ İÑÖ";
$strCreateNew        = "ÇíÌÇÏ ãÌÏÏ";
$strSave             = "ĞÎíÑå";
$strUnknown          = "äÇÔäÇÎÊå";
$strUndefined        = "ÊÚÑíİ äÔÏå";
$strCache            = "cache";
$strSeconds          = "ËÇäíå åÇ";
$strDatabase         = "ÇíÇå ÏÇÏå";
$strTable            = "ÌÏæá";
$strCalc             = "calc";
$strStep             = "ãÑÍáå";
$strSystem           = "ÓíÓÊã";

// These are displayed in the timezone select box
$loca['tz']['-12']   = "(GMT -12:00 hours) Eniwetok, Kwajalein";
$loca['tz']['-11']   = "(GMT -11:00 hours) Midway Island, Samoa";
$loca['tz']['-10']   = "(GMT -10:00 hours) Hawaii";
$loca['tz']['-9']    = "(GMT -9:00 hours) Alaska";
$loca['tz']['-8']    = "(GMT -8:00 hours) Pacific Time (US &amp; Canada), Tijuana";
$loca['tz']['-7']    = "(GMT -7:00 hours) Mountain Time (US &amp; Canada), Arizona";
$loca['tz']['-6']    = "(GMT -6:00 hours) Central Time (US &amp; Canada), Mexico City";
$loca['tz']['-5']    = "(GMT -5:00 hours) Eastern Time (US &amp; Canada), Bogota, Lima, Quito";
$loca['tz']['-4']    = "(GMT -4:00 hours) Atlantic Time (Canada), Caracas, La Paz";
$loca['tz']['-3.5']  = "(GMT -3:30 hours) Newfoundland";
$loca['tz']['-3']    = "(GMT -3:00 hours) Brassila, Buenos Aires, Georgetown, Falkland Is";
$loca['tz']['-2']    = "(GMT -2:00 hours) Mid-Atlantic, Ascension Is., St. Helena";
$loca['tz']['-1']    = "(GMT -1:00 hours) Azores, Cape Verde Islands";
$loca['tz']['0']     = "(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia";
$loca['tz']['1']     = "(GMT +1:00 hours) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome";
$loca['tz']['2']     = "(GMT +2:00 hours) Cairo, Helsinki, Kaliningrad, South Africa";
$loca['tz']['3']     = "(GMT +3:00 hours) Baghdad, Riyadh, Moscow, Nairobi";
$loca['tz']['3.5']   = "(GMT +3:30 hours) Tehran";
$loca['tz']['4']     = "(GMT +4:00 hours) Abu Dhabi, Baku, Muscat, Tbilisi";
$loca['tz']['4.5']   = "(GMT +4:30 hours) Kabul";
$loca['tz']['5']     = "(GMT +5:00 hours) Ekaterinburg, Islamabad, Karachi, Tashkent";
$loca['tz']['5.5']   = "(GMT +5:30 hours) Bombay, Calcutta, Madras, New Delhi";
$loca['tz']['6']     = "(GMT +6:00 hours) Almaty, Colombo, Dhaka, Novosibirsk";
$loca['tz']['6.5']   = "(GMT +6:30 hours) Rangoon";
$loca['tz']['7']     = "(GMT +7:00 hours) Bangkok, Hanoi, Jakarta";
$loca['tz']['8']     = "(GMT +8:00 hours) Beijing, Hong Kong, Perth, Singapore, Taipei";
$loca['tz']['9']     = "(GMT +9:00 hours) Osaka, Sapporo, Seoul, Tokyo, Yakutsk";
$loca['tz']['9.5']   = "(GMT +9:30 hours) Adelaide, Darwin";
$loca['tz']['10']    = "(GMT +10:00 hours) Canberra, Guam, Melbourne, Sydney, Vladivostok";
$loca['tz']['11']    = "(GMT +11:00 hours) Magadan, New Caledonia, Solomon Islands";
$loca['tz']['12']    = "(GMT +12:00 hours) Auckland, Wellington, Fiji, Marshall Island";

// Language selection
$loca['lang']['bh']  = "Bosnian";
$loca['lang']['cn']  = "Chinese Simplified";
$loca['lang']['de']  = "German";
$loca['lang']['dk']  = "Danish";
$loca['lang']['en']  = "English";
$loca['lang']['es']  = "Spanish";
$loca['lang']['fa']  = "Persian";
$loca['lang']['fr']  = "French";
$loca['lang']['gr']  = "Greek";
$loca['lang']['it']  = "Italian";
$loca['lang']['jp']  = "Japanese";
$loca['lang']['lt']  = "Lithuanian";
$loca['lang']['lv']  = "Latvian";
$loca['lang']['nl']  = "Dutch";
$loca['lang']['no']  = "Norwegian";
$loca['lang']['pl']  = "Polish";
$loca['lang']['po']  = "Brazilian Portugese";
$loca['lang']['ro']  = "Romanian";
$loca['lang']['ru']  = "Russian";
$loca['lang']['se']  = "Swedish";
$loca['lang']['tr']  = "Turkish";
$loca['lang']['tw']  = "Traditional Chinese";

// setup.php
$strSetup                                         = "ÊäÙíã";
$loca['setup']['header1']                         = "ÊäÙíãÇÊ ãÏíÑíÊí";
$loca['setup']['header2']                         = "ÊäÙíãÇÊ Úãæãí";
$loca['setup']['header3']                         = "ÊäÙíãÇÊ ÎÇÕ";
$loca['setup']['header4']                         = "ÊäÙíãÇÊ ÑÇİíßí";
$loca['setup']['header5']                         = "ãÍÏæÏå ÇØáÇÚÇÊ / ÔäÇÓÇíí ÎæÏßÇÑ";
$loca['setup']['header6']                         = "ãÍÏæÏå äãÇíÔ";
$loca['setup']['header7']                         = "ÊäÙíãÇÊ äãÇíÔí";
$loca['setup']['intro_txt']                       = "Çíä ŞÓãÊ Èå ÔãÇ ßãß ãí ßäÏ ÊÇ ãÊÛíÑåÇí áÇÒã ÑÇ ÊäÙíã ßäíÏ. ÔãÇ Èå ÕİÍÇÊ ãÊÚÏÏí åÏÇíÊ ÎæÇåíÏ ÔÏ. åÑ ÕİÍå ÈÑÇí ÇäÌÇã ÊäÙíãÇÊ íß ŞÓãÊ Èå ßÇÑ ãí ÑæÏ.";
$loca['setup']['step0_txt']                       = "<b>License</b> -- áØİÇ GNU General Public License ÑÇ ÈÎæÇäíÏ. PowerPhlogger Èå ÚäæÇä íß ÈÑäÇãå ÑÇíÇä äæÔÊå ÔÏå ÇÓÊ, ÇãÇ ÈÑÇí ÊÛííÑ æ ÊæÒíÚ Âä äßÇÊí ÈÇíÏ ÑÚÇíÊ ÔæäÏ.";
$loca['setup']['step1_txt']                       = "<b>ÊäÙíãÇÊ Úãæãí</b> -- áØİÇ ßáíå İíáÏåÇí Çíä ÕİÍå ÑÇ Ñ ßÑÏå æ ÇÒ ÕÍÊ ãØÇáÈ ãØãÆä ÔæíÏ. ÇÑ ÇÒ ÊäÙíã ÎÇÕí ãØãÆä äíÓÊíÏ Âä ÑÇ ÏÑÎÇáÊ íÔ İÑÖ ÑåÇ ßäíÏ.";
$loca['setup']['step2_txt']                       = "<b>ÊäÙíãÇÊ ÏáÎæÇå</b> -- ÈíÔÇÑ Çíä ÊäÙíãÇÊÈÇíÏ ÏÑ ÍÇáÊ íÔİÑÖ ÈÇŞí ÈãÇääÏ. ÊäåÇ Òíäå åÇíí ßå ÇÒ ÂäåÇ ãØãÆä åÓÊíÏ ÑÇ ÊäÙíã ßäíÏ.";
$loca['setup']['step3_txt_a']                     = "<b>ÊäÙíãÇÊ ÈÇ ãæİŞíÊ ÇäÌÇã ÔÏ</b> -- Çßäæä ãí ÊæÇäíÏ ßÇÑ ÈÇ  PowerPhlogger ÑÇ ÔÑæÚ ßäíÏ.<br /><br />áØİÇ Èå ÎÇØÑ ÏÇÔÊå ÈÇÔíÏ ßå äÇã ÔÇÎå /admin  ÑÇ ÊÛííÑ ÏåíÏ æ Âä ÑÇ ÈÇ htaccess Çíãä ßäíÏ.<br />ÈÑÇí ßÓÈ ÇØáÇÚÇÊ ÈíÔÊÑ ãÓÊäÏÇÊ Ñæå ÑÇ Èå ÏŞÊ ãØÇáÚå İÑãÇííÏ";
$loca['setup']['step3_txt_b']                     = "Çßäæä ãí ÊæÇäíÏ ÇßÇäÊ ßÇÑÈÑÇä ÑÇ ÊäÙíã İÑãÇííÏ";

$loca['setup']['pphlogger_location']['title']     = "ãÓíÑ PowerPhlogger";
$loca['setup']['pphlogger_location']['descr']     = "URL ãÑÈæØå Èå ÔÇÎå ÇÕáí PowerPhlogger ";
$loca['setup']['admin_mail']['title']             = "ÂÏÑÓ ÇÓãÓá ãÏíÑ";
$loca['setup']['admin_mail']['descr']             = "";
$loca['setup']['admin_name']['title']             = "äÇã ãÏíÑ";
$loca['setup']['admin_name']['descr']             = "";
$loca['setup']['admin_pw']['title']               = "ßáãå ÑãÒ ãÏíÑ";
$loca['setup']['admin_pw']['descr']               = "ÍĞİ ßÇÑÈÑÇä";
$loca['setup']['server_GMT']['title']             = "ÓÇÚÊ ãÍáí ÓíÓÊã";
$loca['setup']['server_GMT']['descr']             = "ÓÇÚÊ ãÍáí ÓÑæÑ ÔãÇ";
$loca['setup']['admin_GMT']['title']              = "ÓÇÚÊ ãÍáí ãÏíÑ";
$loca['setup']['admin_GMT']['descr']              = "ÓÇÚÊ ãÍáí ÔãÇ";
$loca['setup']['default_lang']['title']           = "ÒÈÇä íÔ İÑÖ";
$loca['setup']['default_lang']['descr']           = "";
$loca['setup']['cssid']['title']                  = "Style Sheet íÔ İÑÖ";
$loca['setup']['cssid']['descr']                  = "";
$loca['setup']['signup_ok']['title']              = "İÚÇá ßÑÏä ŞÇÈáíÊ ÎæÏÊäÙíãí ßÇÑÈÑ";
$loca['setup']['signup_ok']['descr']              = "ÂíÇ ãí ÎæÇåíÏ ÕİÍå ÊäÙíã ßÇÑÈÑ ÌÏíÏ ÈÑÇí ßáíå ßÇÑÈÑÇä ŞÇÈá ÏÓÊÑÓ ÈÇÔÏ?";
$loca['setup']['master_timeout']['title']         = "ãÍÏæÏíÊ ÒãÇäí ßÇÑÈÑ";
$loca['setup']['master_timeout']['descr']         = "[Èå ËÇäíå, íÔ İÑÖ = 30min = 1800]";
$loca['setup']['traceroute']['title']             = "ÂÏÑÓ URL ßÇÑÈÑ";
$loca['setup']['traceroute']['descr']             = "ÇÑ ÈÑÇí ÑÏíÇÈí ãÓíÑåÇ ÓÑæíÓ ÏíÑí ãÔäÇÓíÏ, Âä ÑÇ ÏÑ Çíä ŞÓãÊ æÇÑÏ ßäíÏ. ÈÑÇí ÇÓÊİÇÏå ÇÒ ÓÑæíÓ ÑÏíÇÈ íÔ İÑÖ ÓÑæÑ Çíä ŞÓãÊ ÑÇ ÎÇáí ÈĞÇÑíÏ.";
$loca['setup']['pass_length']['title']            = "Øæá ßáãå ÑãÒ";
$loca['setup']['pass_length']['descr']            = "Øæá ßáãå ÑãÒ (áØİÇ ÚÏÏí ÈÒÑÊÑ ÇÒ 15 ÇäÊÎÇÈ äßäíÏ!)";
$loca['setup']['pw_privacy']['title']             = "ÎÕæÕí ßÑÏä ßáãå ÑãÒ";
$loca['setup']['pw_privacy']['descr']             = "ÇÑ ÈÑÇí Çíä ŞÓãÊ ãŞÏÇÑ false ÑÇ ÇäÊÎÇÈ ßäíÏ, íß BCC: íß ÊÇííÏíå ßáãå ÑãÒ ãÊäí Èå ÂÏÑÓ Çíãíá ãÏíÑ ÇÑÓÇá ãí ÔæÏ. Èå ÎÇØ Ñ ÑÚÇíÊ ÍÑíã ÇİÑÇÏ Çíä Òíäå ÏÑ ÍÇáÊ íÔ İÑÖ true ÇÓÊ.";
$loca['setup']['cache_calendar']['title']         = "ÍÇİÙå ÊŞæíã";
$loca['setup']['cache_calendar']['descr']         = "ãŞÏÇÑ ËÇäíå ÑÇ ÏÑ Çíä ŞÓãÊ ÊÇííä ßäíÏ. ÇÑ ÚÏÏ 0 (default) ÑÇ ÇäÊÎÇÈ ßäíÏ, ÊŞæíã ÇÒ ÊÇÈÚ Èå ÑæÒ ÑÓÇäí íÔ İÑÖ ÇÓÊİÇÏå ãí ßäÏ (ÇÓÊİÇÏå ÇÒ Çíä ÍÇáÊ ÇßíÏÇ ÊæÕíå ãí ÑÏÏ!)";
$loca['setup']['mxlookup']['title']               = "MX ÈÑÑÓí";
$loca['setup']['mxlookup']['descr']               = "ÈÑÇí åæÔãäÏ ÊÑ ßÑÏä ÚãáßÑÏ ÊÇííÏ ßáãå ÑãÒ Çíä ŞÓãÊ ÑÇ İÚÇá ßäíÏ. ÏÑ ÕæÑÊ İÚÇá ßÑÏä Çíä ŞÓãÊ ÊÇÈÚ ÊÇííÏ ßääÏå ÇÒ æÌæÏ ÏÇãäå ÂÏÑÓ Çíãíá ãØãÆä ãí ÔæÏ ÓÓ Çíãíá ÑÇ ÇÑÓÇá ãí ßäÏ. ãŞÏÇÑ íÔ İÑÖ false ÇÓÊ ÒíÑÇ ÈÑÎí ÇÒ äÇÑÔ åÇí ÊÍÊ æíäÏæÒ PHP  ÇÒ Çíä æíí ÔÊíÈÇäí äãí ßääÏ!";
$loca['setup']['loopback_bug']['title']           = "ÒÇÑÔ ÎÕÇ";
$loca['setup']['loopback_bug']['descr']           = "ÊäåÇ åäÇãí ÇÒ Çíä æíí ÇÓÊİÇÏå ßäíÏ ßå ÇÒ ÓíÓÊã f2s íÇ ÓÇíÑ ÓíÓÊã åÇí ãíÒÈÇäí ãÔÇÈå ÇÓÊİÇÏå ãí ßäíÏ æ ÇØáÇÚÇÊ  IP/proxy äÇÏÑÓÊ ÏÑíÇİÊ ãí äãÇííÏ!";
$loca['setup']['mysqldump_on']['title']           = "ÎÑæÌí ÏÓÊæÑÇÊ MySQL";
$loca['setup']['mysqldump_on']['descr']           = "İÚÇá / ÛíÑİÚÇá ßÑÏä ãÑæÑ ÏÓÊæÑÇÊ MySQL ÈÑÇí ßáíå ßÇÑÈÑÇä";
$loca['setup']['md5form']['title']                = "İÑã æÑæÏ MD5";
$loca['setup']['md5form']['descr']                = "İÚÇá / ÛíÑİÚÇá ßÑÏä md5-encryption (using JS) ÏÑ ŞÓãÊ æÑæÏ Èå ÓíÓÊã";
$loca['setup']['mail_mod']['title']               = "ÓíÓÊã ÇÑÓÇá äÇãå";
$loca['setup']['mail_mod']['descr']               = "äæÚ ÓíÓÊãí ßå ÈÑÇí ÇÑÓÇá äÇãå åÇí ÊÇííÏíå ßáãå ÑãÒ æ İÇíá pphlogger.js ÏæÓÊ ÏÇÑíÏ ÏÑ Çíä ÌÇ ÊÚííä ßäíÏ [libmail|htmlmime|plain]";
$loca['setup']['GD_enabled']['title']             = "İÚÇá ßÑÏä GD";
$loca['setup']['GD_enabled']['descr']             = "ÇÑ äãí äãí ÊæÇäíÏ ÇÒ ßÊÇÈÎÇäå GD-lib ÎæÏ ÇÓÊİÇÏå ßäíÏ íÇ ÇÑ ãíÒÈÇä ÏÇãäå ÔãÇ äãí ÎæÇåÏ Çíä æíí İÚÇá ÈÇÔÏ, ãí ÊæÇäíÏ ÏÑ PPhlogger Çíä æíí ÑÇ ÛíÑ İÚÇá ßäíÏ. ÏÑ Çíä ÕæÑÊ ÈÓíÇÑí ÇÒ æíí åÇí ÊÕæíÑí Çíä ÈÑäÇãå ÑÇ ÇÒ ÏÓÊ ÎæÇåíÏ ÏÇÏ!";
$loca['setup']['gd_img_type']['title']            = "äæÚ ÊÕÇæíÑ GD";
$loca['setup']['gd_img_type']['descr']            = "GD-library: ÏÑ ÕæÑÊ ÈÑæÒ ãÔßá Çíä Òíäå ÑÇ ÈÇ ãŞÏÇÑí ÕÍíÍ ÊäÙíã ßäíÏ. ÈÑÇí íÏÇ ßÑÏä İÑãÊ ÕÍíÍ ãŞÏÇÑ íÔ İÑÖ auto ÇÓÊ. [auto|png|gif|jpeg]";
$loca['setup']['Freetype_enabled']['title']       = "İÚÇá ßÑÏä Freetype";
$loca['setup']['Freetype_enabled']['descr']       = "IÇÑ äãí ÊæÇíÏ Freetype-library ÑÇ ÇÌÑÇ ßäíÏ oãí ÊæÇäíÏ Çíä æíí ÑÇ ÛíÑ İÚÇá äãÇííÏ. ßÇÑÈÑÇäí ßå äãí ÊæÇääÏ ÇÒ İæäÊåÇ  TTFf ÈÑÇí äãÇíÔ ÇÑŞÇã ÔãÇÑäÏå ÎæÏ ÇÓÊİÇÏå ßääÏ ãí ÊæÇääÏ ÇÒ İæäÊåÇí ÏÑæä ÈÑäÇãå ÇÓÊİÇÏå äãÇíäÏ.";
$loca['setup']['ttf_location']['title']           = "ÂÏÑÓ TTF";
$loca['setup']['ttf_location']['descr']           = "ÇÑ ŞÇÏÑ Èå ãÔÇåÏå ÊÕæíÑ ÔãÇÑäÏå äíÓÊíÏ æ ÇÒ  GD 2.x íÇ GD 1.x ÇÓÊİÇÏå ãí ßäíÏ, ÓÚí ßäíÏ ãÓíÑí ßÇãá æ ãÔÎÕ Èå ÂÏÑÓ İæäÊåÇí TTF  ÏÑ ÓÑæÑ ÊÚííä ßäíÏ. ÏÑ ÛíÑ Çíä ÕæÑÊ ãŞÏÇÑ Çíä Òíäå ÑÇ ÊÛííÑ äÏåíÏ! [relative|/your/absolute/path/to/ttf_fonts/]";
$loca['setup']['cleanup_lim']['title']            = "ãÍÏæÏå Çß ßÑÏä";
$loca['setup']['cleanup_lim']['descr']            = "ÈÇÒå ÒãÇäí ßå ÈÇ ÏÑ äÙÑ ÑİÊä Âä ßÇÑÈÑÇäí ßå ãÔÎÕÇÊ ÎæÏ ÑÇ ÊÇííÏ äßÑÏå ÇäÏ ÈÇíÏ Çß ÔæäÏ [hours]";
$loca['setup']['cleanup_old']['title']            = "Çß ßÑÏä ŞÏíãí åÇ";
$loca['setup']['cleanup_old']['descr']            = "ÈÚÏ ÇÒ äÏ ÑæÒ ßÇÑÈÑÇä ËÈÊ ÔÏå Çí ßå Èå ÓíÓÊã æÇÑÏ äÔÏå Çä ÈÇíÏ Çß ÔæäÏ? [days]";
$loca['setup']['dellog_global']['title']          = "Çß ßÑÏä ÓæÇÈŞ";
$loca['setup']['dellog_global']['descr']          = "IÇÑ ãŞÏÇÑ Çíä Òíäå false ÈÇÔÏ åÑ ßÇÑÈÑ ãí ÊæÇäÏ ÎæÏÔ ÊäÙíãÇÊ ÏáÎæÇåÔ ÑÇ ÇäÌÇã ÏåÏ. ÇÑ ãŞÏÇÑ Çíä Òíäå true ÈÇÔÏ , ãí ÊæÇäíÏ ÇÒ ãŞÇÏíÑ ÒíÑ ÇÓÊİÇÏå ßäíÏ ...";
$loca['setup']['dellog_lim']['title']             = "Çß ßÑÏä ÓæÇÈŞ ÈÑÇÓÇÓ ÓÇÈŞå";
$loca['setup']['dellog_lim']['descr']             = "ÊÚÏÇÏ ÓæÇÈŞí ßå ÈÇíÏ ĞÎíÑå ÔæäÏ. ÇÑ ÚÏÏ 0 ÑÇ ãÔÎÕ ßäíÏ åí ãÍÏæÏíÊí æÌæÏ äÎæÇåÏ ÏÇÔÊ (íÔİÑÖ).";
$loca['setup']['dellog_lim_d']['title']           = "Çß ßÑÏä ÓæÇÈŞ ÈÑ ÇÓÇ ÑæÒ";
$loca['setup']['dellog_lim_d']['descr']           = "SÊÚííä ÊÚÏÇÏ ÑæÒåÇíí ßå ÈÚÏ ÇÒ ÓÑÑÓíÏ Âä ÓæÇÈŞ ÈÇíÏ Çß ÔæäÏ. ÇÑ ÚÏÏ 0 ÑÇ ãÔÎÕ ßäíÏ åí ãÍÏæÏíÊí æÌæÏ äÎæÇåÏ ÏÇÔÊ (íÔİÑÖ).";
$loca['setup']['dellog_lim_prob']['title']        = "ÇãßÇä ÍĞİ ÓÇÈŞå";
$loca['setup']['dellog_lim_prob']['descr']        = "ÇãßÇä ÍĞİ Èå ÏÑÕÏ";
$loca['setup']['delpath_global']['title']         = "ÊäÙíãÇÊ Úãæãí ÍĞİ ãÓíÑ";
$loca['setup']['delpath_global']['descr']         = "ÇÑ ÏÑ Çíä ŞÓãÊ ãŞÏÇÑ false ÑÇ ãÔÎÕ ßäíÏ, ÊäÙíãÇÊ ÔÎÕí ÇİÑÇÏ ÇÚãÇá ÎæÇåÏ ÔÏ. ÇÑ ãŞÏÇÑ true  ÑÇ ÇäÊÎÇÈ ßäíÏ ÊäÙíãÇÊ ÒíÑ ÑÇ ãí ÊæÇäíÏ ÇäÌÇã ÏåíÏ...";
$loca['setup']['delpath_lim']['title']            = "ÍĞİ ãÓíÑ ÈÑ ÇÓÇÓ ÓæÇÈŞ";
$loca['setup']['delpath_lim']['descr']            = "ÊÚííä ÊÚÏÇÏ ãÓíÑåÇíí ßå ÈÇíÏ ĞÎíÑå ÔæäÏ. ÇÑ ãŞÏÇÑ 0 ÑÇ ÇäÊÎÇÈ ßäíÏ, åí ãÍÏæÏíÊí äÎæÇåÏ ÈæÏ.";
$loca['setup']['delpath_lim_d']['title']          = "ÍĞİ ãÓíÑ ÈÑ ÇÓÇÓ ÑæÒ";
$loca['setup']['delpath_lim_d']['descr']          = "SÊÚííä ÊÚÏÇÏ ÑæÒåÇíí ßå Ó ÇÒ Âä ãÓíÑ ßÇÑÈÑÇä ÈÇíÏ ÍĞİ ÔæÏ. ÇÑ ãŞÏÇÑ 0 ÑÇ ÇäÊÎÇÈ ßäíÏ, åí ãÍÏæÏíÊí äÎæÇåÏ ÈæÏ.";
$loca['setup']['delpath_lim_prob']['title']       = "ÇãßÇä ÍĞİ ãÓíÑ";
$loca['setup']['delpath_lim_prob']['descr']       = "ÇãßÇä ÍĞİ ãÓíÑ Èå ÏÑÕÏ";
$loca['setup']['show_cust']['title']              = "ãÍÏæÏå äãÇíÔ ÈÇÒÏíÏßääÏÇä ÏÑ ÓæÇÈŞ ßÇÑÈÑ";
$loca['setup']['show_cust']['descr']              = "ÏÑ ÓæÇÈŞ ßÇÑÈÑ å ÊÚÏÇÏ ÈÇÒÏíÏßääÏå ÈÇíÏ äãÇíÔ ÏÇÏå ÔæäÏ?";
$loca['setup']['calendar_months']['title']        = "ãÍÏæÏå ãÇååÇí ÊŞæíã";
$loca['setup']['calendar_months']['descr']        = "ÏÑ íß ÊŞæíã å ÊÚÏÇÏ ãÇå ÈÇíÏ äÔÇä ÏÇÏå ÔæÏ¿";
$loca['setup']['topref_lim']['title']             = "ãÍÏæÏå ÈÑÊÑíä ãÑÇÌÚå ßääÏÇä";
$loca['setup']['topref_lim']['descr']             = "";
$loca['setup']['topdomain_lim']['title']          = "ãÍÏæÏå ÈÑÊÑíä ÏÇãäå åÇ";
$loca['setup']['topdomain_lim']['descr']          = "";
$loca['setup']['topres_lim']['title']             = "ãÍÏæÏå ÈÑÊÑíä ÇÈÚÇÏ äãÇíÔí";
$loca['setup']['topres_lim']['descr']             = "";
$loca['setup']['topcolor_lim']['title']           = "ãÍÏæÏå ÈÑÊÑíä ÊäÙíãÇÊ Ñä";
$loca['setup']['topcolor_lim']['descr']           = "";
$loca['setup']['topkeywords_lim']['title']        = "ãÍÏæÏå ÈÑÊÑíä ßáãÇÊ ßáíÏí";
$loca['setup']['topkeywords_lim']['descr']        = "";
$loca['setup']['topbrowseros_lim']['title']       = "ãÍÏæÏå ÈÑÊÑíä ãÑæÑÑ / ÓíÓÊã ÚÇãá åÇ";
$loca['setup']['topbrowseros_lim']['descr']       = "";
$loca['setup']['topsearcheng_lim']['title']       = "ãÍÏæÏå ÈÑÊÑíä ãæÊæÑåÇí ÌÓÊÌæ";
$loca['setup']['topsearcheng_lim']['descr']       = "";
$loca['setup']['mpfront_lim']['title']            = "ãÍÏæÏå ÇãßÇä ÇäÊÎÇÈ äÏ ÕİÍå Çí";
$loca['setup']['mpfront_lim']['descr']            = "ãÍÏæÏå ÊÚÏÇÏ ãÑÇÌÚÇÊ äÏ ÕİÍå Çí ÏÑ Çííä ÕİÍå ÓæÇÈŞ.";
$loca['setup']['useraccount_lim']['title']        = "ãÍÏæÏå ÍÏÇßËÑ ÊÚÏÇÏ ÇßÇäÊåÇí ŞÇÈá äãÇíÔ ßÇÑÈÑÇä";
$loca['setup']['useraccount_lim']['descr']        = "";
$loca['setup']['lastref_lim']['title']            = "ãÍÏæÏå ÍÏÇßËÑ ÊÚÏÇÏ İåÑÓÊ ãÑÇÌÚÇä";
$loca['setup']['lastref_lim']['descr']            = "";
$loca['setup']['width_max']['title']              = "ÍÏÇßËÑ åäÇí  MP";
$loca['setup']['width_max']['descr']              = "äæÇÑ ãÔÇåÏå MP ÏÑ ãÈäÇí [pixel]";
$loca['setup']['width_factor']['title']           = "ÖÑíÈ åäÇí MP";
$loca['setup']['width_factor']['descr']           = "åäÇí äæÇÑ MP [ÖÑíÈ]";
$loca['setup']['browseros_barsize']['title']      = "ÇäÏÇÒå äæÇÑ ãÑæÑÑ / ÓíÓÊã ÚÇãá ";
$loca['setup']['browseros_barsize']['descr']      = "ÍÏÇßËÑ ÇäÏÇÒå äæÇÑåÇí ÏÑÕÏí ãÑæÑÑ / ÓíÓÊã ÚÇãá ÏÑ ÕİÍå ÂãÇÑ [pixel]";
$loca['setup']['extended']['title']               = "İåÑÓÊ ÓæÇÈŞ íÔÑİÊå";
$loca['setup']['extended']['descr']               = "ÇÑ Çíä ãŞÏÇÑ ÑÇ false ŞÑÇÑ ÏåíÏ, ŞÇÏÑ Èå ãÔÇåÏå ÓÊæä ÇÈÚÇÏ ÕİÍå æ ÚãŞ Ñä äÎæÇåíÏ ÈæÏ(Çíä Òíäå ÈÑÇí ßÇÑÈÑÇäí ßå ÇÒ ÕİÍå äãÇíÔ åÇí ßæß ÇÓÊİÇÏå ãí ßääÏ ÊæÕíå ãí ÔæÏ)";
$loca['setup']['ttf_demo_size']['title']          = "ÇäÏÇÒå äãÇíÔí TTF";
$loca['setup']['ttf_demo_size']['descr']          = "äãÇíÔ ÊÕæíÑ TTF[points]";
$loca['setup']['css_show']['title']               = "ãÔÇåÏå CSS";
$loca['setup']['css_show']['descr']               = "ÏÑ ÌÏæá äãÇíÔí CSS å ÑäåÇíí ÈÇíÏ ŞÇÈá ÑÄíÊ ÈÇÔäÏ? [ÑäåÇ ÑÇ ÈÇ æíÑæá ÇÒ åã ÌÏÇ ßäíÏ]";

//email stuff
$strAccActivation    = "İÚÇá ßÑÏä ÇßÇäÊ";

// pages
$strUsrPage[0]       = "æÑæÏ/ÎÑæÌ";
$strUsrPage[1]       = "ÓæÇÈŞ";
$strUsrPage[2]       = "ÂãÇÑ";
$strUsrPage[3]       = "ÊŞæíã";
$strUsrPage[4]       = "ãÑæÑÑ/ÓíÓÊã ÚÇãá";
$strUsrPage[5]       = "ÊäÙíãÇÊ";
$strUsrPage[6]       = "ãÔÎÕÇÊ İÑÏí";
$strAdminPage[0]     = "ãÏíÑíÊ";
$strAdminPage[1]     = "ÇíÌÇÏ/ÍĞİ ßÇÑÈÑ";
$strAdminPage[2]     = "ÇßÇäÊ ßÇÑÈÑÇä";
$strAdminPage[3]     = "ÂÎÑíä ÈÇÒÏíÏßääÏÇä";
$strAdminPage[4]     = "æíÑÇíÔ CSS";
$strAdminPage[5]     = "ÂãÇÑ";
$strAdminPage[6]     = "İåÑÓÊ ÂÏÑÓåÇí ÓÊí";

// functions.lib.php
$strPrev             = "ŞÈáí";
$strNext             = "ÈÚÏí";

// headfoot.inc.php
$strTrackedSite      = "ÓÇíÊåÇí ÑÏíÇÈí ÔÏå:";
$strCurrentTime      = "ÒãÇä ÌÇÑí";
$strHeadDateFormat   = "M d, <b>h:iA</b>";
$strYourHits         = "ÊÚÏÇÏ ãÑÇÌÚÇÊ ÔãÇ:";
$strSlogan           = "...ŞÏÑÊãäÏÊÑíä ÂÈÒÇÑ ÂãÇÑíÑí ÔãÇ!";
$strLogs             = "ÓæÇÈŞ";
$strStats1           = "ÂãÇÑ";
$strStats2           = "ÂãÇÑ 2";
$strStats3           = "ÂãÇÑ 3";
$strStats4           = "ÂãÇÑ 4";
$strStats5           = "ÂãÇÑ 5";
$strSettings         = "ÊäÙíãÇÊ";
$strChUserprofile    = "ãÔÎÕÇÊ ßÇÑÈÑí";
$strLoginLogout      = "æÑæÏ/ÎÑæÌ";

// index.php
$strEnterUsernPw     = "áØİÇ äÇã ßÇÑÈÑí æ ßáãå ÑãÒ ÎæÏ ÑÇ æÇÑÏ ßäíÏ";
$strLostPw           = "ßáãå ÑãÒ ÑÇ İÑÇãæÔ ßÑÏå ÇíÏ?";
$strLinkNewPw        = "ßáãå ÑãÒ ÌÏíÏ";
$strGetFreeAccount   = "ÏÑíÇİÊ ÇßÇäÊ ÑÇíÇä";
$strSignUpUseracc    = "ÏÑÎæÇÓÊ ÇßÇäÊ ÑÇíÇä!";
$strMsgWrongPw       = "<b>äÇã ßÇÑÈÑí íÇ ßáãå ÑãÒ ÇÔÊÈÇå ÇÓÊ!!!</b><br />áØİÇ ãÌÏÏÇ ÓÚí ßäíÏ...";
$strMsgNewPw         = "<b>ßáãå ÑãÒ ÌÏíÏ ÔãÇ ÈÇ ãæİŞíÊ ËÈÊ ÔÏ!</b><br />Çíä ßáãå Èå ÂÏÑÓ Çíãíá ÔãÇ ÇÑÓÇá ÔÏ.";

// dspNewPw.php
$strForVerification  = "ÈÑÇí ÊÇííÏ ßáãå ÑãÒ æ äÇã ßÇÑÈÑí ÎæÏ ÑÇ æÇÑÏ ßäíÏ";
$strGetIt            = "ÈíÑÔ!";
$strMsgNoValidUser   = "<b>äÇã ßÇÑÈÑí íÇ ÂÏÑÓ Çíãíá ÔãÇ ÇÔÊÈÇå ÇÓÊ</b><br />áØİÇ ãÌÏÏÇ ÓÚí ßäíÏ...";

// signup.php
$strSignUp           = "ÏÑÎæÇÓÊ íß ÇßÇäÊ PowerPhlogger ÌÏíÏ:";
$strHtmlCode         = "ßÏ HTML";
$strAddHtmlCode      = "ßÏ HTML ÒíÑ ÑÇ Èå ßáíå ÕİÍÇÊí ßå ãÇíáíÏ ÌÒæ ÂãÇÑ ŞÑÇÑ íÑäÏ ÈíİÒÇííÏ:";
$strJsFile           = "ÇÑ İÇíá  pphlogger.js ÎæÏ ÑÇ ÇÒ ÏÓÊ ÏÇÏå ÇíÏ , Âä ÑÇ ÇÒ Çíä ÌÇ ÏÑíÇİÊ ßäíÏ:";
$strInstructions     = "ÏÓÊæÑÇáÚãá åÇ:";
$strConfLogin        = "iÈÑÇí ÊÇííÏ ßáãå ÑãÒ ÎæÏ ÈÇíÏ íß ÈÇÑ ÇÒ ØÑíŞ Âä æÇÑÏ ÔæíÏ . Çíä ßáãå ÇÒ ØÑíŞ Çíãíá ÈÑÇí ÔãÇ ÇÑÓÇá ÔÏå ÇÓÊ.";
$strConfLogin2       = "ÇÑ ÇßÇäÊ ÎæÏ ÑÇ ÊËÈíÊ äßäíÏ ÈÚÏ ÇÒ  ".$cleanup_lim." ÓÇÚÊ Çß ÎæÇåÏ ÔÏ";
$strUploadJs         = "İÇíá pphlogger.js  ãæÌæÏ ÏÑ ŞÓãÊ Öãíãå äÇãå ÑÇ ÂáæÏ ßäíÏ.";
$strNoSignUp         = "ãÊÇÓİã ÏÑ ÍÇá ÍÇÖÑ ÇãßÇä ÇÑÇÆå ÇßÇäÊ ÑÇíÇä Ñæí Çíä ÓÑæÑ æÌæÏ äÏÇÑÏ !";
$strReturnToLogin    = "ÈÇÒÔÊ Èå login";

// dspLogs.php
$strShowLogs         = "ãÔÇåÏå ÂãÇÑ:";
$strSelect           = "ÇäÊÎÇÈ";
$strUnselect         = "ÛíÑİÚÇá";
$strAll              = "åãå";
$strTurnShowref      = "İÚÇá ßÑÏä äãÇíÔ ãÓíÑ";
$strFullAgt          = "ÇØáÇÚÇÊ ßÇãá";
$strDemoMode         = "rÇÌÑÇ ÏÑ ÍÇáÊ demo!";
$strGuestMsg1        = "Èå ÚäæÇä ßÇÑÈÑ / ãåãÇä ÔãÇ äãí ÊæÇäíÏ ÂãÇÑí ÑÇ Çß ßäíÏ!!!";
$strGuestMsg2        = "áØİÇ ÊÇÈÚ ÍĞİ ÂãÇÑ ÑÇ İÚÇá ßäíÏ!";
$strViewLogs         = "ãÔÇåÏå ÂäÇÑ";
$strHostIP           = "Host / IP";
$strReferrer         = "ãÓíÑ";
$strReferrers        = "ãÓíÑåÇ";
$strAgent            = "ÂØáÇÚÇÊ ÓíÓÊã";
$strRes              = "ÏŞÊ";
$strColor            = "ÊÚÏÇÏ Ñä";
$strTimestamp        = "ãÍÏæÏå ÒãÇäí";
$strProxy            = "proxy";

// dspStats.php
$strVisPerDay        = "ÊÚÏÇÏ ÈÇÒÏíÏßääÏå ÏÑ ÑæÒ";
$strPerDay           = "ÏÑ ÑæÒ";
$strVisPerHour       = "ÊÚÏÇÏ ÈÇÒÏíÏßääÏå ÏÑ ÓÇÚÊ";
$strLast             = "ĞÔÊå";
$strMonth            = "ãÇå";
$strMonths           = "ãÇå åÇí";
$strToday            = "ÇãÑæÒ";
$strAverage          = "ãíÇäíä";
$strAverageAbbr      = "avg.";
$strDay              = "ÑæÒ";
$strDays             = "ÑæÒåÇí";
$strCurrOnlUsers     = "ßÇÑÈÑÇä ÌÇÑí";
$strIPkept           = "ÂÏÑÓ ÂÎÑíä IPåÇ";
$strIPkept2          = "ÏŞíŞå åÇ";
$strOnline           = "İÚÇá";
$strEntryTime        = "ÒãÇä æÑæÏ";
$strLastReload       = "ÂåÑíä ÈÇÑĞÇÑí";
$strLastUrl          = "ÂåÑíä URL";
$strSince            = "ÇÒ ÒãÇä";
$strMultipage        = "äÏ ÕİÍå";
$strKeywords         = "ßáãÇÊ ßáíÏí";
$strSingleWords      = "Êß ßáãå Çí åÇ";
$strWholeStrings     = "ÑÔÊå åÇí ßÇãá";
$strDownloads        = "ÏÇæäáæÏåÇ";
$strTerritories      = "ßÔæÑåÇ";
$str_arrMonths       = Array(1 => "January", "February", "March", "April", "May", "June", "July", 
                                    "August", "September", "October", "November", "December");
$str_arrMonthsAbbr   = Array(1 => "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
$str_area            = Array(
                         'EU'   => 'Europe',
                         'AM'   => 'America',
                         'AF'   => 'Africa',
                         'AS'   => 'Asia',
                         'OZ'   => 'Ozeania',
                         'GUS'  => 'GUS'
                       );

// dspCalendar.php
$strShowUniqVis      = "äãÇíÔ ÈÇÒÏíÏßääÏÇä íßÊÇ";
$strShowPageimpress  = "äãÇíÔ åãå ÈÇÒÏíÏßääÏÇä";
$strReload           = "ÈÇÑĞÇÑí ãÌÏÏ";

// edSettings.php
$strCookieTxt        = "ÊäÙíã cookie ÈÑÇí ÇÌÊäÇÈ ÇÒ ÔãÇÑÔ ãÑÇÌÚÇÊ ÔãÇ:";
$strCountMe          = "ãÑÇ ÈÔãÇÑ!";
$strDontCountMe      = "ãÑÇ äÔãÇÑ!";
$strEnableDellog     = "İÚÇá ßÑÏä ŞÇÈáíÊ ÍĞİ";
$strDisableDellog    = "ÛíÑ İÚÇá ßÑÏä ŞÇÈáíÊ ÍĞİ";
$strEnableDellog2    = "İÚÇá ßÑÏä ÊÇÈÚ ÍĞİ:";
$strResetHits        = "ÊÇÒå ÑÏÇäí ãÑÇÌÚÇÊ";
$strResHitsTxt       = "ÈÑÇí ÊÛííÑ ãíÒÇä ãÑÇÌÚÇÊ ÎæÏ áØİÇ ÚÏÏí æÇÑÏ ßäíÏ:";
$strMysqlDump        = "ãÔÇåÏå ÎÑæÌí MySQL";
$strStructOnly       = "İŞØ ÓÇÎÊÇÑ";
$strAddDropTbl       = "ÇİÒæÏä 'drop table'";
$strStructData       = "ÓÇÎÊÇÑ æ ÏÇÏå åÇ";
$strSend             = "ÇÑÓÇá";
$strComplInserts     = "ÏÑÌ ßÇãá";
$strDiskSpace        = "İÖÇí ÏíÓß";
$strAvailSpace       = "İÖÇí ÌÇÑí ÏíÓß";
$strUsedSpace        = "İÖÇí ãÕÑİ ÔÏå";
$strDbSpace          = "İÖÇí ãÕÑİ ÔÏå ÇíÇå ÏÇÏå";
$strFreeSpace        = "İÖÇí ÈÇŞíãÇäÏå ÏíÓß";
$strFileUpload       = "ÂáæÏ äÏ İÇíá";
$strMaxFilesize      = "ÍÏÇßËÑ ÇäÏÇÒå İÇíá";
$strErrUpload        = "ÎØÇí ÂáæÏ áØİÇ ãÌÏÏÇ ÓÚí ßäíÏ.";
$strUploadOk         = "ÈÇ ãæİŞíÊ ÂáæÏ ÔÏ!!";
$strFilename         = "äÇã İÇíá";
$strSize             = "ÇäÏÇÒå";
$strYourLast         = "ÂÎÑíä ÈÇÑ ÔãÇ";
$strCustomers        = "ÈÇÒÏíÏßääÏÇä";
$strYourTimeout      = "ãÍÏæÏíÊ ÒãÇäí ÔãÇ ÊäÙíã ÔÏ Ñæí ";
$strMinutes          = "ÏŞíŞå";
$strBlocking         = "ÈáÇß ßÑÏä";
$strShortQuery       = "ÒÇÑÔ ßæÊÇå";
$strOwnReferrers     = "ãÑÇÌÚå ßääÏÇä";

// edUserprofile.php
$strUserprofile      = "ÊÛííÑ ãÔÎÕÇÊ ßÇÑÈÑ";
$strEditProfile      = "ÊäÙíãÇÊ ÎæÏ ÑÇ ÇäÌÇã ÏÇÏå æ Ïßãå ÑÇ ÈÒäíÏ:";
$strUrl1Txt          = "URL İÇíá ÇÕáí.";
$strUrl2Txt          = "ÂÑ ÏÇÑÇí ÌäÏ ÂÏÑÓ ÇÕáí åÓÊíÏ åÑíß ÑÇ ÏÑ ÎØí ãÌÒÇ æÇÑÏ ßäíÏ:";
$strEmail            = "Çíãíá:";
$strTimezone         = "ÓÇÚÊ ãÍáí:";
$strUserLang         = "ÒÈÇä:";
$strVisible          = "ŞÇÈá ÑæíÊ:";
$strVisibleStyle     = "äæÚ Ñä ÈäÏí:";
$strTimeout          = "ãåáÊ:";
$strEmailNotif       = "ÂÇåí ÇÒ ØÑíŞ Çíãíá: åÑ...";
$strDefLogNo         = "ÂãÇÑ ãÑÇÌÚÇÊí ßå Èå ØæÑ íÔ İÑÖ ÈÇíÏ äãÇíÔ ÏÇÏå ÔæäÏ:";
$strKwListMode       = "ÍÇáÊ İåÑÓÊ ßáãÇÊ ßáíÏí:";
$strAllowDemo        = "ÇÌÇÒå ÇÓÊİÇÏå ÇÒ ÍÇáÊ demo:";
$strTTF              = "ÇäÊÎÇÈ İæäÊ TrueType:";
$strAvailFonts       = "İæäÊåÇí ãæÌæÏ";
$strFontSize         = "ÇäÏÇÒå İæäÊ:";
$strFontColor        = "Ñä İæäÊ:";
$strBgColor          = "Ñä Òãíäå:";
$strTransBg          = "Òãíäå ÔİÇİ ÔæÏ:";
$strSample           = "ÊÕæíÑ äãæäå:";
$strChangePw         = "ÊÛííÑ ßáãå ÑãÒ:";
$strOldPw            = "ßáãå ÑãÒ ŞÈáí:";
$strNewPw            = "ßáãå ÑãÒ ÌÏíÏ:";
$strReenterPw        = "æÑæÏ ãÌÏÏ ßáãå ÑãÒ :";
$strLoadCSS          = "ÈÇÑĞÇÑí stylesheet:";
$strView4Msg1        = "ãÔÎÕÇÊ ßÇÑÈÑ ÈÇ ãæİŞíÊ Èå ÑæÒ ÔÏ!";
$strView4Msg2        = "äãí ÊæÇäã ãÔÎÕÇÊ ÔãÇ ÑÇ ÊÛííÑ Ïåã!!!";
$strView4Msg3        = "Èå ÚäæÇä ßÇÑÈÑ / ãåãÇä ÔãÇ<br />äãí ÊæÇäíÏ ÊÛííÑ ÇÚãÇá ßäíÏ!";
$strPwChanged        = "ßáãå ÑãÒ ÊÛííÑ ßÑÏ !";
$strWrongPw          = "ßáãå ÑãÒ ÇÔÊÈÇå ÇÓÊ !!";

// admin/index.php
$strAdmin            = "ãÏíÑíÊ";
$strMaintenance      = "äåÏÇÑí";
$strCheckNewVer      = "ÈÑÑÓí ÈÑÇí äÇÑÔ ÌÏíÏ";
$strCreate           = "ÇíÌÇÏ íß ßÇÑÈÑ ÌÏíÏ:";
$strAdminMsg1        = "äÇã ßÇÑÈÑ ŞÈáÇ ÑİÊå ÔÏå ÇÓÊ ";
$strAdminMsg2        = "ßÇÑÈÑ ÈÇ ãæİŞíÊ ÇíÌÇÏ ÔÏ";
$strAdminMsg3        = "ÂÏÑÓ Çíãíá ÑÇ ÇÔÊÈÇå æÇÑÏ ßÑÏå ÇíÏ!";
$strAdminMsg4        = "ÈÑÇí äÇã ßÇÑÈÑí İŞØ ÇÒ ßÇÑßÊÑåÇí ÍÑİí ÚÏÏí ÇÓÊİÇÏå ßäíÏ,<br />.,-,_, æ Øæá ÂäåÇ äÈÇíÏ ÈíÔ ÇÒ 30 ßÇÑßÊÑ ÈÇÔÏ!";
$strAdminErr1        = "ÇíÌÇÏ ßÇÑÈÑ ÌÏíÏ ÈÇ ÎØÇ ãæÇÌå ÔÏ";
$strDelUser          = "ÎĞİ íß ßÇÑÈÑ:";
$strDelErr           = "íß ãÓÆáå æÌæÏ ÏÇÑÏ !!";
$strDelOk            = "ßáíå ÇØáÇÚÇÊ ßÇÑÈÑ Çß ÔÏ!";
$strWrongPwUser      = "ßáãå ÑãÒ íÇ äÇã ßÇÑÈÑ ÇÔÊÈÇå ÇÓÊ !";
$strAdminCookie      = "ÇíÌÇÏ cookie ÈÑÇí ãÏíÑ";
$strNetcheck         = "İÚÇáßÑÏä netcheck";
$strHideAccounts     = "ãÎİí ßÑÏä ÇØáÇÚÇÊ ßÇÑÈÑÇä";
$strShowAccounts     = "äãÇíÔ ÇØáÇÚÇÊ ßÇÑÈÑÇä";
$strReadyDelete      = "ÂãÇÏå ÈÑÇí ÍĞİ";
$strMailinglist      = "İåÑÓÊ ÓÊí";
$strLatestPphlVers   = "ÂÎÑíä äÇÑÔ  PowerPhlogger";
$strLatestVersion    = "ÂÎÑíä äÇÑÔ";
$strReleaseDate      = "ÊÇÑíÎ ÇäÊÔÇÑ";
$strDownloadLoc      = "ÂÏÑÓåÇí ÏÇäáæÏ";
$strReloadKeywords   = "rÈÇÑĞÇÑí ãÌÏÏ ßáãÇÊ ßáíÏí";
$strReloadKeyw1      = "Çíä ßÇÑ ÈÇÚË ÊÇÒå ÑÏÇäí ßáãÇÊ ßáíÏí ßÇÑÈÑÇä ãí ÔæÏ";
$strReloadKeyw2      = "ÇÒ Çíä Ïßãå ÊÇæŞÊí ßå İÇíá  engines-list.ini  ÑÇ ÊÛííÑ äÏÇÏå ÇíÏ ÇÓÊİÇÏå äßäíÏ!!";

// admin/change_userprofile.php
$strMaxLoglim        = "ÍÏÇßËÑ ãÍÏæÏå ÓæÇÈŞ:";
$strMaxPath          = "ÍÏÇßËÑ ÊÚÏÇÏ ĞÎíÑå ÓÇÒí ãÓíÑåÇ:";
?>
