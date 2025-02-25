---
title: Test page
description: Test page to check out how jigsaw works
extends: _layouts.documentation
section: content
---

<style>
    ol{
        list-style-type: decimal;
        margin-block-start: 1em;
        margin-block-end: 1em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 40px;
        unicode-bidi: isolate;
    }
    .hljs-variable, .hljs-template-variable, .hljs-tag, .hljs-name, .hljs-selector-id, .hljs-selector-class, .hljs-regexp, .hljs-deletion{
        color: white;
    }
    .hljs-string, .hljs-symbol, .hljs-bullet, .hljs-addition{
        color: white;
    }

    .theme-dark code{
        color: white;
        --tw-border-opacity: 1;
        --tw-bg-opacity: 1;
        background-color: rgb(30 30 30 / var(--tw-bg-opacity));
        border-color: rgb(255 255 255 / var(--tw-border-opacity));
    }
</style>
<!-- source/404.blade.php -->
<!--<link rel="stylesheet" href="/assets/sf5/core/css/core.css">
<link rel="stylesheet" href="/assets/sf5/core/css/utility.full.css">
-s->
<!--testing alert-->
<link rel="stylesheet" href="/assets/sf5/component/icons/css/icons.css">
<link rel="stylesheet" href="/assets/sf5/component/alerts/css/alerts.css">
<script src="/assets/sf5/component/alerts/js/alerts.js"></script>


<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <h1>Оповещения</h1>

    <div class = "theme-light">

        <h2>Назначение компонента Alert</h2>
        <p>Компонент Alert (оповещение) используется для отображения важных сообщений пользователю. 
            Он может информировать о успешном выполнении операции, предупреждать о потенциальных проблемах, сообщать об ошибках или предоставлять другую важную информацию. Alert обычно выделяется визуально, чтобы привлечь внимание пользователя, и может содержать текст, иконки, кнопки и ссылки.<p>

        <h3> HTML-структура</h3>
        Основные классы и их назначение:
        <ol>
            <li> <code>.sf-alert</code>:
                <ul>
                    <li>Базовый класс для всех типов оповещений.</li>
                    <li>Определяет общие стили для всех Alert, такие как отступы, цвет текста, границы и фон.</li>
                </ul>
            </li> 
            <li>  Модификаторы (состояния) для <code>.sf-alert</code>:
                <ul>
                    <li><code>sf-alert--primary</code>: Alert с цветом primary, используется для важных сообщений.</li>
                    <li><code>sf-alert--secondary</code>: Alert с цветом secondary, используется для второстепенных сообщений.</li>
                    <li><code>sf-alert--error</code>: Alert с цветом error, используется для сообщений об ошибках.</li>
                    <li><code>sf-alert--warning</code>: Alert с цветом warning, используется для предупреждений.</li>
                    <li><code>sf-alert--success</code>: Alert с цветом success, используется для сообщений об успешном выполнении.</li>
                </ul>
            </li> 
            <li>  Классы внутренних элементов:
                <ul>
                    <li><code>sf-alert-column-1</code>: Колонка для иконки (например, иконка ошибки или предупреждения).</li>
                    <li><code>sf-alert-column-2</code>: Основная колонка для текста (заголовок, тело и ссылки).</li>
                    <li><code>sf-alert-column-3</code>: Колонка для кнопки закрытия Alert.</li>
                </ul>
            </li> 
        </ol>

        <h3> CSS-стили </h3>
        <ol>
        <li> Общие стили для <code>sf-alert</code>:
            <ul>
                <li> Определяются переменные CSS <code>(--sf-alert--background-color, --sf-alert--border-color, --sf-alert--color)</code>, которые задают фон, цвет границы и текста.</li> 
                <li> Используется CSS Grid для расположения колонок.</li> 
            </ul>
        </li>
        <li>Стили для модификаторов:
            <ul>
                <li> Каждый модификатор (например, <code>sf-alert--primary, sf-alert--error</code>) переопределяет переменные CSS, чтобы изменить цвет фона, границы и текста в зависимости от типа Alert.</li> 
            </ul>
        </li>
        <li> Стили для иконок:
            <ul>
                <li>Иконки управляются через переменные CSS <code>--sf-icon--fill, --sf-icon--weight, --sf-icon--font-family </code> и др.</li> 
                <li>Классы <code>icon-solid, icon-medium, icon-rounded</code> и <code>icon-sharp</code> изменяют внешний вид иконок.</li> 
            </ul>
        </li>
        <li> Стили для кнопки закрытия:
            <ul>
                <li>Кнопка закрытия (в <code>sf-alert-column-3</code>) имеет стили, которые убирают стандартные стили кнопки (<code>all: unset</code>) и добавляют курсор в виде указателя (<code>cursor: pointer</code>).</li> 
            </ul>   
        </li>
        <li> Стили для ссылок:
            <ul>
                <li>Ссылки внутри Alert имеют стили, которые убирают подчеркивание и наследуют цвет текста.</li> 
            </ul>
        </li>
        </ol>

        <h3>Список переменных</h3>
        <table class = "wrap-none table">
        <thead>
            <tr>
            <th>Название переменной</th>
            <th>Значение по умолчанию</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><code>--sf-icon-line-height</code></td>
            <td><code>inherit</code></td>
            </tr>
            <tr>
            <td><code>--sf-icon-font-size</code></td>
            <td><code>inherit</code></td>
            </tr>
            <tr>
            <td><code>--sf-icon--fill</code></td>
            <td><code>0</code></td>
            </tr>
            <tr>
            <td><code>--sf-icon--weight</code></td>
            <td><code>var(--sf-text--weight)</code></td>
            </tr>
            <tr>
            <td><code>--sf-icon--grade</code></td>
            <td><code>0</code></td>
            </tr>
            <tr>
            <td><code>--sf-icon--optical-size</code></td>
            <td><code>inherit</code></td>
            </tr>
            <tr>
            <td><code>--sf-icon--font-family</code></td>
            <td><code>'Material Symbols Outlined'</code></td>
            </tr>
            <tr>
            <td><code>--sf-icon-color</code></td>
            <td><code>var(--sf-on-surface-variant)</code></td>
            </tr>
            <tr>
            <td><code>--sf-alert--background-color</code></td>
            <td><code>transparent</code></td>
            </tr>
            <tr>
            <td><code>--sf-alert--border-width</code></td>
            <td><code>var(--sf-a1)</code></td>
            </tr>
            <tr>
            <td><code>--sf-alert--border-color</code></td>
            <td><code>var(--sf-outline-variant)</code></td>
            </tr>
            <tr>
            <td><code>--sf-alert--border-style</code></td>
            <td><code>solid</code></td>
            </tr>
            <tr>
            <td><code>--sf-alert--color</code></td>
            <td><code>inherit</code></td>
            </tr>
        </tbody>
        </table>

        <h3> Примеры состояний </h3>

        1. Стандартный Alert <strong>.sf-alert--standart</strong>
        <!---Alert standart-->
        <div class="example radius-top-1/2">
        <div class = "sf-alert sf-alert--standart">
                    <div class = "sf-alert-icon">
                    <i class="sf-icon">error</i>
                    </div>
                    <div class = "sf-alert-content">
                        <p>
                            <span class="sf-alert-content--title">We’ve just released a new feature</span>
                            
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
                        </p>
                    
                    <p class = "sf-alert-content--footer">
                    <a href="#">Learn more</a>
                    <a href="#">View changes  <i class="sf-icon sf-icon-medium">arrow_forward</i> </a>
                    </p>
                    </div>
                    
                    <div class = "sf-alert-close">
                    <button>
                        <i class="sf-icon sf-icon-solid">close</i>      
                        </button>
                    </div>
            </div>   
        </div>
        <div class="source theme-dark radius-bottom-1/2">
        <pre>
            <code class="language-html" data-lang="html">                
&lt;div class = "sf-alert sf-alert--standart"&gt;
    &lt;div class = "sf-alert-icon"&gt;
    &lt;i class="sf-icon"&gt;error&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class = "sf-alert-content"&gt;
    &lt;p&gt;
        &lt;span class="sf-alert-content--title"&gt;We’ve just released a new feature&lt;/span&gt;
                            
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
    &lt;/p&gt;
                    
        &lt;p class = "sf-alert-content--footer"&gt;
        &lt;a href="#"&gt;Learn more&lt;/a&gt;
        &lt;a href="#"&gt;View changes  &lt;i class="sf-icon sf-icon-medium"&gt;arrow_forward&lt;/i&gt; &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;
                    
    &lt;div class = "sf-alert-close"&gt;
        &lt;button&gt;
        &lt;i class="sf-icon sf-icon-solid"&gt;close&lt;/i&gt;      
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;                   
            </code>
        </pre>
        </div>
        2. <strong>Primary Alert (.sf-alert--primary)</strong>:
        <div class="example radius-top-1/2">
        <div class = "sf-alert sf-alert--primary">
                    <div class = "sf-alert-icon">
                        <i class="sf-icon">error</i>
                    </div>
                    <div class = "sf-alert-content">
                        <p>
                            <span class="sf-alert-content--title">We’ve just released a new feature</span>
                            
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
                        </p>
                    <p class = "sf-alert-content--footer ">
                        <a href="#">Learn more</a>
                        <a href="#">View changes  <i class="sf-icon sf-icon-medium">arrow_forward</i> </a>
                    </p>
                    </div>
                    
                    <div class = "sf-alert-close">
                        <button>
                        <i class="sf-icon sf-icon-solid">close</i>      
                        </button>
                    </div>
            </div>
        </div>
        <div class="source theme-dark radius-bottom-1/2">
        <pre>
            <code class="language-html hljs language-xml" data-lang="html">
&lt;div class = "sf-alert sf-alert--primary"&gt;
    &lt;div class = "sf-alert-icon"&gt;
    &lt;i class="sf-icon"&gt;error&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class = "sf-alert-content"&gt;
        &lt;p&gt;
            &lt;span class="sf-alert-content--title"&gt;We’ve just released a new feature&lt;/span&gt;
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
        &lt;/p&gt;
        &lt;p class = "sf-alert-content--footer "&gt;
            &lt;a href="#"&gt;Learn more&lt;/a&gt;
            &lt;a href="#"&gt;View changes  &lt;i class="sf-icon sf-icon-medium"&gt;arrow_forward&lt;/i&gt; &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;
                    
    &lt;div class = "sf-alert-close"&gt;
        &lt;button&gt;
            &lt;i class="sf-icon sf-icon-solid"&gt;close&lt;/i&gt      
        &lt;/button&gt
    &lt;/div&gt
&lt;/div&gt                 	
            </code>
        </pre>
        </div>
        <p>Используются следующие переменные: </p>
            <ol>
                <li>Фон: <code>var(--sf-primary-95)</code>.</li>
                <li>Граница: <code>var(--sf-primary-70)</code>.</li>
                <li>Цвет текста: <code>var(--sf-primary-50)</code>.</li>
            </ol>

        3. <strong>Secondary Alert (.sf-alert--secondary)</strong>:
        <div class="example radius-top-1/2">
        <div class = "sf-alert sf-alert--secondary">
                    <div class = "sf-alert-icon">
                        <i class="sf-icon">error</i>
                    </div>
                    <div class = "sf-alert-content">
                        <p>
                            <span class="sf-alert-content--title">We’ve just released a new feature</span>
                            
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
                        </p>
                    <p class = "sf-alert-content--footer ">
                        <a href="#">Learn more</a>
                        <a href="#">View changes  <i class="sf-icon sf-icon-medium">arrow_forward</i> </a>
                    </p>
                    </div>
                    
                    <div class = "sf-alert-close">
                        <button>
                        <i class="sf-icon sf-icon-solid">close</i>      
                        </button>
                    </div>
                    </div> 
        </div> 
            <div class="source theme-dark radius-bottom-1/2">
            <pre>
                <code class="language-html hljs language-xml" data-lang="html">
&lt;div class = "sf-alert sf-alert--secondary"&gt;
    &lt;div class = "sf-alert-icon"&gt;
    &lt;i class="sf-icon"&gt;error&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class = "sf-alert-content"&gt;
        &lt;p&gt;
            &lt;span class="sf-alert-content--title"&gt;We’ve just released a new feature&lt;/span&gt;
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
        &lt;/p&gt;
        &lt;p class = "sf-alert-content--footer "&gt;
            &lt;a href="#"&gt;Learn more&lt;/a&gt;
            &lt;a href="#"&gt;View changes  &lt;i class="sf-icon sf-icon-medium"&gt;arrow_forward&lt;/i&gt; &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;
                    
    &lt;div class = "sf-alert-close"&gt;
        &lt;button&gt;
            &lt;i class="sf-icon sf-icon-solid"&gt;close&lt;/i&gt      
        &lt;/button&gt
    &lt;/div&gt
&lt;/div&gt    	
                </code>
            </pre>
            </div>


        4. <strong>Error Alert <code>.sf-alert--error</code></strong>:
        <div class="example radius-top-1/2">
        <div class = "sf-alert sf-alert--error">
                    <div class = "sf-alert-icon">
                        <i class="sf-icon">error</i>
                    </div>
                    <div class = "sf-alert-content">
                        <p>
                            <span class="sf-alert-content--title">We’ve just released a new feature</span>
                            
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
                        </p>
                    <p class = "sf-alert-content--footer ">
                        <a href="#">Learn more</a>
                        <a href="#">View changes  <i class="sf-icon sf-icon-medium">arrow_forward</i> </a>
                    </p>
                    </div>
                    
                    <div class = "sf-alert-close">
                        <button>
                        <i class="sf-icon sf-icon-solid">close</i>      
                        </button>
                    </div>
                    </div> 
        </div> 
            <div class="source theme-dark radius-bottom-1/2">
            <pre>
                <code class="language-html hljs language-xml" data-lang="html">
&lt;div class = "sf-alert sf-alert--error"&gt;
    &lt;div class = "sf-alert-icon"&gt;
    &lt;i class="sf-icon"&gt;error&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class = "sf-alert-content"&gt;
        &lt;p&gt;
            &lt;span class="sf-alert-content--title"&gt;We’ve just released a new feature&lt;/span&gt;
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
        &lt;/p&gt;
        &lt;p class = "sf-alert-content--footer "&gt;
            &lt;a href="#"&gt;Learn more&lt;/a&gt;
            &lt;a href="#"&gt;View changes  &lt;i class="sf-icon sf-icon-medium"&gt;arrow_forward&lt;/i&gt; &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;
                    
    &lt;div class = "sf-alert-close"&gt;
        &lt;button&gt;
            &lt;i class="sf-icon sf-icon-solid"&gt;close&lt;/i&gt      
        &lt;/button&gt
    &lt;/div&gt
&lt;/div&gt    	
                </code>
            </pre>
            </div>
            <ol>
                <li>Фон: <code>var(--sf-error-95)</code>.</li>
                <li>Граница: <code>var(--sf-error)</code>.</li>
                <li>Цвет текста: <code>var(--sf-error-40)</code>.</li>
            </ol>

            4. <strong>Warning Alert <code>.sf-alert--warning</code></strong>:
            <div class="example radius-top-1/2">
            <div class = "sf-alert sf-alert--warning">
                    <div class = "sf-alert-icon">
                        <i class="sf-icon">warning</i>
                    </div>
                    <div class = "sf-alert-content">
                        <p>
                            <span class="sf-alert-content--title">We’ve just released a new feature</span>
                            
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
                        </p>
                    <p class = "sf-alert-content--footer ">
                        <a href="#">Learn more</a>
                        <a href="#">View changes  <i class="sf-icon sf-icon-medium">arrow_forward</i> </a>
                    </p>
                    </div>
                    
                    <div class = "sf-alert-close">
                        <button>
                        <i class="sf-icon sf-icon-solid">close</i>      
                        </button>
                    </div>
                    </div> 
        </div> 
            <div class="source theme-dark radius-bottom-1/2">
            <pre>
                <code class="language-html hljs language-xml" data-lang="html">
&lt;div class = "sf-alert sf-alert--warning"&gt;
    &lt;div class = "sf-alert-icon"&gt;
    &lt;i class="sf-icon"&gt;warning&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class = "sf-alert-content"&gt;
        &lt;p&gt;
            &lt;span class="sf-alert-content--title"&gt;We’ve just released a new feature&lt;/span&gt;
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
        &lt;/p&gt;
        &lt;p class = "sf-alert-content--footer "&gt;
            &lt;a href="#"&gt;Learn more&lt;/a&gt;
            &lt;a href="#"&gt;View changes  &lt;i class="sf-icon sf-icon-medium"&gt;arrow_forward&lt;/i&gt; &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;
                    
    &lt;div class = "sf-alert-close"&gt;
        &lt;button&gt;
            &lt;i class="sf-icon sf-icon-solid"&gt;close&lt;/i&gt      
        &lt;/button&gt
    &lt;/div&gt
&lt;/div&gt  	
                </code>
            </pre>
            </div>
            <ol>
                <li>Фон: <code>var(--sf-warning-95)</code>.</li>
                <li>Граница: <code>var(--sf-warning)</code>.</li>
                <li>Цвет текста: <code>var(--sf-warning-40)</code>.</li>
            </ol>


        5. <strong>Success Alert <code>.sf-alert--success</code></strong>:
        <div class="example radius-top-1/2">
            <div class = "sf-alert sf-alert--success">
                    <div class = "sf-alert-icon">
                        <i class="sf-icon">check_circle</i>
                    </div>
                    <div class = "sf-alert-content">
                        <p>
                            <span class="sf-alert-content--title">We’ve just released a new feature</span>
                            
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
                        </p>
                    <p class = "sf-alert-content--footer ">
                        <a href="#">Learn more</a>
                        <a href="#">View changes  <i class="sf-icon sf-icon-medium">arrow_forward</i> </a>
                    </p>
                    </div>
                    
                    <div class = "sf-alert-close">
                        <button>
                        <i class="sf-icon sf-icon-solid">close</i>      
                        </button>
                    </div>
                    </div> 
        </div> 
            <div class="source theme-dark radius-bottom-1/2">
            <pre>
                <code class="language-html hljs language-xml" data-lang="html">
&lt;div class = "sf-alert sf-alert--success"&gt;
    &lt;div class = "sf-alert-icon"&gt;
    &lt;i class="sf-icon"&gt;check_circle&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class = "sf-alert-content"&gt;
        &lt;p&gt;
            &lt;span class="sf-alert-content--title"&gt;We’ve just released a new feature&lt;/span&gt;
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid pariatur, ipsum similique veniam.
        &lt;/p&gt;
        &lt;p class = "sf-alert-content--footer "&gt;
            &lt;a href="#"&gt;Learn more&lt;/a&gt;
            &lt;a href="#"&gt;View changes  &lt;i class="sf-icon sf-icon-medium"&gt;arrow_forward&lt;/i&gt; &lt;/a&gt;
        &lt;/p&gt;
    &lt;/div&gt;
                    
    &lt;div class = "sf-alert-close"&gt;
        &lt;button&gt;
            &lt;i class="sf-icon sf-icon-solid"&gt;close&lt;/i&gt      
        &lt;/button&gt
    &lt;/div&gt
&lt;/div&gt  	
                </code>
            </pre>
            </div>
            <ol>
            <li>Фон: <code>var(--sf-success-95)</code>.</li>
            <li>Граница: <code>var(--sf-success)</code>.</li>
            <li>Цвет текста: <code>var(--sf-success-40)</code>.</li>
            </ol>

                
        </div>
</section>

<!--<link rel="stylesheet" href="{{ mix('sf5/core/css/core.css', 'assets') }}">
<link rel="stylesheet" href="{{ mix('sf5/core/css/utility.full.css', 'assets') }}">


<script src="{{ mix('sf5/core/js/core.js', 'assets') }}"></script>
<script src="{{ mix('sf5/core/js/rule.js', 'assets') }}"></script>-->


<!--testing alerts-->
<!--<link rel="stylesheet" href="{{ mix('sf5/component/alerts/css/alerts.css', 'assets') }}">
<script src="{{ mix('sf5/component/alerts/js/alerts.js', 'assets') }}"></script>-->
