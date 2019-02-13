function isAnagram(word1, word2) {
  /*https://codereview.stackexchange.com/users/18945/rrowland*/
  if (typeof word1 !== 'string' || typeof word2 !== 'string') {
    throw new Error('isAnagram requires two strings to be passed.')
  }

  var normalizedWord1 = word1.replace(/[^A-Za-z]+/g, '').toLowerCase();
  var normalizedWord2 = word2.replace(/[^A-Za-z]+/g, '').toLowerCase();

  var counts = [];
  var word1Length = normalizedWord1.length;
  var word2Length = normalizedWord2.length

  if (word1Length !== word2Length) { return false; }

  for (var i = 0; i < word1Length; i++) {
    var index = normalizedWord1.charCodeAt(i)-97;
    counts[index] = (counts[index] || 0) + 1;
  }

  for (var i = 0; i < word2Length; i++) {
    var index = normalizedWord2.charCodeAt(i)-97;
    if (!counts[index]) { return false; }
    else { counts[index]--; }
  }

  return true;
}

String.prototype.shuffle = function () {
  /*https://stackoverflow.com/users/94197/andy-e*/
    var a = this.split(""),
        n = a.length;

    for(var i = n - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var tmp = a[i];
        a[i] = a[j];
        a[j] = tmp;
    }
    return a.join("");
}

function isAlpha(str) {
  return /^[a-zA-Z]+$/.test(str);
}

function random_item(items){
  // w3resource.com
  return items[Math.floor(Math.random()*items.length)];
}

function getChar(code){
  return String.fromCharCode(code);
}

function print(){
  console.log(arguments);
}

var data = [{'word':'family', 'hint':'euhh'}, 
            {'word':'river', 'hint':'that flows'}, 
            {'word':'clock', 'hint':'shows time'}];

var boxString = "";


$(function() {
  // choose word
  var choice = random_item(data);
  var chosen = choice.word;
  var shuffled = chosen.shuffle();

  // generate boxes
  for (var i = 0; i < shuffled.length; ++i) {
    var chr = shuffled.charAt(i);
    boxString += '<div class="mixedletter">'+chr+'</div>'
  }
  console.log(boxString);

  $('#mixed').html(boxString);
  $('#hint').text(choice.hint);

  // capture keypress
  /**
  $(document).on("keypress", function (e) {
    // e.which)
    console.log(getChar(e.which), isAlpha(getChar(e.which)));
  });**/

  // check answer
  $('#submit').click(function(){
    var answer = $("#answer").val();

    if(answer === chosen){
      //alert('nice');
      swal("Good job!", "You answered well!", "success");
      /*iziToast.show({
        title: 'Hey',
        message: 'What would you like to add?'
      });*/
    }else{
      swal("Oh oh!", "That's not the right answer", "warning");
    }
  });

  // generate new
});