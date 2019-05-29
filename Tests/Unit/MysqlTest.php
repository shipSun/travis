<?php
/**
 * Created by PhpStorm.
 * User: ship
 * Date: 2019/5/29
 * Time: 20:46
 */
class MysqlTest extends \PHPUnit\Framework\TestCase {

    public function testConn(){
        try {
            $pdo = new PDO('msyql:host=127.0.0.1;dbname=wechat_ticket','root','');
            $this->assertTrue(true,'连接成功');
        }catch (PDOException $e){
            $this->assertTrue(false,$e->getMessage());
        }

    }
}