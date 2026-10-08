CREATE TABLE buku (
    id SERIAL PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    pengarang VARCHAR(255) NOT NULL,
    tahun_terbit INTEGER NOT NULL,
    isbn VARCHAR(20) UNIQUE NOT NULL,
    stok INTEGER DEFAULT 0,
    kategori VARCHAR(100)
);

CREATE TABLE anggota (
    id SERIAL PRIMARY KEY,
    no_anggota VARCHAR(20) UNIQUE NOT NULL,
    nama VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    telepon VARCHAR(20),
    alamat TEXT
);