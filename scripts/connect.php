<?php
    class Forum_Connect{
        public $db_connect;

        function __construct(){
            $this->db_connect = mysqli_connect('localhost', 'root', '', 'forum');
            // Check connection
            if ($this->db_connect === false) {
                die("ERROR: Could not connect to forum");
            }
        }

        public function select($table_name, $parameters=""){
            $array = array();
            if($parameters) {
                $sql_query = "SELECT * FROM " . $table_name . " WHERE " . $parameters;
            }else{
                $sql_query = "SELECT * FROM " . $table_name;
            }

            $result = $this->db_connect->query($sql_query);
            if($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $array[] = $row;
                }
            }
            return $array;
        }

        public function insert($table_name, $insert_rows, $insert_values){
            $rows = $this->get_insert_string_row($insert_rows);
            $values = $this->get_insert_string_value($insert_values);
            $sql_query = "INSERT INTO `".$table_name."` (".$rows.") VALUES (".$values.")";
            $this->db_connect->query($sql_query);
            return 1;
        }

        public function update($table_name, $new_message, $id_name, $id){
            $sql_query = "UPDATE `".$table_name."` SET `message` = '".$new_message."' WHERE `".$id_name."`=".$id."";
            $this->db_connect->query($sql_query);
            return 1;
        }

        public function remove($table_name, $id_name, $id){
            $sql_query = "DELETE FROM `".$table_name."` WHERE `".$id_name."` = ".$id;
            echo $sql_query;
            $this->db_connect->query($sql_query);
            return 1;
        }

        private function get_insert_string_row($array){
            $result = "";
            $index = 1;
            foreach($array as $value){
                if($index < count($array)){
                    $result.="`".$value."`,";
                }else{
                    $result.="`".$value."`";
                }
                $index++;
            }
            return $result;
        }

        private function get_insert_string_value($array){
            $result = "";
            $index = 1;
            foreach($array as $value){
                if($index < count($array)){
                    $result.="'".$value."',";
                }else{
                    $result.="'".$value."'";
                }
                $index++;
            }
            return $result;
        }
    }
?>
