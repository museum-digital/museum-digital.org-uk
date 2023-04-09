+++
title = "md:term & nodac "
description = "У museum-digital ми створили два інструменти для управління та відображення контрольованих словників: md:term і nodac"

[extra]
keywords = "програмне забезпечення, керовані словники, предметні рубрики"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p235.jpg"
banner_image_alt = "Image from page 235 of 'Bell telephone magazine' (1922). Internet Archive Book Images, Ident.: belltelephone7273mag00amerrich."
html_id = "termNodac"
og_image = "/data/img/logos/mdterm-512px.png"
+++

## Наші інструменти для керування контрольованими словниками: nodac та md:term

nodac - це назва нашого інструменту для коригування, збагачення та стратифікації контрольованих словників у museum-digital. Nodac є багатомовним і може використовуватися для управління словниками різними мовами. За допомогою nodac можна керувати і зовнішніми словниками: наприклад, Hornbostel-Sachs-Systematik для музичних інструментів або Hessische Systematik. Однак основним використанням цього інструменту залишається кураторство власних контрольованих словників museum-digital. Це спеціальне місце для поглибленого збагачення термінів з галузей "дійові особи" (люди та установи), географічні місця, час і теги. Вони контролюються централізовано для даної мови редакторами _нормативних даних_. Однак кожен музей-учасник може подавати запити на внесення змін.

Хоча метою museum-digital є максимально спростити для музеїв введення і зв'язування, наприклад, тега, подальші правки, такі як надання визначення терміна і зв'язування його з іншими контрольованими словниками, беруть на себе редактори нормативних даних. Таким чином, це стає фоновим завданням, яке, тим не менш, залишається головним для успіху всього починання. Тільки завдяки тому, що ми ведемо контрольовані словники, ми можемо створювати правильні тимчасові шкали або розміщувати об'єкти на картах будь-яким значущим способом.

md:term - це публічний еквівалент nodac. Він забезпечує публічний структурований доступ до наших власних словників і низки зовнішніх. Крім можливості перегляду словників, він пропонує інтерфейси [SKOS](https://uk.wikipedia.org/wiki/SKOS) і [JSON](https://uk.wikipedia.org/wiki/JSON). Таким чином, він надає доступ іншим розробникам і проектам для творчого використання і включення наших контрольованих словників.

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
    title="Новини") }}
