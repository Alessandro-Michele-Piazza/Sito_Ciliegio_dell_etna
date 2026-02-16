# ilciliegiodelletna.it

Sito web per ilciliegiodelletna.it basato su Laravel. Il progetto include:

- Frontend pubblico del sito.
- Backend (area amministrativa) per creare e gestire contenuti visualizzati sul frontend, ad esempio post del blog e menu.

## Requisiti

- PHP 8.2+ con estensioni tipiche Laravel (pdo, mbstring, openssl, tokenizer, xml).
- Composer
- Node.js 18+ e npm
- Database MySQL/MariaDB (o compatibile)

## Avvio rapido (Laravel)

1. Installa dipendenze PHP:

    ```bash
    composer install
    ```

2. Copia il file di ambiente ed inserisci le credenziali:

    ```bash
    copy .env.example .env
    ```

    Aggiorna `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` nel file `.env`.

3. Genera la chiave applicativa:

    ```bash
    php artisan key:generate
    ```

4. Esegui le migrazioni (e, se serve, i seed):

    ```bash
    php artisan migrate
    # opzionale
    php artisan db:seed
    ```

5. Crea il link per lo storage pubblico:

    ```bash
    php artisan storage:link
    ```

6. Avvia il server di sviluppo:

    ```bash
    php artisan serve
    ```

## Avvio rapido (Frontend)

1. Installa dipendenze Node:

    ```bash
    npm install
    ```

2. Avvia Vite in sviluppo:

    ```bash
    npm run dev
    ```

3. Build per produzione:

    ```bash
    npm run build
    ```

## Note operative

- I contenuti gestiti nel backend (post, menu, ecc.) vengono mostrati nelle pagine pubbliche.
- Per l'upload delle immagini e file pubblici usare `storage` e il link creato con `storage:link`.
