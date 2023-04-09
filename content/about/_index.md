+++
title = "Про проєкт museum-digital"
description = "Хто або що таке museum-digital? Це проєкт, спрямований на розширення можливостей дигіталізації музеїв і музейних даних."

[extra]
keywords = "музеї, дигіталізація, спільнота, дослідження"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p440.jpg"
banner_image_alt = "Internet Archive Book Images. Image from page 440 of 'Bell telephone magazine' (1922). Identifier: belltelephone6667mag00amerrich."
html_id = "about"
+++

## Про проєкт museum-digital

Museum-digital - це ініціатива музеїв. Вона була створена 2009 року для розробки легкого процесу публікації інформації про музеї та їхні об'єкти онлайн. Розпочавшись із шести музеїв-учасників у Саксонії-Ангальт, Німеччина, зараз в ініціативі вже понад 1000 музеїв, переважно в Німеччині та Угорщині. Поряд із нескладною публікацією виникли і більш сучасні форми представлення об'єктів, але центральним елементом museum-digital, як і раніше, залишається наголос на грамотну інвентаризацію. У museum-digital ми спільно розробляємо програмне забезпечення, покликане зробити інвентаризацію і цифрову публікацію інтуїтивними, але при цьому і високоякісними.

### З чого ми почали і до чого ми прагнемо?

У травні 2009 року в Асоціації державних музеїв Німеччини було створено робочу групу "Дигіталізація". До її завдань входило вивчення того, скільки часу і зусиль потрібно для оцифрування об'єкта. Накопичений досвід став основою для створення першої версії фронтенду для museum-digital.
 
Хоч би де знаходилися музеї, які бажають об'єднати зусилля для використання museum-digital, чи то для публікації, інвентаризації об'єктів, чи то для обох цих цілей, - museum-digital надає їм таку можливість. Можливі найрізноманітніші способи співпраці, наприклад, створення регіональних версій. Платформа постійно розвивається і набуває нових функцій відповідно до запитів і потреб музеїв. 

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://phplist.museum-digital.info/lists/",
    image="/data/img/logos-ext/phplist.svg",
    image_alt="Logo") %}Розсилка новин (німецькою мовою){% end %}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Einleitung/Entstehung.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Довідник: Наша історія (німецькою мовою){% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/feed/",
    html_url="https://blog.museum-digital.org/",
    title="Новини") }}
