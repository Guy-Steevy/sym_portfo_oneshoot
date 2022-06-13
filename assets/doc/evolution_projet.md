# Notes d'évolution du projet

## 1ère étape

1. Je crée un fichier .env.local pour ne pas mettre en ligne mon ID et mon password. Même si je n'en ai pas réellement besoin, c'est ce qui est recommandé dans les bonnes pratiques Symfony.
2. Dans le fichier _composer.json_, je crée une nouvelle commande :

```json
"scripts": {
        "prepare": [
            "php bin/console doctrine:database:drop --if-exists -f",
            "php bin/console doctrine:database:create"
        ],
        // ...code...
    },
```

La commande `composer prepare` va supprimer la base de donnée si elle existe déjà puis la créer. On s'assure ainsi de partir sur une base propre. Voici ce qu'on obtient :

```powershell
PS C:\Users\guyst\OneDrive\Work\School\Ecole du Web Gonesse\Portfolio\sym_portfo_oneshoot> composer prepare
> php bin/console doctrine:database:drop --if-exists -f
Dropped database `sym_portfo_oneshoot` for connection named default
> php bin/console doctrine:database:create
Created database `sym_portfo_oneshoot` for connection named default
```

## 2ème étape

Je crée mon fichier _skill.php_ dans le dossier _src/Entity_.
Je crée une entité _Skill_, puis je vérifie que mon code est correct avec la commande `php bin/console doctrine:schema:valid`.
Le terminal m'informe que le _mapping files_ est correct mais que le _schema_ de la bdd n'est pas correct. Normal vu que je ne l'ai pas encore synchronisée avec la bdd.

Puis je crée mon entité _education.php_.
Dans ce fichier figure le code suivant :

```php
<?php
 class Education
 {
    // ...code...

    /**
     * @var DateTimeInterface|null
     * @ORM\Column(type="date_immutable", nullable=true)
     */
    private ?DateTimeInterface $endedAt = null;
 }

```

`nullable = true` signifie que la colonne peut être nulle, parce que j'ai commencé une formation mais je n'ai pas fini.