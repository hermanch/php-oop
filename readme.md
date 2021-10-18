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

### Function
Selain menambahkan properties, kita juga bisa menambahkan function ke object Cara dengan mendeklarasikan function tersebut di dalam block class. Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama method nya. Sama seperti mengakses properties.
```php
class Person {
	function hello(string $nama){ // buat function
		echo "Halo $nama" .PHP_EOL;
	}

$hanasa = new Person();

$hanasa->hello("hanasa"); // panggil function

```
### This Keyword
Saat kita membuat kode di dalam function di dalam class, kita bisa menggunakan kata kunci `this` untuk mengakses object saat ini.

```php
class Person {
	var String $nama;

	function hiName(?string $nama) {
		if (is_null($nama)){
			echo "Hi, My name is $this->nama" .PHP_EOL; // this keyword
		} else{
			echo "Hi $nama, My name is $this->nama "; // this keyword
		}
	}
}
```

### Constant
Sebuah variable yang bersifat _immutable_ atau tidak bisa diubah. dulu di php bisa membuat dengan  cara method `define()`.

```php
class Person {
	const MODUL_NAME = "Belajar Php OOP"; //sengaja pakai uppercase supaya keliatan tegas.
}
echo Person::MODUL_NAME .PHP_EOL; // cara menggunakannya.
```
### self Keyword
Jika di dalam class (misal di function) kita ingin mengakses constant, kita perlu mengakses menggunakan `NamaClass::NAMA_CONSTANT`, Namun jika di dalam class yang sama, kita bisa menggunakan kata kunci `self::NAMA_CONSTANT` untuk mempermudah.

```php
class Person {
	const MODULE_NAME = "Belajar Php OOP";

	function info(){
		echo "Saya sedang belajar di modul: ". self::MODULE_NAME. PHP_EOL;
	}
}

$hanasa = new Person();
$hanasa->info();
```
