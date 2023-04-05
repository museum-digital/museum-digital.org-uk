+++
title = "musdb"
description = "musdb is museum-digital's tool for collection management. It has in many ways developed into a more general museum-management tool."

[extra]
keywords = "musdb, Museum Management, Inventory, Software, Collection Management System"
banner_image = "/data/img/banners/usda_nrcs_montana_snow_survey65.jpg"
banner_image_alt = "Public domain / US gov't work. USDA NRCS Montana / Snow Survey65.tif / Man working on computer, analyzing data, 1977."
html_id = "musdb"
og_image = "/data/img/logo-musdb/musdbLogoBrown.svg"
faq = [
    [
        "Сколько стоит musdb?",
        "musdb является бесплатным и будет оставаться таковым. Пользователи с необходимыми правами могут добавлять столько дополнительных пользователей, сколько необходимо."
    ],
    [
        "Каковы системные требования для musdb?",
        "musdb полностью основан на веб-технологиях. Поэтому для работы с musdb требуется только современный браузер."
    ],
    [
        "Можно ли использовать musdb только для управления собрания и ничего не публиковать? ",
        "Да."
    ],
    [
        "Могу ли я импортировать имеющиеся данные о собрании в musdb?",
        "В принципе, да. Если учесть, что данные были собраны в структурированном виде, мы всегда находили способ для их импорта. Скрипты импорта для распространенных обменных форматов, таких как LIDO, и экспорта из других популярных систем управления коллекциями имеются в комплекте (список можно найти в руководстве) и могут быть использованы в сотрудничестве с нашей технической командой или самостоятельно, используя WebDAV-интерфейс musdb для импорта данных."
    ],
    [
        "Поддерживает ли musdb двухфакторную аутентификацию?",
        "Да. Пользователи могут включить двухфакторную аутентификацию на основе аппаратных токенов (например, Yubikeys или Nitrokeys), TOTP (который, например, используется в Google Authenticator) или по почте."
    ],
    [
        "Существует ли ограничение на количество изображений, которые можно загрузить для одного объекта?",
        "Нет. Вы можете загружать столько изображений (или других типов медиа, таких как видео, аудио, PDF или 3D-представления), сколько необходимо."
    ],
    [
        "Можно ли использовать musdb для управления нашей музейной библиотекой?",
        "Да."
    ],
]
+++

## musdb

musdb - это инструмент museum-digital для индексирования и создания описей. Первоначально он был разработан только для регистрации объектов, предназначенных для публикации. Впоследствии он превратился в полнофункциональное решение для инвентаризации и управления музейным собранием.

Центральное место в разработке musdb занимают:

- musdb разрабатывается на основе запросов и дискуссий с музеями, которые используют musdb
- musdb создан с учётом совместной работы: Новые функции и исправления доступны для всех музеев
- использование musdb означает совместную работу: контролируемые словари, которые используются для взаимосвязи людей, времени, мест и тегов, используются совместно всеми музеями данного языка
- работа с musdb должна быть максимально простой и интуитивно понятной
- советы и предупреждения приводятся для того, чтобы не просто вводить данные, а создавать данные высокого качества

----

### Скриншоты

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Dashboard.jpg",
    image_alt="Dashboard/Default startpage of musdb."
    ) %}TСтартовой страницей по умолчанию является настраиваемая приборная панель. Пользователи могут выбрать другие стартовые страницы.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-BatchEditing.jpg",
    image_alt="Batch editing in musdb."
    ) %}musdb обладает функциями пакетного редактирования для пакетной публикации или маркировки{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Export.jpg",
    image_alt="XML export"
    ) %}Пользователи могут экспортировать свои данные в наш собственный md:xml (простая нотация, включающая все доступные поля) и LIDO.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Backgrounds.jpg",
    image_alt="Background research tool."
    ) %}Используя раздел "фоны", пользователи могут просматривать контролируемые словари непосредственно из musdb.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Find-an-Expert.jpg",
    image_alt="Find an expert: Connecting users."
    ) %}С помощью кнопки "Найти эксперта" пользователи могут найти других пользователей, которые провели большую работу по этой теме. Тем не менее, каждый пользователь может решить, хочет ли он позволить другим находить его с помощью этого инструмента или нет.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Multilingual.jpg",
    image_alt="Multilingual usage of musdb."
    ) %}musdb является многоязычным и может обрабатывать многоязычный ввод.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Navigation.jpg",
    image_alt="Navigation of musdb."
    ) %}Навигация дает примерный обзор различных разделов musdb: Музеи, Собрания, Предметы, Группы предметов, Выставки и т.д.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-ObjectOverview.jpg",
    image_alt="Object overview page."
    ) %}Страница обзора объекта в режиме изображения. Боковая панель справа предлагает функции поиска и экспорта на основе фильтров, а также пакетного редактирования. Также доступен простой просмотр списка.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-ObjectPage.jpg",
    image_alt="Object page"
    ) %}Основной раздел страницы объекта. В верхней части можно ввести основную информацию об объекте. В нижней части находится меню вкладок для управления подробной информацией об объекте.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-RecordHistory.jpg",
    image_alt="Record history of an object."
    ) %}Изменения в карточке объекта регистрируются в журнале. Если ранее редактировавший объект пользователь настроил свой профиль пользователя, то новые пользователи, которые увидят журналы, смогут познакомиться с другими сотрудниками музея через эти журналы.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Research.jpg",
    image_alt="Provenance research tab"
    ) %}Используя вкладку исследования происхождения, можно записать подробные отчеты по заранее определенному набору критических вопросов.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Restoration.jpg",
    image_alt="Restoration tab on a musdb object page"
    ) %}Вкладка "Реставрация" на странице объекта предлагает варианты цветовых и легкодоступных заметок в верхней части раздела, подробных - в нижней.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/musdb/Screenshot-musdb-Settings.jpg",
    image_alt="User management and user rights section"
    ) %}Директора музеев и региональные администраторы устанавливают подробные разрешения на то, что пользователи могут редактировать или просматривать.{% end %}

{{ museumdigital_preview_list_end() }}

----

### Техническая информация

#### Принципы дизайна

Musdb должен быть простым и интуитивым в использовании. Его использование должно приносить удовольствие. С одной стороны, это означает, что дизайн должен четко отражать основную тему страницы. Для достижения этой цели существуют опции, позволяющие включать и выключать многие функции. Дополнительные функции (например, генерация QR-кодов для страниц объектов или оглавление для прямого перехода к нужному разделу страницы) доступны в панели инструментов на левой границе окна.

 Но _простота_ и _интуитивность_ также означают, что опытные пользователи могут эффективно работать так, как им удобнее. Musdb предлагает множество вспомогательных средств для этого. Вот некоторые из них:

- Нажав на поле, пользователь может увидеть, сколько символов было введено, сколько требуется и сколько разрешено.
- uQi: "Индекс качества публикаций" показывает, как можно улучшить информацию об объекте.
- Plausi: используя контролируемые словари, musdb может предупредить о неправдоподобных записях (например, художник не может написать картину до своего рождения)
- Текстовые блоки обеспечивают быстрый ввод схожего содержания

#### Разработка

Musdb основан на PHP8 и MySQL. Используется ряд библиотек PHP и JavaScript, список которых можно найти в руководстве.

----

{{ build_accordion_lr_section(title = "Особенности и основные понятия", items = [
    [
        "Централизованные контролируемые словари",
        "All museums working with musdb use one set of controlled vocabularies for linked actors, places, times, and tags. The work for enriching such concepts with translations, links to the common norm data repositories etc. thus only needs to be done once - and everybody immediately profits from having accessible those entries that have already been entered for another museum beforehand."
    ],
    [
        "Экспорт",
        "Все данные об объектах могут быть экспортированы с использованием простой нотации XML на основе нашей собственной структуры данных ('md:xml') для полного экспорта или в распространенные форматы обмена, такие как LIDO. Также доступен экспорт в файлы Excel и автогенерируемые каталоги.",
    ],
    [
        "Редактируйте любым способом, который вам подходит",
        "musdb поддерживает множество способов обновления данных об объектах. Пользователи могут переключить страницу редактирования объекта на полностью настраиваемую форму, в которой заданные поля или подразделы данных об объекте могут быть перемещены на место с помощью перетаскивания. Для одновременного редактирования большого количества объектов предусмотрены возможности пакетного редактирования и режим редактирования на основе таблиц. А если вы все еще не удовлетворены, вы даже можете написать свой собственный интерфейс, используя API."
    ],
    [
        "Гибкий поиск",
        "Поиск объектов осуществляется с использованием пользовательского языка запросов, построенного поверх поисковой базы данных Manticore и наших таксономий. Если вы хотите искать не только объекты, но и какое-либо определение во всех данных вашего музея, вы можете использовать универсальную функцию поиска musdb."
    ],
    [
        "Автоматический контроль качества",
        "Цель musdb - упростить ввод высококачественных данных. Для этого мы встроили множество функций, позволяющих, в частности, просто сделать теги более конкретными с помощью наших контролируемых словарей и простого щелчка правой кнопкой мыши; PuQI, инструмент для количественной оценки качества вводимой информации об объектах для публикации; автоматические предложения по улучшению, которые позволяют вам полуавтоматически запускать очевидные исправления и дополнения ваших данных с помощью Tinder-подобного интерфейса."
    ],
]) }}

----

{% counter_section_left(api = "md_musdb_system", name = "языков") %}
musdb создан для многоязычного использования и уже переведён на несколько языков. Мы всегда рады помощи в переводе musdb (как и всех других инструментов museum-digital) на новые языки. Описание того, как можно использовать наш специальный инструмент для перевода, [доступно в блоге (на немецком языке)](https://blog.museum-digital.org/de/2019/03/02/museum-digital-uebersetzen/).
{% end %}

----

{{ build_faq_list(title = "FAQ") }}

----

### Ресурсы

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/musdb/",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="") %}Документация (на немецком языке){% end %}

{% museumdigital_linktiles_tile(link="https://www.youtube.com/playlist?list=PLFbmcALPcmvLtbv38OpjEkHFteP-qhmDY",
    image="/data/img/logos-ext/YouTube_social_red_square_2017.svg",
    image_alt="") %}Видео на YouTube{% end %}

{% museumdigital_linktiles_tile(link="https://demo.museum-digital.org/musdb/swagger/",
    image="/data/img/icons/more.svg",
    image_alt="") %}API-документация{% end %}

{{ museumdigital_linktiles_list_end() }}

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/musdb/feed/",
    html_url="https://blog.museum-digital.org/category/development/musdb/",
    title="Новости о разработке musdb") }}
