+++
title = "md:term"
description = "md:term - это браузер словарей, который, в частности, используется для самостоятельного доступа к контролируемым словарям museum-digital."

[extra]
keywords = "программное обеспечение, управляемые словари, предметные рубрики"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p518.jpg"
banner_image_alt = "Image from page 518 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## md:term - Обозреватель словарей

md:term - это менеджер контролируемых словарей. С его помощью можно перемещаться по иерархии ключевых слов и мест, просматривать описание и переводы меток и понятий. Самое главное, что контролируемые словари доступны для поиска и предоставляются в формате, пригодном для машинного чтения, а также в формате, удобном для чтения человеком.

----

### md:term как портал

Эталонная реализация md:term представляет контролируемые словари museum-digital для мест, акторов, тегов и времени, а также некоторые внешние словари, такие как Hornbostel-Sachs-Systematk или Technikthesaurus. Словари, представленные в md:term, можно скачать целиком.

md:term может использоваться независимо от museum-digital в качестве презентационного инструмента для словарей. Однако лучше всего он работает в сочетании с [nodac](/software/nodac).

----

### Скриншоты

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_place_2.png",
    image_alt="md:term страница места: Hansaviertel"
    ) %}Помимо всегда доступных ссылок на машиночитаемые параметры экспорта, базовую информацию и ссылки на хранилища нормативных данных, на страницах мест перечисляются вышестоящие и нижестоящие места и место на карте.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_tag.png",
    image_alt="md:term страница тегов"
) %} Страница тегов будет располагать теги иерархически, ссылаться на другие хранилища нормативных данных, описывать их и предлагать машиночитаемые варианты экспорта. Кроме того, могут быть перечислены объекты из museum-digital.{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Term/Screenshot_term_downloads.png",
    image_alt="Страница загрузки md:term"
    ) %}Полные JSON и SKOS / XML дампы наших контролируемых словарей можно загрузить с помощью страницы загрузки{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/md-term/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Справочник по md:term (на немецком языке){% end %}

{% museumdigital_linktiles_tile(link="https://term.museum-digital.de/",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term/",
    title="Новости") }}
