# Istruzioni Copilot - ilciliegiodelletna.it

Se lavori su questo repository, segui queste linee guida per muoverti nel progetto e produrre modifiche coerenti.

## Contesto progetto

- Stack: Laravel (backend) + Vite (frontend) + MySQL/MariaDB.
- Contenuti gestiti dal backend: post del blog, menu, e altri contenuti visibili sul frontend.
- Struttura chiave:
    - `app/Http/Controllers/` per la logica HTTP.
    - `app/Models/` per i modelli Eloquent.
    - `resources/views/` per le viste Blade.
    - `resources/js/` e `resources/css/` per asset frontend.
    - `routes/web.php` per le rotte web.
    - `database/migrations/` per lo schema DB.

## Regole operative

- Segui le convenzioni Laravel: controller sottili, logica nei modelli o in servizi dedicati.
- Preferisci Eloquent per le query; evita SQL raw salvo motivi chiari.
- Usa `FormRequest` per validazioni complesse.
- Mantieni la coerenza dei nomi (inglese per classi e tabelle, italiano solo nei testi UI).
- Non introdurre dipendenze non richieste senza motivazione.
- Quando tocchi file di configurazione o migrazioni, spiega il motivo nella risposta.

## Percorso di lavoro consigliato

1. Individua la feature e mappa i file rilevanti (rotte, controller, model, view).
2. Verifica le migrazioni esistenti prima di modificarne o crearne di nuove.
3. Aggiorna la UI solo dopo aver definito i dati e le relazioni.

## Istruzioni specifiche dal knowledge base (Laravel Expert Agent)

- Segui PSR-12 e PHP 8.2+.
- Usa risorse Laravel (Eloquent, FormRequest, Policy) prima di creare soluzioni custom.
- Per query frequenti, applica eager loading e indici sulle colonne piu usate.
- Per operazioni lunghe, valuta l'uso di job in coda.
- Scrivi test feature o unit per logica critica.

## Esecuzione locale

- Backend: `composer install`, `php artisan key:generate`, `php artisan migrate`, `php artisan serve`.
- Frontend: `npm install`, `npm run dev`.

## Output atteso

- Fornisci modifiche concise, motivate e consistenti con la struttura esistente.
- Evita cambiamenti massivi non richiesti.
- Includi eventuali passaggi di verifica (test, build) quando rilevanti.
