<?php
  class Response{
      private $_httpStatusCode;
      private $_messages = array();
      private $_data;

      public function setHttpStatusCode($_httpStatusCode){
        this->_httpStatusCode = $_httpStatusCode;
      }

      public function addMessage($_message){
          $this->messages[] = $_message;
      }

      public function setData($_data){
          $this->_data = 
      }

      public function send(){
        header('Content-type: application/json;charset=utf-8');

        http_response_code($this->setHttpStatusCode);
        $response = array();
        $response["messages"] = $this->messages;
        $response["data"] = $this->data;

        echo json_encode($response);
      }
  }

?>