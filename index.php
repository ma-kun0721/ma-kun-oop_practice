<!-- 次の「Kidクラス」を作ってください。

プロパティ：名前($name)、性別($sex)
メソッド：showName()
男なら「○○くん」、女なら「○○ちゃん」を返す処理を行う
名前プロパティの初期値は「Seed」、性別プロパティの初期値は「boy」にすること
プロパティのゲッター・セッターメソッドを用意し、メソッド経由でプロパティにアクセスできるようにすること
オブジェクトからプロパティ値を設定し、showNameメソッドを呼び出して出力すること

演習問題１で作成したKidクラスに、初期値「10」の「年齢（$age）」プロパティも追加して、12歳以上なら「○○君／○○さん」と出力されるようにしてください。
-->

<?php
$kid = new Kid();
$kid->setSex('radyboy');
$kid->setName('和也');
$kid->setAge(8);
$kid->showName();
class Kid{
  public $name;
  public $sex;
  public $age;
  function __construct(){
    $this->name = 'Seed';
    $this->sex = 'boy';
    $this->age = 10;
  }
  public function setSex($seibetu){
    $this->sex=$seibetu;
  }
  public function getSex(){
    return $this->sex;
  }
    // ここまでは性別と初期値の設定なのであっている。
    // 男性の時と女性の時で条件分岐をさせたい。
  public function setName($namae){
    $this->name=$namae;
  }
  public function getName(){
    return $this->name;
  }
  public function setAge($nennrei){
    $this->age=$nennrei;
  }
  public function getAge(){
    return $this->age;
  }
    // ここまでで、セットなどの条件を全て書き出している。
  public function showName(){
    if ($this->age>=12) {
      if($this->sex== 'boy'){
        echo "$this->name".'君';
      }elseif($this->sex== 'rady'){
        echo "$this->name".'さん';
      }else{
        echo "$this->name".'様';
      }
    }else{
      if($this->sex== 'boy'){
        echo "$this->name".'くん';
      }elseif($this->sex== 'rady'){
        echo "$this->name".'ちゃん';
      }else{
        echo "$this->name".'さま';
      }
    }
  }
}


