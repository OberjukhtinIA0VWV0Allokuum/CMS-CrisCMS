moduls_active::yes
moduls_Name::phpinfo
active_stiles::default
moduls_install::yes
moduls_params::0
is_install::none::(404/error-db)
moduls_version::0.0.0.1
moduls_authors::Oberjukytin.I.A(some@e-mail) SecondAuthors(some@e-mail)
is_core::true
stile::default
core_version::0.1
title::выводит информацию о сервере::комментарий
--end-conf--
текстовое описание модуля, но не больше 200-т символов, пример (на разборе синтакститса): 
после строки --end-conf-- модуль чтения конфигурации закрывается.
всё, что написано после неё, считается комментарием
разделитель конфигурации - ::
порядок: параметр::значение::комментарий
все 10 параметров модуля обязательны
"--end-conf--" - строка окончания параметров. её не комментируем
файл readme.txt можно занести в глобальный комментарий файла настройки модуля
имя файла настройки - conf.cr
рекомендуемая кодировка -  utf8
расположение - в корне модуля