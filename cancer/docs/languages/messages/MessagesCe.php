<?php
/** Chechen (нохчийн)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'ru';

$namespaceNames = array(
	NS_MEDIA            => 'Медиа',
	NS_SPECIAL          => 'Белхан',
	NS_TALK             => 'Дийцаре',
	NS_USER             => 'Декъашхо',
	NS_USER_TALK        => 'Декъашхочун_дийцаре',
	NS_PROJECT_TALK     => '{{GRAMMAR:genitive|$1}}_дийцаре',
	NS_FILE             => 'Файл',
	NS_FILE_TALK        => 'Файлан_дийцаре',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_дийцаре',
	NS_TEMPLATE         => 'Кеп',
	NS_TEMPLATE_TALK    => 'Кепан_дийцаре',
	NS_HELP             => 'ГӀо',
	NS_HELP_TALK        => 'ГӀо_дийцаре',
	NS_CATEGORY         => 'Категори',
	NS_CATEGORY_TALK    => 'Категорин_дийцаре',
);

$namespaceAliases = array(
	'Медйа'            => NS_MEDIA,
	'Башхо'            => NS_SPECIAL,
	'Дийца'            => NS_TALK,
	'Юзер'             => NS_USER,
	'Юзери_дийца'      => NS_USER_TALK,
	'Дийцаре_декъашхо' => NS_USER_TALK,
	'Декъашхон_дийцаре' => NS_USER_TALK,
	'$1_Дийца'         => NS_PROJECT_TALK,
	'Дийцаре_{{GRAMMAR:genitive|$1}}' => NS_PROJECT_TALK,
	'Сурт'             => NS_FILE,
	'Сурти_дийца'      => NS_FILE_TALK,
	'Хlум'             => NS_FILE,
	'Хlуман_дийцаре'   => NS_FILE_TALK,
	'Дийцаре_хlуман'   => NS_FILE_TALK,
	'МедйаВики'        => NS_MEDIAWIKI,
	'МедйаВики_дийца'  => NS_MEDIAWIKI_TALK,
	'MediaWiki_Дийцаре' => NS_MEDIAWIKI_TALK,
	'Дакъан'           => NS_TEMPLATE,
	'Дакъан_дийца'     => NS_TEMPLATE_TALK,
	'Куцкеп'           => NS_TEMPLATE,
	'Куцкеп_дийцаре'   => NS_TEMPLATE_TALK,
	'ГІо'              => NS_HELP,
	'ГІодан_дийца'     => NS_HELP_TALK,
	'Гlо'              => NS_HELP,
	'Гlон_дийцаре'     => NS_HELP_TALK,
	'Тоба'             => NS_CATEGORY,
	'Тобан_дийца'      => NS_CATEGORY_TALK,
	'Кадегар'          => NS_CATEGORY,
	'Кадегар_дийцаре'  => NS_CATEGORY_TALK,
);

// Remove Russian aliases
$namespaceGenderAliases = array();

$specialPageAliases = array(
	'Activeusers'               => array( 'Жигара_декъашхой' ),
	'Allmessages'               => array( 'ГӀирса_хаамаш' ),
	'AllMyUploads'              => array( 'Сан_массо_файлаш' ),
	'Allpages'                  => array( 'Массо_агӀонаш' ),
	'Ancientpages'              => array( 'ТӀаьхьарлерачу_хенаца_нисбина_яззамаш' ),
	'Badtitle'                  => array( 'Хилийта_йиш_йоцу_цӀе' ),
	'Blankpage'                 => array( 'Еса_агӀо' ),
	'Block'                     => array( 'Блоктоха' ),
	'Booksources'               => array( 'Жайнийн_хьосташ' ),
	'BrokenRedirects'           => array( 'ДIахаьдна_долу_дIасахьажораш' ),
	'Categories'                => array( 'Категореш' ),
	'ChangeEmail'               => array( 'Хийца_e-mail' ),
	'ChangePassword'            => array( 'Хийца_пароль' ),
	'ComparePages'              => array( 'АгӀонаш_юстар' ),
	'Confirmemail'              => array( 'Бакъе_e-mail' ),
	'Contributions'             => array( 'Къинхьегам' ),
	'CreateAccount'             => array( 'Кхолла_декъашхочун_дӀаяздар' ),
	'Deadendpages'              => array( 'Дика_йоцу_агӀонаш' ),
	'DeletedContributions'      => array( 'ДӀабаьккхина_къинхьегам' ),
	'DoubleRedirects'           => array( 'Шалха_дӀасахьажийнарш' ),
	'EditWatchlist'             => array( 'Табе_тергаме_могӀам' ),
	'Emailuser'                 => array( 'Декъашхочунга_кехат' ),
	'ExpandTemplates'           => array( 'Кепаш_схьаястар' ),
	'Export'                    => array( 'Экспорт' ),
	'Fewestrevisions'           => array( 'Наггахь_беш_болу_хийцамаш' ),
	'FileDuplicateSearch'       => array( 'Цхьатера_файлаш_лахар' ),
	'Filepath'                  => array( 'Файл_йолче' ),
	'Import'                    => array( 'Импорт' ),
	'Invalidateemail'           => array( 'Адрес_бакъдар_юхадаккха' ),
	'JavaScriptTest'            => array( 'JavaScript_тестировать_ян' ),
	'BlockList'                 => array( 'Блоктоьхнарш' ),
	'LinkSearch'                => array( 'Хьажоргаш_лахар' ),
	'Listadmins'                => array( 'Куьйгалхойн_могӀам' ),
	'Listbots'                  => array( 'Боттийн_могӀам' ),
	'Listfiles'                 => array( 'Файлаш' ),
	'Listgrouprights'           => array( 'Декъашхойн_бакъонаш' ),
	'Listredirects'             => array( 'ДIасахьажоран_могIам' ),
	'Listusers'                 => array( 'Декъашхойн_могӀам' ),
	'Lockdb'                    => array( 'Хааман_базан_блоктохар' ),
	'Log'                       => array( 'Тептарш' ),
	'Lonelypages'               => array( 'Байлахь_йисина_агӀонаш' ),
	'Longpages'                 => array( 'Беха_яззамаш' ),
	'MergeHistory'              => array( 'Истори_цхьаьнатохар' ),
	'MIMEsearch'                => array( 'MIME_чухула_лахар' ),
	'Mostcategories'            => array( 'Дуккха_категореш_тӀе_тоьхна_йолу_агӀонаш' ),
	'Mostimages'                => array( 'Массарел_дуккха_лелайо_файлаш' ),
	'Mostinterwikis'            => array( 'Дукха_юкъарвики_хьажоргаш' ),
	'Mostlinked'                => array( 'Дуккха_хьажоргаш_тӀе_тоьхна_йолу_агӀонаш' ),
	'Mostlinkedcategories'      => array( 'Дуккха_тӀе_хьажораш_йолу_категореш' ),
	'Mostlinkedtemplates'       => array( 'Массарел_дуккха_а_леладо_кепаш' ),
	'Mostrevisions'             => array( 'Сих_сиха_нисйина_йолу_агӀонаш' ),
	'Movepage'                  => array( 'АгӀона_цӀе_хийцар' ),
	'Mycontributions'           => array( 'Сан_къинхьегам' ),
	'MyLanguage'                => array( 'Сан_мотт' ),
	'Mypage'                    => array( 'Сан_агӀо' ),
	'Mytalk'                    => array( 'Сан_дийцаре' ),
	'Myuploads'                 => array( 'Сан_файлаш' ),
	'Newimages'                 => array( 'Керла_файлаш' ),
	'Newpages'                  => array( 'Керла_агӀонаш' ),
	'PasswordReset'             => array( 'Пароль_кхоссар' ),
	'PermanentLink'             => array( 'Гуттарлера_хьажорг' ),

	'Preferences'               => array( 'ГӀирсаш' ),
	'Prefixindex'               => array( 'Хьалха_агӀонийн_цӀераш_хӀотто_еза' ),
	'Protectedpages'            => array( 'ГӀаролла_дина_агӀонаш' ),
	'Protectedtitles'           => array( 'ГӀаролла_дина_цӀераш' ),
	'Randompage'                => array( 'Цахууш_нисйелла_агIо' ),
	'Randomredirect'            => array( 'Цахууш_нисделла_дIасахьажор' ),
	'Recentchanges'             => array( 'Керла_нисдарш' ),
	'Recentchangeslinked'       => array( 'Кхуьнца_долу_нисдарш' ),
	'Revisiondelete'            => array( 'Нисдар_дӀадаккхар' ),
	'Search'                    => array( 'Лахар' ),
	'Shortpages'                => array( 'Боца_яззамаш' ),
	'Specialpages'              => array( 'Леррина_агӀонаш' ),
	'Statistics'                => array( 'Статистика' ),
	'Tags'                      => array( 'Билгалонаш' ),
	'Unblock'                   => array( 'БлокдӀаяккхар' ),
	'Uncategorizedcategories'   => array( 'Категореш_йоцу_категореш' ),
	'Uncategorizedimages'       => array( 'Категореш_йоцу_файлаш' ),
	'Uncategorizedpages'        => array( 'Категореш_йоцу_агӀонаш' ),
	'Uncategorizedtemplates'    => array( 'Категореш_йоцу_кепаш' ),
	'Undelete'                  => array( 'МеттахӀоттор' ),
	'Unlockdb'                  => array( 'БлокдӀаякхар_ХБ' ),
	'Unusedcategories'          => array( 'Лелош_доцу_категореш' ),
	'Unusedimages'              => array( 'Лелош_доцу_файлаш' ),
	'Unusedtemplates'           => array( 'Лелош_доцу_кепаш' ),
	'Upload'                    => array( 'Файл_чуяккхар' ),
	'UploadStash'               => array( 'ДӀахьулйина_файл_чуяккхар' ),
	'Userlogin'                 => array( 'Чудалар' ),
	'Userlogout'                => array( 'Арадалар' ),
	'Userrights'                => array( 'Бакъона_урхалладар' ),
	'Version'                   => array( 'Верси' ),
	'Wantedcategories'          => array( 'Оьшуш_йолу_категореш' ),
	'Wantedfiles'               => array( 'Оьшуш_йолу_файлаш' ),
	'Wantedpages'               => array( 'Оьшуш_йолу_агӀонаш' ),
	'Wantedtemplates'           => array( 'Оьшуш_йолу_кепаш' ),
	'Watchlist'                 => array( 'Тергаме_могӀам' ),
	'Whatlinkshere'             => array( 'Хьажоригаш_кхузе' ),
	'Withoutinterwiki'          => array( 'Юкъарвики_хьажоргаш_йоцу_агӀонаш' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#дӀасахьажор\'', '\'#хьажайо\'', '\'#REDIRECT', '#перенаправление', '#перенапр', '#REDIRECT' ),
	'notoc'                     => array( '0', '__БАЦ_ЧУЛАЦАМ__', '__БАЦ_ЧУЛ__', '__БЕЗ_ОГЛАВЛЕНИЯ__', '__БЕЗ_ОГЛ__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__ЙАЦ_УЧЕ__', '__БЕЗ_ГАЛЕРЕИ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__ТlЕДУЬЛЛУ_ЧУЛАЦАМБАР__', '__ТlЕДУЬЛ_ЧУЛ__', '__ОБЯЗАТЕЛЬНОЕ_ОГЛАВЛЕНИЕ__', '__ОБЯЗ_ОГЛ__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__ЧУЛАЦАМ__', '__ЧУЛ__', '__ОГЛАВЛЕНИЕ__', '__ОГЛ__', '__TOC__' ),
	'noeditsection'             => array( '0', '__АГӀО_ТА_ЦА_ЕШ__', '__БЕЗ_РЕДАКТИРОВАНИЯ_РАЗДЕЛА__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'КАРАРА_БУТТ', 'КАРАРА_БУТТ_2', 'ТЕКУЩИЙ_МЕСЯЦ', 'ТЕКУЩИЙ_МЕСЯЦ_2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'КАРАРА_БУТТ_1', 'ТЕКУЩИЙ_МЕСЯЦ_1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'КАРАРАЧУ_БЕТТА_ЦӀЕ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'КАРАРАЧУ_БЕТТА_ЦӀЕ_МУХ', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_РОД', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'КАРАРАЧУ_БЕТТА_ЦӀЕ_АБР', 'НАЗВАНИЕ_ТЕКУЩЕГО_МЕСЯЦА_АБР', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'КАРАРА_ДЕ', 'ТЕКУЩИЙ_ДЕНЬ', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'КАРАРА_ДЕ_2', 'ТЕКУЩИЙ_ДЕНЬ_2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'КАРАРАЧУ_ДЕ_ЦӀЕ', 'НАЗВАНИЕ_ТЕКУЩЕГО_ДНЯ', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'КАРАРА_ШО', 'ТЕКУЩИЙ_ГОД', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'КАРАРА_ХАН', 'ТЕКУЩЕЕ_ВРЕМЯ', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'КАРАРА_САХЬТ', 'ТЕКУЩИЙ_ЧАС', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'МЕТТИГАН_БУТТ', 'МЕСТНЫЙ_МЕСЯЦ_2', 'МЕСТНЫЙ_МЕСЯЦ', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'МЕТТИГАН_БУТТ_1', 'МЕСТНЫЙ_МЕСЯЦ_1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'МЕТТИГАН_БЕТТА_ЦlЕ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'МЕТТИГАН_БЕТТА_ЦlЕ_МУХ', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_РОД', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'МЕТТИГАН_БЕТТА_ЦlЕ_АБР', 'НАЗВАНИЕ_МЕСТНОГО_МЕСЯЦА_АБР', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'МЕТТИГАН_ДЕ', 'МЕСТНЫЙ_ДЕНЬ', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'МЕТТИГАН_ДЕ_2', 'МЕСТНЫЙ_ДЕНЬ_2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'МЕТТИГАН_ДЕ_ЦӀЕ', 'НАЗВАНИЕ_МЕСТНОГО_ДНЯ', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'МЕТТИГАН_ШО', 'МЕСТНЫЙ_ГОД', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'МЕТТИГАН_ХАН', 'МЕСТНОЕ_ВРЕМЯ', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'МЕТТИГАН_САХЬТ', 'МЕСТНЫЙ_ЧАС', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'АГlОНИЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_СТРАНИЦ', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'ЯЗЗАМАШИ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_СТАТЕЙ', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'ФАЙЛИЙН_ДУКХАЛЛА', 'КОЛИЧЕСТВО_ФАЙЛОВ', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'ДЕКЪАШХОЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_УЧАСТНИКОВ', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'ДУКХАЛЛА_ЖИГАРА_ДЕКЪАШХОЙ', 'КОЛИЧЕСТВО_АКТИВНЫХ_УЧАСТНИКОВ', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'НИСДАРИЙН_ДУКХАЛЛА', 'КОЛИЧЕСТВО_ПРАВОК', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'АГӀОН_ЦӀЕ', 'НАЗВАНИЕ_СТРАНИЦЫ', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'АГӀОН_ЦӀЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_2', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ЦӀЕРИЙН_АНА', 'ПРОСТРАНСТВО_ИМЁН', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ЦӀЕРИЙН_АНА_2', 'ПРОСТРАНСТВО_ИМЁН_2', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'ДИЙЦАРИЙН_АНА', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'ДИЙЦАРИЙН_АНА_2', 'ПРОСТРАНСТВО_ОБСУЖДЕНИЙ_2', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ЯЗЗАМИЙН_АНА', 'ПРОСТРАНСТВО_СТАТЕЙ', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ЯЗЗАМИЙН_АНА_2', 'ПРОСТРАНСТВО_СТАТЕЙ_2', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'ЮЬЗЗИНА_АГӀОН_ЦӀЕ', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'ЮЬЗЗИНА_АГӀОН_ЦӀЕ_2', 'ПОЛНОЕ_НАЗВАНИЕ_СТРАНИЦЫ_2', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'АГӀОН_КӀЕЛАРА_ЦӀЕ', 'НАЗВАНИЕ_ПОДСТРАНИЦЫ', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'АГӀОН_КӀЕЛАРА_ЦӀЕ_2', 'НАЗВАНИЕ_ПОДСТРАНИЦЫ_2', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'АГӀОН_ЦӀЕРА_БУХ', 'ОСНОВА_НАЗВАНИЯ_СТРАНИЦЫ', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'АГӀОН_ЦӀЕРА_БУХ_2', 'ОСНОВА_НАЗВАНИЯ_СТРАНИЦЫ_2', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'ДИЙЦАРЕ_АГӀОН_ЦӀЕ', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'ДИЙЦАРЕ_АГӀОН_ЦӀЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_ОБСУЖДЕНИЯ_2', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'АГӀОН_ЯЗЗАМАН_ЦӀЕ', 'НАЗВАНИЕ_СТРАНИЦЫ_СТАТЬИ', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'АГӀОН_ЯЗЗАМАН_ЦӀЕ_2', 'НАЗВАНИЕ_СТРАНИЦЫ_СТАТЬИ_2', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'ХААМ:', 'СООБЩЕНИЕ:', 'СООБЩ:', 'MSG:' ),
	'subst'                     => array( '0', 'ХӀОТТОР:', 'ХӀОТТ:', 'ПОДСТАНОВКА:', 'ПОДСТ:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'ВИКИ_ХААМ_БОЦАШ:', 'СООБЩ_БЕЗ_ВИКИ:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'жима', 'жимо', 'мини', 'миниатюра', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'жима=$1', 'жимо=$1', 'мини=$1', 'миниатюра=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'бакъхьа', 'справа', 'right' ),
	'img_left'                  => array( '1', 'харцхьа', 'слева', 'left' ),
	'img_none'                  => array( '1', 'йоцуш', 'без', 'none' ),
	'img_width'                 => array( '1', '$1пкс', '$1px' ),
	'img_center'                => array( '1', 'юккъ', 'центр', 'center', 'centre' ),
	'img_framed'                => array( '1', 'гурабе', 'обрамить', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'гурабоцаш', 'безрамки', 'frameless' ),
	'img_page'                  => array( '1', 'агlо=$1', 'агlо_$1', 'page_$1', 'страница=$1', 'страница_$1', 'страница $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'бакъхьалакхо', 'бакъхьалакхо=$1', 'бакъхьалакхо_$1', 'upright_$1', 'сверхусправа', 'сверхусправа=$1', 'сверхусправа_$1', 'сверхусправа $1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'доза', 'граница', 'border' ),
	'img_baseline'              => array( '1', 'бух', 'основание', 'baseline' ),
	'img_sub'                   => array( '1', 'буха', 'под', 'sub' ),
	'img_super'                 => array( '1', 'тӀе', 'над', 'super', 'sup' ),
	'img_top'                   => array( '1', 'лакхахь', 'сверху', 'top' ),
	'img_text_top'              => array( '1', 'лакххьара-йоза', 'текст-сверху', 'text-top' ),
	'img_middle'                => array( '1', 'юккъе', 'посередине', 'middle' ),
	'img_bottom'                => array( '1', 'бухар', 'снизу', 'bottom' ),
	'img_text_bottom'           => array( '1', 'бухара-йоза', 'текст-снизу', 'text-bottom' ),
	'img_link'                  => array( '1', 'хьажорг=$1', 'ссылка=$1', 'link=$1' ),
	'img_alt'                   => array( '1', 'альт=$1', 'alt=$1' ),
	'int'                       => array( '0', 'ЧУЬРА:', 'ВНУТР:', 'INT:' ),
	'sitename'                  => array( '1', 'МЕТТИГ_ЦlЕ', 'НАЗВАНИЕ_САЙТА', 'SITENAME' ),
	'ns'                        => array( '0', 'БО:', 'ПИ:', 'NS:' ),
	'nse'                       => array( '0', 'БОХЬ:', 'ПИК:', 'NSE:' ),
	'localurl'                  => array( '0', 'ХӀОТТАЕЛЛА_МЕТТИГ:', 'ЛОКАЛЬНЫЙ_АДРЕС:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'ХӀОТТАЕЛЛА_МЕТТИГ_2:', 'ЛОКАЛЬНЫЙ_АДРЕС_2:', 'LOCALURLE:' ),
	'server'                    => array( '0', 'ГlУЛКХДИРИГ', 'СЕРВЕР', 'SERVER' ),
	'servername'                => array( '0', 'ГlУЛКХДЕЧУЬНА_ЦlЕ', 'НАЗВАНИЕ_СЕРВЕРА', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'НЕКЪ_ОЦ_МЕТТАКЕПА', 'ПУТЬ_К_СКРИПТУ', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'ЙОМАНХАТӀ', 'ПУТЬ_К_СТИЛЮ', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'ДОЖАР:', 'ПАДЕЖ:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'ВУ_ЙУ:', 'GENDER', 'ПОЛ:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__ХИЙЦАР_ДОЦУШ_КОЬРТЕ__', '__БЕЗ_ПРЕОБРАЗОВАНИЯ_ЗАГОЛОВКА__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__ЙОЗА_ХИЙЦАР_ДОЦУШ__', '__БЕЗ_ПРЕОБРАЗОВАНИЯ_ТЕКСТА__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'КАРАРА_КӀИРА', 'ТЕКУЩАЯ_НЕДЕЛЯ', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'КАРАРА_КӀИРАН_ДЕ', 'ТЕКУЩИЙ_ДЕНЬ_НЕДЕЛИ', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'МЕТТИГЕРА_КӀИРА', 'МЕСТНАЯ_НЕДЕЛЯ', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'МЕТТИГАН_КӀИРАН_ДЕ', 'МЕСТНЫЙ_ДЕНЬ_НЕДЕЛИ', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'ЦУЬНА_БАШХО', 'ИД_ВЕРСИИ', 'REVISIONID' ),
	'revisionday'               => array( '1', 'ДЕ_БАШХО', 'ДЕНЬ_ВЕРСИИ', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'ДЕ_БАШХО_2', 'ДЕНЬ_ВЕРСИИ_2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'БЕТТА_БАШХО', 'МЕСЯЦ_ВЕРСИИ', 'REVISIONMONTH' ),
	'revisionyear'              => array( '1', 'ШО_БАШХО', 'ГОД_ВЕРСИИ', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'КЪАСТАМ_ХЕНА_БАШХО', 'ОТМЕТКА_ВРЕМЕНИ_ВЕРСИИ', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'ДЕКЪАШХОН_БАШХО', 'ВЕРСИЯ_УЧАСНИКА', 'ВЕРСИЯ_УЧАСТНИКА', 'REVISIONUSER' ),
	'plural'                    => array( '0', 'ДУКХАЛЛИН_ТЕРАХЬ:', 'МНОЖЕСТВЕННОЕ_ЧИСЛО:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'МАЙАРРА_МЕТТИГ:', 'ПОЛНЫЙ_АДРЕС:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'МАЙАРРА_МЕТТИГ_2:', 'ПОЛНЫЙ_АДРЕС_2:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'ХЬАЛХАР_ЭЛП_ЖИМА:', 'ПЕРВАЯ_БУКВА_МАЛЕНЬКАЯ:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'ХЬАЛХАР_ЭЛП_ДОККХА:', 'ПЕРВАЯ_БУКВА_БОЛЬШАЯ:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'КЕГИЙЧУ_ЭЛПАШЦА:', 'МАЛЕНЬКИМИ_БУКВАМИ:', 'LC:' ),
	'uc'                        => array( '0', 'ДАККХИЙЧУ_ЭЛПАШЦА:', 'БОЛЬШИМИ_БУКВАМИ:', 'UC:' ),
	'raw'                       => array( '0', 'ТАЙАНЗА:', 'НЕОБРАБ:', 'RAW:' ),
	'displaytitle'              => array( '1', 'ГАЙТА_КОЬРТАМОГl', 'ПОКАЗАТЬ_ЗАГОЛОВОК', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'Т', 'Н', 'R' ),
	'newsectionlink'            => array( '1', '__ХЬАЖОРГ_ОЦ_КЕРЛАЧУ_ДЕКЪАН__', '__ССЫЛКА_НА_НОВЫЙ_РАЗДЕЛ__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__ЙОЦАШ_ХЬАЖОРГ_ОЦ_КЕРЛАЧУ_ДЕКЪАН__', '__БЕЗ_ССЫЛКИ_НА_НОВЫЙ_РАЗДЕЛ__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'ЙОЛШЙОЛУ_БАШХО', 'ТЕКУЩАЯ_ВЕРСИЯ', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'ИШАРЙИНА_МЕТТИГ:', 'ЗАКОДИРОВАННЫЙ_АДРЕС:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'ИШАРЙАР_МЕТТИГАН', 'КОДИРОВАТЬ_МЕТКУ', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'КЪАСТАМ_ЙОЛУЧУ_ХАННА', 'ОТМЕТКА_ТЕКУЩЕГО_ВРЕМЕНИ', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'КЪАСТАМ_МЕТТИГА_ХАННА', 'ОТМЕТКА_МЕСТНОГО_ВРЕМЕНИ', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'ХЬАЖОЧЕ_ХААМ', 'НАПРАВЛЕНИЕ_ПИСЬМА', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#МОТТ', '#ЯЗЫК:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'МОТТ_ЧУЛАЦАМ', 'ЯЗЫК_СОДЕРЖАНИЯ', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'АГӀОНАШ_ОЦ_ЦӀЕРАШКАХЬ:', 'СТРАНИЦ_В_ПРОСТРАНСТВЕ_ИМЁН:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'КУЬГАЛХОЙ_ДУКХАЛЛА', 'КОЛИЧЕСТВО_АДМИНИСТРАТОРОВ', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'ТЕРАХЬАН_БАРАМХlОТТОР', 'ФОРМАТИРОВАТЬ_ЧИСЛО', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'ЙУЗА_ХАРЦЕ', 'ЗАПОЛНИТЬ_СЛЕВА', 'PADLEFT' ),
	'padright'                  => array( '0', 'ЙУЗА_БАКЪЕ', 'ЗАПОЛНИТЬ_СПРАВА', 'PADRIGHT' ),
	'special'                   => array( '0', 'белхан', 'гӀуллакхан', 'служебная', 'special' ),
	'defaultsort'               => array( '1', 'ЛИСТАР_ЦАХЬЕХОР', 'ДОГlА_ЛИСТАРАН', 'СОРТИРОВКА_ПО_УМОЛЧАНИЮ', 'КЛЮЧ_СОРТИРОВКИ', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'ФАЙЛАН_ТӀЕ_НЕКЪ:', 'ПУТЬ_К_ФАЙЛУ:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'къастам', 'къасто', 'къаст', 'метка', 'тег', 'тэг', 'tag' ),
	'hiddencat'                 => array( '1', '__КЪАЙЛАХА_ЙОЛУ_КАТЕГОРИ__', '__СКРЫТАЯ_КАТЕГОРИЯ__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'КАТЕГОРИ_ЧОХЬ_АГӀОНАШ_', 'СТРАНИЦ_В_КАТЕГОРИИ', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'АГlОН_БАРАМ', 'РАЗМЕР_СТРАНИЦЫ', 'PAGESIZE' ),
	'index'                     => array( '1', '__МЕТТИГТЕРАХЬ__', '__ИНДЕКС__', '__INDEX__' ),
	'noindex'                   => array( '1', '__МЕТТИГТЕРАХЬ_ЙОЦАШ__', '__БЕЗ_ИНДЕКСА__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'ТЕРАХЬ_ОЦ_ТОБАНЦА', 'ЧИСЛО_В_ГРУППЕ', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__СТАТИСТИКИН_ДӀАСХЬАЖОРГ__', '__СТАТИЧЕСКОЕ_ПЕРЕНАПРАВЛЕНИЕ__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'ГӀАРОЛЛИ_БАРАМ', 'УРОВЕНЬ_ЗАЩИТЫ', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'терахьибарам', 'форматдаты', 'formatdate', 'dateformat' ),
	'url_path'                  => array( '0', 'ЙОМА', 'ПУТЬ', 'PATH' ),
	'url_wiki'                  => array( '0', 'ЧЕХКА', 'ВИКИ', 'WIKI' ),
);

