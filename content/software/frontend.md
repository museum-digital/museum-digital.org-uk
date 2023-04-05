+++
title = "Внешний интерфейс/портал"
description = "Большая часть работы museum-digital направлена на то, чтобы перенести музеи в онлайн. Мы делаем это в основном с помощью нашего основного внешнего интерфейса/портала."

[extra]
keywords = "программное обеспечение, музеи, музейные предметы, музейное программное обеспечение, выставки, веб-портал"
banner_image = "/data/img/banners/RooseveltRoadViaduct_1920_InternetArchive_p280.jpg"
banner_image_alt = 'Image from page 280 of "The practical aspect of the slope deflection method and its application to the design of the Roosevelt Road Viaduct" (1920); Grodsky, Morris; Contributing Library: Paul V. Galvin Library, Illinois Institute of Technology; Digitizing Sponsor: CARLI: Consortium of Academic and Research Libraries in Illinois'
html_id = "frontend"
og_image = "/data/img/logo/mdlogo-code-1024px.png"
faq = [
    [
        "Как музей может опубликовать свои предметы в museum-digital?",
        "Сначала музей должен быть создан в [musdb](/software/musdb) региональным администратором, ответственным за соответствующую версию museum-digital. Для этого необходимо предоставить название, адрес, краткое описание музея (не менее 25 символов) и изображение, символизирующее музей. После создания музея в musdb объекты можно вносить и публиковать по одному - или же можно импортировать имеющиеся данные о собрании учреждения в большом количестве. Учреждение становится публичным только после публикации одного из его объектов"

    ],
    [
        "Хранятся ли прошлые версии страниц объектов в архиве для получения научных ссылок?",
        "Да. После обновления страницы общедоступного объекта делается снимок её содержимого, который становится доступным с помощью архива страниц."
    ],
    [
        "Предлагает ли фронтенд museum-digital постоянные URL-адреса?",
        "Мы не присваиваем автоматически DOI, дескрипторы или что-либо подобное опубликованным страницам. Однако мы тщательно следим за тем, чтобы любой URL первичной страницы (например, страницы объекта или музея) оставался стабильным и чтобы было достаточно ссылок из старых структур URL, чтобы ни одна ссылка не была потеряна. Наш подход к этой теме см. в статье Тима Бернерса-Ли [_Cool URIs don't change_] (https://www.w3.org/Provider/Style/URI)."
    ],
    [
        "Является ли макет фронтенда museum-digital отзывчивым?",
        "Да."
    ],
    [
        "У меня есть отличная идея для нового метода визуализации! Вы можете её реализовать?",
        "Если это действительно хорошая и подходящая идея, конечно. Просто отправьте нам письмо."
    ],
]
+++

## Основной внешний интерфейс museum-digital

museum-digital был основан для публикации информации о музейных предметах онлайн. Это невозможно без соответствующего программного обеспечения.

"Фронтенд" - это первое приложение, которое было разработано в museum-digital. С его помощью музеи могут объединить усилия, чтобы представить себя и свои объекты в интернете.

Для того чтобы дать полное представление о музеях и их объектах, с тех пор появилась разнообразная дополнительная информация. С одной стороны, музеи теперь могут добавлять информацию о своих собраниях, группах предметов, выставках и событиях. С другой стороны, был добавлен ряд возможностей для связывания и визуализации информации.

----

### Скриншоты

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Startpage.jpg",
    image_alt=""
    ) %}Start page of the German national portal of museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-ExtendedSearch.jpg",
    image_alt="Страница расширенного поиска во фронтенде museum-digital."
    ) %} Используя настройки расширенного поиска, пользователи могут задавать точные поисковые запросы.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-EnrichedSearchPages.jpg",
    image_alt="Обогащенные результаты поиска во фронтенде museum-digital"
    ) %}Страницы результатов поиска обогащаются на основе данных из наших контролируемых словарей.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Timeline.jpg",
    image_alt="Страница хронологии в museum-digital."
    ) %}Фронтенд museum-digital предлагает временную шкалу для просмотра результатов поиска, отсортированных по их отношению ко времени.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-oak.jpg",
    image_alt="Объекты на страницах карт в museum-digital."
    ) %}Используя страницы "объекты на карте", пользователи могут найти интересные объекты, основываясь на своем географическом положении.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Object.jpg",
    image_alt="Страница объекта."
    ) %}Страница объекта во фронтенде museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Multilingual.jpg",
    image_alt="Многоязычие во фронтенде museum-digital."
    ) %}museum-digital является многоязычным, и отображаемые записи тоже могут быть многоязычными. Язык навигации и язык записей можно переключать независимо друг от друга.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-ExhibitionOverview.jpg",
    image_alt="Страница обзора выставки во фронтенде museum-digital"
    ) %}Страница обзора выставки в режиме плитки.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Calendar.jpg",
    image_alt="Для выставок и мероприятий имеются календари."
    ) %}Для выставок и мероприятий имеются календари.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-GraphView.jpg",
    image_alt="В виде графика"
    ) %}Представление "в виде графика" предлагает пользователям альтернативный вариант навигации по порталу.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Keyboard.jpg",
    image_alt="Клавиатурное управление фронтендом museum-digital."
    ) %}Опытные пользователи могут перемещаться по порталу с помощью клавиатуры через интерфейс, вдохновленный emacs.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Ausgabe/Screenshot-Frontend-Compare.jpg",
    image_alt="Сравнение объектов"
    ) %}Два объекта можно сравнить друг с другом.{% end %}

{{ museumdigital_preview_list_end() }}

----

### Техническая информация

#### Фокус - Принципы дизайна

"Фронтенд" museum-digital в первую очередь спроектирован таким образом, чтобы всегда предлагать чёткий акцент на той информации, которая является центральной для данной страницы или раздела. Это позволяет легко понять информацию. Для опытных пользователей существует множество дополнительных возможностей - от визуализации до меню командной строки, встроенного в сайт. Однако они "спрятаны" в боковых панелях или доступны только с помощью сочетаний клавиш, чтобы не раздражать начинающих пользователей.

#### API

Публикация и обеспечение доступности - это не только возможность просмотра чего-либо. Это также означает предоставление людям возможности использовать данные для реализации своих собственных идей. Соответственно, вся информация, опубликованная с помощью "фронтенда" museum-digital, также доступна в машиночитаемом виде через наш JSON API.

По мере возможности, "фронтенд" предоставляет информацию и в открытых стандартах: информация об объектах может быть доступна в [LIDO](http://www.lido-schema.org/), информация о музеях может быть загружена в виде электронных визитных карточек ([vCard](https://ru.wikipedia.org/wiki/VCard)), а календарная информация, такая как выставки, может быть интегрирована в календарные инструменты с помощью стандарта [iCalendar](https://en.wikipedia.org/wiki/ICalendar).

{{ highlighted_tile_section(headline = "Открытые стандарты", tiles = [
    [
        'LIDO',
        'для метаданных объектов',
        "Основанный на [CIDOC-CRM] (https://www.cidoc-crm.org/), LIDO предлагает стандартизированный формат XML для обмена метаданными объектов для музеев. Многие из центральных концепций, на которых построен museum-digital, заимствованы из LIDO (например, структура событий для более точного описания местоположения и датировки)",
    ],
    [
        'iCalendar',
        'для записей календаря',
        "Календарные записи о событиях и выставках можно загрузить и подписаться на них, используя формат [iCalendar](https://ru.wikipedia.org/wiki/ICalendar) и смежный стандарт WebCal. iCalendar - это хорошо зарекомендовавший себя формат, который, в частности, можно использовать для импорта событий в мобильный календарь.",
    ],
    [
        'vCard',
        "для контактной информации учреждений",
        "Если iCalendar предназначен для записей календаря, то vCard - для контактной информации: Очень простой и широко распространённый стандарт, который может использоваться для обмена контактной информацией практически между всеми популярными менеджерами адресных книг. Фронтенд museum-digital реализует совместимый обмен контактной информацией музеев и собраний с помощью vCard.",
    ],
    [
        'oEmbed',
        'for referencing object, series, and institution pages',
        'oEmbed is a standard for describing the preferred way to embed a page in another. Using oEmbed, object, institution and series pages can be referenced in - e.g. - WordPress blog posts in a breeze.',
    ],
    [
        'TEI',
        'для транскрипций',
        "TEI (Text Encoding Initiative) - это стандарт для кодирования текста в машиночитаемом виде. В museum-digital он изначально поддерживается для транскрипций и может быть использован как альтернативный формат вывода информации об объектах, ориентированный на транскрипции и отправку/получение писем и подобных объектов.",
    ],
    [
        'IIIF',
        'для изображений',
        '[IIIF](https://iiif.io/) предлагает стандартизированный API для ссылок на изображения или их разделы. В стандартной конфигурации изображения собираются для представления какого-либо объекта (например, музейного предмета), но эти собрания, в свою очередь, могут быть собраны в вышестоящие собрания. Поскольку IIIF требует редактирования изображений на стороне сервера перед отправкой пользователю, он доступен только для локально размещенных изображений. Однако для них IIIF версии 2.1 полностью реализован.',
    ],
    [
        'RSS',
        'for staying up-to-date',
        "Where objects, events, or exhibitions are listed, museum-digital's frontend generates an RSS feed. These feeds can be subscribed to using a feed reader.",
    ],
    [
        'JSON-LD',
        'для придания информации удобочитаемости для поисковых систем',
        "Google и другие поисковые системы могут использовать более подробные [структурированные данные](https://developers.google.com/search/docs/advanced/structured-data/intro-structured-data) для создания предварительных представлений о некоторых часто появляющихся типах данных - таких как события или часто задаваемые вопросы. Везде, где это уместно, необходимые структурированные данные предоставляются фронтендом",
    ]
]) }}

#### Разработка

"Фронтенд" museum-digital построен с использованием PHP8 и MySQL. JavaScript используется для интерактивных функций и визуализации. Список используемых библиотек можно найти здесь. Для контроля версий мы используем git. 

----

{% counter_section_left(api = "md_frontend_system", name = "languages") %}
Фронтенд создан для многоязычного использования и уже переведен на несколько языков. Конечно, мы всегда рады помощи в переводе фронтенда (как и всех других инструментов museum-digital) на новые языки. Описание того, как можно использовать для этого наш специальный инструмент перевода, можно найти [доступно в блоге (на немецком языке)](https://blog.museum-digital.org/de/2019/03/02/museum-digital-uebersetzen/).
{% end %}

----

{% counter_section_right_plain_number(api = "md_global_stats", selector = "museums", name = "institutions") %}
Многие музеи объединяются, чтобы использовать museum-digital в качестве платформы для публикаций - и таким образом представляют свои объекты с помощью фронтенда.
{% end %}

----

{{ build_faq_list(title = "FAQ") }}

----

### Resources

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Ausgabe/",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="") %}Страницы справочника (на немецком языке){% end %}

{% museumdigital_linktiles_tile(link="https://nat.museum-digital.de/index.php?t=text&st=api",
    image="/data/img/icons/more.svg",
    image_alt="") %}Краткое введение в API{% end %}

{{ museumdigital_linktiles_list_end() }}

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/frontend/feed/",
    html_url="https://blog.museum-digital.org/category/development/frontend/",
    title="Новости о фронтенде в блоге") }}
