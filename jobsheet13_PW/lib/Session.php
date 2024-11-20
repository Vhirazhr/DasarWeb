<?php

class Session {
    
    // Konstruktor untuk memulai sesi jika belum dimulai
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Menyimpan data ke dalam session
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    // Mengambil data dari session
    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    // Memeriksa apakah data dengan kunci tertentu ada di session
    public function exist($key) {
        return isset($_SESSION[$key]);
    }

    // Menghapus data dari session berdasarkan kunci
    public function delete($key) {
        unset($_SESSION[$key]);
    }

    // Menyimpan flash message ke session
    public function setFlash($key, $value) {
        $_SESSION['flash'][$key] = $value;
    }

    // Mengambil flash message dari session
    public function getFlash($key) {
        // Ambil flash message dan hapus setelah diambil
        $value = isset($_SESSION['flash'][$key]) ? $_SESSION['flash'][$key] : null;
        $this->deleteFlash($key);
        return $value;
    }

    // Menghapus flash message dari session berdasarkan kunci
    public function deleteFlash($key) {
        unset($_SESSION['flash'][$key]);
    }

    // Menghapus semua flash messages dari session
    public function deleteAllFlash() {
        unset($_SESSION['flash']);
    }

    // Menghapus seluruh data session dan menghancurkan sesi
    public function deleteAll() {
        session_unset(); // Menghapus semua data dalam sesi
        session_destroy(); // Menghancurkan sesi secara keseluruhan
    }

    // Menyimpan dan menutup sesi
    public function commit() {
        session_write_close(); // Menyimpan perubahan dan menutup sesi
    }
}
?>
