jQuery(document).ready(function ($) {

  const sendButton = $("input[type='submit']");
  const sendEmailButton = document.querySelector('#sendEmailButton');

  $("form").off("submit").on("submit", function (e) {
    e.preventDefault();

    if (!this.checkValidity()) {
      this.reportValidity();
      return;
    }

    const user_name = $("#user_name").val();
    const company_name = $("#company_name").val();
    const company_url = $("#company_url").val();
    const company_email = $("#company_email").val();
    const phonnumber = $("#phonnumber").val();
    const prefecture = $("#prefecture").val();
    const prepared = $("#prepared").val();
    const content = $("#content").val();

    sendButton.prop("disabled", true);
    sendEmailButton.style.display = 'inline-block';

    $.ajax({
      url: my_ajax_obj.ajax_url,
      type: "POST",
      data: {
        action: "send_email",
        nonce: my_ajax_obj.nonce,
        user_name: user_name,
        company_name: company_name,
        company_url: company_url,
        company_email: company_email,
        phonnumber: phonnumber,
        prefecture: prefecture,
        prepared: prepared,
        content: content,
      },
      success: function (response) {
        if(response.success){
          location.href="https://kuji-cloud.com/lp/downloadconfirm/";
        }else{
          alert("送信に失敗しました。");
          sendButton.prop("disabled", false);
          sendEmailButton.style.display = 'none';
        }
      },
      error: function (xhr, status, error) {
        alert("送信に失敗しました。");
        sendButton.prop("disabled", false);
        sendEmailButton.style.display = 'none';
      },
    });
  });
});



