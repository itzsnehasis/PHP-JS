<?php
    class Simple{
        var $msg = "hello";

        function sayhello(){
            print "hello world";
        }
           
    } 

    $obj = new Simple;
    $obj->sayhello();
?>