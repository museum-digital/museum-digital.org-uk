+++
title = "Тематор"
description = "Тематор - це інструмент museum-digital для створення цифрової оповіді."

[extra]
keywords = "програмне забезпечення, розповідання історій, теми, історії, оповідання, виставки"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/trappist_cut.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "themator"
og_image = "/data/img/logos/themator-512.png"
+++

## Тематор - інструмент для онлайн-розповіді та цифрових виставок

Тематор - це інструмент museum-digital для створення цифрової оповіді/сторітелінгу.

Після створення основного фронтенду для museum-digital незабаром виникли питання про те, як вбудувати опубліковані в такий спосіб об'єкти в онлайн "оповідання". Щоб відповісти на це питання, було розпочато розроблення тематора.

Тематор структурований навколо тем, які можуть бути головними або підпорядкованими іншим темам і які можуть бути пов'язані з об'єктами (як тими, що представлені тільки в тематорі, так і тими, що опубліковані на будь-якому з основних порталів museum-digital), літературними записами та багатьом іншим. Така орієнтація на теми забезпечує широкий спектр можливих застосувань у царині цифрового оповідання, особливо коли воно пов'язане з музейними предметами. З одного боку, тематор можна використовувати для створення цифрових виставок. З іншого боку, він застосовується для створення навчальних матеріалів (наприклад, для викладання в школах німецької меншини в Угорщині). Це, у поєднанні з необхідністю мати можливість вбудовувати об'єкти з різних екземплярів в одну й ту саму тему, привело нас до розробки тематора як інструменту, повністю незалежного від основних інструментів.

----

### Скріншоти

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-Overview.jpg",
    image_alt="Огляд тем, доступних у німецькомовному тематорі"
    ) %}Огляд тем, доступних у німецькомовному тематорі{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-TopicPage.jpg",
    image_alt=""
    ) %}Сторінка теми в тематорі{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-ExhibitionView.jpg",
    image_alt=""
    ) %}Тематор має можливість перегляду слайд-шоу у вигляді "виставки"{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-TopicObjects.jpg",
    image_alt="Список об'єктів, пов'язаних із темою"
    ) %}Список об'єктів, пов'язаних із темою{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-SingleObject.jpg",
    image_alt=""
    ) %}Сторінка для окремого об'єкта. Крім об'єктів, введених тільки в тематорі, об'єкти можуть бути також вбудовані з museum-digital{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://themator.museum-digital.de/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Тематор (німецькою мовою){% end %}

{% museumdigital_linktiles_tile(link="https://hu-themator.museum-digital.org/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Тематор (угорською мовою){% end %}

{% museumdigital_linktiles_tile(link="https://ua-themator.museum-digital.org/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Тематор{% end %}


{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Themator/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Довідник по тематору (німецькою мовою){% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/technik-design/themator-de/feed/",
    html_url="https://blog.museum-digital.org/category/technik-design/themator-de/",
    title="Новини про тематор") }}
