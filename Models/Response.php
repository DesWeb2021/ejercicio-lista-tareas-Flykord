<?php
  class Response{
      private $_httpStatusCode;
      private $_messages = array();
      private $_data;

      public function setHttpStatusCode($httpStatusCode){
        this->_httpStatusCode = $httpStatusCode;
      }

      public function addMessage($message){
          $this->_messages[] = $message;
      }

      public function setData($data){
         $this->_data = $data ;
      }

      public function send(){
        header('Content-type: application/json;charset=utf-8');

        http_response_code($this->setHttpStatusCode);
        $response = array();
        $response["messages"] = $this->_messages;
        $response["data"] = $this->_data;

        echo json_encode($response);
      }
  }

?>