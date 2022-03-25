const quiz = [
  {
    question: '1日あたりの原油生産量の多い国1位はどこ？(2019年)',
    answers: [
      'カナダ',
      'ロシア',
      'サウジアラビア',
      'アメリカ'     
    ],
    correct: 'アメリカ'
  }, {
    question: '二酸化炭素排出量の多い国1位はどこ？(2018年)',
    answers: [
      '中国',
      'アメリカ',
      'インド',
      'ロシア'     
    ],
    correct: '中国'
  },{
    question: '絶滅危惧種の多い国1位はどこ？(2020年)',
    answers: [
      'インドネシア',
      'エクアドル',
      'マレーシア',
      'マダガスカル'     
    ],
    correct: 'マダガスカル'
  }
];
const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;

const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

//クイズの問題文、選択肢を定義
const setupQuiz = () => {
  document.getElementById('js-question').textContent = quiz[quizIndex].question;
  let buttonIndex = 0;
  while(buttonIndex < buttonLength){
    $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
    buttonIndex++;
  }
}
setupQuiz();

const clickHandler = (e) => {
  if(quiz[quizIndex].correct === e.target.textContent){
    window.alert('正解');
    score++;
  }else{
    window.alert('不正解');
  }

  quizIndex++;

  if(quizIndex < quizLength){
    //問題数がまだあればこちらを実行
    setupQuiz();
  } else {
    //問題数がもうなければこちらを実行
    window.alert('終了！あなたの正解数は' + score + '/' + quizLength + 'です！');
  }
};

//ボタンをクリックしたら正誤判定
let handlerIndex = 0;
while (handlerIndex < buttonLength) {
  $button[handlerIndex].addEventListener('click', (e) => {
    clickHandler(e);
  });
  handlerIndex++;
}

