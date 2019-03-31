var questions = [{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "B"
}, 
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
},
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
},
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
},
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
},
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
},
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
},
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
},
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
},
{
	"question": "The first mechanical computer designed by Charles Babbage was called ?",
	"option1": "Abacus",
	"option2": "Analytical Engine",
	"option3": "Calculator",
	"option4": "Processor",
	"answer": "2"
}
];

var questionState = 0;
var score = 0;
var totalQuestions = questions.length;
var difficulty = 0;
var loadingPage = document.getElementById('loading page');
var menuPage = document.getElementById('menuPage');
var winPage = document.getElementById('winpage');
var container = document.getElementById('quizSection');
var questionTXT = document.getElementById('questionTXT');
var possA = document.getElementById('choice1');
var possB = document.getElementById('choice2');
var possC = document.getElementById('choice3');
var possD = document.getElementById('choice4');
var scrtxt = document.getElementById('scoreTXT');
var scrtxtwin = document.getElementById('scoreTXTwin');
var nextButton = document.getElementById('nextBtn');
var startButton = document.getElementById('startBtn');
var resultCont = document.getElementById('result');
var lckyskip = document.getElementById('lckyskip');

function genQuestion (questionIndex) {
	var q = questions[questionIndex];
	questionTXT.textContent =  q.question;
	possA.textContent = 'A. ' + q.option1;
	possB.textContent = 'B. ' +q.option2;
	possC.textContent = 'C. ' +q.option3;
	possD.textContent = 'D. ' +q.option4;
	scrtxt.textContent = score;
};

function loadNextQuestion () {
	var answer = document.forms["myForm"]["fname"].value;
	if(questions[questionState].answer == answer){
		score += 100000;
	} else {
		winpage()
	}
	questionState++;
	if(questionState == totalQuestions - 1){
		nextButton.textContent = 'Finish';
				score += 100000;
		winpage();
	}
	if(questionState == totalQuestions){
		container.style.display = 'none';
		resultCont.style.display = '';
		resultCont.textContent = 'Your Score: ' + score;
		return;
	}
	genQuestion(questionState);
}

function Skip (){
score += 100000;
questionState++;
genQuestion(questionState);
lckyskip.style.display = 'none';
}

function hideQuiz (){
 container.style.display = 'none';

}

function hideWinPage (){
 winPage.style.display = 'none';

}

function loadQuiz (){
 container.style.display = 'block';
 menuPage.style.display = 'none';
 genQuestion(questionState);
}

function winpage(){
container.style.display = 'none';
 menuPage.style.display = 'none';
 winPage.style.display = 'block';
 scrtxtwin.textContent =  score;
}




function move() {
  var elem = document.getElementById("myBar");   
  var width = 10;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }

}
move();
hideQuiz();
hideWinPage();
//genQuestion(questionState);
//genQuestion(questionState);