var closetest = {
  "nature":{
    "content":["early morning i went to the", "@", ". the sky was", "@"],
    "answers":{
      1:"fields",
      2:"sunny"
    }
  },
  "city":{
    "content":["the buildings were", "@", ". the place was", "@"],
    "answers":{
      1:"nice",
      2:"crowded"
    }
  }
}

function pickRandomProperty(obj) {
    var result;
    var count = 0;
    for (var prop in obj)
        if (Math.random() < 1/++count)
           result = prop;
    return result;
}

function textField(){
  return " <input class='ans' type='' name=''> "
}
$(function() {
  // choose random from dict
  var chosen = pickRandomProperty(closetest);

  // generate html
  var toAdd = "";
  for (var i = 0; i < closetest[chosen].content.length; i++) {
    var currentText = closetest[chosen].content[i];

    if(currentText === "@"){
      toAdd += textField();
    }else{
      toAdd += currentText;
    }
  }

  // add to div
  $( "#test" ).html(toAdd);

var answers = closetest[chosen].answers;
  // add answers
  var ansString = "";
  for (var key in answers) {
    if (answers.hasOwnProperty(key)) {
          ansString += answers[key] + ";";
      }
  }
  $( "#answers" ).html(ansString);

  // on submit check answers
    //add event listener
  $( "#submit" ).click(function() {
    
    for (var i = 0; i < document.getElementsByClassName("ans").length; i++) {
      var currentInput = document.getElementsByClassName("ans")[i];
      var inputVal = currentInput.value;
      if(inputVal !== answers[i+1]){
        console.log("bad");
        $(currentInput).css({"border-color": "red"});
      }else
      if(inputVal === answers[i+1]){
        console.log("good");
        $(currentInput).css({"border-color": "green"});
      }
    }
  });
});
