-- Table: participa

-- DROP TABLE participa;

CREATE TABLE participa
(
  proyecto integer NOT NULL,
  tiempo character varying(20),
  tarea character varying(40),
  trabajador character varying(40) NOT NULL,
  CONSTRAINT participa_pkey PRIMARY KEY (proyecto, trabajador)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE participa
  OWNER TO postgres;
