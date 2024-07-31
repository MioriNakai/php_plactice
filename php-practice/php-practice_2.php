<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します<br><br>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac<br>";
    } elseif ($i % 4 == 0) {
        echo "tic<br>";
    } elseif ($i % 5 == 0) {
        echo "tac<br>";
    } else {
        echo $i . "<br>";
    }
}



// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
var_dump ($personalInfos);
//問題1
$index = 1;
echo $personalInfos[$index]['name'] . 'の電話番号は' . $personalInfos[$index]['tel'] . 'です.';

//問題2
$index = 1;
foreach ($personalInfos as $info) {
    echo $index . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。<br>';
    $index++;
}
//foreach の中でkeyを1に対応させて矢印で結べる
//問題3
foreach ($personalInfos as $index => &$info) {
  $info['age'] = $ageList[$index];
}
var_dump($personalInfos);




// Q3 オブジェクト-1
$student = new Student(120, '山田');
echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    public function attend($subject)
    {
        echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}";
    }
}
$student = new Student(120, '山田');
echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";
$student->attend('PHP');

// Q5 定義済みクラス
$currentDate = new DateTime();
$currentDate->modify('-1 month');
echo $currentDate->format('Y-m-d');
?>