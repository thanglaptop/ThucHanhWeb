<?php
    include "database.php"
?>

<?php
    class category {
        private $db;
        public function __construct()
        {
            $this -> db = new Database();
        }
        public function insert_category($category_name){
            $query = "INSERT INTO tbl_book (book_name) VALUES ('$category_name')";
            $result = $this -> db->insert($query);
            return $result;
        }
        public function show_book(){
            $query = "SELECT * FROM tbl_book ORDER BY book_id";
            $result = $this -> db->select($query);
            return $result;
        }
        public function get_cartegory($book_id){
            $query = "SELECT * FROM tbl_book WHERE book_id = $book_id";
            $result = $this -> db->select($query); 
            return $result;
        }
        public function update_category($category_name,  $book_id){
            $query = "UPDATE tbl_book SET book_name = '$category_name' WHERE book_id = '$book_id'";
            $result = $this -> db->update($query);
            header('Location:categorylist.php');
            return $result;
        }
        public function delete_cartegory($book_id){
            $query = "DELETE FROM tbl_book WHERE book_id = '$book_id'";
            $result = $this -> db->delete($query);
            header('Location:categorylist.php');
            return $result;
        }
    }
?>