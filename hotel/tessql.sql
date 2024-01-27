SELECT
    reservasi.id_reservasi,
    customer.nama_customer,
    customer.nomor_customer,
    reservasi.tipe_kamar,
    reservasi.tanggal_checkin,
    reservasi.tanggal_checkout,
    reservasi.total
FROM
    customer
JOIN
    reservasi ON customer.id_customer = reservasi.id_customer;
