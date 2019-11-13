$('form').submit(function (e) {
    e.preventDefault();
    const msg = $(this).attr('msg');
    const action = $(this).attr('action');
    const method = $(this).attr('method');
    const data = $(this).serializeArray();

    const msgDisplay = $('#msg');
    const msgDisplayText = $('#msgText');
    const msgDisplayIcon = $('#msgIcon');

    msgDisplayText.text(msg);
    msgDisplayIcon.addClass('fa-spinner fa-spin');
    msgDisplay.show();
    // alert(JSON.stringify(data));
    $.ajax({
      url: action,
      type: method,
      data: data,
      dataType: 'JSON',
      success: (resData) => {
        console.log(resData);
        if (resData.status == 1) {
          msgDisplayIcon.removeClass('fa-spinner fa-spin fa-exclamation-triangle').addClass('fa-check-circle');
        } else {
          msgDisplayIcon.removeClass('fa-spinner fa-spin').addClass('fa-exclamation-triangle');
        }
        msgDisplay.attr('class', '');
        msgDisplay.addClass(`alert ${resData.flag}`);
        msgDisplayText.text(resData.msg);
        // console.log(resData);
      }, error: (error) => {
        console.log(error);
      }
    });
  });