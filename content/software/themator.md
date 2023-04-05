+++
title = "Тематор"
description = "Тематор - это инструмент museum-digital для создания цифрового повествования."

[extra]
keywords = "программное обеспечение, рассказывание историй, темы, истории, повествование, выставки"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/trappist_cut.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "themator"
og_image = "/data/img/logos/themator-512.png"
+++

## Тематор - инструмент для онлайн-повествования и цифровых выставок

Тематор - это инструмент museum-digital для создания цифрового повествования/сторителлинга.

После создания основного фронтенда для museum-digital вскоре возникли вопросы о том, как встроить опубликованные таким образом объекты в онлайн “повествования". Чтобы ответить на этот вопрос, была начата разработка тематора.

Тематор структурирован вокруг тем, которые могут быть главными или подчиненными другим темам и которые могут быть связаны с объектами (как теми, которые представлены только в тематоре, так и теми, которые опубликованы на любом из основных порталов museum-digital), литературными записями и многим другим. Такая ориентация на темы обеспечивает широкий спектр возможных применений в области цифрового повествования, особенно когда оно связано с музейными предметами. С одной стороны, тематор можно использовать для создания цифровых выставок. С другой стороны, он применяется для создания учебных материалов (например, для преподавания в школах немецкого меньшинства в Венгрии). Это, в сочетании с необходимостью иметь возможность встраивать объекты из разных экземпляров в одну и ту же тему, привело нас к разработке тематора как инструмента, полностью независимого от основных инструментов.

----

### Screenshots

{{ museumdigital_preview_list_start() }}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-Overview.jpg",
    image_alt="Обзор тем, доступных в немецкоязычном тематоре"
    ) %}Обзор тем, доступных в немецкоязычном тематоре{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-TopicPage.jpg",
    image_alt=""
    ) %}Страница темы в тематоре{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-ExhibitionView.jpg",
    image_alt=""
    ) %}Тематор имеет возможность просмотра слайд-шоу в виде "выставки"{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-TopicObjects.jpg",
    image_alt="Список объектов, связанных с темой"
    ) %}Список объектов, связанных с темой{% end %}

{% museumdigital_preview_tile_figure(
    image="/data/img/Screenshots/Themator/Themator-Screenshot-SingleObject.jpg",
    image_alt=""
    ) %}Страница для отдельного объекта. Помимо объектов, введенных только в тематоре, объекты могут быть также встроены из museum-digital{% end %}

{{ museumdigital_preview_list_end() }}

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://themator.museum-digital.de/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Тематор (на немецком языке){% end %}

{% museumdigital_linktiles_tile(link="https://hu-themator.museum-digital.org/",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Тематор (на венгерском языке){% end %}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Themator/index.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Справочник по тематору (на немецком языке){% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/technik-design/themator-de/feed/",
    html_url="https://blog.museum-digital.org/category/technik-design/themator-de/",
    title="Новости о тематоре") }}
