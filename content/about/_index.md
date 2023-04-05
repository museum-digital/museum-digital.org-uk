+++
title = "О проекте museum-digital"
description = "Кто или что такое museum-digital? Это проект, направленный на расширение возможностей дигитализации музеев и музейных данных."

[extra]
keywords = "музеи, дигитализация, сообщество, исследования"
banner_image = "/data/img/banners/Bell-telephone-magazine-1922-p440.jpg"
banner_image_alt = "Internet Archive Book Images. Image from page 440 of 'Bell telephone magazine' (1922). Identifier: belltelephone6667mag00amerrich."
html_id = "about"
+++

## О проекте museum-digital

Museum-digital - это инициатива музеев. Она была создана в 2009 году для разработки лёгкого процесса публикации информации о музеях и их объектах онлайн. Начавшись с шести музеев-участников в Саксонии-Анхальт, Германия, сейчас в инициативе уже более 1000 музеев, преимущественно в Германии и Венгрии. Наряду с несложной публикацией возникли и более современные формы представления объектов, но центральным элементом museum-digital по-прежнему остается упор на грамотную инвентаризацию. В museum-digital мы совместно разрабатываем программное обеспечение, призванное сделать инвентаризацию и цифровую публикацию интуитивными, но при этом и высококачественными.

### С чего мы начали и к чему мы стремимся?

В мае 2009 года в Ассоциации государственных музеев Германии была создана рабочая группа “Дигитализация”. В её задачи входило изучение того, сколько времени и усилий требуется для оцифровки объекта. Накопленный опыт послужил основой для создания первой версии фронтенда для museum-digital.
 
Где бы ни находились музеи, желающие объединить усилия для использования museum-digital, будь то для публикации, инвентаризации объектов, или для обоих этих целей, - museum-digital предоставляет им такую возможность. Возможны самые разнообразные способы сотрудничества, например, создание региональных версий. Платформа постоянно развивается и приобретает новые функции в соответствии с запросами и нуждами музеев. 

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="https://phplist.museum-digital.info/lists/",
    image="/data/img/logos-ext/phplist.svg",
    image_alt="Logo") %}Рассылка новостей (на немецком языке){% end %}

{% museumdigital_linktiles_tile(link="https://de.handbook.museum-digital.info/Einleitung/Entstehung.html",
    image="/data/img/logos-ext/mdBook.svg",
    image_alt="Logo") %}Справочник: Наша история (на немецком языке){% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/feed/",
    html_url="https://blog.museum-digital.org/",
    title="Новости") }}
