<?php
    include "database.php"
?>

<?php
    class theloai {
        private $db;
        public function __construct()
        {
            $this -> db = new Database();
        }
        public function insert_theloai($book_id, $theloai_name){
            $query = "INSERT INTO tbl_theloai (book_id, theloai_name) VALUES ('$book_id', '$theloai_name')";
            $result = $this -> db->insert($query);
            header('Location:the_loailist.php');
            return $result;
        }
        public function show_book(){
            $query = "SELECT * FROM tbl_book ORDER BY book_id";
            $result = $this -> db->select($query);
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
        public function delete_theloai($theloai_id){
            $query = "DELETE FROM tbl_theloai WHERE theloai_id = '$theloai_id'";
            $result = $this -> db->delete($query);
            header('Location:the_loailist.php');
            return $result;
        }
    }
?>