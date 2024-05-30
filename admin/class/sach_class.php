<?php
    include "database.php"
?>

<?php
    class sach {
        private $db;
        public function __construct()
        {
            $this -> db = new Database();
        }
        public function show_book(){
            $query = "SELECT * FROM tbl_book ORDER BY book_id";
            $result = $this -> db->select($query);
            return $result;
        }
        public function show_fullsach(){
            $query = "SELECT tbl_sach.*, tbl_book.*, tbl_theloai.* FROM tbl_sach INNER JOIN tbl_book ON tbl_sach.book_id = tbl_book.book_id
                                                        INNER JOIN tbl_theloai on tbl_sach.theloai_id = tbl_theloai.theloai_id ORDER BY tbl_sach.sach_id";
            $result = $this -> db->select($query);
            return $result;
        }
        public function insert_sach(){
            $sach_name = $_POST['sach_name'];
            $book_id = $_POST['book_id'];
            $theloai_id = $_POST['theloai_id'];
            $sach_ngayxuatban = $_POST['sach_ngayxuatban'];
            $sach_gia = $_POST['sach_gia'];
            $sach_mota = $_POST['sach_mota'];
            $sach_hinh = $_FILES['sach_hinh']['name'];
            move_uploaded_file($_FILES['sach_hinh']['tmp_name'], "hinh/".$_FILES['sach_hinh']['name']);
            $query = "INSERT INTO tbl_sach (
                sach_name, 
                book_id,
                theloai_id,
                sach_ngayxuatban,
                sach_gia,
                sach_mota,
                sach_hinh) VALUES (
                '$sach_name',
                '$book_id',
                '$theloai_id',
                '$sach_ngayxuatban',
                '$sach_gia',
                '$sach_mota',
                '$sach_hinh')";
            $result = $this -> db->insert($query);
            //header('Location:the_loailist.php');
            return $result;
        }
        public function show_theloai(){
            $query = "SELECT tbl_theloai.*, tbl_book.book_name FROM tbl_theloai INNER JOIN tbl_book ON tbl_theloai.book_id = tbl_book.book_id ORDER BY tbl_theloai.theloai_id";
            $result = $this -> db->select($query);
            return $result;
        }

        public function get_theloai($theloai_id){
            $query = "SELECT * FROM tbl_theloai WHERE theloai_id= '$theloai_id'";
            $result = $this -> db->select($query); 
            return $result;
        }
        public function update_theloai($book_id, $theloai_id, $theloai_name){
            $query = "UPDATE tbl_theloai SET theloai_name = '$theloai_name', book_id = '$book_id' WHERE theloai_id = '$theloai_id'";
            $result = $this -> db->update($query);
            header('Location:the_loailist.php');
            return $result;
        }
        public function delete_sach($sach_id){
            $query = "DELETE FROM tbl_sach WHERE sach_id = '$sach_id'";
            $result = $this -> db->delete($query);
            header('Location:sachlist.php');
            return $result;
        }
    }
?>