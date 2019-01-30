var Q_count = 0;
var FS_count = 0;
var FS_flag = 0;
var button_status;

$(function(){

  button_status = $('#start_btn').data('status');

  $('#start_btn').click(function(){
    if(FS_flag === 9){
      alert('Oops!選択肢を選んでいないね？')
    }else{
      if(button_status === "FALSE"){
        button_status = $('#start_btn').data('status' , 'TRUE');
        var text = $('#start_btn').data('click');
        $('#start_btn').html(text);
      }
      //display question and choices
      $.ajax({
        url: "./lib/quiz.php",
        type: "POST",
        datatype: "json",
        data:{
          Q_count: Q_count = parseInt(Q_count) + 1,
          FS_count: FS_count = FS_count + FS_flag,
          FS_flag: FS_flag 
        },
      })
      .done(function (data){
        var result = JSON.parse(data);
        //receive next question
        if(Q_count <= 3){
          $('#question').html('Q' + Q_count + ':' + result.question);
          $('#choiceA').html('<button id = "A_btn" class="btn btn-secondary" data-choice="a">A</button>' +result.choiceA);
          $('#choiceB').html('<button id = "B_btn" class="btn btn-secondary" data-choice="b">B</button>' +result.choiceB);
          FS_flag = 9;
        //recieve answer any one of
        }else{
          $('#start_btn').prop("disabled", true);
          $('#question').html('あなたにオススメの趣味は...');
          $('#choiceA').html('');
          $('#choiceB').html('');
          $('#answer').html(result.answer);
        }
      })
      .fail(function(){
        alert("Error");
      });
      }
    });

    $('#choiceA').click(function(){
      FS_flag = 0;
    });

    $('#choiceB').click(function(){
      FS_flag = 1;
    });
  });