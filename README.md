# 🚀 Jigsaw Template Project

Документация и шаблон проекта на базе [Jigsaw](https://jigsaw.tighten.com/), с поддержкой сабмодуля и сборки.

## 🔧 Установка

1. Клонируйте репозиторий:

```bash
git clone --recurse-submodules git@github.com:simai/ui-doc-template.git
cd <repo>
```

2. Инициализируйте сабмодули (если не указали `--recurse-submodules` при клонировании):

```bash
git submodule update --init --remote
```

3. Установите зависимости:

```bash
yarn install 
composer install
```

4. Запустите сборку в режиме разработки:

```bash
yarn run watch
```

Теперь проект будет автоматически пересобираться при изменениях.

---

## 📂 Структура

- `source/` — Папка с шаблоном
- `source/_core/` — сабмодуль с ядром
- `build_local/` — результат локальной сборки
- `config.php` — конфигурация Jigsaw

---

## 📄 Лицензия

MIT
