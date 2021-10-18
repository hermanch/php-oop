![banner php oop](./assets/banner.jpg)
# Belajar OOP PHP
Object Oriented Programming adalah sudut pandang bahasa pemrograman yang berkonsep “objek”.
Object adalah data yang berisi field / properties / attributes dan method / function / behavior.

## class
Class adalah blueprint, prototype atau cetakan untuk membuat Object yang berisikan deklarasi semua properties dan functions yang dimiliki oleh Object.
Untuk membuat class, kita bisa menggunakan kata kunci class sedangkan untuk penamaan class biasa menggunakan format `CamelCase`. Cara menggunakan class :
```php
$hanasa = new Person();
```

### Type Declaration
Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yang telah ditentukan.
```php
class Person {
	var string $nama;
	var string $alamat;
	var string $negara;
}
```

### Default Properties Value
Sama seperti variable, di properties juga kita bisa langsung mengisi value nya, Ini mirip seperti default value, jadi jika tidak diubah di object, maka properties akan memiliki value tersebut.

```php
class Person {
	var String $nama;
	var String $alamat;
	var String $negara = "Indonesia"; // default property
}
```

### Nullable Properties
Saat kita menambah type declaration di properties atau di function argument, maka secara otomatis kita tidak bisa mengirim data null ke dalam properties atau function argument tersebut maka dari itu untuk mengisi nilai `null` kita bisa dengan cara sebelum type declaration nya, kita bisa tambahkan tanda *?*.
```php
class Person {
	var String $nama;
	var ?String $alamat; // null property menggunakan tanda ?
	var String $negara = "Indonesia";
}
```