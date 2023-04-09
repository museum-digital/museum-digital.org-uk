+++
title = "Програмне забезпечення"
description = "У museum-digital ми розробили набір програмних рішень для допомоги в різних частинах музейної роботи (щодо дигіталізації)."

[extra]
keywords = "програмне забезпечення, музеї, музейні предмети, музейне програмне забезпечення, museum-digital"
banner_image = "/data/img/banners/RetrofuturismPostersNASA/grand_tour.jpg"
banner_image_alt = "Courtesy NASA/JPL-Caltech."
html_id = "software"
+++

## Програмне забезпечення

У museum-digital ми розробили набір програмних рішень для спрощення процесу дигіталізації в музеях. Спочатку museum-digital був заснований для публікації інформації про об'єкти онлайн. Тому ми почали з розробки [зовнішнього інтерфейсу для відображення інформації про об'єкти.](/software/frontend).

Оскільки початковий метод введення даних - музеї вводили свої дані в локальну базу даних, надсилали їх програмістам, а ті вводили їх у museum-digital - не дуже добре масштабувався, ми розробили простий онлайн-інтерфейс введення, - [musdb](/software/musdb). Деякі музеї, у яких ще не було спеціальної бази даних для інвентаризації, але які добре знали musdb, почали просити додаткові функції інвентаризації. Таким чином, підхід musdb змінився: замість того, щоб бути інтерфейсом введення даних і платформою для публікацій, він перетворився на інструмент інвентаризації з можливістю публікації.

Незабаром після цього почастішали запити на опції для детальнішого відображення цифрових оповідань та історій. Хоча музейні об'єкти можуть бути цікавими самі по собі, їх контекстуалізація також є важливим завданням музеїв. У відповідь на ці запити ми створили [тематор](/software/themator) як незалежний інструмент для складання та публікації історій онлайн.

На ранньому етапі, під час розроблення основного зовнішнього інтерфейсу і musdb, ми вирішили використовувати контрольовані словники для всіх баз даних конкретної мови. Усередині сайту ми використовуємо наш "інструмент контролю нормативних даних" [nodac](/software/term-nodac) для їхнього курування. Оскільки словники відтоді значно розширилися і до теперішнього часу стали самостійним корисним ресурсом, ми також розробили фронтенд для їх пошуку, [md:term](/software/term).

----

{{ museumdigital_linktiles_list_start() }}

{% museumdigital_linktiles_tile(link="/software/frontend",
    image="/data/img/logo/mdlogo-code-128px.png",
    image_alt="Logo") %}Зовнішній інтерфейс/портали{% end %}

{% museumdigital_linktiles_tile(link="/software/musdb",
    image="/data/img/logo-musdb/musdbLogoBrown-128.png",
    image_alt="Logo") %}musdb{% end %}

{% museumdigital_linktiles_tile(link="/software/term",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}md:term{% end %}

{% museumdigital_linktiles_tile(link="/software/nodac",
    image="/data/img/logos/mdterm-128px.png",
    image_alt="Logo") %}nodac{% end %}

{% museumdigital_linktiles_tile(link="/software/themator",
    image="/data/img/logos/themator-128.png",
    image_alt="Logo") %}Тематор{% end %}

{{ museumdigital_linktiles_list_end() }}

----

{{ museumdigital_rss_tile(feed_url="https://blog.museum-digital.org/category/development/feed/",
    html_url="https://blog.museum-digital.org/category/development/",
    title="Новини технічного характеру у нашому блозі") }}
