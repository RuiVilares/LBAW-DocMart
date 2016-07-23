--
-- PostgreSQL database dump
--

DROP TABLE IF EXISTS "ArtCar";
DROP TABLE IF EXISTS "Administrador";
DROP TABLE IF EXISTS "Favorito";
DROP TABLE IF EXISTS "Linha_de_compra";
DROP TABLE IF EXISTS "Compra";
DROP TABLE IF EXISTS "Cliente";
DROP TABLE IF EXISTS "Carrinho";
DROP TABLE IF EXISTS "Item";
DROP TABLE IF EXISTS "Artigo";
DROP TABLE IF EXISTS "Comentario";
DROP TABLE IF EXISTS "Utilizador";

DROP SEQUENCE IF EXISTS "Artigo_id_seq";
DROP SEQUENCE IF EXISTS "Carrinho_id_seq";
DROP SEQUENCE IF EXISTS "Compra_id_seq";
DROP SEQUENCE IF EXISTS "Item_id_seq";
DROP SEQUENCE IF EXISTS "Utilizador_id_seq";

DROP FUNCTION IF EXISTS "function_Linha_Item"();
DROP FUNCTION IF EXISTS "function_artCar_item"();
DROP FUNCTION IF EXISTS "function_total_Carrinho"();
DROP FUNCTION IF EXISTS "function_update_stock"();
DROP FUNCTION IF EXISTS "funtion_total_Compras"();
DROP FUNCTION IF EXISTS "function_createClientCar"();
DROP FUNCTION IF EXISTS "function_removeArticleFromCar"();
DROP FUNCTION IF EXISTS "function_atualiza_artCar"();
DROP FUNCTION IF EXISTS "function_subtract_Total"();

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: lbaw1511; Type: COMMENT; Schema: -; Owner: lbaw1511
--

COMMENT ON DATABASE lbaw1511 IS 'default administrative connection database';


--
-- Name: frmk; Type: SCHEMA; Schema: -; Owner: lbaw1511
--

CREATE SCHEMA frmk;


ALTER SCHEMA frmk OWNER TO lbaw1511;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner:
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner:
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- Name: function_Linha_Item(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION "function_Linha_Item"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

	IF NEW.quantidade > (SELECT quantidade FROM "Item" WHERE NEW.id_item = "Item".id) THEN

	RAISE EXCEPTION 'não pode haver uma quantidade maior na Linha de Compra do que no Item';

	END IF;

  RETURN NEW;

END;$$;


ALTER FUNCTION public."function_Linha_Item"() OWNER TO lbaw1511;

--
-- Name: function_artCar_item(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION "function_artCar_item"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

	IF NEW.quantidade > (SELECT quantidade FROM "Item" WHERE NEW.id_item = "Item".id) THEN

	RAISE EXCEPTION 'não pode haver uma quantidade maior no ArtCar do que no Item';

	END IF;

  RETURN NEW;

END;$$;


ALTER FUNCTION public."function_artCar_item"() OWNER TO lbaw1511;

--
-- Name: function_atualiza_artCar(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION "function_atualiza_artCar"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

	DELETE FROM "ArtCar" WHERE

			NEW.id_cliente = (SELECT id_cliente FROM "Cliente" WHERE id_cliente = NEW.id_cliente)

		AND

			(SELECT id_cliente FROM "Cliente" WHERE "ArtCar".id_carrinho = "Cliente".id_cliente) = id_carrinho;

    RETURN NEW;

END;$$;


ALTER FUNCTION public."function_atualiza_artCar"() OWNER TO lbaw1511;

--
-- Name: function_createClientCar(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION "function_createClientCar"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

		INSERT INTO "Carrinho" (id, total) VALUES (NEW.id_cliente, 0);

		RETURN NEW;

END$$;


ALTER FUNCTION public."function_createClientCar"() OWNER TO lbaw1511;

--
-- Name: function_removeArticleFromCar(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION "function_removeArticleFromCar"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

		IF (SELECT quantidade FROM "Item" WHERE NEW.id_item = "Item".id) = 0 THEN

		DELETE FROM "ArtCar" WHERE id_item = "Item".id;

		END IF;

	RETURN NEW;

END$$;


ALTER FUNCTION public."function_removeArticleFromCar"() OWNER TO lbaw1511;

--
-- Name: function_subtract_Total(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION "function_subtract_Total"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

	UPDATE "Carrinho" SET total = total - ((SELECT preco FROM "Artigo", "Item" WHERE OLD.id_carrinho = "Carrinho".id AND OLD.id_item = "Item".id AND "Item".id_artigo = "Artigo".id) * OLD.quantidade) WHERE OLD.id_carrinho = "Carrinho".id;

	IF NOT FOUND THEN

	RAISE EXCEPTION 'Sem ArtCar';

	END IF;

  RETURN OLD;

END;$$;


ALTER FUNCTION public."function_subtract_Total"() OWNER TO lbaw1511;

--
-- Name: function_total_Carrinho(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION "function_total_Carrinho"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

	UPDATE "Carrinho" SET total = total + ((SELECT preco FROM "Artigo", "Item" WHERE NEW.id_carrinho = "Carrinho".id AND NEW.id_item = "Item".id AND "Item".id_artigo = "Artigo".id) * NEW.quantidade) WHERE NEW.id_carrinho = "Carrinho".id;

	IF NOT FOUND THEN

	RAISE EXCEPTION 'Sem ArtCar';

	END IF;

  RETURN NEW;

END;$$;


ALTER FUNCTION public."function_total_Carrinho"() OWNER TO lbaw1511;

--
-- Name: function_update_stock(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION function_update_stock() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

	UPDATE "Item" SET quantidade = (quantidade - NEW.quantidade) WHERE "Item".id = NEW.id_item;

	RETURN NEW;

    END;$$;


ALTER FUNCTION public.function_update_stock() OWNER TO lbaw1511;

--
-- Name: funtion_total_Compras(); Type: FUNCTION; Schema: public; Owner: lbaw1511
--

CREATE FUNCTION "funtion_total_Compras"() RETURNS trigger
    LANGUAGE plpgsql
    AS $$BEGIN

	UPDATE "Compra" SET total = ((SELECT preco FROM "Artigo", "Item" WHERE NEW.id_item = "Item".id AND NEW.id_compra = "Compra".id AND "Item".id_artigo = "Artigo".id) * (NEW.quantidade)) WHERE NEW.id_compra = "Compra".id;
        DELETE FROM "ArtCar" WHERE id_item = NEW.id_item;
RETURN NEW;

END$$;


ALTER FUNCTION public."funtion_total_Compras"() OWNER TO lbaw1511;

SET search_path = frmk, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: follows; Type: TABLE; Schema: frmk; Owner: lbaw1511; Tablespace:
--

CREATE TABLE follows (
    follower character varying NOT NULL,
    followed character varying NOT NULL
);


ALTER TABLE follows OWNER TO lbaw1511;

--
-- Name: tweets; Type: TABLE; Schema: frmk; Owner: lbaw1511; Tablespace:
--

CREATE TABLE tweets (
    id integer NOT NULL,
    "time" timestamp without time zone NOT NULL,
    username character varying NOT NULL,
    text text NOT NULL
);


ALTER TABLE tweets OWNER TO lbaw1511;

--
-- Name: tweets_id_seq; Type: SEQUENCE; Schema: frmk; Owner: lbaw1511
--

CREATE SEQUENCE tweets_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tweets_id_seq OWNER TO lbaw1511;

--
-- Name: tweets_id_seq; Type: SEQUENCE OWNED BY; Schema: frmk; Owner: lbaw1511
--

ALTER SEQUENCE tweets_id_seq OWNED BY tweets.id;


--
-- Name: users; Type: TABLE; Schema: frmk; Owner: lbaw1511; Tablespace:
--

CREATE TABLE users (
    username character varying NOT NULL,
    realname character varying NOT NULL,
    password character varying NOT NULL
);


ALTER TABLE users OWNER TO lbaw1511;

SET search_path = public, pg_catalog;

--
-- Name: Administrador; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Administrador" (
    id integer NOT NULL
);


ALTER TABLE "Administrador" OWNER TO lbaw1511;

--
-- Name: ArtCar; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "ArtCar" (
    id_item integer NOT NULL,
    id_carrinho integer NOT NULL,
    quantidade integer NOT NULL,
    CONSTRAINT "quantidade válida" CHECK ((quantidade > 0))
);


ALTER TABLE "ArtCar" OWNER TO lbaw1511;

--
-- Name: Artigo; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Artigo" (
    id integer NOT NULL,
    preco real NOT NULL,
    genero text NOT NULL,
    tipo text NOT NULL,
    caminho_da_fotografia text NOT NULL,
    nome text NOT NULL,
    descricao text NOT NULL,
    CONSTRAINT "genero definido" CHECK (((genero = 'Homem'::text) OR (genero = 'Mulher'::text))),
    CONSTRAINT "preco positivo" CHECK ((preco >= (0)::double precision)),
    CONSTRAINT "tipos existentes" CHECK ((tipo = ANY (ARRAY['Casaco'::text, 'Camisola'::text, 'Calcas'::text, 'Sapatos'::text, 'Acessorio'::text])))
);


ALTER TABLE "Artigo" OWNER TO lbaw1511;

--
-- Name: Artigo_id_seq; Type: SEQUENCE; Schema: public; Owner: lbaw1511
--

CREATE SEQUENCE "Artigo_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Artigo_id_seq" OWNER TO lbaw1511;

--
-- Name: Artigo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lbaw1511
--

ALTER SEQUENCE "Artigo_id_seq" OWNED BY "Artigo".id;


--
-- Name: Carrinho; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Carrinho" (
    id integer NOT NULL,
    total real NOT NULL,
    CONSTRAINT "total válido" CHECK ((total >= (0)::double precision))
);


ALTER TABLE "Carrinho" OWNER TO lbaw1511;

--
-- Name: Cliente; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Cliente" (
    contribuinte text NOT NULL,
    data_de_nascimento date NOT NULL,
    morada text NOT NULL,
    telefone text NOT NULL,
    id_cliente integer,
    desativado text NOT NULL,
    CONSTRAINT "Maiores de idade" CHECK (((('now'::text)::date - data_de_nascimento) >= 18)),
    CONSTRAINT "cliente desativado" CHECK (((desativado = 'true'::text) OR (desativado = 'false'::text)))
);


ALTER TABLE "Cliente" OWNER TO lbaw1511;

--
-- Name: Comentario; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Comentario" (
    id_artigo integer NOT NULL,
    id_cliente integer NOT NULL,
    data date DEFAULT ('now'::text)::date NOT NULL,
    descricao text,
    classificacao integer NOT NULL,
    CONSTRAINT "Possibilidades de classificação e comentário" CHECK (((descricao IS NOT NULL) OR (classificacao >= 1))),
    CONSTRAINT "classificações válidas" CHECK (((classificacao >= 0) AND (classificacao <= 5)))
);


ALTER TABLE "Comentario" OWNER TO lbaw1511;

--
-- Name: Compra; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Compra" (
    id_cliente integer NOT NULL,
    data date DEFAULT ('now'::text)::date NOT NULL,
    total real NOT NULL,
    id integer NOT NULL,
    CONSTRAINT "total válido" CHECK ((total >= (0)::double precision))
);


ALTER TABLE "Compra" OWNER TO lbaw1511;

--
-- Name: Compra_id_seq; Type: SEQUENCE; Schema: public; Owner: lbaw1511
--

CREATE SEQUENCE "Compra_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Compra_id_seq" OWNER TO lbaw1511;

--
-- Name: Compra_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lbaw1511
--

ALTER SEQUENCE "Compra_id_seq" OWNED BY "Compra".id;


--
-- Name: Favorito; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Favorito" (
    id_cliente integer NOT NULL,
    id_artigo integer NOT NULL
);


ALTER TABLE "Favorito" OWNER TO lbaw1511;

--
-- Name: Item; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Item" (
    id integer NOT NULL,
    id_artigo integer NOT NULL,
    quantidade integer NOT NULL,
    cor text NOT NULL,
    tamanho text NOT NULL,
    CONSTRAINT "cores possíveis" CHECK ((cor = ANY (ARRAY['Branco'::text, 'Preto'::text, 'Azul'::text, 'Amarelo'::text, 'Verde'::text, 'Vermelho'::text]))),
    CONSTRAINT "quantidade válida" CHECK ((quantidade >= 0)),
    CONSTRAINT "tamanhos possíveis" CHECK ((tamanho = ANY (ARRAY['XS'::text, 'S'::text, 'M'::text, 'L'::text, 'XL'::text, 'XXL'::text, '31'::text, '32'::text, '33'::text, '34'::text, '35'::text, '36'::text, '37'::text, '38'::text, '39'::text, '40'::text, '41'::text, '42'::text, '43'::text, '44'::text, '45'::text, '46'::text, '47'::text, '48'::text, '49'::text])))
);


ALTER TABLE "Item" OWNER TO lbaw1511;

--
-- Name: Item_id_seq; Type: SEQUENCE; Schema: public; Owner: lbaw1511
--

CREATE SEQUENCE "Item_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Item_id_seq" OWNER TO lbaw1511;

--
-- Name: Item_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lbaw1511
--

ALTER SEQUENCE "Item_id_seq" OWNED BY "Item".id;


--
-- Name: Linha_de_compra; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Linha_de_compra" (
    id_item integer NOT NULL,
    id_compra integer NOT NULL,
    quantidade integer NOT NULL
);


ALTER TABLE "Linha_de_compra" OWNER TO lbaw1511;

--
-- Name: Utilizador; Type: TABLE; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE TABLE "Utilizador" (
    id integer NOT NULL,
    username text NOT NULL,
    password text NOT NULL,
    nome text NOT NULL,
    email text NOT NULL
);


ALTER TABLE "Utilizador" OWNER TO lbaw1511;

--
-- Name: Utilizador_id_seq; Type: SEQUENCE; Schema: public; Owner: lbaw1511
--

CREATE SEQUENCE "Utilizador_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "Utilizador_id_seq" OWNER TO lbaw1511;

--
-- Name: Utilizador_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lbaw1511
--

ALTER SEQUENCE "Utilizador_id_seq" OWNED BY "Utilizador".id;


SET search_path = frmk, pg_catalog;

--
-- Name: id; Type: DEFAULT; Schema: frmk; Owner: lbaw1511
--

ALTER TABLE ONLY tweets ALTER COLUMN id SET DEFAULT nextval('tweets_id_seq'::regclass);


SET search_path = public, pg_catalog;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Artigo" ALTER COLUMN id SET DEFAULT nextval('"Artigo_id_seq"'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Compra" ALTER COLUMN id SET DEFAULT nextval('"Compra_id_seq"'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Item" ALTER COLUMN id SET DEFAULT nextval('"Item_id_seq"'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Utilizador" ALTER COLUMN id SET DEFAULT nextval('"Utilizador_id_seq"'::regclass);


SET search_path = frmk, pg_catalog;

--
-- Name: follows_pkey; Type: CONSTRAINT; Schema: frmk; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY follows
    ADD CONSTRAINT follows_pkey PRIMARY KEY (follower, followed);


--
-- Name: tweets_pkey; Type: CONSTRAINT; Schema: frmk; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY tweets
    ADD CONSTRAINT tweets_pkey PRIMARY KEY (id);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: frmk; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (username);


SET search_path = public, pg_catalog;

--
-- Name: Artigo_caminho_da_fotografia_key; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Artigo"
    ADD CONSTRAINT "Artigo_caminho_da_fotografia_key" UNIQUE (caminho_da_fotografia);


--
-- Name: Artigo_nome_key; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Artigo"
    ADD CONSTRAINT "Artigo_nome_key" UNIQUE (nome);


--
-- Name: Artigo_pkey; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Artigo"
    ADD CONSTRAINT "Artigo_pkey" PRIMARY KEY (id);


--
-- Name: Cliente_contribuinte_key; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Cliente"
    ADD CONSTRAINT "Cliente_contribuinte_key" UNIQUE (contribuinte);


--
-- Name: Item_pkey; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Item"
    ADD CONSTRAINT "Item_pkey" PRIMARY KEY (id);


--
-- Name: Unique; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Comentario"
    ADD CONSTRAINT "Unique" UNIQUE (id_artigo, id_cliente);


--
-- Name: Utilizador_pkey; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Utilizador"
    ADD CONSTRAINT "Utilizador_pkey" PRIMARY KEY (id);


--
-- Name: id; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Compra"
    ADD CONSTRAINT id PRIMARY KEY (id);


--
-- Name: id único; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Carrinho"
    ADD CONSTRAINT "id único" UNIQUE (id);


--
-- Name: unique email; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Utilizador"
    ADD CONSTRAINT "unique email" UNIQUE (email);


--
-- Name: unique username; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Utilizador"
    ADD CONSTRAINT "unique username" UNIQUE (username);


--
-- Name: unique_id; Type: CONSTRAINT; Schema: public; Owner: lbaw1511; Tablespace:
--

ALTER TABLE ONLY "Cliente"
    ADD CONSTRAINT unique_id UNIQUE (id_cliente);


--
-- Name: indice_artigo_descricao; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_artigo_descricao ON "Artigo" USING gin (to_tsvector('portuguese'::regconfig, descricao));


--
-- Name: indice_artigo_genero; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_artigo_genero ON "Artigo" USING hash (genero);


--
-- Name: indice_artigo_nome; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_artigo_nome ON "Artigo" USING gin (to_tsvector('portuguese'::regconfig, nome));


--
-- Name: indice_artigo_preco; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_artigo_preco ON "Artigo" USING btree (preco);


--
-- Name: indice_artigo_tipo; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_artigo_tipo ON "Artigo" USING hash (tipo);


--
-- Name: indice_cliente_contribuinte; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_cliente_contribuinte ON "Cliente" USING hash (contribuinte);


--
-- Name: indice_cliente_desativado; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_cliente_desativado ON "Cliente" USING hash (desativado);


--
-- Name: indice_comentario_data; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_comentario_data ON "Comentario" USING btree (data);


--
-- Name: indice_compra_data; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_compra_data ON "Compra" USING btree (data);


--
-- Name: indice_utilizador_nome; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_utilizador_nome ON "Utilizador" USING gin (to_tsvector('portuguese'::regconfig, nome));


--
-- Name: indice_utilizador_username; Type: INDEX; Schema: public; Owner: lbaw1511; Tablespace:
--

CREATE INDEX indice_utilizador_username ON "Utilizador" USING hash (username);


--
-- Name: trigger_atualiza_linha_de_compra; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER trigger_atualiza_linha_de_compra AFTER INSERT OR UPDATE ON "Compra" FOR EACH ROW EXECUTE PROCEDURE "function_atualiza_artCar"();

ALTER TABLE "Compra" DISABLE TRIGGER trigger_atualiza_linha_de_compra;


--
-- Name: trigger_carrinho_atualizarTotal; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER "trigger_carrinho_atualizarTotal" AFTER INSERT OR UPDATE ON "ArtCar" FOR EACH ROW EXECUTE PROCEDURE "function_total_Carrinho"();


--
-- Name: trigger_check_quantidade_item; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER trigger_check_quantidade_item BEFORE INSERT OR UPDATE ON "ArtCar" FOR EACH ROW EXECUTE PROCEDURE "function_artCar_item"();


--
-- Name: trigger_compras_check; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER trigger_compras_check AFTER INSERT OR UPDATE ON "Linha_de_compra" FOR EACH ROW EXECUTE PROCEDURE "funtion_total_Compras"();


--
-- Name: trigger_create_clientcar; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER trigger_create_clientcar BEFORE INSERT ON "Cliente" FOR EACH ROW EXECUTE PROCEDURE "function_createClientCar"();


--
-- Name: trigger_delete_item; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER trigger_delete_item AFTER DELETE ON "ArtCar" FOR EACH ROW EXECUTE PROCEDURE "function_subtract_Total"();


--
-- Name: trigger_linha_verificaquantidades; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER trigger_linha_verificaquantidades BEFORE INSERT OR UPDATE ON "Linha_de_compra" FOR EACH ROW EXECUTE PROCEDURE "function_Linha_Item"();


--
-- Name: trigger_remove_articlefromcar; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER trigger_remove_articlefromcar BEFORE INSERT ON "ArtCar" FOR EACH ROW EXECUTE PROCEDURE "function_removeArticleFromCar"();


--
-- Name: trigger_update_stock; Type: TRIGGER; Schema: public; Owner: lbaw1511
--

CREATE TRIGGER trigger_update_stock BEFORE INSERT OR UPDATE ON "Linha_de_compra" FOR EACH ROW EXECUTE PROCEDURE function_update_stock();


SET search_path = frmk, pg_catalog;

--
-- Name: follows_followed_fkey; Type: FK CONSTRAINT; Schema: frmk; Owner: lbaw1511
--

ALTER TABLE ONLY follows
    ADD CONSTRAINT follows_followed_fkey FOREIGN KEY (followed) REFERENCES users(username);


--
-- Name: follows_follower_fkey; Type: FK CONSTRAINT; Schema: frmk; Owner: lbaw1511
--

ALTER TABLE ONLY follows
    ADD CONSTRAINT follows_follower_fkey FOREIGN KEY (follower) REFERENCES users(username);


--
-- Name: tweets_username_fkey; Type: FK CONSTRAINT; Schema: frmk; Owner: lbaw1511
--

ALTER TABLE ONLY tweets
    ADD CONSTRAINT tweets_username_fkey FOREIGN KEY (username) REFERENCES users(username);


SET search_path = public, pg_catalog;

--
-- Name: id; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Administrador"
    ADD CONSTRAINT id FOREIGN KEY (id) REFERENCES "Utilizador"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_artigo; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Favorito"
    ADD CONSTRAINT id_artigo FOREIGN KEY (id_artigo) REFERENCES "Artigo"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_artigo; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Item"
    ADD CONSTRAINT id_artigo FOREIGN KEY (id_artigo) REFERENCES "Artigo"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_carrinho; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "ArtCar"
    ADD CONSTRAINT id_carrinho FOREIGN KEY (id_carrinho) REFERENCES "Carrinho"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_cliente; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Favorito"
    ADD CONSTRAINT id_cliente FOREIGN KEY (id_cliente) REFERENCES "Cliente"(id_cliente) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_cliente; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Cliente"
    ADD CONSTRAINT id_cliente FOREIGN KEY (id_cliente) REFERENCES "Utilizador"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_cliente; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Compra"
    ADD CONSTRAINT id_cliente FOREIGN KEY (id_cliente) REFERENCES "Cliente"(id_cliente) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_clientecarrinho; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Cliente"
    ADD CONSTRAINT id_clientecarrinho FOREIGN KEY (id_cliente) REFERENCES "Carrinho"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_compra; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Linha_de_compra"
    ADD CONSTRAINT id_compra FOREIGN KEY (id_compra) REFERENCES "Compra"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_item; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "Linha_de_compra"
    ADD CONSTRAINT id_item FOREIGN KEY (id_item) REFERENCES "Item"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: id_item; Type: FK CONSTRAINT; Schema: public; Owner: lbaw1511
--

ALTER TABLE ONLY "ArtCar"
    ADD CONSTRAINT id_item FOREIGN KEY (id_item) REFERENCES "Item"(id) MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: lbaw1511
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM lbaw1511;
GRANT ALL ON SCHEMA public TO lbaw1511;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--
