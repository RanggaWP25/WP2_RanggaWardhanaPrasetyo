<section>
    <h1><?= $judul ?></h1>
    <p align="justify">
        Pada pengertian codeigniter diatas
        tadi dijelaskan bahwa codeigniter menggunakan metode MVC. Apa itu
        MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih
        jauh dalam belajar codeigniter.
    </p>
    <p>
        MVC adalah teknik atau konsep yang memisahkan
        komponen utama menjadi tiga bagian yaitu model, view dan
        controller.
    </p>

    <ol type="a">
        <li>Model</li>
        <p align="justify">
            Model adalah kelas yang merepresentasikan atau
            memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga
            dapat didefinisikan sebagai bagian penanganan yang berhubungan dengean
            pengolahan atau manipulasi database. Seperti misalnya mengambil data
            dari database, menginput dan pengolahan database lainnya. Semua
            instruksi atau fungsi yang berhubung dengan pengolahan database di
            letakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi
            untuk menghitung luas keliling lingkaran, maka dapat memodelkan
            objek lingkaran sebagai kelas model.
        </p>
        <p align="justify">
            Sebagai catatan, semua model harus disimpan di
            dalam folder application\models.
        </p>

        <li>View</li>
        <p align="justify">
            View merupakan bagian yang menangani halaman user
            interface atau halaman yang muncul pada user (pada browser). Tampilan
            dari user interface dikumpulkan pada view untuk memisahkannya
            dengan controller dan model sehingga memudahkan web designer dalam
            melakukan pengembangan tampilan halaman pada website.
        </p>

        <li>Controller</li>
        <p align="justify">
            Controller merupakan instruksi aksi yang
            menghubungkan model dan view, jadi user tidak akan berhubungan
            dengan model secara langsung, intinya data yang tersimpan di
            database(model) diambil oleh controller dan kemudian controller
            pula yang menampilkan ke layar view. Jadi controller lah yang mengolah
            instruksi.
        </p>
        <p align="justify">
            Dari penjelasan tentang model view dan controller
            diatas dapat disimpulkan bahwa controller sebagai penghubung View
            dan model. Misalnya pada aplikasi yang menampilkan data dengan
            menggunakan konsep MVC, controller memanggil instruksi pada
            model yang mengambil data pada database, kemudian controller yang
            meneruskannya pada view untuk ditampilkan. Jadi jelas sudah dan
            sangat mudah dalam pengembangan aplikasi dengan cara MVC ini karena
            web designer atau front-end developer lagi tidak perlu lagi berhubungan
            dengan controller, dia hanya perlu berhubungan dengan view untuk
            mendesign tampilan aplikasi, karena back-end developer yang
            menangani bagian controller dan modelnya. Jadi pembagian tugas pun
            menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan
            cepat dan terstruktur.
        </p>
    </ol>
</section>