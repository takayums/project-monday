# Monday Project: Website to Manage Toko dan Gudang | Laravel 13, React Query, dan Typescript

## About

Monday hadir untuk membantu menngelola data baranngn dan transaksi pada gudanng dan seluruh toko tersedia demi mempermudah proses tracking stock dann logistik

## User Roles

### 1. Manager

- sign in dashboard
- crud data user
- crud data role
- crud data keeper
- crud data category
- crud data product
- crud data warehaouse
- crud data warehouse product
- crud data merchant
- crud data merchant product
- crud data transaction

### 2. Keeper

- read data cateogory
- read data product
- read data product that assingned to its merchat
- crud data transaction

## User Stories

- manager login dengan credential yang telah diatur setelah itu membuat data pengguna lain dan memberika pengguan tersebut sebagai role keeper
- manager menambahkan data product, category, dann warehouse
- manager me-assign product didalam sebuah warehouse dan mengatur stock pada product tersebut
- manager membuat beberapa data merchant yang tersebar diberbagai kota
- manager me-assign beberapa produk kepada merchant tersebut beserta stoknya masing-masing, ketika dilakukann maka akan mengurangi stock product tersebut pada warehouse
- keeper login menggunakan credential yang terlah diberikan
- keeper dapat melihat profile merchat yang telah di assign sebelumnya
- keeper juga dapat melihat produk produk merchat miliknya berdasarkan category tersedia
- keeper bisa membuat data transaction baru dan mengisi quatity serta nama customer, setelah dilakukan otomatis akang mengurangi stock product pada merchant tersebut
- dengan begini pemiliki perusahaan dapat memantau pergerakan product dan penjualan pada setiap merchant pada dashboard manager.

## ERD

- User (Pengguna)
- Merchants (Toko/Gerai)
- Warehouse (Gudang)
- Transaction (Transaksi)
- Category (Kategory)

## Atribut Entitas

- User -> id, name, email, password, photo, phone
- Category -> id, name, photo, tagline
- Product -> id, name, thumbnail, about, price, is_populer
- Merchants -> id, name, address, photo, phone
- Warehouse -> id, name, address, photo, phone
- Transaction -> id, name, phone, sub_total, tax_total, grand_total

## Relasi

- User (1) -> Merchants (1) => 1 User menjaga 1 Merchants
- Category (1) -> Product (N) => 1 Category bisa dimiliki oleh banyak Product
- Merchants (1) -> Transaction (N) => 1 Merchants bisa melakukan banyak Transaksi
- Product (N) -> Warehouse (M) => 1 Product bisa ada pada banyak Warehouse, dan 1 Warehouse bisa memiliki banyak Product (Butuh table Pivot)
- Product (1) -> WarehouseProduct (N)
- Warehouse (1) -> WarehouseProduct (N)
- Product (N) -> Merchants (M) => 1 Product bisa dimiliki oleh banyak Merchants, dan 1 Merchants bisa memiliki banyak Product (Butuh table Pivot)
- Product (1) -> MerchantsProducts (N)
- Merchants (1) -> MerchantsProducts (N)
- Product (N) -> Transaction (M) => 1 Product bisa berada dalam banyak transaksi, dan 1 Transaksi bisa terdiri dari banyak Product (Butuh table Pivot)
- Product (1) -> TransactionProducts (N)
- Transaction (1) -> TransactionProducts (N)
