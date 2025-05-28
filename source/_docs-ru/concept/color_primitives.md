---
title: Цветовые примитивы
description: Configure Algolia DocSearch with the Jigsaw docs starter template
extends: _core._layouts.documentation
section: content
---

# Цветовые примитивы

Сгенерированные с помощью описанной выше методики цвета записываются в цветовые примитивы — CSS-переменные, используемые для формирования токенов. Такой подход обеспечивает гибкое и понятное управление цветовыми параметрами интерфейса.

# Правила именования цветовых примитивов

**Основная схема:**

```
--sf-{color-name}-{tone}
```

где:

* **color-name** — название цвета из набора: primary, secondary, tertiary, neutral, error, success.

* **tone** — число, обозначающее тон (от 0 до 100).

**Примеры:**

```
--sf-primary-40
--sf-neutral-94
--sf-secondary-5
```

**Для полупрозрачных цветов:**

```
--sf-{color-name}-{tone}--alfa-{alfa-value}
```

где:

* **alfa-value** — величина прозрачности от 0 до 1\.

**Примеры:**

```
--sf-white--alfa-4
--sf-primary-50--alfa-8
```

Прозрачность рассчитывается с помощью функции color-mix. Пример использования:

```
--sf-primary-90--alfa-4: var(color-mix(in srgb, var(--sf-transparent), var(--sf-primary-90) 4%));
```

Функция color-mix поддерживается современными браузерами с 2023 года. Если возникнут проблемы с поддержкой, можно использовать дополнительные цвета (белый и чёрный) для корректного расчёта полупрозрачных оттенков:

```
--sf-primary-90--alfa-4: var(color-mix(in srgb, var(--sf-transparent), var(--sf-primary-90) 4%), --sf-white--alfa-4);
```

Важно, чтобы цвета для чёрного, белого и прозрачного были объявлены первыми в коде, что обеспечит их доступность при вычислении других цветовых переменных.

## Цветовая палитра


### Transparent, White и Black

Помимо основных и акцентных цветов, используются базовые примитивы:

* **transparent** — прозрачность.  
* **white** — белый цвет.  
* **black** — чёрный цвет.

В целях оптимизации числа переменных тона 0 и 100 не применяются для всех цветов (по аналогии с Material Design). Их роль выполняют белый и чёрный:

* Белый (white) и чёрный (black) цвета не меняются при генерации, поэтому их полупрозрачные вариации прописываются напрямую в виде готовых значений.

Такая система позволяет гибко использовать цветовые примитивы для формирования широкого спектра токенов, обеспечивая наглядную структуру и удобство работы с цветами в интерфейсе.

| Переменная  | Значение |
| ----- | ----- |
| \--sf-transparent | rgba(0,0,0,0) |
| \--sf-white | rgba(255,255,255,1) |
| \--sf-white--alfa-4 | rgba(255,255,255,0.04) |
| \--sf-white--alfa-8 | rgba(255,255,255,0.08) |
| \--sf-white--alfa-12 | rgba(255,255,255,0.12) |
| \--sf-white--alfa-24 | rgba(255,255,255,0.24) |
| \--sf-black | rgba(0,0,0,1) |
| \--sf-black--alfa-4 | rgba(0,0,0,0.04) |
| \--sf-black--alfa-8 | rgba(0,0,0,0.08) |
| \--sf-black--alfa-12 | rgba(0,0,0,0.12) |
| \--sf-black--alfa-24 | rgba(0,0,0,0.24) |

### Primary

Это основной цвет акцента. 

| Переменная  | Значение |
| ----- | ----- |
| \--sf-primary-98 | \#f9f9ff |
| \--sf-primary-95 | \#edf0ff |
| \--sf-primary-90 | \#d7e2ff |
| \--sf-primary-90--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-primary-90) 4%); |
| \--sf-primary-90--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-primary-90) 8%); |
| \--sf-primary-90--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-primary-90) 12%); |
| \--sf-primary-90--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-primary-90) 24%); |
| \--sf-primary-85 | \#c2d5ff |
| \--sf-primary-80 | \#acc7ff |
| \--sf-primary-70 | \#7eabff |
| \--sf-primary-60 | \#488fff |
| \--sf-primary-50 | \#0073ed |
| \--sf-primary-50--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-primary-50) 4%); |
| \--sf-primary-50--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-primary-50) 8%); |
| \--sf-primary-50--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-primary-50) 12%); |
| \--sf-primary-50--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-primary-50) 24%); |
| \--sf-primary-40 | \#005bbe |
| \--sf-primary-35 | \#0050a7 |
| \--sf-primary-30 | \#004491 |
| \--sf-primary-25 | \#00397c |
| \--sf-primary-20 | \#002f67 |
| \--sf-primary-15 | \#002453 |
| \--sf-primary-10 | \#001a40 |
| \--sf-primary-5 | \#00102c |

### Secondary

Это оттенок основного акцента для повторяющихся или менее акцентных элементов. 

| Переменная  | Значение |
| ----- | ----- |
| \--sf-secondary-98 | \#f9f9ff |
| \--sf-secondary-95 | \#edf0ff |
| \--sf-secondary-90 | \#d7e2ff |
| \--sf-secondary-90--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-secondary-90) 4%); |
| \--sf-secondary-90--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-secondary-90) 8%); |
| \--sf-secondary-90--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-secondary-90) 12%); |
| \--sf-secondary-90--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-secondary-90) 24%); |
| \--sf-secondary-85 | \#c9d4f1 |
| \--sf-secondary-80 | \#bbc6e3 |
| \--sf-secondary-70 | \#a0abc7 |
| \--sf-secondary-60 | \#8591ab |
| \--sf-secondary-50 | \#6c7791 |
| \--sf-secondary-50--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-secondary-50) 4%); |
| \--sf-secondary-50--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-secondary-50) 8%); |
| \--sf-secondary-50--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-secondary-50) 12%); |
| \--sf-secondary-50--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-secondary-50) 24%); |
| \--sf-secondary-40 | \#535e77 |
| \--sf-secondary-35 | \#47526a |
| \--sf-secondary-30 | \#3c475e |
| \--sf-secondary-25 | \#303b52 |
| \--sf-secondary-20 | \#253047 |
| \--sf-secondary-15 | \#1a263b |
| \--sf-secondary-10 | \#101b31 |
| \--sf-secondary-5 | \#051126 |

### Tertiary

Это дополнительный цвет акцента противопоставляющий основному. 

| Переменная  | Значение |
| ----- | ----- |
| \--sf-tertiary-98 | \#fff7fa |
| \--sf-tertiary-95 | \#ffebfd |
| \--sf-tertiary-90 | \#fdd6ff |
| \--sf-tertiary-90--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-tertiary-90) 4%); |
| \--sf-tertiary-90--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-tertiary-90) 8%); |
| \--sf-tertiary-90--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-tertiary-90) 12%); |
| \--sf-tertiary-90--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-tertiary-90) 24%); |
| \--sf-tertiary-85 | \#f9c2ff |
| \--sf-tertiary-80 | \#ecb3f4 |
| \--sf-tertiary-70 | \#cf98d8 |
| \--sf-tertiary-60 | \#b37ebb |
| \--sf-tertiary-50 | \#9765a0 |
| \--sf-tertiary-50--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-tertiary-50) 4%); |
| \--sf-tertiary-50--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-tertiary-50) 8%); |
| \--sf-tertiary-50--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-tertiary-50) 12%); |
| \--sf-tertiary-50--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-tertiary-50) 24%); |
| \--sf-tertiary-40 | \#7c4c86 |
| \--sf-tertiary-35 | \#6f4079 |
| \--sf-tertiary-30 | \#63356c |
| \--sf-tertiary-25 | \#562960 |
| \--sf-tertiary-20 | \#4a1e54 |
| \--sf-tertiary-15 | \#3e1249 |
| \--sf-tertiary-10 | \#32053e |
| \--sf-tertiary-5 | \#23002d |

### Error

Это цвет для обозначения ошибки. 

| Переменная  | Значение |
| ----- | ----- |
| \--sf-error-98 | \#fff8f7 |
| \--sf-error-95 | \#ffedea |
| \--sf-error-90 | \#ffdad6 |
| \--sf-error-90--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-error-90) 4%); |
| \--sf-error-90--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-error-90) 8%); |
| \--sf-error-90--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-error-90) 12%); |
| \--sf-error-90--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-error-90) 24%); |
| \--sf-error-85 | \#ffc7c0 |
| \--sf-error-80 | \#ffb4ab |
| \--sf-error-70 | \#ff897d |
| \--sf-error-60 | \#ff5449 |
| \--sf-error-50 | \#df362f |
| \--sf-error-50--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-error-50) 4%); |
| \--sf-error-50--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-error-50) 8%); |
| \--sf-error-50--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-error-50) 12%); |
| \--sf-error-50--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-error-50) 24%); |
| \--sf-error-40 | \#bb1919 |
| \--sf-error-35 | \#a9040e |
| \--sf-error-30 | \#93000a |
| \--sf-error-25 | \#7e0007 |
| \--sf-error-20 | \#690005 |
| \--sf-error-15 | \#540003 |
| \--sf-error-10 | \#410002 |
| \--sf-error-5 | \#2d0001 |

### Warning

Это цвет для предупреждения. 

| Переменная  | Значение |
| ----- | ----- |
| \--sf-warning-98 | \#fff8f5 |
| \--sf-warning-95 | \#ffeee2 |
| \--sf-warning-90 | \#ffdcc1 |
| \--sf-warning-90--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-warning-90) 4%); |
| \--sf-warning-90--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-warning-90) 8%); |
| \--sf-warning-90--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-warning-90) 12%); |
| \--sf-warning-90--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-warning-90) 24%); |
| \--sf-warning-85 | \#ffca9f |
| \--sf-warning-80 | \#ffb779 |
| \--sf-warning-70 | \#fa911c |
| \--sf-warning-60 | \#d87900 |
| \--sf-warning-50 | \#b26300 |
| \--sf-warning-50--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-warning-50) 4%); |
| \--sf-warning-50--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-warning-50) 8%); |
| \--sf-warning-50--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-warning-50) 12%); |
| \--sf-warning-50--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-warning-50) 24%); |
| \--sf-warning-40 | \#8f4e00 |
| \--sf-warning-35 | \#7d4400 |
| \--sf-warning-30 | \#6c3a00 |
| \--sf-warning-25 | \#5c3000 |
| \--sf-warning-20 | \#4c2700 |
| \--sf-warning-15 | \#3d1e00 |
| \--sf-warning-10 | \#2e1500 |
| \--sf-warning-5 | \#1f0c00 |

### Success

Это цвет для обозначения успешного состояния. 

| Переменная  | Значение |
| ----- | ----- |
| \--sf-success-98 | \#ecffe4 |
| \--sf-success-95 | \#c9ffbe |
| \--sf-success-90 | \#8ffa88 |
| \--sf-success-90--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-success-90) 4%); |
| \--sf-success-90--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-success-90) 8%); |
| \--sf-success-90--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-success-90) 12%); |
| \--sf-success-90--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-success-90) 24%); |
| \--sf-success-85 | \#81ec7c |
| \--sf-success-80 | \#74dd6f |
| \--sf-success-70 | \#58c157 |
| \--sf-success-60 | \#3ba53f |
| \--sf-success-50 | \#198a27 |
| \--sf-success-50--alfa-4 | color-mix(in srgb, var(--sf-transparent), var(--sf-success-50) 4%); |
| \--sf-success-50--alfa-8 | color-mix(in srgb, var(--sf-transparent), var(--sf-success-50) 8%); |
| \--sf-success-50--alfa-12 | color-mix(in srgb, var(--sf-transparent), var(--sf-success-50) 12%); |
| \--sf-success-50--alfa-24 | color-mix(in srgb, var(--sf-transparent), var(--sf-success-50) 24%); |
| \--sf-success-40 | \#006e17 |
| \--sf-success-35 | \#006013 |
| \--sf-success-30 | \#00530f |
| \--sf-success-25 | \#00460b |
| \--sf-success-20 | \#003908 |
| \--sf-success-15 | \#002d05 |
| \--sf-success-10 | \#002203 |
| \--sf-success-5 | \#001501 |
