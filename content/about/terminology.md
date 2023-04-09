+++
title = "Термінологічна робота"
description = "У museum-digital ми використовуємо контрольовані словники, щоб розширити можливості користувачів. Тут ми описуємо, як з ними працювати."

[extra]
keywords = "термінологія, музеї, контрольовані словники, тегування"
banner_image = "/data/img/banners/Banner_Heiligbrodt_Collections_Insects_Unlocked.jpg"
banner_image_alt = "Public domain image by Alex Wild for the Insects Unlocked project. / Ludolph Heiligbrodt collection / The insect collection of 19th century Texas naturalist Ludolph Heiligbrodt is housed at the University of Texas at Austin."
html_id = "terminology"
+++

## Контрольовані словники в museum-digital

Контрольовані словники є центральним аспектом роботи museum-digital. Відсортовані за чотирма категоріями (особи та установи, географічні місця, часи та ключові слова), визначення збагачені поняттями та посиланнями на зовнішні контрольовані словники та служби (Wikipedia, GND, ULAN, RKD, MBL, LAGIS, geonames, TGN, AAT, LCSH, ...). Водночас вони розподілені за категоріями в ієрархічному порядку. Це дає змогу під час пошуку за заданим вищим визначенням отримувати об'єкти, пов'язані з підпорядкованими визначеннями. Таким чином, пошук за словом "транспортний засіб" повертає всі об'єкти, пов'язані з "автомобілем".

----

### Як контролюють словники? 
 
Курування контрольованих словників у museum-digital відбувається централізовано. Усі музеї всіх версій з урахуванням основної мови працюють разом над створенням загальної бази даних контрольованих визначень. Оскільки створення контрольованих словників забирає багато часу, ми намагаємося максимально знизити навантаження на музеї-учасники в цьому відношенні. Крім того, централізоване ведення контрольованих словників призводить до більш уніфікованих результатів.

Для полегшення процесу курування ми розробили інструмент "[nodac](/software/nodac)", який автоматизує більшу частину роботи з розширення і пропонує простий інтерфейс для ієрархічного розташування визначень. За допомогою цього інструменту редактори стандартних даних можуть також використовувати функції пакетного редагування для розширення контрольованих словників.

Таким чином, складання контрольованих словників - це спільна робота музеїв-учасників, добровольців і підтримка з боку урядів низки держав, очолювана невеликою командою "редакторів нормативних даних".

----

### Поточний прогрес

"Чистка" та впорядкування контрольованих словників - це постійна робота. Щоб отримати більш чітке уявлення про те, наскільки ми просунулися в плані фактичного контролю над словниками, ми використовуємо систему узгодження.

{{ chart_md_vocabulary_progress() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term: Браузер словників{% end %}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}nodac{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/tag/controlled-vocabularies/feed/", html_url="https://blog.museum-digital.org/tag/controlled-vocabularies/", title="Новини") }}

{{ embed_chartjs() }}
<script src="/js/dashboard-controlled-vocabs-status.js" type="text/javascript" async></script>
