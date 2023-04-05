+++
title = "Терминологическая работа"
description = "В museum-digital мы используем контролируемые словари, чтобы расширить возможности пользователей. Здесь мы описываем, как с ними работать."

[extra]
keywords = "терминология, музеи, контролируемые словари, тегирование"
banner_image = "/data/img/banners/Banner_Heiligbrodt_Collections_Insects_Unlocked.jpg"
banner_image_alt = "Public domain image by Alex Wild for the Insects Unlocked project. / Ludolph Heiligbrodt collection / The insect collection of 19th century Texas naturalist Ludolph Heiligbrodt is housed at the University of Texas at Austin."
html_id = "terminology"
+++

## Контролируемые словари в museum-digital

Контролируемые словари являются центральным аспектом работы museum-digital. Сортированные по четырем категориям (лица и учреждения, географические места, времена и ключевые слова), определения обогащены понятиями и ссылками на внешние контролируемые словари и службы (Wikipedia, GND, ULAN, RKD, MBL, LAGIS, geonames, TGN, AAT, LCSH, ...). В то же время они распределены по категориям в иерархическом порядке. Это позволяет при поиске по заданному вышестоящему определению получать объекты, связанные с подчинёнными определениями. Таким образом, поиск по слову "транспортное средство" возвращает все объекты, связанные с "автомобилем".

----

### Как контролируют словари? 

Как словари контролируются? 
Курирование контролируемых словарей в museum-digital происходит централизованно. Все музеи всех версий с учётом основного языка работают вместе над созданием общей базы данных контролируемых определений. Поскольку создание контролируемых словарей отнимает много времени, мы стараемся максимально снизить нагрузку на музеи-участники в этом отношении. Кроме того, централизованное ведение контролируемых словарей приводит к более унифицированным результатам.

Для облегчения процесса курирования мы разработали инструмент "[nodac](/software/nodac)", который автоматизирует большую часть работы по расширению и предлагает простой интерфейс для иерархического расположения определений. С помощью этого инструмента редакторы стандартных данных могут также использовать функции пакетного редактирования для расширения контролируемых словарей.

Таким образом, составление контролируемых словарей - это совместная работа музеев-участников, добровольцев и поддержка со стороны правительств ряда государств, возглавляемая небольшой командой "редакторов нормативных данных".

----

### Текущий прогресс

"Чистка" и упорядочивание контролируемых словарей - это постоянная работа. Чтобы получить более чёткое представление о том, насколько мы продвинулись в плане фактического контроля над словарями, мы используем систему согласования.

{{ chart_md_vocabulary_progress() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term: Браузер словарей{% end %}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}nodac{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/tag/controlled-vocabularies/feed/", html_url="https://blog.museum-digital.org/tag/controlled-vocabularies/", title="News") }}

{{ embed_chartjs() }}
<script src="/js/dashboard-controlled-vocabs-status.js" type="text/javascript" async></script>
