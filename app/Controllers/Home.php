<?php

namespace App\Controllers;
use App\Models\M_belajar;
use App\Models\M_pelanggan;
use App\Models\M_petugas;
use App\Models\M_user;
use App\Models\M_kendaraan;
use App\Models\ActivityLogModel;


class Home extends BaseController
{
    protected $session;

public function __construct()
{
    $this->session = session();
}

    public function index()
    {
        return view('welcome_message');
    }
    public function dashboard()
    {
        echo view('header');
        echo view('dashboard');
        echo view('footer');
    }
    public function dashboardadmin()
    {
        echo view('headeradmin');
        echo view('dashboardadmin');
    }
    public function about()
    {
        echo view('header');
        echo view('about');
        echo view('footer');
    }
    public function rent()
    {
        echo view('header');
        echo view('rent');
        // echo view('footer');
    }
    public function contactus()
    {
        echo view('header');
        echo view('contactus');
    }
        public function login()
    {
        return view('login');
    }

public function aksi_login()
    {
    // reCAPTCHA verification
    $recaptcha_secret = "6Le84ekqAAAAALeNjoPqlvnHY6xC_bA4zhsNVZhc"; // Ganti dengan secret key reCAPTCHA Anda
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Verifikasi dengan Google reCAPTCHA
    $verify_url = "https://www.google.com/recaptcha/api/siteverify";
    $response = file_get_contents($verify_url . "?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response);
    $response_keys = json_decode($response, true);

    if (!$response_keys["success"]) {
        echo "Verifikasi reCAPTCHA gagal. Silakan coba lagi.";
        exit();
    }

    $session = session(); 
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('pswd');

    $Bioskop = new M_belajar;

    // Cari user berdasarkan email/username
    $user = $Bioskop->getWhere('user', ['email' => $username]);

    if ($user) {
        // Cocokkan password
        if ($user->password === md5($password)) {
            // Set session
            session()->set('id_user', $user->id_user);
            session()->set('u', $user->username);
            session()->set('level', $user->level);
            session()->set('login_time', time());

            // Catat log login berhasil
            $this->logActivity($user->id_user, 'User logged in');

            // Redirect sesuai level
            if (in_array($user->level, [2, 3])) {
                return redirect()->to('home/dashboardadmin');
            } elseif ($user->level == 1) {
                return redirect()->to('home/dashboard');
            } else {
                return redirect()->to('home/login')->with('error', 'Level pengguna tidak dikenal.');
            }
        } else {
            // Log password salah
            $this->logActivity($user->id_user, 'Gagal login: Password salah');
        }
    } else {
        // Log username tidak ditemukan
        $this->logActivity(null, 'Gagal login: Username tidak ditemukan');
    }

    return redirect()->to('home/login')->with('error', 'Username atau Password salah.');
}


public function logActivity($userId, $activity)
{
    $logModel = new ActivityLogModel();

    $logModel->save([
        'id_user'    => $userId,  // Tetap mencatat user ID jika ada
        'keterangan' => $activity,
        'ip_address' => $this->request->getIPAddress(),
    ]);
}


    public function profile()
    {
        echo view('header');
        echo view('profile');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('home/login')->with('success', 'Anda telah logout.');
    }
    public function register()
    {
        return view('register');
    }

   public function registerProcess()
    {
        $validation = \Config\Services::validation();

        // Validasi input
        $validation->setRules([
            'nama_pelanggan' => 'required',
            'username'       => 'required|is_unique[user.username]',
            'password'       => 'required|min_length[1]',
            'nomor_ktp'      => 'required|numeric',
            'jenis_kelamin'  => 'required',
            'no_hp'          => 'required|numeric',
            'alamat'         => 'required',
            'nomor_sim'      => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Pastikan model ter-load
        $userModel = new M_user();

        // Data untuk tabel user
        $dataUser = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'level'    => 1
        ];

        // Data untuk tabel pelanggan
        $dataPelanggan = [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'nomor_ktp'      => $this->request->getPost('nomor_ktp'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'no_hp'          => $this->request->getPost('no_hp'),
            'alamat'         => $this->request->getPost('alamat'),
            'nomor_sim'      => $this->request->getPost('nomor_sim')
        ];

        // Simpan ke database
        $result = $userModel->registerUserDanPelanggan($dataUser, $dataPelanggan);

        if ($result) {
            return redirect()->to(base_url('home/login'))->with('success', 'Registrasi berhasil! Silakan login.');
        } else {
            return redirect()->to(base_url('home/register'))->with('error', 'Registrasi gagal! Silakan coba lagi.');
        }
    }

    public function tabelkendaraan()
{
    $rental = new M_belajar;
    $where = ('id_kendaraan');
    $kendaraan = [
        'takdirestui' => $rental->getKendaraan(),
        'deleted_kendaraan' => $rental->getDeletedKendaraan(),
    ];
    
    echo view('headeradmin');
    echo view('tabelkendaraan', $kendaraan);
}
  
public function restoreK($id)
    {
        $model = new M_kendaraan();
        $result = $model->restore($id);

        // if ($result) {
        //  $this->logActivity("Mengembalikan bandara dengan ID: $id (soft delete)");
         if ($result) {

            return redirect()->to('Home/tabelkendaraan')->with('success', 'Bandara berhasil direstore');
        } else {
            return redirect()->to('Home/tabelkendaraan')->with('error', 'Bandara tidak ditemukan');
        }
    }

    public function editkendaraan($id)
    {
        $rental= new M_belajar;
        $reken = array('id_kendaraan' => $id );
        $kendaraan['takdirestui']=$rental->getWhere('kendaraan', $biket); 
        echo view('headeradmin');
        echo view('editkendaraan', $kendaraan); 
    }
    public function simpanedit_kendaraan()
    {
        $Bioskop= new M_belajar;
        $fileFoto = $this->request->getFile('foto');
        $a=$this->request->getPost('tipe');
        $b=$this->request->getPost('merk');
        $c= $this->request->getPost('plat');
        $d= $this->request->getPost('harga');
        $e=$this->request->getPost('status');
        $id=$this->request->getPost('idkendaraan');
        

        // Pindahkan foto ke folder tujuan
        $newFileName = $fileFoto->getRandomName(); // Generate nama file acak
        $fileFoto->move(WRITEPATH . '../public/img/', $newFileName);

        $rental= new M_belajar;
        $reken = array('id_kendaraan' => $id );
        $data =array(
         'poster' => $newFileName,
         "tipe"=>$a,
         "merk"=>$b,
         "nomor_plat"=>$c,
         "harga"=>$d,
         "status"=>$e,
     );
        print_r($data);
        $rental->edit('kendaraan', $data, $reken);
        return redirect ()->to('home/tabelekendaraan');
    }
    public function simpaninput_kendaraan()
    {
        $a=$this->request->getpost('tipe');
        $b=$this->request->getPost('merk');
        $c=$this->request->getPost('plat');
        $d=$this->request->getPost('harga');
        $e=$this->request->getPost('status');

        $data = array(
                "tipe"=>$a,
                "merk"=>$b,
                "nomor_plat"=>$c,
                "harga_perhari"=>$d,
                "status"=>$e,
                );
        $rental= new M_belajar;
        $rental->input('kendaraan',$data);
        return redirect()->to('home/kendaraan');
    }
    public function inputkendaraan()
    {
        $rental= new M_belajar;
        $where=('id_kendaraan');
        $kendaraan['takdirestui']=$rental->tampil('kendaraan', $where);
        echo view('headeradmin');
        echo view('inputkendaraan',$kendaraan);
    }


       public function deleteK($id)
{
    $model = new M_kendaraan;
    $result = $model->softDelete($id);

    if ($result) {
        return redirect()->to('Home/tabelkendaraan')->with('success', 'Kendaraan berhasil dihapus secara permanen');
    } else {
        return redirect()->to('Home/tabelkendaraan')->with('error', 'Kendaraan tidak ditemukan atau terjadi kesalahan saat menghapus kendaraan');
    }
}
    public function tabelpelanggan()
{
    $rental = new M_belajar;
    $where = ('id_pelanggan');
    $kendaraan = [
        'takdirestui' => $rental->tampil('pelanggan', $where),
        'deleted_pelanggan' => $rental->getDeletedKendaraan(),
    ];
    
    echo view('headeradmin');
    echo view('tabelpelanggan', $kendaraan);
}
    public function deleteP($id)
    {
        $model = new M_belajar();
        $result = $model->softDelete($id);

        // if ($result) {
        // $this->logActivity("Menghapus kendaraan dengan ID: $id (soft delete)");
        
        if ($result) {
            return redirect()->to('home/pelanggan')->with('success', 'Pelanggan berhasil dihapus (soft delete)');
        } else {
            return redirect()->to('home/pelanggan')->with('error', 'Pelanggan tidak ditemukan');
        }
    }
public function restoreP($id)
{
    $model = new M_belajar();
    $result = $model->restore($id);

    // if ($result) {
    //     $this->logActivity("Mengembalikan bandara dengan ID: $id (soft delete)");

    if ($result) {
       return redirect()->to('home/pelanggan')->with('success', 'pelanggan berhasil direstrore');
        } else {
            return redirect()->to('home/pelanggan')->with('error', 'pelanggan tidak ditemukan');
        }
    }
public function hapuspelanggan($id)
    {
        $Bioskop= new M_belajar;
        $biket = array('id_pelanggan' => $id );
        $tiket['takdirestui'] = $Bioskop->hapus('pelanggan', $biket);
        return redirect()->to('home/tabelepelanggan');
    }
    public function cart()
    {
        echo view('header');
        echo view('cart');
        echo view('footer');
    }
    public function laporansewa()
    {
            echo view('headeradmin');
            echo view('laporansewa');
    }
    public function sewa()
{    
    $Jocye = new M_belajar;
    $where = ('id_kendaraan');
    $wendy['takdirestui'] = $Jocye->tampil('kendaraan', $where);
    echo view('header');
    echo view('sewa', $wendy);
}
    public function aksi_sewa()
{
    $a = $this->request->getPost('nama_pelanggan');
    $b = $this->request->getPost('jeniskelamin');
    $d = $this->request->getPost('nohp');
    $e = $this->request->getPost('alamat');
    $g = $this->request->getPost('nama_kendaraan'); // Ensure this is actually an ID if needed
    $h = $this->request->getPost('tanggal');
    $i = $this->request->getPost('total_harga');
    $j = $this->request->getPost('durasi');
    $k = $this->request->getPost('metode');

    // Process KTP upload
    $ktpFile = $this->request->getFile('ktp');
    $ktpFileName = $ktpFile->getRandomName();
    $ktpFile->move(WRITEPATH . '../public/img/', $ktpFileName);

    // Process SIM upload
    $simFile = $this->request->getFile('sim');
    $simFileName = $simFile->getRandomName();
    $simFile->move(WRITEPATH . '../public/img/', $simFileName);

    // Process Bukti upload
    $buktiFile = $this->request->getFile('bukti');
    $buktiFileName = $buktiFile->getRandomName();
    $buktiFile->move(WRITEPATH . '../public/img/', $buktiFileName);

    // Store Data
    $data = [
        'nama_pelanggan' => $a,
        'jenis_kelamin' => $b,
        'ktp' => $ktpFileName,
        'sim' => $simFileName,
        'no_hp' => $d,
        'alamat' => $e,
        'id_kendaraan' => $g,  // Ensure it's the correct ID
        'tanggal_peminjaman' => $h,
        'total_harga' => $i,
        'durasi' => $j,
        'metode' => $k,
        'bukti' => $buktiFileName,
    ];

    print_r($data);

    // Save Data to Database
    $rental = new M_belajar;
    $rental->input('sewa', $data);

    return redirect()->to('home/selpem');
}

    public function selpem()
    {
        // echo view('header');
        echo view('selpem');
    }
    public function historysewa()
    {
        $rental= new M_belajar;
        $where=('id_sewa');
        $kendaraan['takdirestui']=$rental->join('sewa', 'kendaraan', 'sewa.id_kendaraan = kendaraan.id_kendaraan');
        echo view('header');
        echo view('historysewa', $kendaraan);
    }
   //  protected function logActivity($aktivitas) 
   // {
   //      $M_log = new \App\Models\M_log();

   //      $id_user = session()->get('id_user');
   //      if (!$id_user) return;

   //      $ip_address = $this->request->getIPAddress();

   //      $M_log->saveLog($id_user, $aktivitas, $ip_address);
   //  }
}