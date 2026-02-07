<?php
<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CleanPostTitles extends Command
{
    protected $signature = 'posts:clean-titles {--dry-run}';
    protected $description = 'Decodifica entità HTML nei titoli dei post e aggiorna slug';

    public function handle(): int
    {
        $dry = (bool) $this->option('dry-run');
        $updated = 0;

        Post::query()->chunkById(200, function ($posts) use ($dry, &$updated) {
            foreach ($posts as $p) {
                $clean = html_entity_decode($p->title ?? '');
                if ($clean !== $p->title) {
                    $updated++;
                    if (!$dry) {
                        $p->title = $clean;
                        $p->slug = Str::slug($clean);
                        $p->save();
                    }
                }
            }
        });

        $this->info($dry
            ? "Dry-run: {$updated} titoli da aggiornare."
            : "Aggiornati {$updated} titoli."
        );

        return Command::SUCCESS;
    }
}