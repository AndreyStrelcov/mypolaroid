<?php
// *	@copyright		Pavel Kravchenko; https://opencartforum.com/profile/711752-paulkravchenko/

// Heading
$_['heading_title']           = 'Webmoney WMU';

// Button
$_['button_clear']            = 'Очистить журнал';

// Tab 
$_['tab_log']                 = 'Журнал';

// Text 
$_['text_extension']          = 'Платежи';
$_['text_success']            = 'Настройки модуля обновлены!';
$_['text_webmoney_wmu']       = '<a style="cursor: pointer;" onclick="window.open(’https://webmoney.ru’);"><img src="view/image/payment/webmoney_wmu.gif" alt="Webmoney" title="Webmoney" style="border: 1px solid #EEEEEE;" height="25px" /></a>';
$_['text_clear_log_success']  = 'Журнал запросов от сервера платежной системы успешно очищен!';
$_['text_confirm']            = 'Удаление журнала невозможно отменить! Вы уверены, что хотите это сделать?';
$_['text_log_off']            = 'Выключен';
$_['text_log_short']          = 'Частичный (Только результаты операций)';
$_['text_log_full']           = 'Полный (Все запросы)';

// Entry
$_['entry_merch_r']               = 'Номер U-кошелька';
$_['entry_secret_key']            = 'Secret Key';
$_['entry_secret_key_x20']        = 'Secret Key X20';
$_['entry_result_url']            = 'Result URL';
$_['entry_success_url']           = 'Success URL';
$_['entry_fail_url']              = 'Fail URL';
$_['entry_order_confirm_status']  = 'Статус замовленняа после оформления замовленняа';
$_['entry_order_status']          = 'Статус замовленняа после оплаты';
$_['entry_order_fail_status']     = 'Статус замовленняа после неудачной оплаты';
$_['entry_hide_mode']             = 'Отображать модуль только залогинненым администраторам';
$_['entry_minimal_order']         = 'Минимальная стоимость замовленняа';
$_['entry_maximal_order']         = 'Максимальная стоимость замовленняа';
$_['entry_geo_zone']              = 'Гео Зона';
$_['entry_status']                = 'Состояние';
$_['entry_sort_order']            = 'Сортировка';

$_['entry_log']                   = 'Журнал';
$_['entry_log_file']              = 'Файл журнала';

// Help
$_['help_merch_r']              = 'например: U000000000000';
$_['help_order_confirm_status'] = 'При нажатии на кнопку "Подтвердить" на последнем этапе оформления замовленняа, замовленняу будет установлен выбранный статус';
$_['help_order_status']         = 'После успешной оплаты замовленняа, замовленняу будет установлен выбранный статус.';
$_['help_order_fail_status']    = 'Если платежная система вернет покупця после неудачного платежа, замовленняу будет установлен выбранный статус.';
$_['help_hide_mode']            = 'Если опция включена, то модуль будет доступен при оформлении замовленняа только администратору, если он залогинен в админ-панели. Это удобно, если необходимо не показывать модуль покупцям на время тестирования и настройки.';
$_['help_minimal_order']        = 'Если сумма замовленняа меньше указанной суммы, и сумма не пустая и не равна нулю, то этот метод оплаты не будет доступен, при оформлении замовленняа.<br />Например: 190.90';
$_['help_maximal_order']        = 'Если сумма замовленняа больше указанной суммы, и сумма не пустая и не равна нулю, то этот метод оплаты не будет доступен, при оформлении замовленняа.<br />Например: 5000.01';

$_['help_log']                  = 'Журнал запросов от сервера платежной системы сохраняется в файле: /system/storage/logs/%s';
$_['help_log_file']             = 'Последние %d строк из файла журнала.';

// Error
$_['error_permission']      = 'У Вас нет прав для изменения модуля!';
$_['error_merch_r']         = 'Неверный номер кошелька!';
$_['error_secret_key']      = 'Отсутствует Secret Key';
$_['error_secret_key_x20']  = 'Отсутствует Secret Key X20';
?>