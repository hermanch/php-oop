![banner php oop -- sumber belajar: Programmer Zaman Now](./assets/banner.jpg)

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
### Constructor
constructor adalah function yang akan dipanggil saat pertama kali Object dibuat. Mirip seperti di function, kita bisa memberi parameter pada constructor.


### Destructor
Untuk membuat _function destructor_, kita bisa menggunakan nama _function_ `__destruct()`. Khusus untuk _destructor_, kita tidak boleh menambahkan function argument, dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menutup proses menulis ke file, sehingga tidak terjadi _memory leak_.

### Inheritance
Inheritance atau pewarisan adalah kemampuan untuk menurunkan sebuah _class_ ke _class_ lain. Dalam artian, kita bisa membuat _class Parent_ dan _class Child_, _Class Child_ hanya bisa punya satu _class Parent_, namun satu _class Parent_ bisa punya banyak _class Child_, Saat sebuah _class_ diturunkan, maka semua _properties_ dan _function_ yang ada di _class Parent_ secara otomatis akan dimiliki oleh _class Child_.

```php
class UIDesigner {
	var string $name;
	var string $skill;
	function sayHalo($name){
		echo "Halo $name, nama saya $this->name, saya seorang $this->skill.". PHP_EOL;
	}
}

class FEDev extends UIDesigner { // kata kunci extends -> untuk mewarisi.

}

```

### namespace
Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class, Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan jenis-jenis class. ***Namespace bagus ketika kita punya beberapa class yang sama***, dengan menggunakan namespace nama class sama tidak akan menjadikan error di PHP.

```php
namespace Data\One {
	class Person {

	}
}

namespace Data\Two {
	class Person { // sama dengan yang diatas

	}
}


$ahan = new Data\One\Person(); // keduanya tidak akan konflik
$maya = new Data\Two\Person(); // keduanya tidak akan konflik
```
Selain **class**, kita juga menggunakan **function** dan **constant** di namespace dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya dengan diawali dengan nama namespace nya.

```php
namespace Data\One {
	const IDENTIFY = "Saya seorang Karyawan";
	class Person {

	}
}

echo Data\One\IDENTIFY; //memanggil constant
```
