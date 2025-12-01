SGEV - Sistema de Gestão de Estoque e Vendas (skeleton files)
------------------------------------------------------------
Conteúdo:
- migrations/ (exemplos de migrations)
- app/Models/ (models com $table e $fillable)
- app/Http/Controllers/ (resource controllers)
- resources/views/ (Blade templates com Bootstrap)
- routes/web.php
- database/seeders/DatabaseSeeder.php (exemplo)
- README com instruções

Observações:
- Este pacote contém apenas os arquivos para colar dentro de um projeto Laravel existente.
- Recomendado: Laravel 10, PHP 8.1+, MySQL.

Como usar:
1) Crie um projeto Laravel (se ainda não tiver):
   composer create-project laravel/laravel sgev
2) Copie os arquivos deste pacote para os respectivos diretórios do projeto Laravel.
3) Ajuste .env para conectar ao seu banco de dados.
4) Rode:
   php artisan migrate
   php artisan db:seed
   php artisan serve
5) Abra http://127.0.0.1:8000/products (ex.: lista de produtos).

Arquivos gerados automaticamente por ChatGPT (base nos materiais da disciplina).
