<?php
class Category implements JsonSerializable {
    private $id;
    private $username;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getUsername() {
        return $this->name;
    }

    public function setUsername($value) {
        $this->name = $value;
    }
    
    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
?>