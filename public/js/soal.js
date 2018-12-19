(function() {

    class Soal{
        constructor(question, choices, correctAnswer){
            this.question = question;
            this.choices = choices;
            this.correctAnswer = correctAnswer;
        }
    }
    
    var questions = [];
    
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "TO.php";
    var asynchronous = true;
    ajax.open(method, url, asynchronous);
    ajax.send();
    ajax.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200)
        {
            var tmp = JSON.parse(this.responseText);
            for (var i = 0; i < tmp.length; i++) {
                var option = [tmp[i].A, tmp[i].B, tmp[i].C, tmp[i].D, tmp[i].E];
                questions.push(new Soal(tmp[i].soal, option, tmp[i].jawaban));
            }        
        }
    }
    
    var questionCounter = 0; 
    var selections = []; 
    var quiz = $('#quiz');
    
    $('.form-soal').hide();

    displayNext();
    displayNext();

    $('#start').hide();
    $('#start').hide();
 
    $('#next').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {        
        return false;
    }
    choose();
    
    if (isNaN(selections[questionCounter])) {
       selections[questionCounter]=-1;
       questionCounter++;
        displayNext();
    } else {
        questionCounter++;
        displayNext();
    }
    });
    
    $('#prev').on('click', function (e) {
    e.preventDefault();
    
    if(quiz.is(':animated')) {
        return false;
    }
    choose();
    questionCounter--;
    displayNext();
    });
    
    // $('#start').on('click', function (e) {
    // e.preventDefault();


    // });
    
    $('.button').on('mouseenter', function () {
    $(this).addClass('active');
    });
    $('.button').on('mouseleave', function () {
    $(this).removeClass('active');
    });
    
    function createQuestionElement(index) {
    var qElement = $('<div>', {
        id: 'question'
    });
    
    var header = $('<h2>Soal ' + (index + 1) + ':</h2>');
    qElement.append(header);
    
    var question = $('<p>').append(questions[index].question);
    qElement.append(question);
    
    var radioButtons = createRadios(index);
    qElement.append(radioButtons);
    
    return qElement;
    }
    
    function createRadios(index) {
    var radioList = $('<ul>');
    var item;
    var input = '';
    for (var i = 0; i < questions[index].choices.length; i++) {
        item = $('<li>');
        input = '<input type="radio" name="answer" value=' + i + ' />';
        input += questions[index].choices[i];
        item.append(input);
        radioList.append(item);
    }
    return radioList;
    }
    
    function choose() {
    selections[questionCounter] = +$('input[name="answer"]:checked').val();
    }
    
    function displayNext() {
    quiz.fadeOut(function() {
        $('#question').remove();
        
        if(questionCounter < questions.length){
        var nextQuestion = createQuestionElement(questionCounter);
        quiz.append(nextQuestion).fadeIn();
        if (!(isNaN(selections[questionCounter]))) {
            $('input[value='+selections[questionCounter]+']').prop('checked', true);
        }
        
        if(questionCounter === 1){
            $('#prev').show();
        } else if(questionCounter === 0){
            
            $('#prev').hide();
            $('#next').show();
        }
        }
        
        else {
        var scoreElem = displayScore();
        quiz.append(scoreElem).fadeIn();
        $('#next').hide();
        $('#prev').hide();
        $('#start').show();
        }
        
    });
    }
    
    function displayScore() {
    var score = $('<p>',{id: 'question'});
    
    var numCorrect = 0;
    for (var i = 0; i < selections.length; i++) {
        if (selections[i] == questions[i].correctAnswer) {
        numCorrect++;
        }
    }
    
    
    score.append('<h2>Score : ' + ( numCorrect/questions.length*100 ) + '</h2>');

        $("#score").val( numCorrect/questions.length*100);
    return score;
    }


})();