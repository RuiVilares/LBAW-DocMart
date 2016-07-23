INSERT INTO "Utilizador" (username,password,nome,email) VALUES ('admin','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','admin','admin@admin.com');
INSERT INTO "Administrador" (id) SELECT id FROM "Utilizador" WHERE username='admin';
