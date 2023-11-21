<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'cart' => [
        'checkout' => 'Разплащане',
        'empty_cart' => '',
        'info' => ':count_delimited артикул в количката ($:subtotal)|:count_delimited артикула в количката ($:subtotal)',
        'more_goodies' => 'Ще проверя още артикули, преди да приключа поръчката си',
        'shipping_fees' => 'транспортни такси',
        'title' => 'Количка за пазаруване',
        'total' => 'общо',

        'errors_no_checkout' => [
            'line_1' => 'Ох не, изникнаха проблеми с количката ви, спирайки разплащането!',
            'line_2' => 'Премахнете или актуализирайте артикулите отгоре, за да продължите.',
        ],

        'empty' => [
            'text' => 'Количката ви е празна.',
            'return_link' => [
                '_' => 'Върнете се до :link за други придобивки!',
                'link_text' => 'списъка с артикули',
            ],
        ],
    ],

    'checkout' => [
        'cart_problems' => 'Ох не, изникнаха проблеми с количката ви!',
        'cart_problems_edit' => 'Кликнете тук, за да го редактирате.',
        'declined' => 'Плащането е отменено.',
        'delayed_shipping' => 'В момента сме затрупани с поръчки! Добре дошли сте да пуснете вашата поръчка, но очаквайте **допълнително 1-2 седмици закъснение**, докато наваксаме с вече съществуващите поръчки.',
        'hide_from_activity' => 'Скриване на всички osu!supporter етикети в тази поръчка от моята активност',
        'old_cart' => 'Вашата количка изглежда е с изтекъл срок и бе възобновена, моля опитайте отново.',
        'pay' => 'Плащане с PayPal',
        'title_compact' => 'разплащане',

        'has_pending' => [
            '_' => 'Имате незавършени разплащания. Кликнете :link , за да ги видите.',
            'link_text' => 'тук',
        ],

        'pending_checkout' => [
            'line_1' => 'Предишно разплашане е започнато и незавършено.',
            'line_2' => 'Довършете вашето разплащане, като изберете метод на плащане.',
        ],
    ],

    'discount' => 'спести :percent%',
    'free' => '',

    'invoice' => [
        'contact' => '',
        'date' => '',
        'echeck_delay' => 'Вие заплатихте чрез eCheck, което може да отнеме до 10 дена от страна на PayPal за потвърждение на плащането!',
        'hide_from_activity' => 'osu!supporter етикетите от тази поръчка не са показани в активността ви.',
        'sent_via' => '',
        'shipping_to' => '',
        'title' => '',
        'title_compact' => 'фактура',

        'status' => [
            'cancelled' => [
                'title' => '',
                'line_1' => [
                    '_' => "",
                    'link_text' => '',
                ],
            ],
            'delivered' => [
                'title' => '',
                'line_1' => [
                    '_' => '',
                    'link_text' => '',
                ],
            ],
            'prepared' => [
                'title' => '',
                'line_1' => '',
                'line_2' => '',
            ],
            'processing' => [
                'title' => 'Вашето плащане все още не е потвърдено!',
                'line_1' => 'Ако вече сте платили, тогава все още очакваме потвърждение за плащането. Моля презаредете страницата след минута или две!',
                'line_2' => [
                    '_' => 'Ако възникне проблем по време на плащането, :link',
                    'link_text' => 'кликнете тук, за да възстановите вашето разплащане',
                ],
            ],
            'shipped' => [
                'title' => '',
                'tracking_details' => '',
                'no_tracking_details' => [
                    '_' => "",
                    'link_text' => '',
                ],
            ],
        ],
    ],

    'order' => [
        'cancel' => 'Откажи поръчка',
        'cancel_confirm' => 'Поръчката ще бъда отменена и плащането няма да бъде прието. Възможно е резервираната сума да не бъде освободена веднага. Сигурни ли сте?',
        'cancel_not_allowed' => 'Поръчката не може да бъде отменена на този етап.',
        'invoice' => 'Преглед на фактура',
        'no_orders' => 'Нямате поръчки за преглед.',
        'paid_on' => 'Поръчан на :date',
        'resume' => 'Продължи разплащането',
        'shipping_and_handling' => '',
        'shopify_expired' => 'Връзката за тази поръчката изтече.',
        'subtotal' => '',
        'total' => '',

        'details' => [
            'order_number' => '',
            'payment_terms' => '',
            'salesperson' => '',
            'shipping_method' => '',
            'shipping_terms' => '',
            'title' => '',
        ],

        'item' => [
            'quantity' => 'Количество',

            'display_name' => [
                'supporter_tag' => ':name за :username (:duration)',
            ],

            'subtext' => [
                'supporter_tag' => 'Съобщение: :message',
            ],
        ],

        'not_modifiable_exception' => [
            'cancelled' => 'Не може да промените вашата поръчка, защото е отменена.',
            'checkout' => 'Не може да промените вашата поръчка, докато се обработва.', // checkout and processing should have the same message.
            'default' => 'Поръчката не подлежи на промяна',
            'delivered' => 'Не може да промените вашата поръчка, защото е доставена.',
            'paid' => 'Не може да промените вашата поръчка, защото вече е платена.',
            'processing' => 'Не може да промените вашата поръчка, докато се обработва.',
            'shipped' => 'Не може да промените вашата поръчка, защото вече е изпратена.',
        ],

        'status' => [
            'cancelled' => 'Отменено',
            'checkout' => 'Подготвя се',
            'delivered' => 'Доставено',
            'paid' => 'Платено',
            'processing' => 'Изчаква одобрение',
            'shipped' => 'Пътува',
            'title' => '',
        ],

        'thanks' => [
            'title' => '',
            'line_1' => [
                '_' => '',
                'link_text' => '',
            ],
        ],
    ],

    'product' => [
        'name' => 'Име',

        'stock' => [
            'out' => 'Този артикул не е наличен в момента. Моля проверете отново по-късно!',
            'out_with_alternative' => 'За съжаление, този артикул не наличен. Моля, използвайте падащото меню, за да избере друг или проверете отново по-късно!',
        ],

        'add_to_cart' => 'Добави в количка',
        'notify' => 'Изпрати ми известие, когато отново е в наличност!',

        'notification_success' => 'ще бъдете уведомени, при нова наличност. кликнете :link за отказ',
        'notification_remove_text' => 'тук',

        'notification_in_stock' => 'Този артикул вече е в наличност!',
    ],

    'supporter_tag' => [
        'gift' => 'подари на играч',
        'gift_message' => 'съобщение по избор към подаръка! (до :length символа)',

        'require_login' => [
            '_' => 'Моля, :link, за да закупите osu!supporter !',
            'link_text' => 'влез в профила си',
        ],
    ],

    'username_change' => [
        'check' => 'Въведи потребителско име, за да проверите наличността му!',
        'checking' => 'Проверка за наличност на :username...',
        'placeholder' => '',
        'label' => '',
        'current' => '',

        'require_login' => [
            '_' => 'Трябва да сте :link , за да промените името си!',
            'link_text' => 'влезли в профила си',
        ],
    ],

    'xsolla' => [
        'distributor' => '',
    ],
];
