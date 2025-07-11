---
title: Установка
description: Configure Algolia DocSearch with the Jigsaw docs starter template
extends: _core._layouts.documentation
section: content
---

# Установка

## Установка и подключение

Для использования **SIMAI Framework UI Utilities** необходимо сначала подключить основной файл ядра, а затем подключить утилиты. Это позволит использовать все доступные модификаторы и классы фреймворка.

1. **Подключение ядра фреймворка**  
   Сначала подключите основной файл **SIMAI Framework Core** с помощью CDN. Добавьте следующую строку в секцию `<head>` вашего HTML-документа:

```
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/simai/ui-core@main/distr/core.min.css">
```

   Это обеспечит базовые стили и функциональность, необходимые для корректной работы утилит.

2. **Подключение утилит фреймворка**  
   После подключения ядра добавьте утилиты **SIMAI Framework UI Utilities**, которые расширяют функциональность и предоставляют дополнительные классы. Аналогично добавьте строку в секцию `<head>`:

```
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/simai/ui-utilities@main/distr/full/utility.full.min.css">
```

   Теперь у вас есть доступ к дополнительным инструментам и модификаторам, облегчающим разработку UI.

3. **Использование компонентов и утилит**  
   После подключения ядра и утилит вы можете использовать различные модификаторы, классы и компоненты, предоставляемые фреймворком. Ознакомьтесь с документацией проекта, чтобы узнать о доступных возможностях, а также о лучших практиках внедрения их в ваш интерфейс.

