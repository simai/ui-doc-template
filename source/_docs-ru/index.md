---
extends: _core._layouts.documentation
section: content
title: Главная
description: Добро пожаловать
---

# Добро пожаловать

Это главная страница, но она использует тот же layout, что и документация.




Пример отображения кода:

!example
Пример компонента example с парсером markdown
!endexample

```html
<div class="test">
    <ul>
        <li>Убедитесь, что вы загрузили плагин уведомления или скомпилированный Bootstrap JavaScript.</li>
        <li>Добавьте кнопку закрытия и класс <code>.alert-dismissible</code>, который добавляет дополнительный отступ
            справа и positions the <code>.close</code> button.
        </li>
        <li>На кнопку закрытия добавьте атрибут <code>data-dismiss="alert"</code>, который запускает функционал
            JavaScript. Обязательно используйте элемент <code>&lt;button&gt;</code> для правильного поведения на всех
            устройствах.
        </li>
        <li>Чтобы анимировать уведомления при их закрытии, добавьте классы <code>.fade</code> и <code>.show</code>.</li>
    </ul>

    <p>Вы можете увидеть это в действии на демо:</p>
</div>
```
!example
Пример компонента example с парсером markdown
!endexample

```js
import {ComponentObserver} from "../../../core/js/ComponentObserver";

class Fab extends ComponentObserver {
    html = null;
    scrollHandler = this.scrollSetup.bind(this)

    constructor(props) {
        super(props)
        const {size, type} = this.params;
        this.template = `<button type="button"  class="sf-fab sf-fab-${size} sf-fab-${type}"><i class="sf-icon">chevron_left</i></button>`
    }

    top() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }


    scrollSetup() {
        if (window.scrollY > 200) {
            this.html.classList.add('active')
        } else {
            this.html.classList.remove('active');
        }
    }

    init() {
        this.html.addEventListener('click', this.top)
        window.addEventListener('scroll', this.scrollHandler)
    }

    destroyInternal() {
        window.removeEventListener('scroll', this.scrollHandler)
        this.html.removeEventListener('click', this.top)
    }
}

SF.Loader.registerComponent('Fab', Fab);
```

- Навигация слева будет работать.
- Контент ты пишешь здесь, прямо в Markdown/Blade.
- Добавляй сюда ссылки на разделы, компоненты, гайды и всё, что нужно.

Например:

<div markdown="1" class="list-default">

- [Установка](/source/docs/ru/getting-started.md)
- [Навигация](/source/docs/ru/navigation.md)
- [Мой компонент](/docs/my-component)

</div>
