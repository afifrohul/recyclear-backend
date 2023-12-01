<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = new \App\Models\Article();
        $article->title = 'Membangun Kesadaran Lingkungan Melalui Daur Ulang Sampah';
        $article->slug = 'membangun-kesadaran-lingkungan-melalui-daur-ulang-sampah';
        $article->description = 'Dalam era di mana kesadaran lingkungan semakin menjadi fokus utama, upaya untuk memperbaiki keadaan planet kita telah menjadi semakin penting. Salah satu langkah terpenting dalam menjaga lingkungan adalah dengan mendaur ulang sampah. Daur ulang adalah proses yang membantu mengurangi limbah yang masuk ke tempat pembuangan akhir, mengurangi polusi udara yang dihasilkan dari pembuangan sampah, serta mengonservasi sumber daya alam yang berharga. Dengan pertumbuhan populasi yang terus meningkat, jumlah sampah juga bertambah secara signifikan. Daur ulang memainkan peran penting dalam mengurangi dampak negatif dari peningkatan ini. Proses daur ulang memungkinkan untuk menggunakan kembali bahan-bahan yang sudah ada dan mengubahnya menjadi produk baru. Hal ini membantu mengurangi tekanan terhadap sumber daya alam, menghemat energi, dan mengurangi emisi gas rumah kaca yang berkontribusi terhadap perubahan iklim. Daur ulang melibatkan beberapa jenis material, termasuk kertas, plastik, logam, dan kaca. Proses daur ulang kertas melibatkan pemecahan kertas bekas menjadi serat-serat untuk membuat kertas baru. Plastik, meskipun merupakan bahan yang sulit untuk didaur ulang, juga dapat diproses menjadi bahan baku baru. Logam, seperti aluminium dan baja, dapat didaur ulang tanpa kehilangan sifat fisiknya, sehingga mengurangi kebutuhan akan penambangan baru. Sedangkan kaca dapat didaur ulang tanpa batas jumlahnya tanpa kehilangan kualitasnya.';
        $article->thumbnail = 'default.png';
        $article->save();
        
        $article = new \App\Models\Article();
        $article->title = 'Mengubah Masa Depan dengan Daur Ulang Sampah Plastik';
        $article->slug = 'mengubah-masa-depan-dengan-daur-ulang-sampah-plastik';
        $article->description = 'Plastik telah menjadi bagian integral dalam kehidupan modern kita, tetapi dampaknya terhadap lingkungan telah menjadi semakin jelas. Sebagian besar plastik tidak terurai secara alami dan berakhir sebagai sampah, mengotori lautan, tanah, dan udara. Namun, melalui praktik daur ulang, kita memiliki kesempatan untuk mengurangi dampak negatif ini. Salah satu tantangan terbesar dalam daur ulang plastik adalah kompleksitas jenis-jenis plastik yang berbeda. Plastik terdiri dari berbagai macam polimer dengan sifat kimia yang beragam, yang membuat proses daur ulang menjadi sulit. Beberapa plastik lebih mudah didaur ulang daripada yang lain, sementara sebagian besar plastik hanya dapat didaur ulang sejumlah kali sebelum kualitasnya menurun. Proses daur ulang plastik dimulai dengan pengumpulan plastik bekas dari berbagai sumber, seperti botol, kemasan, atau wadah. Setelah dikumpulkan, plastik tersebut kemudian dibersihkan, dipilah berdasarkan jenisnya, dan dihancurkan menjadi pecahan-pecahan kecil. Selanjutnya, plastik tersebut dilelehkan dan dibentuk menjadi biji plastik atau digunakan dalam proses pembuatan produk baru. Para ilmuwan dan insinyur terus mencari inovasi baru dalam daur ulang plastik. Salah satu pendekatan yang sedang dikembangkan adalah penggunaan enzim atau bakteri yang dapat membantu memecah plastik menjadi bahan baku lagi. Teknologi canggih lainnya termasuk pengembangan polimer ramah lingkungan yang lebih mudah didaur ulang tanpa mengorbankan kualitasnya.';
        $article->thumbnail = 'default.png';
        $article->save();
        
        $article = new \App\Models\Article();
        $article->title = 'Mengubah Botol Plastik Menjadi Harta dengan Daur Ulang Jenis PET';
        $article->slug = 'mengubah-botol-plastik-menjadi-harta-dengan-daur-ulang-jenis-pet';
        $article->description = 'Daur ulang botol plastik jenis PET (Polyethylene Terephthalate) merupakan langkah penting dalam upaya untuk mengurangi dampak sampah plastik terhadap lingkungan. Botol-botol PET sering digunakan untuk minuman ringan, minuman air, atau produk-produk kemasan lainnya. Proses daur ulang PET bukan hanya mengurangi limbah, tetapi juga membantu menghemat sumber daya alam yang berharga. Langkah-langkah Daur Ulang Botol Plastik PET: Pertama, botol-botol plastik PET dikumpulkan dari berbagai sumber, seperti tempat pembuangan sampah, program daur ulang komunitas, atau fasilitas pengumpulan khusus. Kedua, setelah dikumpulkan, botol-botol plastik PET dipilah berdasarkan jenisnya dan kemudian dibersihkan secara menyeluruh. Proses pemilahan ini penting karena botol plastik PET biasanya dicampur dengan jenis plastik lain, dan pemisahan ini memastikan kualitas bahan baku yang lebih baik untuk proses daur ulang. Ketiga, botol-botol plastik PET kemudian dipotong menjadi potongan-potongan kecil. Potongan-potongan ini kemudian dicuci lagi untuk menghilangkan segala kotoran atau residu yang mungkin masih menempel. Keempat, potongan-potongan plastik PET dilelehkan menjadi bentuk yang lebih sederhana, seperti biji plastik atau pelet, yang nantinya dapat digunakan dalam proses pembuatan produk baru. Kelima, biji plastik yang dihasilkan dari proses daur ulang kemudian dapat digunakan dalam pembuatan berbagai produk, seperti benang untuk pakaian, serat untuk karpet, atau bahkan botol plastik baru.';
        $article->thumbnail = 'default.png';
        $article->save();


    }
}
