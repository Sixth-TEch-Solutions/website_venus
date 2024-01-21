function sendTowhatsapp() {
    var phonenumber = '+6281385287494';

    var nama = document.querySelector('.nama').value;
    var nomor = document.querySelector('.nomor').value;
    var alamat = document.querySelector('.alamat').value;
    var jenisbarang1 = document.querySelector('.jenisbarang1').value;
    var namabarang1 = document.querySelector('.namabarang1').value;
    var jumlahbarang1 = document.querySelector('.jumlahbarang1').value;
    var jenisbarang2 = document.querySelector('.jenisbarang2').value;
    var namabarang2 = document.querySelector('.namabarang2').value;
    var jumlahbarang2 = document.querySelector('.jumlahbarang2').value;
    var jenisbarang3 = document.querySelector('.jenisbarang3').value;
    var namabarang3 = document.querySelector('.namabarang3').value;
    var jumlahbarang3 = document.querySelector('.jumlahbarang3').value;

    var url = 'https://wa.me/' + phonenumber + '?text='
    +'*Nama Lengkap :* ' +nama+'%0a'
    +'*Nomor Telepon :* ' +nomor+'%0a'
    +'*Alamat Lengkap :* ' +alamat+'%0a'
    +'*Jenis Barang 1 :* ' +jenisbarang1+'%0a'
    +'*Nama Barang 1 :* ' +namabarang1+'%0a'
    +'*Jumlah Barang 1 :* ' +jumlahbarang1+'%0a'
    +'*Jenis Barang 2 :* ' +jenisbarang2+'%0a'
    +'*Nama Barang 2 :* ' +namabarang2+'%0a'
    +'*Jumlah Barang 2 :* ' +jumlahbarang2+'%0a'
    +'*Jenis Barang 3 :* ' +jenisbarang3+'%0a'
    +'*Nama Barang 3 :* ' +namabarang3+'%0a'
    +'*Jumlah Barang 3 :* ' +jumlahbarang3+'%0a';

    window.open(url, '_blank').focus();
}