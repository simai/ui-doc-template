---
title: Свойства модификаторов
description: Configure Algolia DocSearch with the Jigsaw docs starter template
extends: _core._layouts.documentation
section: content
---

# Свойства модификаторов

Свойства в SIMAI Framework представляют собой стили, сгруппированные по назначению. Это позволяет легко выбирать и применять необходимые свойства в зависимости от ситуации, делая стилизацию интерфейса гибкой и удобной.

## Структура свойств

Свойства сгруппированы в наборы по их назначению. Ниже приведена структура и классификация свойств:

### Макет (layout)

- Соотношение сторон (aspect-ratio).  
- Контейнер (container).  
- Максимальная размер контейнера (container-max).  
- Метод расчета размера элемента (box-sizing);  
- Метод отображения элемента (display);  
- Метод позиционирования элемента (position):  
- Позиция элемента (element-position).  
- Переполнение элемента (overflow).  
- Плавающий элемент (float).  
- Перенос после плавающих элементов (clear).  
- Видимость элемента (visibility).  
- Положение по оси Z (z-index).  
- Оформления области, разбитой на несколько строк (box-decoration-break);  
- Контекст наложения (isolate).

### Разрыв макета (layout-break)

- Колонки (columns).  
- Разрыв области после элемента (break-after).  
- Разрыв до элемента (break-before).  
- Разрыв внутри элемента (break-inside).

### Объекты (object)

- Заполнение объектом (object-fit).  
- Положение объекта (object-position).

### Размеры (size)

- Ширина (width).  
- Минимальная ширина (min-width).  
- Максимальная ширина (max-width).  
- Высота (height).  
- Минимальная высота (min-height).  
- Максимальная высота (max-height).

### Отступы (space)

- Внутренний отступ (padding).  
- Внешний отступ (margin).  
- Промежутки (space).

### Сетка (grid)

- Шаблон колонок сетки (grid-template-columns).  
- Размер колонки сетки (grid-column).  
- Начальное положение колонки сетки (grid-column-start).  
- Конечное положение колонки сетки (grid-column-end).  
- Автоматический размер колонок сетки (grid-auto-columns).  
- Шаблон строк сетки (grid-template-rows).  
- Размер строки сетки (grid-row).  
- Начальное положение строки сетки (grid-row-start).  
- Конечное положение строки сетки (grid-row-end).  
- Автоматический размер строк сетки (grid-auto-rows).  
- Автоматическое заполнение сетки (grid-auto-flow).

### Флексбоксы (flex)

- Базисный размер (flex-basis).  
- Направление размещения (flex-direction).  
- Перенос элементов (flex-wrap).  
- Гибкость элементов (flex).  
- Растяжимость элементов (flex-grow).  
- Сжимаемость элементов (flex-shrink).

### Сетка и флексбоксы (grid-flex)

- Сортировка элементов (order).  
- Промежутки между элементами (gap).  
- Выравнивание содержимого относительно основной оси (justify-content).  
- Выравнивание всех элементов относительно основной оси (justify-items).  
- Выравнивание элемента относительно основной оси (justify-self).  
- Выравнивание содержимого относительно поперечной оси (align-content).  
- Выравнивание всех элементов относительно поперечной оси (align-items).  
- Выравнивание элемента относительно поперечной оси (align-self).  
- Размещение содержимого по двум осям (place-content).  
- Размещение всех элементов по двум осям (place-items).  
- Размещение элемента по двум осям (place-self).  
- Выравнивание по двум осям (flex-align).

### Типографика (typography)

- Параметры по умолчанию (header).  
- Заголовки (header).  
- Размер шрифта (font-size).  
- Семейство шрифта (font-family).  
- Сглаживание шрифта (font-smoothing).  
- Стиль шрифта (font-style).  
- Толщина шрифта (font-weight).  
- Начертание шрифта (капитель) (font-variant).  
- Начертание цифр (font-variant-numeric).  
- Трансформация текста (text-transform).  
- Высота строки (line-height).  
- Трекинг текста (letter-spacing).  
- Отступ текста (text-indent).  
- Длина строки (text max-width).  
- Выравнивание по горизонтали (text-align).  
- Выравнивание по вертикали (vertical-align).  
- Стиль маркера списка (list-style-type).  
- Положение маркера списка (list-style-position).  
- Переполнение текста (text-overflow).  
- Обработка пробелов (white-space).  
- Перенос строк (word-break).  
- Выделение текста (mark).  
- Управление содержимым (content).

### Цвет текста (text-color)

- Цвет текста (text-color).  
- Прозрачность текста (text-opacity).

### Оформление текста (text-decoration)

- Оформление текста (text-decoration).  
- Цвет оформления текста (text-decoration-color).  
- Стиль оформления текста (text-decoration-style).  
- Толщина оформления текста (text-decoration-thickness).  
- Смещение оформления текста (text-decoration-offset).

### Ссылки (link)

- Параметры по умолчанию (default-link).  
- Цвет ссылок (link-color).  
- Наследственный цвет (link-color-inherit).  
- Стиль ссылок (link-style).  
- Подчеркивание ссылок (link-underline).

### Таблицы (table)

- Оформление таблицы (table).  
- Чередование строки и столбцов (table-striped).  
- Подсветка строк (table-hover).  
- Активные строки и ячейки (table-active).  
- Границы таблицы (table-border).  
- Разделение границ (border-collapse).  
- Расстояние между границами (border-spacing).  
- Макет таблицы (table-layout).

### SVG (svg)

- Размер изображения (svg-size).  
- Цвет заливки (fill).  
- Тип заливки (fill-rule).  
- Цвет обводки (stroke-color).  
- Толщина обводки (stroke-width).  
- Углы обводки (stroke-linejoin).  
- Концы обводки (stroke-linecap).

### Границы (border)

- Толщина границы (border-width).  
- Стиль границы (border-style).  
- Цвет границы (border-color).  
- Прозрачность границы (border-opacity).  
- Закругление границы (border-radius).

### Разделители (divider)

- Толщина разделителя (divider-width).  
- Стиль разделителя (divider-style).  
- Цвет разделителя (divider-color).  
- Прозрачность разделителя (divider-opacity).

### Внешняя граница (outline)

- Толщина внешней границы (outline-width).  
- Отступ внешней границы (outline-offset).  
- Стиль внешней границы (outline-style).  
- Цвет внешней границы (outline-color).  
- Прозрачность внешней границы (outline-opacity).

### Кольцо (ring)

- Толщина кольца (ring-width).  
- Цвет кольца (ring-color).  
- Смещения кольца (ring-offset).  
- Цвет смещения кольца (ring-offset-color).

### Фоновое изображение (background-image)

- Закрепление фона (background-attachment).  
- Обрезка фона (background-clip).  
- Вложение фона (background-origin).  
- Положение фона (background-position).  
- Повтор фона (background-repeat).  
- Размер фона (background-size).  
- Паттерны (pattern).

### Цвет фона (background-color)

- Цвет фона (background-color).  
- Прозрачность фона (background-opacity).

### Градиент (gradient)

- Вид градиента (gradient-type).  
- Цвета градиента (gradient-color).  
- Прозрачность градиента (gradient-opacity).

### Полосы (stripe)

- Вид полос (stripe).  
- Толщина полос (stripe-width).  
- Цвет полос (stripe-color).  
- Прозрачность полос (stripe-opacity).

### Темы (theme)

- Темы оформления (theme) (4 темы)  
- Специальные темы (special)  
- Глобальная тема (theme-global)

### Тени (shadow)

- Тень элемента (box-shadow).  
- Цвет тени элемента (box-shadow-color).  
- Падающая тень (drop-shadow).  
- Цвет падающей тени (drop-shadow-color).

### Фильтры элемента (filter)

- Размытие элемента (filter-blur).  
- Прозрачность элемента (filter-opacity).  
- Яркость элемента (filter-brightness).  
- Контрастность элемента (filter-contrast).  
- Цветность элемента (filter-grayscale).  
- Вращение оттенка элемента (filer-hue-rotate).  
- Инверсия цвета элемента (filter-invert).  
- Насыщенность элемента (filter-saturate).  
- Сепия элемента (filter-sepia).

### Фильтры подложки (backdrop-filter)

- Размытие подложки (backdrop-filter-blur).  
- Прозрачность подложки (backdrop-filter-opacity).  
- Яркость подложки (backdrop-filter-brightness).  
- Контрастность подложки (backdrop-filter-contrast).  
- Цветность подложки (backdrop-filter-grayscale).  
- Вращение оттенка подложки (backdrop-filer-hue-rotate).  
- Инвертирование подложки (backdrop-filter-invert).  
- Насыщенность подложки (backdrop-filter-saturate).  
- Сепия подложки (backdrop-filter-sepia).

### Анимация (animation)

- Свойство перехода (transition-property).  
- Продолжительность перехода (transition-duration).  
- Функция перехода (transition-timing-function).  
- Задержка перехода (transition-delay).  
- Анимация (animation).

### Прокрутка (scroll)

- Поведение при прокрутке (overscroll-behavior).  
- Плавность прокрутки (scroll-behavior).  
- Внешний отступ прокрутки (scroll-margin).  
- Внутренний отступ прокрутки (scroll-padding).  
- Выравнивание привязки прокрутки (scroll-snap-align).  
- Ограничитель прокрутки (scroll-snap-stop).  
- Тип привязки прокрутки (scroll-snap-type).  
- Цвет подложки прокрутки (scroll-backdrop-color).  
- Толщина подложки прокрутки (scroll-backdrop-width).  
- Радиус границы подложки прокрутки (scroll-backdrop-radius).  
- Цвет ползунка прокрутки (scroll-slider-color).  
- Толщина ползунка прокрутки (scroll-slider-color).  
- Радиус границы ползунка прокрутки (scroll-slider-color).

### Преобразования (transform)

- Масштабирование (transform-scale).  
- Вращение (transform-rotate).  
- Смещение (transform-translate).  
- Наклон (transform-skew).  
- Исходные координаты (transform-origin).

### Формы (form)

- Акцентный цвет (accent-color).  
- Цвет каретки (caret-color).  
- Сброс стиля (appearance).  
- События указателя (pointer-events).  
- Изменение размера (resize).

### Интерактивность (interactivity)

- Вид курсора (cursor).  
- Сенсорные действия (touch-action).  
- Выделение текста (user-select).  
- Подготовка к изменениям (will-change).

### Печать (print)

- Метод отображения элемента при печати (display-print)  
- Видимость элемента при печати (print-visibility).

## Сокращения свойств

Хотя в модификаторах предпочтение отдается полным названиям свойств, для некоторых часто используемых свойств применяются сокращения:

1. `bg` — фон (`background`)  
2. `h` — высота (`height`)  
3. `gr` — градиент (`gradient`)  
4. `m` — внешние отступы (`margin`)  
5. `p` — внутренние отступы (`padding`)  
6. `w` — ширина (`width`)  
7. `z` — z-индекс

Такое деление и система сокращений делают использование модификаторов более эффективным и удобным, обеспечивая гибкость и адаптируемость интерфейсов.