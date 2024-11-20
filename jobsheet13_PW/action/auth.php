<?php 
include('../lib/Session.php');
include('../lib/Connection.php');

$session = new Session();

$act = isset($_GET['act']) ? strtolower($_GET['act']) : ''; 

if ($act == 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan username
    $query = $db->prepare('SELECT * FROM m_user WHERE username = ?');
    $query->bind_param('s', $username);
    $query->execute();

    // Ambil hasil query
    $data = $query->get_result()->fetch_assoc();

    // Jika user ditemukan dan password cocok
    if ($data && password_verify($password, $data['password'])) {
        // Set session data
        $session->set('is_login', true);
        $session->set('username', $data['username']);
        $session->set('name', $data['nama']);
        $session->set('level', $data['level']);
        
        // Redirect ke halaman index
        header('Location: ../index.php');
        exit;
    } else {
        // Jika login gagal, set flash message
        $session->setFlash('status', false);
        $session->setFlash('message', 'Username dan password salah.');
        $session->commit(); // Pastikan commit() bekerja sesuai kebutuhan
        
        // Redirect kembali ke halaman login
        header('Location: ../login.php');
        exit;
    }
} elseif ($act == 'logout') {
    // Hapus semua data sesi saat logout
    $session->deleteAll();

    // Redirect ke halaman login setelah logout
    header('Location: ../login.php');
    exit;
}
?>
