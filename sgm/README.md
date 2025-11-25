SGM - Sistema de Gestão de Motopeças (CRUD skeleton)
---------------------------------------------------
Conteúdo deste pacote:
- database/migrations/ (migrations para clientes, fornecedores, produtos, ordens, itens)
- database/seeders/DatabaseSeeder.php
- app/Models/ (models com $fillable e relacionamentos)
- app/Http/Controllers/ (resource controllers sem autenticação)
- resources/views/ (Blade views simples, sem framework CSS)
- routes/web.php

Como usar:
1) Crie ou abra um projeto Laravel (recomendado Laravel 10) em C:\xampp\htdocs\sgev (ou outro local).
2) Copie os arquivos/pastas deste zip para a raiz do projeto Laravel, mantendo artisan e vendor.
3) Ajuste .env para conexão com MySQL (DB_DATABASE=sgev, DB_USERNAME=root, DB_PASSWORD=).
4) Rode: php artisan migrate
          php artisan db:seed
          php artisan serve
5) Acesse: http://127.0.0.1:8000/products

Observações:
- Views são simples e pensadas para entrega acadêmica (limpas e fáceis de entender).
- Não inclui autenticação por decisão do aluno.
