+++
title = "nodac"
description = "nodac - это инструмент museum-digital для курирования контролируемых словарей."

[extra]
keywords = "программное обеспечение, управляемые словари, предметные рубрики"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p235.jpg"
banner_image_alt = "Image from page 235 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
faq = [
    [
        "Можно ли использовать nodac с моим собственным словарем?",
        "Конечно. Эта версия nodac всегда предназначена только для одного конкретного словаря. Однако мы можем установить любое количество версий."
    ],
    [
        "Могу ли я использовать nodac для публикации своего контролируемого словаря?",
        "Нет. nodac - это только инструмент управления. Однако мы создали отдельный инструмент, [md:term](/software/term), с помощью которого можно опубликовать любой словарь, отредактированный в nodac."
    ],
]
+++

## nodac: Управление контролируемыми словарями

nodac - это инструмент museum-digital для управления контролируемыми словарями. Это означает маркировку, описание, перевод, создание иерархии определений и связывание понятий с соответствующими записями во внешних хранилищах, таких как Wikidata, GND, AAT, geonames и др.

Как основной инструмент управления словарями museum-digital, nodac должен быть обучаем. В nodac можно заносить определения в "чёрный список", настраивать автоматический перенос определений из одного словаря в другой и хранить постоянные изменения определений до их канонических форм. Таким образом, nodac позволяет не только облегчить точный процесс редактирования, но и сделать его долгосрочным, несмотря на ограниченные ресурсы.

nodac способен работать с несколькими полииерархическими тезаурусами и следует стандарту SKOS 2.

### Связанные открытые данные

С самого начала nodac был написан с учётом использования связанных открытых данных. Он не только помогает управлять такими ссылками, но и позволяет автоматически извлекать данные, записанные в Wikidata, Gemeinsame Normdatei (GND).

----

### Скриншоты

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_01_Startpage.png",
    image_alt="Стартовая страница nodac"
    ) %}На стартовой странице nodac отображаются новые записи и собственная активность. Она может быть настроена с помощью хранимых поисковых запросов.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_02_Overview_Actors.png",
    image_alt="Страница обзора для актеров"
    ) %}Страницы обзора отображают текущий прогресс в курировании данного контролируемого словаря в виде текста и графиков. Все метрики доступны для поиска.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_03_Search_Tags.png",
    image_alt=""
    ) %}Страница результатов поиска по тегам. В левой боковой панели вы можете увидеть некоторые из доступных вариантов поиска.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_06_Edit_Page_Actor.png",
    image_alt=""
) %}Страница редактирования для акторов (1): Каждое понятие имеет соответствующую страницу редактирования. Здесь можно добавить описание и другую основную информацию, переводы; классифицировать сущность как "утверждённую" и задать синонимы для записи.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_07_Actors_noda_Links.png",
    image_alt=""
    ) %}Страница редактирования для акторов (2): Также можно добавить ссылки на набор наиболее важных хранилищ нормативных данных.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_08_Edit_Page_Actor_Objects.png",
    image_alt=""
) %}Страница редактирования для акторов (3): nodac может быть связан с musdb. Если это так, то объекты, связанные с данной сущностью, будут перечислены в нижней части страницы редактирования.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_09_Import_Wikidata.png",
    image_alt=""
    ) %}Если сущность или понятие уже известны в Викиданных / Википедии, данные могут быть импортированы оттуда. Здесь записи Викиданных предлагаются для выбора на основе их названий.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_10_Places_Wikidata_by_Coordinates.png",
    image_alt=""
    ) %}В частности, для мест, соответствующие объекты Викиданных также могут быть найдены на основе координат места.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/nodac/Screenshot_nodac_05_Actors_Blacklist.png",
    image_alt=""
    ) %}Определения, которые безусловно непригодны для использования в данном контролируемом словаре, могут быть занесены в чёрный список, чтобы предотвратить повторное создание записей с аналогичным названием.{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ build_faq_list(title = "Часто задаваемые вопросы") }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/nodac/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Справочник о nodac (на немецком языке){% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term/",
    title="Новости") }}
