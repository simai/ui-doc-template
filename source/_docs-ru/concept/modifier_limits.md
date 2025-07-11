---
title: Ограничения модификаторов
description: Configure Algolia DocSearch with the Jigsaw docs starter template
extends: _core._layouts.documentation
section: content
---

# Ограничения модификаторов

Ограничения модификаторов определяют предельные значения свойств, такие как минимальное или максимальное значение. Это позволяет контролировать размеры и поведение элементов в зависимости от заданных границ.

Для обозначения предельного значения используется приставка `{min|max}`, которая добавляется перед названием свойства:

1. `min-w-0` — минимальная ширина элемента `0`.  
2. `min-w-fit` — минимальная ширина соответствует размеру содержимого.  
3. `min-w-full` — минимальная ширина равна ширине контейнера.  
4. `max-w-0` — максимальная ширина элемента `0`.  
5. `max-w-full` — максимальная ширина равна ширине контейнера.  
6. `max-w-screen` — максимальная ширина равна ширине экрана.

**Примечание:** Ограничение отличается от значения тем, что оно всегда ставится перед свойством, а значение — после него.

**Ограничение**: `min-w-0`, `max-w-screen`

**Значение**: `auto-cols-min`, `w-content-min`

Использование ограничений позволяет гибко управлять размерами и поведением элементов, обеспечивая адаптивность и контроль за внешним видом интерфейсов.