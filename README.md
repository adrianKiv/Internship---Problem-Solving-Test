Kompleksitas No 3:
`Waktu`: O(n), di mana n adalah panjang string input.hanya ada satu iterasi melalui string dan operasi stack (push dan pop) yang keduanya memerlukan waktu O(1).
`Space`: O(n), karena di dalam worst case, kita harus menyimpan seluruh string di dalam stack (misalnya, ketika semua karakter adalah tanda buka).

- Kita melakukan satu iterasi untuk memeriksa setiap karakter dalam string (O(n)).
- Setiap operasi push dan pop dari stack adalah O(1).
- Tidak ada operasi lain yang memerlukan iterasi yang lebih dalam, jadi kompleksitas waktu keseluruhan tetap O(n).
- Memori untuk stack juga bergantung pada jumlah tanda buka yang ditemukan, jadi kompleksitas ruangnya adalah O(n).
