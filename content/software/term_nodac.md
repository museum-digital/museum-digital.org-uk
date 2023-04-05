+++
title = "md:term & nodac "
description = "В museum-digital мы создали два инструмента для управления и отображения контролируемых словарей: md:term и nodac"

[extra]
keywords = "программное обеспечение, управляемые словари, предметные рубрики"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p235.jpg"
banner_image_alt = "Image from page 235 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## Our Tools for Managing Controlled Vocabularies: nodac and md:term

nodac - это название нашего инструмента для корректировки, обогащения и стратификации контролируемых словарей в museum-digital. Nodac является многоязычным и может использоваться для управления словарями на разных языках. С помощью nodac можно управлять и внешними словарями: например, Hornbostel-Sachs-Systematik для музыкальных инструментов или Hessische Systematik. Однако основным использованием этого инструмента остается курирование собственных контролируемых словарей museum-digital. Это специальное место для углубленного обогащения терминов из областей "действующие лица" (люди и учреждения), географические места, время и теги. Они контролируются централизованно для данного языка редакторами _нормативных данных_. Однако каждый музей-участник может подавать запросы на внесение изменений.

Хотя целью museum-digital является максимально упростить для музеев введение и связывание, например, тега, дальнейшие правки, такие как предоставление определения термина и связывание его с другими контролируемыми словарями, берут на себя редакторы нормативных данных. Таким образом, это становится фоновой задачей, которая, тем не менее, остается главной для успеха всего начинания. Только благодаря тому, что мы ведем контролируемые словари, мы можем создавать правильные временные шкалы или размещать объекты на картах любым значимым способом.

md:term - это публичный эквивалент nodac. Он обеспечивает публичный структурированный доступ к нашим собственным словарям и ряду внешних. Помимо возможности просмотра словарей, он предлагает интерфейсы [SKOS](https://ru.wikipedia.org/wiki/SKOS) и [JSON](https://ru.wikipedia.org/wiki/JSON). Таким образом, он предоставляет доступ другим разработчикам и проектам для творческого использования и включения наших контролируемых словарей.

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-512px",
    image_alt="Logo") %}nodac{% end %}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-512px",
    image_alt="Logo") %}md:term{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/development-md-term/feed/",
    html_url="https://blog.museum-digital.org/category/development/development-md-term/",
    title="Новости") }}
