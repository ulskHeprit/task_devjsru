### Шаблон 
"php index.php #dogName# #command#"

#### dogNames:
- dachshund (такса)
- plushlabrador (плюшевый лабрадор)
- pug (мопс)
- rubberdachshund (резиновая такса с пищалкой)
- shibainu (сиба-ину)

### commands:
- sound
- hunting

### Примеры

```sh
$ php index.php pug sound
Woof! Woof!
```
```sh
$ php index.php pug hunting
Pug is lazy.
```
```sh
$ php index.php
Wrong dog name, available names => ( dachshund, plushlabrador, pug, rubberdachshund, shibainu )
```
```ssh
$ php index.php shibainu
Wrong command for dog, available commands => ( sound, hunting )
```
```sh
$ php index.php dachshund hunting
Dog to hunt.
```
```sh
$ php index.php rubberdachshund sound
Sound from speaker.
```