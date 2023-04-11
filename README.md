# Поточне завдання:
### [Домашнє завдання на 12.04.2023](https://github.com/SurkovKostiantyn/PHPTestProject/blob/main/README.md)
# Попередні завдання:
### [Тут поки що пусто](https://github.com/SurkovKostiantyn/PHPTestProject/blob/main/README.md)


# Домашнє завдання на 12.04.2023
## Підготовка до виконання:
### 1. У вас має буди створений акаунт на [GitHub](https://github.com)
### 2. Ви маєте встановити [Git](https://git-scm.com/downloads) на свій ПК/ноутбук:
  - Виберіть операційну систему
  - Завантажте і встановіть Git
  - Перевірте встановлення виконавши команду `git --v` в терміналі (консолі) вашої операційної системи.
### 3. У вас повинен бути створений репозиторій на [GitHub](https://github.com):
   - Назва репозиторію: `php_hometask_Lastname_Firstname`. 
   - Наприклад: `php_hometask_Pyatochkin_Petro`
   - Для створення репозиторію використовуйте [це посилання](https://github.com/new) 
   - Репозиторій має бути публічним -  `Public`
   - Файл `README.md` створювати не потрібно
### 4. Задача - клонувати репозиторій з завданням до вашого нового створеного репозиторію
   - Репозиторій із завданням, який потрібно клонувати: [Посилання](https://github.com/SurkovKostiantyn/PHPTestProject)
   - Для клонувати репозиторій можна двома шляхами:
   - Більш довгий шлях:
     - відкрити термінал (консоль) вашої операційної системи (наприклад: `cmd` в Windows, або `terminal` в MacOS)
     - Подумати, в на який диск і яку папку ви хочете клонувати репозиторій:
       - Наприклад, я хочу, щоб він був в папці `my_projects` на диску `D`
       - консольна команда для переходу в папку `my_projects` на диску `D` буде виглядати так: `cd D:\my_projects`
       - наступна команда буде виглядати так: `git clone https://github.com/Pyatochkin_Petro/php_hometask_Pyatochkin_Petro.git`
         - `git clone` - це команда для клонування репозиторію
         - посилання - це посилання на репозиторій, який потрібно клонувати
         - Таким чином на вашому ПК/ноутбуці буде створена папка `php_hometask_Pyatochkin_Petro` з репозиторієм
       - наступна команда буде виглядати так: `git clone https://github.com/SurkovKostiantyn/PHPTestProject.git`
         - цією командою ви клонуєте репозиторій із завданням
         - Таким чином на вашому ПК/ноутбуці буде створена папка `PHPTestProject` з репозиторієм
     - Після клонування репозиторіїв відкрити папку `PHPTestProject` в вашому IDE (наприклад: [PhpStorm](https://www.jetbrains.com/phpstorm/))
     - Також відкрити папку `php_hometask_Pyatochkin_Petro` в вашому IDE (наприклад: [PhpStorm](https://www.jetbrains.com/phpstorm/)) в іншому вікні
     - Скопіювати файли з папки `PHPTestProject` в папку `php_hometask_Pyatochkin_Petro`
     - Закрити вікно з папкою `PHPTestProject` та видалити цю папку з диску
     - Відкрити термінал (консоль) вашої операційної системи (наприклад: `cmd` в Windows, або `terminal` в MacOS)
     - Перейти в папку `php_hometask_Pyatochkin_Petro` виконавши команду `cd D:\my_projects\php_hometask_Pyatochkin_Petro`
     - Виконати команду `git add .`
     - Виконати команду `git commit -m "Initial commit"`
     - Виконати команду `git push`
     - Ввести логін та пароль від вашого акаунта на [GitHub](https://github.com)
     - Відкрити ВАШ репозиторій на [GitHub](https://github.com) та перевірити, що він містить файли з папки `PHPTestProject`
     - Готово! Це був довгий шлях, але ви виконали завдання!
   - Більш короткий шлях:
     - скористатись [цим посиланням](https://docs.github.com/en/repositories/creating-and-managing-repositories/duplicating-a-repository)
### 5. Тепер усі наступні домашні завдання ви повинні виконувати в вашому проекті:
- `php_hometask_Pyatochkin_Petro`
### 6. Кожне окреме завдання комітити з приміткою:
- `HomeTask #1`, `HomeTask #2` і т.д.
### 7. Завдання для КН-22: ###
 - в використати в вашому проекті шаблонізатор [Latte](https://latte.nette.org/en/) та за допомогою нього вивести шаблон index.tpl (index.latte)
 - використати Trait `DebugTrait` для виведення даних в консоль, поетапно прослідкувати виконання програми.
 - використати в проекті [Monolog](https://packagist.org/packages/monolog/monolog) для виведення логів в файли.
### 8. Завдання для КН-20, КН-20:
 - використати в проекті шаблонізатор [Smarty](https://www.smarty.net/) для виведення шаблонів index.tpl (index.latte).
